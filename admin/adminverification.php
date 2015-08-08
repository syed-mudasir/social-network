<?php

require_once '../include/db_connect.php';

$user=$_POST['username'];
$pass=$_POST['password'];

$qry=mysql_query("SELECT * FROM user WHERE user_name='$user'", $con);
if(!$qry)
{
mysql_close($con);
die("Query Failed: ". mysql_error());
}
else
{
$row=mysql_fetch_array($qry);
}

if($_POST['username']==$row["user_name"]&& $_POST['password']==$row["pass_word"]&&$row['auth']=="admin")
{
session_start();
$_SESSION['name']=$user;
mysql_close($con);
header("Location:index.php");
}

 else   
{
mysql_close($con);
header("Location:login.php?msg=Incorrect username or password");
}

?>
<?php mysql_close($con); ?>