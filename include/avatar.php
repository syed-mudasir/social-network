  <?php
  require_once 'include/db_connect.php';
  $im=  mysql_query("select * from user where user_id='$pid1'");
  $ima=  mysql_fetch_array($im);
echo "<p><img src=".$ima['avatar']." class=pic style='background:#dfe3ee;' ></p>";
  ?>
       
       <?php
       
    echo "<div id='msg' ><p class='btn btn-lg btn-primary btn-block'><a href='profile.php'style=color:white;text-decoration:none;>hi&nbsp;&nbsp;&nbsp;".$_SESSION['name']."</a></p></div>"; 

    ?>