<?php include('header.php'); ?>
<?php include('signin.php'); ?>

<div class="center_form">
  <form class="form-horizontal" action="Project/welcome/inventory" method="POST">
    <fieldset>

<!-- Form Name -->
      <legend>Sign Up</legend>

  <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="name">Name</label>  
          <div class="col-md-8">
            <input id="name" name="name" type="text" placeholder="Jon Doe" class="form-control input-md" required=""> 
          </div>
        </div>

  <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="username">Username</label>  
          <div class="col-md-8">
            <input id="username" name="username" type="text" placeholder="jon123" class="form-control input-md" required="">  
         </div>
      </div>

  <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="email">Email</label>  
          <div class="col-md-8">
            <input id="email" name="email" type="text" placeholder="jon@email.com" class="form-control input-md" required=""> 
          </div>
      </div>

  <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="passwordinput">Password</label>
          <div class="col-md-8">
            <input id="passwordinput" name="passwordinput" type="password" placeholder="" class="form-control input-md" required=""> 
          </div>
      </div>

  <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="button"></label>
          <div class="col-md-4">
            <button id="button" name="button" class="btn btn-primary">Submit</button>
          </div>
      </div>

    </fieldset>
  </form>
</div>

<?php include('footer.php'); ?>