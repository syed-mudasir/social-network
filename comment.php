
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comment</title>
        <link rel="stylesheet" href="css/bootstrap.css">
<link rel='stylesheet' href="css/style.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
    </head>
    <body>
        <?php
        require_once 'include/db_connect.php';
        require_once 'include/essential.php';
      if(isset($_POST['comment']) and !empty($_POST['comment']))
          
      {
          
      $comment=$_POST['comment'];
      $hash=$_POST['hash'];
         $cin=  mysql_query("insert into comment (user_id,message,hash) values ('$pid1','$comment','$hash')");
      }
      header("location:home.php");
        ?>
        
    </body>
</html>
