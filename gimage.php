<?php
require_once ('include/db_connect.php');
$aid=$_POST['postid'];
  $message=$_POST['msg'];
   $status=$_POST['status'];
   $hash=  $_POST['hash'];
$phash=  rand(5414165451464,65451564165214564564);   

if (!isset($_FILES['imagepost']['tmp_name'])) {
	
	}else{
	$file=$_FILES['imagepost']['tmp_name'];
        
	$image= addslashes(file_get_contents($_FILES['imagepost']['tmp_name']));
	$image_name= addslashes($_FILES['imagepost']['name']);
      			
			move_uploaded_file($_FILES["imagepost"]["tmp_name"],"gupload/" . $_FILES["imagepost"]["name"]);
			
			$location="gupload/" . $_FILES["imagepost"]["name"];
			
			
			$save=mysql_query("insert into gpost (user_id,status,message,pimage,ghash) values ('$aid','$status','$message','$location','$hash') ");
                        if(! $save)
                        {
                            die("error".mysql_error());
                        }
			 header("location:y.php?group=$hash");

			exit();					
	}
       
?>



