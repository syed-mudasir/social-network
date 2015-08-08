<?php
$host="localhost";
$user="root";
$password="";
$con=  mysql_connect($host,$user,$password);
if(! $con)
{
    die("eoor in connection".mysql_error());
}
$db=  mysql_select_db("social",$con);
if(! $db)
{
    die("database not dound".mysql_error());
}
?>

