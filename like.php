
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       


<?php
require_once 'include/db_connect.php';


if(isset($_GET['hash']) and isset($_GET['type'])=="like")
{
    $type=$_GET['type'];
    $hash=$_GET['hash'];
    $ins=  mysql_query("select * from post where hash='$hash'");
    if(! $ins)
    {
    die(mysql_error());
    
    }
   
        while ($row = mysql_fetch_array($ins)) {
        $plike=$row['plike'];
        $p=$plike+1;
       
        
    }
    $inse=  mysql_query("update post set plike='$p' where hash='$hash'");
    if(! $inse)
    {
        die("error".mysql_error());
    }
}

header("location:home.php");
?>
    </body>
</html>
