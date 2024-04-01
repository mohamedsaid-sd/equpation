<?php 
session_start();
// set session
if(!isset($_SESSION['lang'])){
  // set english as default
  $_SESSION['lang'] = 'en';
}
if(isset($_GET['lang'])){

  if($_GET['lang'] == "ar")
  $_SESSION['lang'] = 'ar';
  else
  $_SESSION['lang'] = 'en';
}
?>
<!DOCTYPE html>
<html dir="rtl">
<head>
	<title> أيكوبيشن > الخدمات </title>
			<meta charset="utf-8">
<meta content="width=device-width, initial-scale=0.7" name="viewport">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<?php
if($_SESSION['lang'] == "ar"){ ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php }elseif ($_SESSION['lang'] == "en") {?>
<link rel="stylesheet" type="text/css" href="css/style-eng.css">
 <?php } ?>
<link href="vendor/css/style.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>

<?php 
$id = $_GET['id'];
include 'header.php'; ?>
<section id="pointer">
	<?php if($_SESSION['lang'] == "ar"){ ?>
	<img src="images/pointer/divider.png"/>
	<?php }else{ ?>
	<img src="images/pointer/divideren.png"/>
	<?php } ?>
	<a href="index.php"><img style="height: 30px;" src="images/pointer/home.png"></a>
	/ 

	<?php if($id == "contract"){ ?>
	<a href="#"><b> <?php echo _services_list_part88; ?> </b></a>
	<?php } elseif ($id == "rental") { ?>
	<a href="#"><b> <?php echo _services_list_part77; ?> </b></a>
	<?php } elseif ($id == "opration") { ?>
	<a href="#"><b> <?php echo _services_list_part66; ?> </b></a>
	<?php } elseif ($id == "employement") { ?>
	<a href="#"><b> <?php echo _services_list_part55; ?> </b></a>
	<?php } elseif ($id == "maintenance") { ?>
	<a href="#"><b> <?php echo _services_list_part44; ?> </b></a>
	<?php } elseif ($id == "transport") { ?>
	<a href="#"><b> <?php echo _services_list_part33; ?> </b></a>
	<?php } elseif ($id == "tracking") { ?>
	<a href="#"><b> <?php echo _services_list_part2; ?> </b></a>
	<?php } elseif ($id == "construct") { ?>
	<a href="#"><b> <?php echo _services_list_part1; ?> </b></a>
	<?php } ?>
</section>

