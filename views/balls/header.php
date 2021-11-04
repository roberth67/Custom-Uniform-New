<?php include 'views/data-forms/ball-formproc.php';
include_once 'views/data-forms/patterns-balls.php';
?> <!--  block Contact Form from HTML Form Guide -->
<?php include 'views/data-forms/ball-js.php'; ?> <!--  block javascript -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SCORE Custom Ball <?php echo $design ?></title>
    <link rel='stylesheet' href='css/linearicons.css'>
	<link rel='stylesheet' href='css/font-awesome.min.css'>
	<link rel='stylesheet' href='css/bootstrap.css'>
	<link rel='stylesheet' href='css/magnific-popup.css'>
	<link rel='stylesheet' href='css/nice-select.css'>
	<link rel='stylesheet' href='css/hexagons.min.css'>
	<link rel='stylesheet' href='css/owl.carousel.css'>
	<link rel='stylesheet' href='css/main.css'>
	<link rel='stylesheet' href='flipster.min.css'>
	<link rel='stylesheet' href='css/color-swatches.css'>
	<link rel='stylesheet' href='css/custom2.css'>
	<link rel='shortcut icon' href='assets/logoW.ico'>
	<link rel='icon' href='assets/logoW.ico'>
    <!--<script type='text/javascript' src='js/balls.js'></script>-->
    <meta name="apple-mobile-web-app-capable" content="yes" />
  </head>
  <body>
<script> /* set lem and tur as default color */
      $( document ).ready(function() {
        MM_showHideLayers('lemballimg1','','show','turballimg2','','show');
        document.getElementById('ballcolor1').value = 'LEM'; document.getElementById('ballcolor2').value = 'TUR';
      });
    </script>
    <?php 
    include 'views/balls/sections/ball-navbar.php'; 
    include_once 'views/balls/sections/banner.php';
    include_once 'views/balls/sections/swatches.php';
    ?> 