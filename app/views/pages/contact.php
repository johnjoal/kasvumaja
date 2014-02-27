<div class="content-detail">
    <?php if (isset($data['page'])) { ?>
    <div class="row">
    	<div class="col-xs-5"><?php echo $data['page']->content ?></div>
    	<div class="col-xs-6"><?php echo $data['page']->description ?></div>
    </div>
    <?php } ?>
    
    <br><br>
    <h4><?php echo trans('strings.feedback') ?>:</h4>

    <?php if(Session::has('success')) { ?>
        <div class="alert alert-success fade in">
            <?php echo Session::get('success') ?>
        </div>
    <?php } ?>

    <div class="row">
	    <form method="post" action="/send-mail" class="form-horizontal" role="form">
	    	<div class="form-group">
		    	<label for="name" class="col-xs-2 control-label"><?php echo trans('strings.mail-name') ?></label>
		    	<div class="col-xs-5">
		      		<input type="text" class="form-control" id="name" name="name" placeholder="<?php echo trans('strings.mail-name') ?>">
		      	</div>
	  		</div>

	  		<div class="form-group">
		    	<label for="email" class="col-xs-2 control-label"><?php echo trans('strings.mail-email') ?></label>
		    	<div class="col-xs-5">
		      		<input type="text" class="form-control" id="email" name="email" placeholder="<?php echo trans('strings.mail-email') ?>">
		      	</div>
	  		</div>

	  		<div class="form-group">
		    	<label for="phone" class="col-xs-2 control-label"><?php echo trans('strings.mail-phone') ?></label>
		    	<div class="col-xs-5">
		      		<input type="text" class="form-control" id="phone" name="phone" placeholder="<?php echo trans('strings.mail-phone') ?>">
		      	</div>
	  		</div>

	  		<div class="form-group">
		    	<label for="subject" class="col-xs-2 control-label"><?php echo trans('strings.mail-subject') ?></label>
		    	<div class="col-xs-5">
		      		<input type="text" class="form-control" id="subject" name="subject" placeholder="<?php echo trans('strings.mail-subject') ?>">
		      	</div>
	  		</div>

	  		<div class="form-group">
		    	<label for="content" class="col-xs-2 control-label"><?php echo trans('strings.mail-content') ?></label>
		    	<div class="col-xs-5">
		    		<textarea class="form-control" id="content" name="content" rows="5"></textarea>
		      	</div>
	  		</div>

	  		<div class="form-group">
	  			<div class="col-xs-offset-2 col-xs-5">
	  			<button type="submit" class="btn btn-primary"><?php echo trans('strings.mail-send') ?></button>
	  			</div>
	  		</div>
		    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	    </form>
    </div>
</div>