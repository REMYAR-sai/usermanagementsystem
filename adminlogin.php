
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
        <h3 align="center">Complete User Registration and Login System</h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                <form method="post" action="<?php echo base_url(); ?>main/adminlog">
                    <div class="form-group">
                        <label>Enter Email</label>
                        <input type="text" name="mail" class="form-control" value="<?php echo set_value('mail'); ?>" />
                        <!-- //></span> -->
                    </div>
                    <div class="form-group">
                       <label>Enter Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" />
                        <!--  -->
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="btn btn-info" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
     
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

