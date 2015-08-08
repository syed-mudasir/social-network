<?php
require_once ('include/db_connect.php');
$aid=$_POST['postid'];
  $message=$_POST['msg'];
   $status=$_POST['status'];
   $hash=  rand(11, 99);
   

if (!isset($_FILES['audiopost']['tmp_name'])) {
	
	}else{
	$file=$_FILES['audiopost']['tmp_name'];
        
	$image= addslashes(file_get_contents($_FILES['audiopost']['tmp_name']));
	$image_name= addslashes($_FILES['audiopost']['name']);
      			
			move_uploaded_file($_FILES["audiopost"]["tmp_name"],"recordings/" . $_FILES["audiopost"]["name"]);
			
			$location="recordings/" . $_FILES["audiopost"]["name"];
			
			
			$save=mysql_query("insert into post (user_id,status,message,audio,hash) values ('$aid','$status','$message','$location','$hash') ");
                        if(! $save)
                        {
                            die("error".mysql_error());
                        }
			 header("location:home.php");

			exit();					
	}
       
?>



