<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
<?php include('variables/mainvars.php'); ?>
<?php include('variables/contactvars.php'); ?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="How to get in touch with us" />
<meta name="author" content="content author name" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<title>Contact</title>
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
<div id="main">
	<div id="sidebar">
	<div id="sidebarimage"><div id="slideshow" class="pics">
	<?php echo $sidebarimagestesselated ?></div>
	</div><!--end #sidebarimage-->
		</div><!--end #sidebar-->
	<div id="contents">
	<h1><?php echo $contacttitle ?></h1>
	<p><?php echo $contacttext ?></p>
	<!--contact form, this could use some updating, ill probably do that soon--><div id="contactformsignup">
	<form name="contactform" method="post" action="send_form_email.php">
	<table width="450px">
	<tr class="contactsignuprow" >
	 <td valign="top">
	  <label for="first_name">First Name *</label>
	 </td>
	 <td valign="top">
	  <input  type="text" name="first_name" maxlength="50" size="30">
	 </td>
	</tr>
	<tr class="contactsignuprow" >
	 <td valign="top"">
	  <label for="last_name">Last Name *</label>
	 </td>
	 <td valign="top">
	  <input  type="text" name="last_name" maxlength="50" size="30">
	 </td>
	</tr>
	<tr class="contactsignuprow" >
	 <td valign="top">
	  <label for="email">Email Address *</label>
	 </td>
	 <td valign="top">
	  <input  type="text" name="email" maxlength="80" size="30">
	 </td>
	</tr>
	<tr class="contactsignuprow" >
	 <td valign="top">
	  <label for="telephone">Telephone Number</label>
	 </td>
	 <td valign="top">
	  <input  type="text" name="telephone" maxlength="30" size="30">
	 </td>
	</tr>
	<tr class="contactsignuprow" >
	 <td valign="top">
	  <label for="comments">Comments *</label>
	 </td>
	 <td valign="top">
	  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
	 </td>
	</tr>
	<tr>
	 <td colspan="2">
	  <input type="submit" class="button" value="Submit">
	 </td>
	</tr>
	</table>
	</form></div>
	<!--end contact form-->
	</div><!--end #contents-->
	</div><!--end #main-->
	</div><!--end #wrapper-->
</body>