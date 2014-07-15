<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to SteamShots! (Alpha v1) - <?php echo $pagetitle ?></title>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
</head>

<body>
<?php require ('steamauth.php'); ?>
<div class="container">
	<div style="text-align:center;"><a href="index.php"><img src="images/logo.png" title="Welcome to SteamShots" /></a></div>
<div class="menu">
	<a href="index.php">Home</a> <strong>|</strong> <a href="upload.php">Upload</a> <strong>|</strong> <a href="screenshots.php">Screen Shots</a> <strong>|</strong> <a href="profile.php">Profile</a> 
</div>	
<div class="login"><?php require ('welcome.php'); ?></div>