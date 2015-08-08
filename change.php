
<html>
    <head>
        <meta charset="UTF-8">
        <title>Change Password</title>
         <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
    require_once 'header.php';
    ?>
        <?php
        $id=$_POST['id'];
        #echo $id."<br><nr>";
        $new=$_POST['new'];
       
        
        #echo $new."<br><br>";
        $n1=  md5($new);
        #echo $n1;
        require_once 'include/db_Connect.php';
        require_once 'functions.php';
        require_once 'include/essential.php';
      
      
            $cc=  mysql_query("update user  set pass_word='$n1' where user_id='$id'");
     
   
     
        
        ?>
        <div class="wrapper">
        <form class="form-signin" action="change.php"  method="post">  
            <h1>Password Sucessfully changed Please login again</h1><br>
            <a href='index.php'class='btn btn-primary btn-lg'style=margin:5px;>Logout</a>
                    </form>
  </div>
        
    </body>
    <?php
require_once 'footer.php';
?>
</html>
