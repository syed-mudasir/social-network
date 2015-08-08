
<html>
    <head>
        <meta charset="UTF-8">
        <title>New Password</title>
         <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
    require_once 'header.php';
    ?>

        
        
       
        <div class="wrapper">
        <form class="form-signin" action="change.php"  method="post">  
            <?php
        require_once 'include/db_Connect.php';
        require_once 'functions.php';
        require_once 'include/essential.php';
       $id=$_GET['id'];
      
       
       ?><input type="hidden" class="form-control" name="id" placeholder="Password" required="" autofocus="" value="<?php echo $id ?>" /><br>
        <input type="text" class="form-control" name="new" placeholder="Old Password" required="" autofocus=""  /><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button> 
             </form>
  </div>
    </body>
    <?php
require_once 'footer.php';
?>
</html>
