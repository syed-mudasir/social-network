
<html>
    <head>
        <meta charset="UTF-8">
       <title>Chat Box</title>
        <link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
   
    </head>
    <body>
          <?php
    require_once 'header.php';
    ?>
        <?php
      #echo  $rand = md5(substr(md5(microtime()),rand(0,26),11));
      
        ?>
        <?php
    require_once 'include/db_connect.php';
    require_once 'include/essential.php';
    $user=$_GET['user'];
    $receiver=  getuser($user, 'fname');
    $sender=  getuser($pid1, 'fname');
    $rava=  getavatar($user, 'avatar');
    $senava=  getavatar($pid1, 'avatar');
     
   
    
        ?>
        
        
        <link rel="stylesheet" href="css/chat.css">
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading" id="accordion">
                    <span class="glyphicon glyphicon-comment"></span> Chat
                    <div class="btn-group pull-right">
                        <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion" 
href="#collapseOne">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </div>
            <div class="panel-collapse collapse" id="collapseOne">
                <div class="panel-body" >
                    <?php
                            require_once 'include/db_connect.php';
                             if(isset($_GET['user'])and isset($_GET['hash']))
    {
        $hash=$_GET['hash'];
        $user=$_GET['user'];
        $ext=  mysql_query("select * from conversation where chash='$hash' ");
        
        while ($row = mysql_fetch_array($ext)) {
            $cfrom=$row['cfrom'];
            $cfrom1=  getuser($cfrom, 'user_name');
            $msg=$row['msg'];
            echo "<ul class='chat'>
                        <li class='left clearfix'><span class='chat-img pull-left'>
                            <img src='img/user.png' height='50' width='50' alt='User Avatar' class='img-circle' />
                        </span>
                            <div class='chat-body clearfix'>
                                <div class='header'>
                                    <strong class='primary-font'>". $cfrom1."</strong> <small class='pull-right text-muted'>
                                        <span class='glyphicon glyphicon-time'></span></small>
                                </div>
                                <p>
                                   ". $msg."
                                </p>
                            </div>
                        </li>
                    </ul>";
            
        }
    }
                    ?>
                     
                </div>
                <form action="chatupdate.php" method="post">
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" name="message" placeholder="Type your message 
here..." />
                        <input type="hidden" name="user" value="<?php echo $user;?>">
                        <button onclick="myFunction()">Reload Messages</button>

<script>
function myFunction() {
    location.reload();
}
</script>
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                Send</button>
                        </span>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
   
        
        
        
        
        
        
        
        
        
    </body>
      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <?php
require_once 'footer.php';
?>
</html>
