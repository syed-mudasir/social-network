
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>

  <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
 
	<style type="text/css">
	
    #sidebar ul { background: whitesmoke; padding: 5px; text-decoration: none; list-style-type: none; }
        li { margin: 0 0 0 20px; text-decoration: none; }
      #sidebar a {text-decoration: none; padding:5px; border-radius: 5px; margin:10px; float:bottom;}
        #sidebar { width: 490px; position: fixed; left: 50%; top: 390px; margin: 0 0 0 110px;  }

    </style>

    </head>
    <body ><?php
        require_once 'header.php';?>
        <div id="container">
      <?php
  
  require_once 'include/essential.php';
        #require_once 'include/avatar.php';
        require_once 'include/menu.php';
        
        ?>
         
          
            <br><br>
        </div>
        
        
       
        <div id="postbox">
              <?php
        require_once 'postbox.php';
            ?>
        </div> 
        
	<div id="sidebar">
          <?php
                      require_once 'include/essential.php';
          ?>
            <h2>Clustered Groups</h2>
		
                
           
	 <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#school"><img src="img/school.png" width="20" height="20">School</a></li>
        
        <li><a data-toggle="tab" href="#inter"><img src="img/high.png" width="20" height="20">HS</a></li>
        <li><a data-toggle="tab" href="#graduation"><img src="img/graduation.png" width="20" height="20">Graduation</a></li>
        <li><a data-toggle="tab" href="#postgraduation"><img src="img/post.jpg" width="20" height="20">Pg</a></li>
      
    </ul>
              <div class="tab-content">
            <div id="school" class="tab-pane fade">
                <h3>School Groups</h3>
            
<div class="panel panel-default">
  <div class="panel-heading">School</div>
  <div class="panel-body">
      <?php
      $sc= getschool($pid1, 'school');
      ?>
      <ul>   <li><a href="groups.php?g=<?php echo $pid1; ?>&cat=a" class='btn btn-primary btn-lg'><?php echo $sc;?></a></li><br></ul>
  </div>
</div>
 
  </div>
            
            <div id="inter" class="tab-pane fade">
                <h3>High-School Groups</h3>
            
<div class="panel panel-default">
  <div class="panel-heading">High-School</div>
  <div class="panel-body">
      <ul>   <li><a href="groups.php?g=<?php echo $pid1; ?>&cat=b" class='btn btn-primary btn-lg'><?php $sc= getinter($pid1, 'inter');echo $sc;?></a></li><br></ul>
  </div>
</div>
 </div>
                     <div id="graduation" class="tab-pane fade">
                <h3>Graduation Groups</h3>
            
<div class="panel panel-default">
  <div class="panel-heading">Graduation</div>
  <div class="panel-body">
      <ul>   <li><a href="groups.php?g=<?php echo $pid1; ?>&cat=c" class='btn btn-primary btn-lg'><?php $sc= getgraduation($pid1, 'graduation');echo $sc;?></a></li><br></ul>
  </div>
</div>
 
  </div>
                     <div id="postgraduation" class="tab-pane fade">
                <h3>PG groups</h3>
            
<div class="panel panel-default">
  <div class="panel-heading">PG</div>
  <div class="panel-body">
      <ul>   <li><a href="groups.php?g=<?php echo $pid1; ?>&cat=d" class='btn btn-primary btn-lg'><?php $sc=  getschool($pid1, 'pg');echo $sc;?></a></li><br></ul>
  </div>
</div>
 
  </div>
  </div>
            
            
        </div>
            
            
            
            
            
            
          

        
<br>


<?php
require_once 'footer.php';
?>


       
   
     </body>
</html>
