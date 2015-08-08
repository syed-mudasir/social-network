<?php

        require_once 'include/db_connect.php';
        if(isset($_POST['mpost'])&& ! isset($_POST['mpost'])==0)
        {
       echo $status=$_POST['status'];
      echo   $message=$_POST['msg'];
       echo  $postid=$_POST['postid'];
        echo $message;
         echo $hash= $_POST['hash'];
         $phash=  rand(1245464, 5454514454212);
         
         $row1= mysql_query("insert into gpost(user_id,message,status,ghash) values('$postid','$message','$status','$hash')");
        
          header("location:y.php?group=$hash");
          
        }
 
 
        
        
       
        if(isset($_POST['vpost'])&& ! isset($_POST['vpost'])==0)
        {
        $status=$_POST['status'];
         $message=$_POST['msg'];
           $url=$_POST['url'];
           $postid=$_POST['postid'];
          $hash= $_POST['hash'];
          $phash1=  rand(245489264963, 148521432189423161);
            $row2=  mysql_query("insert into gpost(user_id,message,status,url,ghash) values('$postid','$message','$status','$url','$hash')");
          header("location:y.php?group=$hash");
          
        }
      
       
        ?>