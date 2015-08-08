
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <?php
    require_once 'header.php';
    ?>

        <div class="wrapper">
            <form class="form-signin" action="reverification.php" method="post"  enctype="multipart/form-data">       
      <h2 class="form-signin-heading">Enter New Account Details</h2>
      <p class="f">Enter First Name</p> <input type="text" class="form-control" name="fname" required="" autofocus="" />
      <p class="f">Enter Last Name</p> <input type="text" class="form-control" name="lname"  required="" autofocus="" />
      <p class="f">Enter User Name</p> <input type="text" class="form-control" name="username"  required="" autofocus="" />
    <p class="f">Enter Email Address</p> <input type="text" class="form-control" name="mail"  required="" autofocus="" />
     <p class="f">Enter Password</p>  <input type="password" class="form-control" name="password"  required=""/>    
     <p class="f">Retype Password</p>  <input type="password" class="form-control" name="rpassword"  required=""/>  
     <input type="submit" class="btn btn-lg btn-primary btn-block" name="new" value="create" />
     
      
    </form>
  </div>
    </body>
    
<?php
require_once 'footer.php';
?>
</html>
