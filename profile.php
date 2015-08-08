
<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>
        <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
    require_once 'header.php';
    ?>

        <?php
       
require_once 'include/essential.php';
?>
     
     
        <?php
        require_once 'include/db_connect.php';
        require_once 'functions.php';
       
if(isset($_GET['user']) && ! empty($_GET['user']))
{
    $lid=$_GET['user'];
 
    
    
    
}
else
{
    
    $lid=$pid1;
     
 
    
    
}

$my_id=$pid1;
$luser=  getuser($lid, 'user_name');


 
 echo '<h2>'.$luser.'</h2>';

        ?>
        <?php
        
        if($lid!= $my_id)
        {
            $checkfriends=  mysql_query("select id from frnd where(user_one='$my_id' and user_two='$lid') or (user_one='$lid' and user_two='$my_id')");
       if(mysql_num_rows($checkfriends)== 1)
       {
           echo "<a href='#'class='btn btn-primary btn-lg'style=margin:5px;>already friends</a>&nbsp&nbsp&nbsp"."<a href='action.php?action=unfriend&user=$lid'class='btn btn-primary btn-lg'style=margin:5px;>unfriend</a>";
       }
       else
       {
        
        $from=  mysql_query("select id from  frnd_req where from1='$lid' and to1='$my_id'");
        $to=  mysql_query("select id from frnd_req where from1='$my_id' and to1='$lid'");
        if (mysql_num_rows($from) == 1)
         { 
            echo "<a href='action.php?action=accept&user=$lid'class='btn btn-primary btn-lg'style=margin:5px;>accept</a>&nbsp&nbsp&nbsp<a href='action.php?action=reject&user=$lid'class='btn btn-primary btn-lg'style=margin:5px;>decline</a>";
            
        }   
             elseif (mysql_num_rows($to) == 1)
             {
            
                 echo "<a href='action.php?action=cancel&user=$lid'class='btn btn-primary btn-lg'style=margin:5px;>cancel request</a>";
             }
 else {
     echo "<a href='action.php?action=send&user=$lid'class='btn btn-primary btn-lg'style=margin:5px;>send request</a>";
 }
        
         
       
       
    }
       }
       
            
      
        ?>
         <?php
require_once 'footer.php';
?>
    </body>
</html>
