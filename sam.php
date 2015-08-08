<?php
require_once ('include/db_connect.php');
$aid=$_POST['id'];


if (!isset($_FILES['image']['tmp_name'])) {
	
	}else{
	$file=$_FILES['image']['tmp_name'];
        
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
      			
			move_uploaded_file($_FILES["image"]["tmp_name"],"profile/" . $_FILES["image"]["name"]);
			
			$location="profile/" . $_FILES["image"]["name"];
			
			
			$save=mysql_query("update user set avatar='$location' where user_id='$aid'");
                        if(! $save)
                        {
                            die("error".mysql_error());
                        }
			 header("location:selectlogin.php");

			exit();					
	}
       
?>



