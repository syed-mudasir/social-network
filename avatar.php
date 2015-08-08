
<html>
    <head>
        <title>Profile Pic</title>
     <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
        
    </head>

    <body>
        <?php
    require_once 'header.php';
    ?>
        <div class="wrapper">
        <form action="sam.php" method="post" enctype="multipart/form-data"  class="form-signin">
            <h2>Select A Profile Pic
            </h2>
 Select Image: <br />
 <input type="file" name="image"  class="file"><br />
 <?php
 $ppi=$_GET['id'];
 ?>
 <input type="hidden" name="id" value="<?php echo $ppi; ?>">
 <input type="submit" name="Submit" value="Upload" id="button1"  class="btn btn-lg btn-primary btn-block"/>
 </form>
            </div>




    </body>
    
<?php
require_once 'footer.php';
?>
</html>
