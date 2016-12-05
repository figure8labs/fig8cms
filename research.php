<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
<?php include('variables/variables.php'); ?>
<?php include('variables/researchvars.php'); ?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="author" content="figure8labs" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<title>Research - Circus Automatic</title>
</head>
<body> 
<script src="js/jquery.js"></script>
<script src="js/jquery.cycle.all.js"></script>
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
<div id="main"><div id="sidebar">
<div id="sidebarimage"><div id="slideshow" class="pics">
<?php echo $sidebarimagestesselated ?></div>
</div><!--end #sidebarimage-->
	</div><!--end #sidebar--><div id="contents">
	<h1>RESEARCH</h1>
	<?php echo $researchtext ?></div><!--end #contents-->
	</div><!--end #main-->
	</div><!--end #wrapper-->
</body>