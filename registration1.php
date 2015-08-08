
<html>
    <head>
        <meta charset="UTF-8">
        <title>registration</title>
        <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
    require_once 'header.php';
    ?>
      
        
       <div class="wrapper">
           <form class="form-additional" action="reverification1.php" method="post">       
      <h2 class="form-additional-heading">Enter Some Additional Details</h2>
     
      <p class="f">User Name</p> <input type="text" class="form-control" name="uname" required="" value="<?php $u=$_GET['user']; echo $u;?>" autofocus="" readonly/><br>
      <p class="f">Schooling From or Pursuing</p> <input type="text" class="form-control" name="sname" required="" autofocus="" /><br>

      <p class="f">High-Schooling From or Pursuing</p> <input type="text" class="form-control" name="hsname" required="" autofocus="" /><br>

      <p class="f">Graduation From or Pursuing</p> <input type="text" class="form-control" name="gname" required="" autofocus="" /><br>
   <p class="f">Post-Graduation From or Pursuing</p> <input type="text" class="form-control" name="pgname" required="" autofocus="" /><br>
    <p class="f">Interest 1</p> <input type="text" class="form-control" name="i1" required="" autofocus="" />  
            <p class="f">Interest 2</p> <input type="text" class="form-control" name="i2" required="" autofocus="" />  
            <p class="f">Enter A Security Question</p> <input type="text" class="form-control" name="s1" required="" autofocus="" /><br>
            <p class="f">Enter Answer For Question</p> <input type="text" class="form-control" name="s2" required="" autofocus="" /><br>
            <p class="f">Gender <input type="radio" value="male" name="sex">Male &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="female" name="sex">Female</p><br>
            
            <p class="f">About You</p> <input type="text" class="form-control" name="you" required="" autofocus="" placeholder="Few Words Aout You"/>  <br>
             <input type="submit" class="btn btn-lg btn-primary btn-block" value="Finish">
            </form>
  </div>
        
 
    </body>
    
<?php
require_once 'footer.php';
?>
</html>
