<?php

        require_once 'include/db_connect.php';
        if(isset($_POST['mpost'])&& ! isset($_POST['mpost'])==0)
        {
        $status=$_POST['status'];
         $message=$_POST['msg'];
         $postid=$_POST['postid'];
        # echo $message;
         $hash=  rand(22, 802);
         
         $row1= \mysql_query("insert into post(user_id,message,status,hash) values('$postid','$message','$status','$hash')");
        
          header("location:home.php");
          
        }
 
 
        
        
       
        if(isset($_POST['vpost'])&& ! isset($_POST['vpost'])==0)
        {
        $status=$_POST['status'];
         $message=$_POST['msg'];
           $url=$_POST['url'];
           $postid=$_POST['postid'];
           $hash=  rand(30, 945);
            $row2=  mysql_query("insert into post(user_id,message,status,url,hash) values('$postid','$message','$status','$url','$hash')");
          header("location:home.php");
          
        }
       if(isset($_POST['lpost'])&& ! isset($_POST['lpost'])==0)
        {
        $status=$_POST['status'];
         $message=$_POST['msg'];
            $place=$_POST['place'];
            $postid=$_POST['postid'];
             $hash=  rand(4560, 94245343);
           $row3=  mysql_query("insert into post(user_id,message,status,place,hash) values('$postid','$message','$status','$place','$hash')");
          header("location:home.php");
        }
       
        ?>