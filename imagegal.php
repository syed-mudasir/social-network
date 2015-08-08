        <?php
 require_once 'include/db_connect.php';
 require_once 'include/essential.php';
 
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Image Gallery</title>
          <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">
    </head>
    
    <body>
     <?php 
      require_once 'header.php';
     ?>

    
        
         <div class="wrapper">
             <form action="galinsert.php" method="post" enctype="multipart/form-data"  class="form-signin">
            <h2>Select A  Image
            </h2>
 Select Image: <br />
 <input type="file" name="image"  class="file"><br />
 
 <input type="hidden" name="id" value="<?php echo $pid1; ?>">
 <input type="submit" name="Submit" value="Upload" id="button1"  class="btn btn-lg btn-primary btn-block"/><h3>OR</h3>
 <a href="webcam.php" class="btn btn-lg btn-primary btn-block">Take A Snap From Webcam</a>
 </form>
            </div>
        
        
        
        
        
        
        
        
        
        
        <?php
 require_once 'include/db_connect.php';
        $imag=  mysql_query("select * from galery where user_id='$pid1'");
        while ($imag1 = mysql_fetch_array($imag)) {
            $pic=$imag1['pic'];
           
           if(empty($pic))
             {
                 
             }
            
           else{
               
            echo "<a class='example-image-link' href='$pic' data-lightbox='example-set' ><img src='$pic ' height='200' width='300' class='example-image' /></a>";            
        }
        }  
        ?>
        
        
        <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.js"></script>

	<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
        
        <br>
        <br>
        <br>
        <br>
        
        
        
        
        
        
        
        
        
    
    </body>
  <?php
  require_once 'footer.php';
  ?>
</html>
