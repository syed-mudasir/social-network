<?php
require_once 'include/db_connect.php';
require_once 'functions.php';
$uname=$_POST['uname'];
$sname=$_POST['sname'];
$hsname=$_POST['hsname'];
$gname=  $_POST['gname'];
$pgname=$_POST['pgname'];
$i1=$_POST['i1'];
$i2=$_POST['i2'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$gender=$_POST['sex'];
$you=$_POST['you'];
$uid1=  getid($uname, 'user_id');
$category;

if($gname !=="null")
{
$ghash=  rand(1004545, 44646546464);

}
 else {
$ghash=1004546;  
gnone();

}
$shash=  rand(205, 546844);
if($hsname !=="null")
{
$hhash=  rand(141, 541654165465);

}
 else {
$hhash=142;   
inone();
}
if($pgname !=="null")
{
$phash=  rand(4454, 51115454);

}
 else {
$phash=4455;  
pnone();
}
echo 'hi';


        if($sname !="null")
        {
            $category="a";
            $see=  mysql_query("select * from groups where groupname='$sname'");
            if(mysql_num_rows($see)==0)
            {
            $gin=  mysql_query("insert into groups (groupname,members,ghash,category) values('$sname',1,'$shash','$category')");  
            
           $gin3=  mysql_query("update user set shash='$shash' where user_name='$uname'");
            }
 else {
                while ($see1 = mysql_fetch_array($see)) {
                    $members=$see1['members'];
                    $mem=$members+1;
                    $has1=$see1['ghash'];
                }
 $gin1=  mysql_query("update groups set members='$mem' where groupname='$sname'");
 $gin2=  mysql_query("update user set shash='$has1' where user_name='$uname'");
                
                }
  

 
                        
            
            }

            if($hhash !==142)
        {
            $category="b";
            $see=  mysql_query("select * from groups where groupname='$hsname'");
            if(mysql_num_rows($see)==0)
            {
            $gin=  mysql_query("insert into groups (groupname,members,ghash,category) values('$hsname',1,'$hhash','$category')");  
            $gin3=  mysql_query("update user set hhash='$hhash' where user_name='$uname'");
            }
 else {
                while ($see1 = mysql_fetch_array($see)) {
                    $members=$see1['members'];
                    $mem=$members+1;
                     $has2=$see1['ghash'];
                }
 $gin1=  mysql_query("update groups set members='$mem' where groupname='$hsname'");
 $gin2=  mysql_query("update user set hhash='$has2' where user_name='$uname'");               
                }
  

 
                        
            
            }
            
            
                 if($ghash !==1004546)
        {
            $category="c";
            $see=  mysql_query("select * from groups where groupname='$gname'");
            if(mysql_num_rows($see)==0)
            {
            $gin=  mysql_query("insert into groups (groupname,members,ghash,category) values('$gname',1,'$ghash','$category')");  
          $gin3=  mysql_query("update user set ghash='$ghash' where user_name='$uname'");
            }
 else {
                while ($see1 = mysql_fetch_array($see)) {
                    $members=$see1['members'];
                    $mem=$members+1;
                    $has3=$see1['ghash'];
                }
 $gin1=  mysql_query("update groups set members='$mem' where groupname='$gname'");
 $gin2=  mysql_query("update user set ghash='$has3' where user_name='$uname'"); 
 

                
                }
  

 
                        
            
            }
            
          
               if($phash !==4455)
        {
            $category="d";
            $see=  mysql_query("select * from groups where groupname='$pgname'");
            if(mysql_num_rows($see)==0)
            {
            $gin=  mysql_query("insert into groups (groupname,members,ghash,category) values('$pgname',1,'$phash','$category')");  
          $gin3=  mysql_query("update user set phash='$phash' where user_name='$uname'");
            }
 else {
                while ($see1 = mysql_fetch_array($see)) {
                    $members=$see1['members'];
                    $mem=$members+1;
                     $has4=$see1['ghash'];
                }
 $gin1=  mysql_query("update groups set members='$mem' where groupname='$pgname'");
  $gin2=  mysql_query("update user set phash='$has4' where user_name='$uname'"); 
                
                }
  

 
                        
            
            }
            
            function pnone()
            {
                $del=  mysql_query("delete from groups where category='d' and groupname='null'");
                return 0;
            }
            function inone()
            {
                $del=  mysql_query("delete from groups where category='b' and groupname='null'");
                return 0;
            }
            function gnone()
            {
                $del=  mysql_query("delete from groups where category='c' and groupname='null'");
                return 0;
            }
    
            
           
        
     
      
        
        

$insert2=  mysql_query("Update user
Set school = '$sname',inter='$hsname',graduation='$gname',pg='$pgname',interest1='$i1',interest2='$i2',question='$s1',answer='$s2',gender='$gender',about='$you'
Where user_name = '$uname'");
header("location:avatar.php?id=$uid1");

mysql_close($con);

?>