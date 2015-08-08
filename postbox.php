<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel='stylesheet' href="css/style.css">
  <link rel="stylesheet" href="css/lightbox.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</head>
<body>
     <?php
  
  require_once 'include/essential.php';
  $postid=$pid1;
       $postname=  getuser($pid1, 'user_name');
       
        ?>
    <div class="post">

        <ul class="nav nav-tabs" >
        <li class="active"><a data-toggle="tab" href="#status" ><img src="img/file.png" width="20" height="20">Status</a></li>
        
        <li><a data-toggle="tab" href="#imagestatus"><img src="img/camera.jpg" width="20" height="20">Photos</a></li>
        <li><a data-toggle="tab" href="#video"><img src="img/video.png" width="20" height="20">Video</a></li>
        <li><a data-toggle="tab" href="#map"><img src="img/location.png" width="20" height="20">Place</a></li>
        <li><a data-toggle="tab" href="#audio"><img src="img/audio.png" width="20" height="20">Audio</a></li>
    </ul>
    <div class="tab-content">
        <div id="status" class="tab-pane fade in active">
            <h3>Status</h3>
             <form action="postinsert.php" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
  <div class="panel-heading">Update Status</div>
  <div class="panel-body">
      <textarea class="form-control" rows="3" placeholder="What's on your mind?" name="msg"></textarea>
      <input type="hidden" value="message" name="status">
      <input type="hidden" name="postid" value="<?php echo $pid1; ?>">
    
  </div>
  <div class="panel-footer clearfix">
        <div class="pull-right">
            <input type="submit" value="post" name="mpost" class="btn-primary">
            
        </div>
    </div>
</div>
    </form>
        </div>
        <div id="imagestatus" class="tab-pane fade">
            <h3>Image</h3>
            <form action="postimage.php" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
  <div class="panel-heading">Update Status</div>
  <div class="panel-body">
      <textarea class="form-control" rows="3" placeholder="What's on your mind?" name="msg"></textarea>
      <input type="file" name="imagepost"  >
       <input type="hidden" value="image" name="status">
       <input type="hidden" name="postid" value="<?php echo $pid1; ?>">
  </div>
  <div class="panel-footer clearfix">
        <div class="pull-right">
            <input type="submit" value="post" name="ipost" class="btn-primary">
            
        </div>
    </div>
</div>
    </form>
          
        </div>
          <div id="video" class="tab-pane fade">
            <h3>Video</h3>
            <form action="postinsert.php" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
  <div class="panel-heading">Update Status</div>
  <div class="panel-body">
      <textarea class="form-control" rows="3" placeholder="What's on your mind?" name="msg"></textarea>
      <textarea class="form-control" rows="1" placeholder="Video url" name="url"></textarea>
       <input type="hidden" value="video" name="status">
       <input type="hidden" name="postid" value="<?php echo $pid1; ?>">
  </div>
  <div class="panel-footer clearfix">
        <div class="pull-right">
            <input type="submit" value="post" name="vpost" class="btn-primary">
            
        </div>
    </div>
</div>
    </form>
           
        </div>
        
          <div id="map" class="tab-pane fade">
            <h3>Map</h3>
            <form action="postinsert.php" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
  <div class="panel-heading">Update Status</div>
  <div class="panel-body">
      <textarea class="form-control" rows="3" placeholder="What's on your mind?" name="msg"></textarea>
      <input id="geocomplete" class="form-control" type="text" name="place" placeholder="Enter a location">
                     
      <input type="hidden" name="status" value="location"/>
      <input type="hidden" name="postid" value="<?php echo $pid1; ?>">
                      
  </div>
  <div class="panel-footer clearfix">
        <div class="pull-right">
            <input type="submit" value="post" name="lpost" class="btn-primary">
            
        </div>
    </div>
