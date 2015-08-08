
<html>
    <head>
        <meta charset="UTF-8">
        <title>Requests</title>
        <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
    require_once 'header.php';
    ?>

    <?php
    require_once 'include/db_connect.php';
    ?>
     <?php
       
require_once 'include/db_connect.php';
session_start();
if(!$_SESSION['name'])
{
header("Location:index.php");
}
?>
        <?php

require_once 'functions.php';
        $lname=$_SESSION['name'];
        $pid1=  getid($lname, 'user_id');
        #echo $pid1;
        ?>
        <?php
        require_once 'functions.php';
        echo "<h1>Pending Requests</h1><br>";
    $req=  mysql_query("select * from frnd_req where to1='$pid1' ");
    if(! $req)
    {
        die("error".mysql_error());
    }
    while ($req1 = mysql_fetch_array($req)) {
        $rid= $req1['from1'];
        $rname=  getuser($rid, 'user_name');
        echo "<a href='profile.php?user=$rid'class='btn btn-primary btn-lg'style=margin:5px;>$rname</a>";
    }
   
    ?>
    </body>
    
<?php
require_once 'footer.php';
?>
</html>
