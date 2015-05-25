
<?php $this->load->helper('form','url');?>
<?php echo validation_errors(); ?>
<?php

$attributes = array('class' => 'form-horizontal');

$labelClass = array('class' => 'col-md-4 control-label');


$name = array('name' => 'name',
                   'id' => 'name',
                   'placeholder' => 'Jon Doe',
                   'class' => 'form-control input-md');

$username = array('name' => 'username',
                   'id' => 'username',
                   'placeholder' => 'Jon123',
                   'class' => 'form-control input-md');

$email = array('name' => 'email',
                   'id' => 'email',
                   'placeholder' => 'jon@email.com',
                   'class' => 'form-control input-md');

$email = array('name' => 'email',
                   'id' => 'email',
                   'placeholder' => 'jon@email.com',
                   'class' => 'form-control input-md');

$password = array('name' => 'password',
                   'id' => 'password',
                   'placeholder' => '',
                   'class' => 'form-control input-md');

$confpassword = array('name' => 'confpass',
                   'id' => 'confpass',
                   'placeholder' => '',
                   'class' => 'form-control input-md');


$button = array('name' => 'button',
                'id' => 'button',
                'class' => 'btn btn-primary',
                'value' => 'true',
                'type' => 'submit',
                'content' => 'Submit'
);



?>

<div class="center_form">
  <?php echo form_open('welcome',$attributes);?>
    <fieldset>


      <legend>Sign Up</legend>

      <div class="form-group">
        <?php echo form_label('Name', 'name', $labelClass);?> 
          <div class="col-md-8">
            <?php echo form_input($name);?>
          </div>
        </div>

      <div class="form-group">
        <?php echo form_label('Username', 'username', $labelClass);?>  
          <div class="col-md-8">
            <?php echo form_input($username);?> 
         </div>
      </div>

 
      <div class="form-group">
        <?php echo form_label('Email', 'email', $labelClass);?>  
          <div class="col-md-8">
            <?php echo form_input($email);?>  
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
            <?php echo form_submit('submit','Submit');?>
          </div>
      </div>

    </fieldset>
  </form>
</div>



<?php include('footer.php'); ?>