
<!DOCTYPE html>
<html>
    <head>
      <title>REGISTER</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/style.css');?>" media="all">
      <meta charset=utf-8>
      <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
    </head>
<body>  
 <div class="container">
  <br />
  <h3 align="center">Complete User Registration and Login System </h3>
  <br />
  <?php
  echo "success";
  ?>
  <div class="panel panel-default">
   <div class="panel-heading">Register here</div>
   <div class="panel-body">
    <?php
      if($this->session->flashdata('message'))
      {
        echo'
      <div class="alert alert-success">
      '.$this->session->flashdata('message').'
      </div>
      ';
    }
    ?>
    <form method="post" action="<?php echo base_url(); ?>register/validation">
      <div class="form-group">
      <label>Enter Your First Name</label>
      <input type="text" name="first_name" class="form-control" value="<?php echo set_value('first_name'); ?>" />
      <span class="text-danger"><?php echo form_error('first_name'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your Last Name</label>
      <input type="text" name="last_name" class="form-control" value="<?php echo set_value('last_name'); ?>" />
      <span class="text-danger"><?php echo form_error('last_name'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your Valid Email Address</label>
      <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your Phone number</label>
      <input type="text" name="phn_no" class="form-control" value="<?php echo set_value('phn_no'); ?>" />
      <span class="text-danger"><?php echo form_error('phn_no'); ?></span>
     </div>
    <!--  <textarea id="w3review" name="w3review" rows="4" cols="50"> -->
     <div class="form-group">
      <label>Enter Your Date of Birth</label>
      <input type="date" name="d_o_b" class="form-control" value="<?php echo set_value('d_o_b'); ?>" />
      <span class="text-danger"><?php echo form_error('d_o_b'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your Address</label>
      <textarea id ="address" type="text" name="address" class="form-control" value="<?php echo set_value('address'); ?>" /></textarea>
     </div>
     <div class="form-group">
      <label>Enter Your District</label>
      <input type="text" name="district" class="form-control" value="<?php echo set_value('district'); ?>" />
      <span class="text-danger"><?php echo form_error('district'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your Pincode</label>
      <input type="text" name="pincode" class="form-control" value="<?php echo set_value('pincode'); ?>" />
      <span class="text-danger"><?php echo form_error('pincode'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your Username</label>
      <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
      <span class="text-danger"><?php echo form_error('user_name'); ?></span>
     </div>
    
     <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password'); ?></span>
     </div>
     <div class="form-group">
      <input type="submit" name="register" value="Register" class="btn btn-info" />
     </div>
    </form>
   </div>
  </div>
 </div>

          <!---Jquery--->
          <script
            src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous">
          </script>

          <!---Popper---->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
          </script>

          <!---Custom Js-->
          <script src="js/script.js"></script>
</body>
</html>

