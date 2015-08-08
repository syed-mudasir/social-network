<?php
    require_once '/include/db_connect.php';
session_start();
if(!$_SESSION['name'])
{
header("Location:index.php");
}?>
    <?php

require_once 'functions.php';
        $lname=$_SESSION['name'];
        $pid1=  getid($lname, 'user_id');
     
        ?>
<?php

require_once 'include/db_connect.php';

$name = date('YmdHis');
$newname="images/".$name.".jpg";
$file = file_put_contents( $newname, file_get_contents('php://input') );
if (!$file) {
	print "Error occured here";
	exit();
}
else
{
   $cap=  mysql_query("insert into galery(user_id,pic) values('$pid1','$newname')");
   
    
	
}

$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $newname;
print "$url\n";

?>
