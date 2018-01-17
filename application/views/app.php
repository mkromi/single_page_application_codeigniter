<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Single Page Application</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome/css/font-awesome.min.css') ?>">
        <script type="text/javascript">
    		(function(){
    			var URL = {
    				baseUrl: function(){
    					return '<?php echo base_url(); ?>';
    				},
    				siteUrl: function(){
    					return '<?php echo site_url(); ?>';
    				},
    				getBaseAction: function(action){
    					return '<?php echo base_url(); ?>' + action;
    				},
    				getSiteAction: function(action){
    					return '<?php echo site_url(); ?>' + action;
    				}
    			};
    			window.URL = URL;
    		}());

    	</script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand ajax-link" data-href="dashboard" href="javascript::">SPA</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a class="ajax-link" data-href="dashboard" href="javascript::">Dashboard <span class="sr-only">(current)</span></a></li>
                                <li><a class="ajax-link" data-href="about" href="javascript::">About</a></li>
                                <li><a class="ajax-link" data-href="student" href="javascript::">Student Registration</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="preloader" class="col-md-12 text-center" style="padding-top: 20%; display: none">
                <img src="<?php echo base_url('assets/img/preloader.gif') ?>">
            </div>

            <div id="ajax-html"></div>

            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Header</h4>
                            <button type="button" class="close" data-dismiss="modal">X</button>
                        </div>
                        <div class="modal-body">
                            <div id="form-preloader" class="col-md-12 text-center" style="display: none">
                            <img src="<?php echo base_url('assets/img/preloader.gif') ?>">
                            </div>
                            <div id="ajax-modal"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-success btn-submit">Save</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="<?php echo base_url('assets/js/notify.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/spa.js') ?>"></script>
    </body>
</html>
