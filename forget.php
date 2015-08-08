
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forget Password</title>
         <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <?php
    require_once 'header.php';
    ?>

        
       
        <div class="wrapper">
            <form class="form-signin" action="forget.php"  method="post">  
    Enter username:       <input type="text" class="form-control" name="uname" placeholder="User Name" required="" autofocus=""  />
            
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button> 
             </form>
  <?php
  require_once 'include/db_connect.php';
  if(isset($_POST['submit']))
  {
      $un=$_POST['uname'];
      $se=  mysql_query("select * from user where user_name='$un'");
      while ($se1 = mysql_fetch_array($se)) {
          $qu=$se1['question'];
         # echo $qu;
          
      }
  }
  
  ?>
        </div>
       <div class="wrapper"> 
           <form class="form-signin" action="answer.php"  method="post">  
               <input type="hidden" value="<?php echo $un;?>" name="una">
               <p class="form-control-static"><?php echo $qu;?></p>
        <textarea class="form-control" rows="5" id="answer" name="answer" placeholder="Enter Answer"></textarea><br>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button> 
       </form>
        </div>
        </body>
        <?php
require_once 'footer.php';
?>
</html>
