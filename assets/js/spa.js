$( document ).ready(function() {
	var href    = window.location.href;
	var param 	= get_url_param('url', href);
	if (param != null) {
		var url 	= URL.getSiteAction(param);
	} else if (param == null) {
		var url 	= URL.getSiteAction('dashboard');
	};
	replace_html(url);
});

$('.ajax-link').on('click', function(){
	var href 	= $(this).data('href');
	var url 	= URL.getSiteAction(href);
	history.pushState({}, null, 'app?url='+href);
	replace_html(url);
});

$(document).delegate(".ajax-modal", "click", function(event){
	var href 	= $(this).data('href');
	var url 	= URL.getSiteAction(href);
	replace_modal(url);
});

function replace_html(url)
{
	$('#preloader').show();
	$.get( url, function( data ) {
		$('#preloader').hide();
		$( "#ajax-html" ).html( data );
		$('.data-table').DataTable({
			"ordering": false
		});
	});
}

function replace_modal(url)
{
	$('#form-preloader').show();
	$.get( url, function( data ) {
		$('#form-preloader').hide();
		$( "#ajax-modal" ).html( data );
	});
}

function get_url_param(name, url)
{
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(url);
    if (results==null){
       return null;
    }
    else{
       return decodeURI(results[1]) || 0;
    }
}

$(document).delegate(".btn-submit", "click", function(event){
	var href 	= $('#ajax-form').data('href');
	var url 	= URL.getSiteAction(href);

	var current_url    	= window.location.href;
	var param 			= get_url_param('url', current_url);
	var replace_url 	= URL.getSiteAction(param);

    $.ajax({
        url: url,
        type: 'post',
        dataType: 'json',
        data: $('#ajax-form').serialize(),
        success: function(data) {
        	if (data) {
        		replace_html(replace_url);
        		$("#myModal .close").click();
				$.notify(data.msg, data.type);
        	};
		}
    });
});

$(document).delegate(".btn-delete", "click", function(event){

	swal({
		title: "Are you sure?",
		text: "Once deleted, you will not be able to recover this data!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {

			var href 	= $(this).data('href');
			var url 	= URL.getSiteAction(href);

			var current_url    	= window.location.href;
			var param 			= get_url_param('url', current_url);
			var replace_url 	= URL.getSiteAction(param);

		    $.ajax({
		        url: url,
		        type: 'post',
		        dataType: 'json',
		        success: function(data) {
		        	if (data) {
		        		replace_html(replace_url);
		        		$("#deleteModal .close").click();
						swal(data.msg, { icon: data.type, });
		        	};
				}
		    });
		} else {
			swal("Your data is safe!");
		}
	});
});
