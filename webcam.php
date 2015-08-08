<style type="text/css">

.img
    { background:#ffffff;
    padding:12px;
    border:1px solid #999999; }
.cam{
 -moz-user-select: none;
    background: #2A49A5;
    border: 1px solid #082783;
    box-shadow: 0 1px #4C6BC7 inset;
    color: white;
    padding: 3px 5px;
    text-decoration: none;
    text-shadow: 0 -1px 0 #082783;
    font: 12px Verdana, sans-serif;}
</style>
<link rel='stylesheet prefetch' href='down/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">

<html>
<body >
    <?php
    require_once 'header.php';
    ?>

<div id="main" style="height:800px; width:100%">
<div id="content" style="float:left; width:500px; margin-left:350px; margin-top:20px; " align="center">
<script type="text/javascript" src="webcam.js"></script>
<script language="JavaScript">
		document.write( webcam.get_html(640, 440) );
</script>
<form>
<br />

		<input type=button value="Configure settings" onClick="webcam.configure()" class="cam">
		&nbsp;&nbsp;
		<input type=button value="snap" onClick="take_snapshot()" class="cam">
	</form>


</div>

<script  type="text/javascript">
    webcam.set_api_url( 'handleimage.php' );
		webcam.set_quality( 90 ); // JPEG quality (1 - 100)
		webcam.set_shutter_sound( true ); // play shutter click sound
		webcam.set_hook( 'onComplete', 'my_completion_handler' );

		function take_snapshot(){
			// take snapshot and upload to server
			document.getElementById('img').innerHTML = '<h1>Uploaded to Galary</h1>';
			
			webcam.snap();
		}

		
	</script>
  
<div id="img" style=" height:800px; width:500px; float:left; margin-left:40px; margin-top:20px;">
</div>
</div>
</body>
<?php
require_once 'footer.php';
?>
</html>