<?php

function getuser($id,$field)
{
    $q4="select $field from user where user_id='$id'";
    $q5=  mysql_query($q4);
    
 
    $q6=  mysql_fetch_array($q5);
    return $q6[$field]; 
    
}
function gethash($id,$field)
{
    $q4="select $field from user where user_id='$id'";
    $q5=  mysql_query($q4);
    
 
    $q6=  mysql_fetch_array($q5);
    return $q6[$field]; 
    
}
function getid($name,$field)
{
    $q4="select $field from user where user_name='$name'";
    $q5=  mysql_query($q4);
    
 
    $q6=  mysql_fetch_array($q5);
    return $q6[$field]; 
    
}
function getavatar($uid,$field)
{
    $q4="select $field from user where user_id='$uid'";
    $q5=  mysql_query($q4);
    
 
    $q6=  mysql_fetch_array($q5);
    return $q6[$field]; 
    
}
function getschool($sid,$field)
{
    $q4="select $field from user where user_id='$sid'";
    $q5=  mysql_query($q4);
    
 
    $q6=  mysql_fetch_array($q5);
    return $q6[$field]; 
    
}
function getinter($iid,$field)
{
    $q4="select $field from user where user_id='$iid'";
    $q5=  mysql_query($q4);
    
 
    $q6=  mysql_fetch_array($q5);
    return $q6[$field]; 
    
}
function getgraduation($gid,$field)
{
    $q4="select $field from user where user_id='$gid'";
    $q5=  mysql_query($q4);
    
 
    $q6=  mysql_fetch_array($q5);
    return $q6[$field]; 
    
}
function getpg($pid,$field)
{
    $q4="select $field from user where user_id='$pid'";
    $q5=  mysql_query($q4);
    
 
    $q6=  mysql_fetch_array($q5);
    return $q6[$field]; 
    
}
function getshash($pid,$field)
{
    $q4="select $field from user where user_id='$pid'";
    $q5=  mysql_query($q4);
    
 
    $q6=  mysql_fetch_array($q5);
    return $q6[$field]; 
    
}
function gethhash($pid,$field)
{
    $q4="select $field from user where user_id='$pid'";
    $q5=  mysql_query($q4);
    
 
    $q6=  mysql_fetch_array($q5);
    return $q6[$field]; 
    
}
function getghash($pid,$field)
{
    $q4="select $field from user where user_id='$pid'";
    $q5=  mysql_query($q4);
    
 
    $q6=  mysql_fetch_array($q5);
    return $q6[$field]; 
    
}
function getphash($pid,$field)
{
    $q4="select $field from user where user_id='$pid'";
    $q5=  mysql_query($q4);
    
 
    $q6=  mysql_fetch_array($q5);
    return $q6[$field]; 
    
}

function get_file_extension($file_name) {
	return substr(strrchr($file_name,'.'),1);
}




?>
