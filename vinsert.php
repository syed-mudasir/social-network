<?php
require_once ('include/db_connect.php');
require_once 'functions.php';
$aid=$_POST['id'];


        
 

if (!isset($_FILES['image']['tmp_name'])) {
	
	}else{
	$file=$_FILES['image']['tmp_name'];
        $size=$_FILES['image']['size'];
       $file_name = "../video/".$_FILES["image"]["name"];
          
          
      $exet=  get_file_extension($file_name);
        
       if($size<=100000000&& ($exet=="mp4"||"flv"||"3gp"))
       {
        
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
      			
			move_uploaded_file($_FILES["image"]["tmp_name"],"video/" . $_FILES["image"]["name"]);
			
			$location="video/" . $_FILES["image"]["name"];
			
			
			$save=mysql_query("insert into galery(user_id,video) values('$aid','$location')");
                        if(! $save)
                        {
                            die("error".mysql_error());
                        }
			 header("location:vgal.php");

			exit();					
	}
        }
?>



