<?php
require_once 'include/db_connect.php';
require_once 'functions.php';
$ser=$_POST['ser'];
echo $ser1= getid($ser, 'user_id');
header("location:profile.php?user=$ser1");
?>