<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'include/db_connect.php';
        require_once 'functions.php';
        require_once 'include/essential.php';
         $sch=  getschool($pid1, 'school');
   $int=  getinter($pid1, 'inter');
   $gra=  getgraduation($pid1, 'graduation');
   $p=  getpg($pid1, 'pg');

      $c= \mysql_query("select id from groups where (groupname='$sch' and members>1) or (groupname='$int' and members>1) or (groupname='$gra' and members>1) or (groupname='$p' and members>1)");
      if(! $c)
      {
          die("error".mysql_error());
      }
  if(mysql_num_rows($c)>1)
  {
      require_once 'postbox.php';
  }
 else {
      echo 'no';    
  }
?>
    </body>
</html>
