 <?php
    require_once 'include/db_connect.php';
    require_once 'include/essential.php';
    $user=$_POST['user'];
    $message=$_POST['message'];
    $hash=  rand(155454, 4554545451);
    
          $qry1=  mysql_query("select * from message where (sender='$pid1' and receiver='$user') or (sender='$user' and  receiver='$pid1')");
          if(mysql_num_rows($qry1)==1)
          {
              while ($row = mysql_fetch_array($qry1)) {
                  $hash1=$row['chash'];
               $mes2=  mysql_query("insert into conversation (cfrom,msg,chash) values('$pid1','$message','$hash1')");     
              }  
              header("location:chatbox.php?user=$user&hash=$hash1");
               
          }
          else{
              $mes=  mysql_query("insert into message (sender,receiver,chash) values('$pid1','$user','$hash')");
            $mes1=  mysql_query("insert into conversation (cfrom,msg,chash) values('$pid1','$message','$hash')");  
              header("location:chatbox.php?user=$user&hash=$hash");
          }
  
    
        
    
        ?>