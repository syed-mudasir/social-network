<?php
require_once 'include/db_connect.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=  $_POST['username'];
$mail=$_POST['mail'];
$pass=  md5($_POST['password']);
$insert1=  mysql_query("insert into user(fname,lname,user_name,pass_word,mail) values ('$fname','$lname','$username','$pass','$mail')");
header("location:registration1.php?user=$username");
mysql_close($con);

?>