</div>
    </form>
            
        </div>
        
        <div id="audio" class="tab-pane fade">
            <h3>Audio Post</h3>
          
            <form action="postaudio.php" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
  <div class="panel-heading">Update Status</div>
  <div class="panel-body">
      <a href="audio/audio.php">Record your voice</a>
      <textarea class="form-control" rows="3" placeholder="What's on your mind?" name="msg"></textarea>
      <input type="file" name="audiopost"  >
       <input type="hidden" value="audio" name="status">
       <input type="hidden" name="postid" value="<?php echo $pid1; ?>">
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
    </div>
     
  <?php
  require_once 'functions.php';
     require_once 'include/db_connect.php';
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
  
  
 
   
   
     $pg=  mysql_query("select * from post ORDER BY id desc");
     $storeArray = Array();
     while ($row = mysql_fetch_array($pg)) 
                {
        
         $type=$row['status'];
         if($type=='message')
         {
         $postn=  getuser($row['user_id'], 'fname');
         $ava1=  getavatar($row['user_id'], 'avatar');
         
         $ava="<img src='$ava1' height='30' width='30'>";
         $tim=$row['time'];
         $hash=$row['hash'];
         $li=  mysql_query("select * from post where hash='$hash'");
         while ($li1 = mysql_fetch_array($li)) {
             $li2=$li1['plike'];
             $un=$li1['punlike'];
         }
       $plike="<img src='img/like.jpg' height='30' width='30'><a href='like.php?hash=$hash&type=like'>Like <span class='badge'>".$li2."</span></a>&nbsp;&nbsp;&nbsp;&nbsp;";
            $punlike="<img src='img/unlike.png' height='25' width='25'><a href=unlike.php?hash=$hash&type=unlike>Un-Like<span class='badge'>".$un."</span></a>";
              $spa="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
         $comment="<form action='comment.php' method='post'><input type='text' class='form-control' name='comment' placeholder='Write A Comment'   /><input type='submit'><input type='hidden' value='$hash' name='hash'></form>";
         
         echo "<div class='post'><div class='panel panel-default'>
  <div class='panel-heading'>".$ava.$postn."</div>
  <div class='panel-body'>".$row['message']."
   
  </div><div class='panel-footer'>Posted at&nbsp;&nbsp".$tim.$spa.$plike.$punlike.$comment."</div>
</div>
         </div></div>";
         
         }
         
         
    if($type=='image')
     {
         $postn=  getuser($row['user_id'], 'fname');
         $ava1=  getavatar($row['user_id'], 'avatar');
         
         $ava="<img src='$ava1' height='30' width='30'>";
         $pim=$row['pimage'];
         $pim1="<img src='$pim' class='img-responsive center-block'>";
         $tim=$row['time'];
         $hash=$row['hash'];
         $li=  mysql_query("select * from post where hash='$hash'");
         while ($li1 = mysql_fetch_array($li)) {
             $li2=$li1['plike'];
             $un=$li1['punlike'];
         }
          $plike="<img src='img/like.jpg' height='30' width='30'><a href='like.php?hash=$hash&type=like'>Like <span class='badge'>".$li2."</span></a>&nbsp;&nbsp;&nbsp;&nbsp;";
            $punlike="<img src='img/unlike.png' height='25' width='25'><a href=unlike.php?hash=$hash&type=unlike>Un-Like<span class='badge'>".$un."</span></a>";
              $spa="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
         $comment="<form action='comment.php' method='post'><input type='text' class='form-control' name='comment' placeholder='Write A Comment'   /><input type='submit'><input type='hidden' value='$hash' name='hash'></form>";
         
        echo "<div class='post'><div class='panel panel-default'>
  <div class='panel-heading'>".$ava.$postn."</div>
  <div class='panel-body'>".$row['message'].$pim1."
   </div><div class='panel-footer'>Posted at&nbsp;&nbsp".$tim.$spa.$plike.$punlike.$comment."</div>
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
          $tim=$row['time'];
         $hash=$row['hash'];
         $li=  mysql_query("select * from post where hash='$hash'");
         while ($li1 = mysql_fetch_array($li)) {
             $li2=$li1['plike'];
             $un=$li1['punlike'];
         }
          $plike="<img src='img/like.jpg' height='30' width='30'><a href='like.php?hash=$hash&type=like'>Like <span class='badge'>".$li2."</span></a>&nbsp;&nbsp;&nbsp;&nbsp;";
            $punlike="<img src='img/unlike.png' height='25' width='25'><a href=unlike.php?hash=$hash&type=unlike>Un-Like<span class='badge'>".$un."</span></a>";
              $spa="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
         $comment="<form action='comment.php' method='post'><input type='text' class='form-control' name='comment' placeholder='Write A Comment'   /><input type='submit'><input type='hidden' value='$hash' name='hash'></form>";
         echo "<div class='post'><div class='panel panel-default'>
  <div class='panel-heading'>".$ava.$postn."</div>
  <div class='panel-body'>".$row['message'].$vi."
     </div><div class='panel-footer'>Posted at&nbsp;&nbsp".$tim.$spa.$plike.$punlike.$comment."</div>
  </div>
         </div></div>";
         
         }
         if($type=='location')
         {
              $postn=  getuser($row['user_id'], 'fname');
         $ava1=  getavatar($row['user_id'], 'avatar');
         
         $ava="<img src='$ava1' height='30' width='30'>";
         $pla=$row['place'];
         $tim=$row['time'];
         $hash=$row['hash'];
         $li=  mysql_query("select * from post where hash='$hash'");
         while ($li1 = mysql_fetch_array($li)) {
             $li2=$li1['plike'];
             $un=$li1['punlike'];
         }
          $plike="<img src='img/like.jpg' height='30' width='30'><a href='like.php?hash=$hash&type=like'>Like <span class='badge'>".$li2."</span></a>&nbsp;&nbsp;&nbsp;&nbsp;";
            $punlike="<img src='img/unlike.png' height='25' width='25'><a href=unlike.php?hash=$hash&type=unlike>Un-Like<span class='badge'>".$un."</span></a>";
              $spa="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
         $comment="<form action='comment.php' method='post'><input type='text' class='form-control' name='comment' placeholder='Write A Comment'   /><input type='submit'><input type='hidden' value='$hash' name='hash'></form>";
          echo "<div class='post'><div class='panel panel-default'>
  <div class='panel-heading'>".$ava.$postn."</div>
  <div class='panel-body'>".$row['message']."<br>".$pla."
   </div><div class='panel-footer'>Posted at&nbsp;&nbsp".$tim.$spa.$plike.$punlike.$comment."</div>
  </div>
         </div></div>";
         
         
         }
         
         
          if($type=='audio')
     {
         $postn=  getuser($row['user_id'], 'fname');
         $ava1=  getavatar($row['user_id'], 'avatar');
         
         $ava="<img src='$ava1' height='30' width='30'>";
         $pim=$row['audio'];
         $pim1="<audio controls>

  <source src='$pim' type='audio/mpeg'>
  
</audio>";
         $tim=$row['time'];
         $hash=$row['hash'];
         $br="<br>";
         $li=  mysql_query("select * from post where hash='$hash'");
         while ($li1 = mysql_fetch_array($li)) {
             $li2=$li1['plike'];
             $un=$li1['punlike'];
         }
          $plike="<img src='img/like.jpg' height='30' width='30'><a href='like.php?hash=$hash&type=like'>Like <span class='badge'>".$li2."</span></a>&nbsp;&nbsp;&nbsp;&nbsp;";
            $punlike="<img src='img/unlike.png' height='25' width='25'><a href=unlike.php?hash=$hash&type=unlike>Un-Like<span class='badge'>".$un."</span></a>";
              $spa="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
         $comment="<form action='comment.php' method='post'><input type='text' class='form-control' name='comment' placeholder='Write A Comment'   /><input type='submit'><input type='hidden' value='$hash' name='hash'></form>";
         
        echo "<div class='post'><div class='panel panel-default'>
  <div class='panel-heading'>".$ava.$postn."</div>
  <div class='panel-body'>".$row['message'].$br.$pim1."
   </div><div class='panel-footer'>Posted at&nbsp;&nbsp".$tim.$spa.$plike.$punlike.$comment."</div>
  </div>
         </div></div>";
     }
         
         
         
         
         
         
         
         
         
         
         
         
         }
  }
  else{
      echo "<h2>There are no members in your group</h2>";
  }

            ?>
</body>
</html>                                		