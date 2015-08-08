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
