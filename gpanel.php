
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.css">
<link rel='stylesheet' href="css/style.css">

    </head>
    <body>
        <?php
        require_once 'include/db_connect.php';
        require_once 'include/essential.php';
        $hash=$_GET['group'];
        $name= mysql_query("select * from groups where ghash='$hash' ");
        while ($name1 = mysql_fetch_array($name)) {
            $gname=$name1['groupname'];
            
        }
        ?>
        
         <div class="page-header" >
      <h1><?php echo $gname;?> <small> | group</small></h1>
    </div>
        
        <h4>Compose <small> | Message</small></h4>
       <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#text"><img src="img/school.png" width="20" height="20">Instant Message</a></li>
        
        <li><a data-toggle="tab" href="#imagepost"><img src="img/high.png" width="20" height="20">Image Post</a></li>
        <li><a data-toggle="tab" href="#graduation"><img src="img/graduation.png" width="20" height="20">Video Post</a></li>
       
      
    </ul>
        <div id='group'>
            <div class="tab-content">
                <div id="text" class="tab-pane fade in active">
            <h3>Text Message</h3>
             <form action="ginsert.php" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
  <div class="panel-heading">Instant Message</div>
  <div class="panel-body">
      <textarea class="form-control" rows="3" placeholder="What's on your mind?" name="msg"></textarea>
      <input type="hidden" value="message" name="status">
      <input type="hidden" name="texthash" value="<?php echo $hash; ?>">
    
  </div>
  <div class="panel-footer clearfix">
        <div class="pull-right">
            <input type="submit" value="post" name="tpost" class="btn-primary">
            
        </div>
    </div>
</div>
    </form>
        </div>
                
                <div id="imagepost" class="tab-pane fade in active">
                    hi
                </div>   
                
                
                
                
                
                
                
                
                
                
                
            </div>
            
        </div>
    </div>
       
            </body>
</html>
