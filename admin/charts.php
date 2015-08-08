<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>Charts</title>
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
</head>
<body>
    
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.dataviz.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {		
		$('form').submit(function(e){
			e.preventDefault();
			var values = [];
			$(this).find('input[type=text]').each(function(index){
				val = ($(this).val()> 0) ? $(this).val() : 0;
				values.push(parseFloat(val));	
			});
			$('#pie_graph_wrapper').DataViz({'values': values }).data('DataViz').draw_pie();
			$('#bar_graph_wrapper').DataViz({'values': values }).data('DataViz').draw_bar();
		});
	});
</script>

<div id="wrapper" style="margin-top:150px;">
	<header>Friends Portal Table Digital Charts</header>
	<section>
		<div id="bar_graph_wrapper"></div>
		<div id="pie_graph_wrapper"></div>
		<div id="fields">
                    <?php
                    require_once '../include/db_connect.php';
                    $users=  mysql_query("select * from user ");
                    $users1=  mysql_num_rows($users);
                    $groups=  mysql_query("select * from groups ");
                    $groups1=  mysql_num_rows($groups);
                    $gpost=  mysql_query("select * from gpost ");
                    $gpost1=  mysql_num_rows($gpost);
                    $post=  mysql_query("select * from post "); 
$post1=  mysql_num_rows($post);
                    ?>
			<form action="" method="post">
				Number of users :<input type="text" pattern="[0-9]*" name="val1" value="<?php echo $users1 ?>" placeholder="Érték1"><br>
				Number of Clustered groups :<input type="text" pattern="[0-9]*" name="val2" value="<?php echo $groups1 ?>" placeholder="Érték2"><br>
				Number of group post :<input type="text" pattern="[0-9]*" name="val3" value="<?php echo $gpost1 ?>" placeholder="Érték3"><br>
				Number of users post :<input type="text" pattern="[0-9]*" name="val4" value="<?php echo $post1 ?>" placeholder="Érték4"><br>
				<input type="submit" name="submit" value="View Chart">
			</form>
		</div>
	</section>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>