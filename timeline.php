
<html>
    <head>
        <meta charset="UTF-8">
        <title>Timeline</title>
        <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        #wh{
            background: #666666;
            margin-left: 65px;
            margin-right: 55px;
            border-radius: 5px;
            padding-bottom: 15px;
            padding-top: 10px;
            padding-left: 15px;
            padding-right: 15px;
        }
    </style>
    
    
    </head>
    <body>
        <?php
    require_once 'header.php';
    ?>
        <?php
       
require_once 'include/essential.php';
?>
        <?php

require_once 'functions.php';
        $lname=$_SESSION['name'];
        $pid1=  getid($lname, 'user_id');
        #echo $pid1;
        ?>
       <?php
       
       $det=  mysql_query("select * from user where user_id='$pid1'");
       while ($det1 = mysql_fetch_array($det)) {
         
            $ppicl="<img align='left' class='fb-image-lg' src=".$det1['avatar']." alt='Profile image example'/>";
          $ppics="<img align='left' class='fb-image-profile thumbnail' src=".$det1['avatar']." alt='Profile image example'/>";
     $pname=$det1['user_name'];
     $pabout=$det1['about'];
         echo "
<link rel='stylesheet' href='css/style.css'>
<div class='container'>
    <div class='fb-profile'>". $ppicl.$ppics."
        
        
        <div class='fb-profile-text'><h1>".$pname."</h1><p>$pabout
           
        </div>
    </div>
</div> ";
           
           
       }
       ?>
        
        <div id="wh">
        
        <ul class="nav nav-pills">
            <form class="navbar-form navbar-left" role="search" action="search.php" method="post">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="ser">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"class=" active " ><a href="#" >hello</a></li>
            <li role="presentation" class="active"><a href="#">Messages</a></li>
        
            
            <div class="btn-group" role="group" style="float:right;">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
     Account Settings
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="change1.php?id=<?php echo $pid1;?>">Change Password</a></li>
      <li><a href="#">Update Details</a></li>
    </ul>
  </div>
        </ul>
        </div><br><br><br>
        <?php
        require_once 'include/db_connect.php';
        require_once 'functions.php';
       
        require_once 'postbox.php';


        ?>
         
         
    </body>
    <?php
require_once 'footer.php';
?>
</html>
