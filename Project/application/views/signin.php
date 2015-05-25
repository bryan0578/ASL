<?php echo validation_errors(); ?>
<?php

$attributes = array('class' => 'form-horizontal');
$labelClass = array('class' => 'col-md-4 control-label');
$class = array('class' => 'control-label', );

$username = array('name' => 'username',
                   'id' => 'usernamename',
                   'class' => 'form-control input-md');

$password = array('name' => 'password',
                   'id' => 'password',
                   'class' => 'form-control input-md');

?>
<div class="signin">
  <h3>Sign In</h3>
	<?php echo form_open('welcome/view',$attributes);?>
	  	<div class="form-group">
        <?php echo form_label('Username', 'username', $labelClass);?> 
          <div class="col-md-8">
            <?php echo form_input($username);?> 
         </div>
      </div>
	  	<div class="form-group">
        <?php echo form_label('Password', 'password', $labelClass);?>
          <div class="col-md-8">
            <?php echo form_password($password);?>  
          </div>
      </div>
	  	<div class="form-group">
	 		<label class="col-md-4 control-label" for="button"></label>
	  			<div class="col-md-4">
	    			<button id="button" name="button" class="btn btn-primary">Sign In</button>
	  			</div>
          <p>Not a member?</p>
          <a href="welcome/register">Register Here</a>
		</div>
	</form>
</div>