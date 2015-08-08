       <?php
 require_once 'include/db_connect.php';
 require_once 'include/essential.php';
 
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Video Galary</title>
           <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
 
    </head>
    <body>
        <?php
    require_once 'header.php';
    ?>
        
        <div class="wrapper">
             <form action="vinsert.php" method="post" enctype="multipart/form-data"  class="form-signin">
            <h2>Select A  Video
            </h2>
 Select Image: <br />
 <input type="file" name="image"  class="file"><br />
 
 <input type="hidden" name="id" value="<?php echo $pid1; ?>">
 <input type="submit" name="Submit" value="Upload" id="button1"  class="btn btn-lg btn-primary btn-block"/>
 </form>
            </div>
        
        
        
        
        <?php
         require_once 'include/db_connect.php';
         $vid=  mysql_query("select video from galery where user_id='$pid1'");
         while ($row = mysql_fetch_array($vid)) {
             $ur=$row['video'];
             if(empty($ur))
             {
                 
             }
 else {
            echo "&nbsp;&nbsp;<video width='400' height='300'  controls>
  <source src='$ur' type='video/mp4'>


</video>&nbsp;";
         }
         }
        ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
       
        
        
        
        
        
        <br>
        <br>
         <br> <br>
          <br>
           <br>
            <br>
           
          
         
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
     <?php
require_once 'footer.php';
?>
    </body>
</html>
