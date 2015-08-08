<link rel="stylesheet" href="css/bootstrap.css">
<link rel='stylesheet' href="css/style.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	
    #sidebar ul { background: whitesmoke;  text-decoration: none; list-style-type: none; }
        li { margin: 0 0 0 0px; text-decoration: none; }
      #sidebar a {text-decoration: none; padding:15px; border-radius: 5px; margin:0px; float:right;}
      #sidebar a:hover{background: #333;color: #eee}
        #sidebar { width: 90px; position: fixed; left: 80%; top: 290px; margin: 0 0 0 110px; float: right; border-radius: 5px; }

    </style>
   <?php
    require_once 'header.php';
    ?>
    
<div id='group'>
    
    <?php
        require_once 'include/db_connect.php';
        require_once 'include/essential.php';
        $hash=$_GET['group'];
        $name= mysql_query("select * from groups where ghash='$hash' ");
        while ($name1 = mysql_fetch_array($name)) {
            $gname=$name1['groupname'];
            
        }
        ?>
        
    <div class="page-header"  style="background:#4BC599;">
             <h1 ><?php echo $gname;?> <small style="color:black;opacity: 0.6;"> | group</small></h1>
    </div>
        
    <h4 style="color:black;">Compose <small style="color:black;opacity: 0.6;"> | Message</small></h4>
    
    
    
    
    <?php
        require_once 'include/db_connect.php';
        $co=  mysql_query("SELECT COUNT(*) FROM gpost where seen='unread'");
        while($row = mysql_fetch_array($co)){
    $Totalcount= $row['COUNT(*)'];
}
        
    



     $co1=  mysql_query("SELECT COUNT(*) FROM gpost where seen='read'");
        while($row = mysql_fetch_array($co1)){
    $Totalcount1= $row['COUNT(*)'];
}
    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<div role="tabpanel">
    <div class="group">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
      <h3>Posting options</h3>
    <li role="presentation" class="active"><a href="#textpost" aria-controls="home" role="tab" data-toggle="tab"><img src="img/file.png" width="20" height="20">Instant Message</a></li>
    <li role="presentation"><a href="#imageposting" aria-controls="profile" role="tab" data-toggle="tab"><img src="img/camera.jpg" width="20" height="20">Image Upload</a></li>
    <li role="presentation"><a href="#videoposting" aria-controls="messages" role="tab" data-toggle="tab"><img src="img/video.png" width="20" height="20">Video Upload</a></li>
    
  </ul>
    </div>
  <!-- Tab panes -->
  <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="textpost">
          <div id="textpost" class="tab-pane fade in active">
            <h3>Instant Message</h3>
             <form action="ginsert.php" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
  <div class="panel-heading">Instant Message</div>
  <div class="panel-body">
      <textarea class="form-control" rows="3" placeholder="What's on your mind?" name="msg"></textarea>
      <input type="hidden" value="message" name="status">
      <input type="hidden" name="postid" value="<?php echo $pid1; ?>">
      <input type="hidden" name="hash" value="<?php echo $hash;?>">
    
  </div>
  <div class="panel-footer clearfix">
        <div class="pull-right">
            <input type="submit" value="post" name="mpost" class="btn-primary">
            
        </div>
    </div>
</div>
    </form>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="imageposting">
          <div id="imagepost" class="tab-pane fade in active">
            
            <h3>Image</h3>
            <form action="gimage.php" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
  <div class="panel-heading">Update Status</div>
  <div class="panel-body">
      <textarea class="form-control" rows="3" placeholder="What's on your mind?" name="msg"></textarea>
      <input type="file" name="imagepost"  >
       <input type="hidden" value="image" name="status">
       <input type="hidden" name="postid" value="<?php echo $pid1; ?>">
        <input type="hidden" name="hash" value="<?php echo $hash;?>">
  </div>
  <div class="panel-footer clearfix">
        <div class="pull-right">
            <input type="submit" value="post" name="ipost" class="btn-primary">
            
        </div>
    </div>
