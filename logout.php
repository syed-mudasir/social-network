                              
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log Out</title>
</head>
<?php
session_start();
$_SESSION=array();
setcookie(session_name(),"",time()-3600);
session_destroy();
header("Location: index.php?id=You are successfully logged out");
?>
<body>
    
</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                              