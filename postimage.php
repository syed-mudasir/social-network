<?php
require_once ('include/db_connect.php');
$aid=$_POST['postid'];
  $message=$_POST['msg'];
   $status=$_POST['status'];
   $hash=  rand(11, 99);
   

if (!isset($_FILES['imagepost']['tmp_name'])) {
	
	}else{
	$file=$_FILES['imagepost']['tmp_name'];
        
	$image= addslashes(file_get_contents($_FILES['imagepost']['tmp_name']));
	$image_name= addslashes($_FILES['imagepost']['name']);
      			
			move_uploaded_file($_FILES["imagepost"]["tmp_name"],"uploads/" . $_FILES["imagepost"]["name"]);
			
			$location="uploads/" . $_FILES["imagepost"]["name"];
			
			
			$save=mysql_query("insert into post (user_id,status,message,pimage,hash) values ('$aid','$status','$message','$location','$hash') ");
                        if(! $save)
                        {
                            die("error".mysql_error());
                        }
			 header("location:home.php");

			exit();					
	}
       
?>



