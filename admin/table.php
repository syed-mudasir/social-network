
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabel</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
    </head>
    <body>
        <?php
    require_once '../include/db_connect.php';
session_start();
if(!$_SESSION['name'])
{
header("Location:login.php");
}?>
    <?php

require_once '../functions.php';
        $lname=$_SESSION['name'];
        $pid1=  getid($lname, 'user_id');
        
$aname=  getuser($pid1, 'fname');
        $amail=  getuser($pid1, 'mail');
        ?>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">Admin Panel </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i><?php echo $amail; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
             
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        
        
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
        <div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="index.html"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li><a href="reports.html"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
        <li><a href="guidely.html"><i class="icon-facetime-video"></i><span>App Tour</span> </a></li>
        <li><a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
        <li><a href="shortcodes.html"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="icons.html">Icons</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="pricing.html">Pricing Plans</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
            <li><a href="error.html">404</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
       
        <?php
       
        require_once '../include/db_connect.php';
        $tab=  mysql_query("select * from user");
       
        echo"  <table class='table'>
             <caption><h1>Admin Table</h1></caption><tr>
        <th>User-Name</th>
       <th>Pass-word</th>
       <th>School</th>
       <th>Inter</th>
       <th>Graduation</th>
       <th>PG</th>
      </tr>";
        while ($row = mysql_fetch_array($tab)) {
            $user=$row['user_name'];
            $pas=$row['pass_word'];
            $sc=$row['school'];
            $int=$row['inter'];
            $graduat=$row['graduation'];
            $p=$row['pg'];
            
    echo"<tr>";
       echo" <td>$user</td>";
        echo" <td>$pas</td>";
        echo" <td>$sc</td>";
        echo" <td>$int</td>";
        echo" <td>$graduat</td>";
        echo" <td>$p</td>";
      echo"</tr>";
      
}
        
    
 

        
        ?>
        
    <br>
    <br>
    
        <hr style="background: black; color: black; height: 1px;">
       
          <?php
         
      
        require_once '../include/db_connect.php';
        $tab=  mysql_query("select * from groups");
     
        echo"  <table class='table'>
            <caption><h1>Groups Table</h1></caption>
            <tr>
        <th>Group-name</th>
       <th>Members</th>
       <th>hash</th>
       <th>Category</th>
       <th>Created Time</th>
             </tr>";
        while ($row = mysql_fetch_array($tab)) {
            $user=$row['groupname'];
            $pas=$row['members'];
            $sc=$row['ghash'];
            $int=$row['category'];
            $graduat=$row['time'];
            
            
    echo"<tr>";
       echo" <td>$user</td>";
        echo" <td>$pas</td>";
        echo" <td>$sc</td>";
        echo" <td>$int</td>";
        echo" <td>$graduat</td>";
       
      echo"</tr>";
      
}
        
    
 

        
        ?>
        <hr style="background: black; color: black; height: 1px;">
          <?php
         
      
        require_once '../include/db_connect.php';
        require_once '../functions.php';
        $tab=  mysql_query("select * from frnd_req");
     
        echo"  <table class='table'>
            <caption><h1>Pending Requests Table</h1></caption>
            <tr>
        <th>From</th>
       <th>To</th>
       
             </tr>";
        while ($row = mysql_fetch_array($tab)) {
            $user=  getuser($row['from1'], 'user_name');
            $pas=  getuser($row['to1'], 'user_name');
            
            
            
    echo"<tr>";
       echo" <td>$user</td>";
        echo" <td>$pas</td>";
       
       
      echo"</tr>";
      
}
        
    
 

        
        ?>
        <hr style="background: black; color: black; height: 1px;">
         <?php
         
      
        require_once '../include/db_connect.php';
        require_once '../functions.php';
        $tab=  mysql_query("select * from frnd");
     
        echo"  <table class='table'>
            <caption><h1>Friends Table</h1></caption>
            <tr>
        <th>User</th>
       <th>User</th>
       
             </tr>";
        while ($row = mysql_fetch_array($tab)) {
            $user=  getuser($row['user_one'], 'user_name');
            $pas=  getuser($row['user_two'], 'user_name');
            
            
            
    echo"<tr>";
       echo" <td>$user</td>";
        echo" <td>$pas</td>";
       
       
      echo"</tr>";
      
}
        
    
 

        
        ?>
        <hr style="background: black; color: black; height: 1px;">
    </body>
</html>
