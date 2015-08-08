
<html>
    <head>
        <meta charset="UTF-8">
        <title>New Password</title>
          <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
    require_once 'header.php';
    ?>
        <div class="wrapper">
        <form class="form-signin" action="answer.php"  method="post">  
        <?php
        
        require_once 'include/db_Connect.php';
        require_once 'functions.php';
        
        $ans=$_POST['answer'];
        $una=$_POST['una'];
        #echo $ans;
        $aa=  mysql_query("select * from user where user_name='$una'");
         while ($aa1 = mysql_fetch_array($aa)) {
            
   $answer=$aa1['answer'];
   #echo $answer;
    if($ans==$answer)
        {
            $ran=  rand();
            echo"your new password is ".$ran."<br><br>";
            echo "<h4>Back to Home&nbsp;&nbsp;&nbsp;&nbsp;<a href='home.php'class='btn btn-primary btn-lg'style=margin:5px;>Home</a></h4>";
            $ne=  md5($ran);
            #echo $ne;
            $newp=  mysql_query("update user  set pass_word='$ne' where user_name='$una'");
        }
   
        }
        
        ?>
        </div>
        
    
<?php
require_once 'footer.php';
?>
    </body>
</html>
