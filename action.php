 <?php
        
require_once 'include/db_connect.php';
session_start();
if(!$_SESSION['name'])
{
header("Location:index.php");
}
?>       
<?php
       require_once 'include/db_connect.php';
require_once 'functions.php';
        $lname=$_SESSION['name'];
        $pid1=  getid($lname, 'user_id');
        #echo $pid1;
        ?>




<?php
require_once 'include/db_connect.php';
require_once 'functions.php';
$my_id=$pid1;
$action=  mysql_real_escape_string($_GET['action']);
$user=  mysql_real_escape_string($_GET['user']);

if($action=='send')
{
$in=  mysql_query("insert into frnd_req(from1,to1) values('$my_id','$user')");

}

if($action=='cancel')
{
$in=  mysql_query("delete from frnd_req where from1='$my_id' and to1='$user'");

}
if($action=='accept')
{
$in=  mysql_query("delete from frnd_req where from1='$user' and to1='$my_id'");
$fin=  mysql_query("insert into frnd(user_one,user_two) values('$my_id','$user')");

}
if($action=='reject')
{
$in=  mysql_query("delete from frnd_req where from1='$user' and to1='$my_id'");

}
if($action=='unfriend')
{
$in=  mysql_query("delete from frnd where(user_one='$my_id' and user_two='$user') or (user_one='$user' and user_two='$my_id')");

}

header("location:profile.php?user=$user");
?>