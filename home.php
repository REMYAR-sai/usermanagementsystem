<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>User registration and login  system with admin panels</h2>
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Login
    </button>
    <div class="dropdown-menu">
      <h5 class="dropdown-header">Login</h5>
      <a class="dropdown-item" href="<?php echo base_url()?>Main/admin">Admin</a>
      <a class="dropdown-item" href="<?php echo base_url()?>Login/index">User</a>
    </div>
  </div>
</div>

</body>
</html>
