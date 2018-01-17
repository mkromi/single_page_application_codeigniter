<div class="row">
    <form class="form" id="ajax-form" data-href="student/save">
    	<input type="hidden" name="id" value="<?php if(isset($input)): echo $input->id; endif; ?>">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="name">Student Name</label>
            	<input type="text" name="name" placeholder="name" value="<?php if(isset($input)): echo $input->name; endif; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Father's Name</label>
                <input type="text" name="fathers_name" placeholder="fathers_name" value="<?php if(isset($input)): echo $input->fathers_name; endif; ?>" class="form-control">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="name">Mothers's Name</label>
            	<input type="text" name="mothers_name" placeholder="mothers_name" value="<?php if(isset($input)): echo $input->mothers_name; endif; ?>" class="form-control">
            </div>
        </div>
    </form>
</div>