</div>
    </form>
          
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="videoposting">
          <h3>Video</h3>
            <form action="ginsert.php" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
  <div class="panel-heading">Update Status</div>
  <div class="panel-body">
      <textarea class="form-control" rows="3" placeholder="What's on your mind?" name="msg"></textarea>
      <textarea class="form-control" rows="1" placeholder="Video url" name="url"></textarea>
       <input type="hidden" value="video" name="status">
       <input type="hidden" name="postid" value="<?php echo $pid1; ?>">
        <input type="hidden" name="hash" value="<?php echo $hash;?>">
  </div>
  <div class="panel-footer clearfix">
        <div class="pull-right">
            <input type="submit" value="post" name="vpost" class="btn-primary">
            
        </div>
    </div>
</div>
    </form>
      </div>
    
     <div role="tabpanel" class="tab-pane" id="read">read</div>
       <div role="tabpanel" class="tab-pane" id="unread">unread.</div>
  </div>

</div>
</div>













<div id="sidebar">

<div id='postbox'>
    
<ul class="nav nav-pills nav-stacked" style="float: right;">
    <h3 style="color:black;"> messages</h3><hr>
    <li role="presentation" class="active"><a href="#read" aria-controls="home" role="tab" data-toggle="tab"><img src="img/read.jpg" width="20" height="20">Read<span class="badge"><?php echo $Totalcount1; ?></span></a></li><br><br>
    <li role="presentation"><a href="#unread" aria-controls="profile" role="tab" data-toggle="tab"><img src="img/unread.jpg" width="20" height="20">Unread<span class="badge"><?php echo $Totalcount; ?></span></a></li>
    </ul>
</div>
</div>
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php
     require_once 'include/db_connect.php';
     $pg=  mysql_query("select * from gpost where ghash='$hash' ORDER BY id desc");
     while ($row = mysql_fetch_array($pg)) 
                {
         $type=$row['status'];
         if($type=='message')
         {
         $postn=  getuser($row['user_id'], 'fname');
         $ava1=  getavatar($row['user_id'], 'avatar');
         
         $ava="<img src='$ava1' height='30' width='30' class=>";
         $tim=$row['time'];
         $hash=$row['ghash'];
         
         echo "<div class='post'><div class='panel panel-default'>
  <div class='panel-heading'>".$ava.$postn."</div>
  <div class='panel-body'>".$row['message']."
   
  </div><div class='panel-footer'>Posted at&nbsp;&nbsp".$tim."</div>
</div>
         </div></div>";}
         
    if($type=='image')
     {
        $postn=  getuser($row['user_id'], 'fname');
         $ava1=  getavatar($row['user_id'], 'avatar');
         
         $ava="<img src='$ava1' height='30' width='30'>";
         $pim=$row['pimage'];
         $pim1="<img src='$pim' class='img-responsive center-block'>";
        echo "<div class='post'><div class='panel panel-default'>
  <div class='panel-heading'>".$ava.$postn."</div>
  <div class='panel-body'>".$row['message'].$pim1."
   
  </div>
         </div></div>";
     }
         if($type=='video')
         {
        $postn=  getuser($row['user_id'], 'fname');
         $ava1=  getavatar($row['user_id'], 'avatar');
         
         $ava="<img src='$ava1' height='30' width='30'>"; 
         $url=$row['url'];
         $vi="  <iframe src='$url'
           frameborder='0' width='476' height='400'
                allowfullscreen ></iframe >";
         echo "<div class='post'><div class='panel panel-default'>
  <div class='panel-heading'>".$ava.$postn."</div>
  <div class='panel-body'>".$row['message'].$vi."
   
  </div>
         </div></div>";
         
         }
         if($type=='location')
         {
             $postn=  getuser($row['user_id'], 'fname');
         $ava1=  getavatar($row['user_id'], 'avatar');
         
         $ava="<img src='$ava1' height='30' width='30'>";
         $pla=$row['place'];
          echo "<div class='post'><div class='panel panel-default'>
  <div class='panel-heading'>".$ava.$postn."</div>
  <div class='panel-body'>".$row['message']."<br>".$pla."
   
  </div>
         </div></div>";
         
         
         }
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         }
     

            ?>
<?php
require_once 'footer.php';
?>