<section id="service-items">

	<?php 

	

	?>
	
		<?php if($id == "contract"){ ?>
		<div class="row">
			<div class="col-lg-12">
				<img src="images/fileds/2.png">
			</div>
			<div class="col-lg-8">
				<div>
				<h3> <?php echo _services_list_part88;
				// Contracting ?> </h3>
				<p> <?php echo _services_list_part888; ?> </p>
			</div>
			</div>

			<div class="col-lg-4">
			<div style="background-color: rgb(230,230,230);">
				<h3> مميزات الخدمة في نقاط </h3>
				<ul>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			</ul>
			<a href="contract.php"><button class="btn-main"> <?php echo _Apply2; ?></button></a>
			</div>
			</div>
		</div>

		<?php } elseif ($id == "rental") { ?>

		<div class="row">
			<div class="col-lg-12">
				<img src="images/fileds/1.png">
			</div>
			<div class="col-lg-8">
				<div>
				<h3> <?php echo _services_list_part66;
				// rental ?> </h3>
				<p> <?php echo _services_list_part666; ?> </p>
			</div>
			</div>

			<div class="col-lg-4">
			<div style="background-color: rgb(230,230,230);">
				<h3> مميزات الخدمة في نقاط </h3>
				<ul>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			</ul>
			<a href="rental.php"><button class="btn-main"> <?php echo _Apply2; ?></button></a>
			</div>
			</div>
		</div>
	
		<?php } elseif ($id == "opration") { ?>

		<div class="row">
			<div class="col-lg-12">
				<img src="images/fileds/2.png">
			</div>
			<div class="col-lg-8">
				<div>
				<h3> <?php echo _services_list_part77; 
				// oprationg?> </h3>
				<p>  <?php echo _services_list_part777;  ?> </p>
			</div>
			</div>

			<div class="col-lg-4">
			<div style="background-color: rgb(230,230,230);">
				<h3> مميزات الخدمة في نقاط </h3>
				<ul>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			</ul>
			<a href="opration.php"><button class="btn-main"> <?php echo _Apply2; ?></button></a>
			</div>
			</div>
		</div>

		<?php } elseif ($id == "employement") { ?>

		<div class="row">
			<div class="col-lg-12">
				<img src="images/fileds/3.png">
			</div>
			<div class="col-lg-8">
				<div>
				<h3><?php echo _services_list_part55; 
				// Employeement?>  </h3>
				<p> <?php echo _services_list_part555; ?></p>
			</div>
			</div>

			<div class="col-lg-4">
			<div style="background-color: rgb(230,230,230);">
				<h3> مميزات الخدمة في نقاط </h3>
				<ul>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			</ul>
			<a href="job.php"><button class="btn-main">   <?php echo _Apply2; ?></button></a>
			</div>
			</div>
		</div>

		<?php } elseif ($id == "maintenance") { ?>

		<div class="row">
			<div class="col-lg-12">
				<img src="images/fileds/5.png">
			</div>
			<div class="col-lg-8">
				<div>
				<h3> <?php echo _services_list_part44; 
				// Maintenance?> </h3>
				<p><?php echo _services_list_part444; ?> </p>
			</div>
			</div>

			<div class="col-lg-4">
			<div style="background-color: rgb(230,230,230);">
				<h3> مميزات الخدمة في نقاط </h3>
				<ul>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			</ul>
			<a href="maintenance.php"><button class="btn-main"> <?php echo _Apply2; ?></button></a>
			</div>
			</div>
		</div>

		<?php } elseif ($id == "transport") { ?>

		<div class="row">
			<div class="col-lg-12">
				<img src="images/fileds/1.png">
			</div>
			<div class="col-lg-8">
				<div>
				<h3> <?php echo _services_list_part33; 
				// Transportation?> </h3>
				<p> <?php echo _services_list_part333; ?> </p>
			</div>
			</div>

			<div class="col-lg-4">
			<div style="background-color: rgb(230,230,230);">
				<h3> مميزات الخدمة في نقاط </h3>
				<ul>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			</ul>
			<a href="deportation.php"><button class="btn-main"><?php echo _Apply2; ?></button></a>
			</div>
			</div>
		</div>

		<?php } elseif ($id == "tracking") { ?>

		<div class="row">
			<div class="col-lg-12">
				<img src="images/fileds/4.png">
			</div>
			<div class="col-lg-8">
				<div>
				<h3> <?php echo _services_list_part2; 
				// Tracking?> </h3>
				<p> <?php echo _services_list_part222; ?> </p>
			</div>
			</div>

			<div class="col-lg-4">
			<div style="background-color: rgb(230,230,230);">
				<h3> مميزات الخدمة في نقاط </h3>
				<ul>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			</ul>
			<!-- <button class="btn-main"> تقديم طلب الحدمة </button> -->
			</div>
			</div>
		</div>

		<?php } elseif ($id == "construct") { ?>

		<div class="row">
			<div class="col-lg-12">
				<img src="images/fileds/1.png">
			</div>
			<div class="col-lg-8">
				<div>
				<h3> <?php echo _services_list_part1; 
				// Establishing sites?> </h3>
				<p> <?php echo _services_list_part111; ?> </p>
			</div>
			</div>

			<div class="col-lg-4">
			<div style="background-color: rgb(230,230,230);">
				<h3> مميزات الخدمة في نقاط </h3>
				<ul>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق اعلي انتاجية ممكنة </li>
			<li> <img src="images/our-message/dark-check.png"> تحقيق استقرار وإستمرار العمل </li>
			</ul>
			<!-- <button class="btn-main"> تقديم طلب الحدمة </button> -->
			</div>
			</div>
		</div>

		<?php } ?>


	
</section>

<img src="images/divider2.png" style="width: 100%;border:none;">
<?php include 'footer.php'; ?>
</body>
</html>