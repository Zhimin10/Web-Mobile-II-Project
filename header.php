<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset=utf-8 />
		<title>Project 1</Title>
		<script type="text/javascript" src="assets/JS_project1.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/CSS_project1.css">
		<link rel="shortcut icon" type="image/x-icon" href="assets/image/icon.png">
	</head> 
	
	<body>
		
		
		
		<!-- Navigation Bar-->
		
		<ul id = "window_nav">
		  <!-- <li><a   href="index.php">Home</a></li>-->
		  
		  <li><a <?php echo (isset($page) && $page=='index') ? ' class="active" ' : '' ?>  href="<?php echo $path; ?>index.php">Home</a></li>
		  
		  <li><a <?php echo (isset($page) && $page=='college') ? ' class="active" ' : '' ?>  href="<?php echo $path; ?>college.php">College</a></li>
		  
		  <li><a <?php echo (isset($page) && $page=='american') ? ' class="active" ' : '' ?>   href="<?php echo $path; ?>american_food.php">American Food</a></li>
		  
		  <li><a <?php echo (isset($page) && $page=='chinese') ? ' class="active" ' : '' ?>   href="<?php echo $path; ?>chinese_food.php">Chinese Food</a></li>
		  
		  <li><a <?php echo (isset($page) && $page=='beverage') ? ' class="active" ' : '' ?>   href="<?php echo $path; ?>beverage.php">Beverage</a></li>
		  
		  <li><a <?php echo (isset($page) && $page=='attractions') ? ' class="active" ' : '' ?>   href="<?php echo $path; ?>attractions.php">Attractions</a></li>
		  
		  <li><a <?php echo (isset($page) && $page=='entertainment') ? ' class="active" ' : '' ?>   href="<?php echo $path; ?>entertainment.php">Entertainment</a></li>
		  
		  <li><a <?php echo (isset($page) && $page=='shopping') ? ' class="active" ' : '' ?>   href="<?php echo $path; ?>shopping.php">Shopping</a></li>
		  
		  <li><a <?php echo (isset($page) && $page=='hotel') ? ' class="active" ' : '' ?>   href="<?php echo $path; ?>hotel.php">Hotel</a></li>
		  
		  <li><a <?php echo (isset($page) && $page=='traffic') ? ' class="active" ' : '' ?>   href="<?php echo $path; ?>traffic.php">Traffic</a></li>
		  
		  <li><a <?php echo (isset($page) && $page=='reference') ? ' class="active" ' : '' ?>   href="<?php echo $path; ?>reference.php">Reference</a></li>
		  
		  <li><a <?php echo (isset($page) && $page=='grading') ? ' class="active" ' : '' ?>   href="<?php echo $path; ?>grading.php">Grading</a></li> 
		  
		</ul>
		
		
		
		
		
		
		
		
		
		
		
		<a id="top"></a>