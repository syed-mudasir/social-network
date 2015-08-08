<html>
    <head>
        <meta charset="UTF-8">
        <title>Chat</title>
        <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        #bo{
            margin-left: 15px;
            margin-right:  15px;
            margin-top: 20px;
            margin-bottom: 20px;
           
        }
    </style>
    </head>
    <body>
        <?php
    require_once 'header.php';
    ?>
        <div id="bo">
        <?php
    require_once 'include/db_connect.php';
    require_once 'include/essential.php';
        ?>
        <?php
       require_once 'include/db_connect.php';
       require_once 'functions.php';
       require_once 'include/essential.php';
       echo"<h1>Chat List</h1><br>";
       $fr=  mysql_query("select user_one,user_two from frnd where user_one='$pid1'  or  user_two='$pid1'");
       while ($frn = mysql_fetch_array($fr)) {
  if($frn['user_one']==$pid1)
  {
      $frnid=$frn['user_two'];
  }
 else {
  $frnid=$frn['user_one'];    
  }
  $frname=  getuser($frnid, 'user_name');
  echo "<a href='chatbox.php?user=$frnid'class='btn btn-default btn-lg'style=margin:5px;>$frname</a><br><br>";
}
 
        ?>
        </div>
    </body>
    <?php
require_once 'footer.php';
?>
</html>
