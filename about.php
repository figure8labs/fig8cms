<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><!--I installed a specific font but you can take this out -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
<?php include('variables/mainvars.php'); ?>
<?php include('variables/aboutvars.php'); ?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="About" />
<meta name="author" content="content name" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<title>About</title>
</head>
<body>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.cycle.all.js"></script><!-- this slideshow is for the sidebar, you can change the speed that it fades in and out -->
	<script>
	$(function() {
		$('#slideshow img:first').fadeIn(1000, function() {
	        $('#slideshow').cycle();
	    });
	});
	</script>
<div id="wrapper">
<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<div id="main">
	<div id="sidebar">
	<div id="sidebarimage">
	<img src="images/sidebarimage02b.png">
	</div><!--end #sidebarimage-->
		</div><!--end #sidebar-->
	<div id="contents"><div id="about">
	<h1><?php echo $abouttitle ?></h1>
	<p><?php echo $abouttext ?></p></div>
</div><!--end #contents-->
	</div>
	<script>	
	jQuery(document).ready(function(){
	    jQuery('.trigger').click(function(){
	        jQuery(".openbio").hide();
	        jQuery("#"+$(this).data('target')).slideToggle("slow");
	    });
	});
	</script><!--end #main-->
	</div><!--end #wrapper-->
</body>
