
<html>
    <head>
        <meta charset="UTF-8">
        <title>Members</title>
           <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
    require_once 'header.php';
    ?>

        <h2>People You Know</h2>
        <?php
        require_once 'functions.php';
        require_once 'include/db_connect.php';
        require_once 'include/essential.php';
        $sch=  getschool($pid1, 'school');
   $int=  getinter($pid1, 'inter');
   $gra=  getgraduation($pid1, 'graduation');
   $p=  getpg($pid1, 'pg');
        $q1="select * from user where school='$sch' or inter='$int' or graduation='$gra' or pg='$p'";
        $q2=  mysql_query($q1);
        if(! $q2)
        {
            die("error".mysql_error());
        }
        else
        {
            while($q3=mysql_fetch_array($q2))
            {
                $uid=$q3['user_id'];
               
                $uname= getuser($uid, 'user_name');
                

                echo "<a href='profile.php?user=$uid'class='btn btn-default btn-lg'style=margin:5px;>$uname</a><br><br>";
           
                }
        }
        
        ?>
    </body>
    <?php
require_once 'footer.php';
?>
</html>
