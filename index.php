<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login Form</title>

  <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php
    require_once 'header1.php';
    ?>

    <div class="wrapper">
        <form class="form-signin" action="verification.php"  method="post" name="f">       
      <h2 class="form-signin-heading">Please login</h2>
      <?php
if(isset($_GET['msg']))
{
echo $_GET['msg'];
}
?>
      <?php
if(isset($_GET['id']))
{
echo $_GET['id'];
}
?>
      <input type="text" class="form-control" name="username" placeholder="User Name" required="" autofocus=""  />
      <input type="password" class="form-control" name="password" placeholder="Password"  required="" />      
      <p align="right"><a href="forget.php">Forgot Password</a></p>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button> 
      <a href="registration.php" class="btn btn-lg btn-primary btn-block">New Account</a>
    </form>
  </div>
<?php
require_once 'footer1.php';
?>
</body>

</html>