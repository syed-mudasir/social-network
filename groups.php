
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'include/essential.php';
        require_once 'include/db_connect.php';
        $g=$_GET['g'];
        $cat=$_GET['cat'];
        $school=  getschool($g, 'school');
        $inter=  getinter($g, 'inter');
        $graduation=  getgraduation($g, 'graduation');
                $postgraduation=  getpg($g, 'pg');
                $shash=  getshash($g, 'shash');
                $hhash=  gethhash($g, 'hhash');
                $ghash=  getghash($g, 'ghash');
                $phash=  getphash($g, 'phash');
                
                if($cat=="a")
                {
                    $sco=  mysql_query("select * from groups where category='$cat'");
                   while ($sco1 = mysql_fetch_array($sco)) {
                  $group= $sco1['groupname'];
                  $hash=$sco1['ghash'];
                  if($school==$group and $shash==$hash)
                  {
                      header("location:y.php?group=$hash");
                  }
 else {
                      header("location:home.php");
 }
                            
                        }
                    
                }
                if($cat=="b")
                {
                    $sco=  mysql_query("select * from groups where category='$cat'");
                   while ($sco1 = mysql_fetch_array($sco)) {
                  $group= $sco1['groupname'];
                  $hash=$sco1['ghash'];
                  if($inter==$group and $hhash==$hash)
                  {
                      header("location:y.php?group=$hash");
                  }
 else {
                      header("location:home.php");
 }
                            
                        }
                    
                }
                if($cat=="c")
                {
                    $sco=  mysql_query("select * from groups where category='$cat'  ");
                   while ($sco1 = mysql_fetch_array($sco)) {
                  $group= $sco1['groupname'];
                  $hash=$sco1['ghash'];
                  if($graduation==$group and $ghash==$hash)
                  {
                      header("location:y.php?group=$hash");
                  }
 else {
                      header("location:home.php");
 }
                            
                        }
                    
                }
                if($cat=="d")
                {
                    $sco=  mysql_query("select * from groups where category='$cat'");
                   while ($sco1 = mysql_fetch_array($sco)) {
                  $group= $sco1['groupname'];
                  $hash=$sco1['ghash'];
                  if($postgraduation==$group and $phash==$hash)
                  {
                      header("location:y.php?group=$hash");
                  }
 else {
                      header("location:home.php");
 }
                            
                        }
                    
                }
                
        ?>
    </body>
</html>
