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
	<title> أيكوبيشن >  مجالات العمل </title>
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


<?php include 'header.php'; ?>
<section id="pointer">
<?php if($_SESSION['lang'] == "ar"){ ?>
	<img src="images/pointer/divider.png"/>
	<?php }else{ ?>
	<img src="images/pointer/divideren.png"/>
	<?php } ?>
	<a href="index.php"><img style="height: 30px;" src="images/pointer/home.png"></a>
	/ <a href="#"><b> <?php echo _work_fildes; ?>  </b></a>
</section>

<section id="fildes">
	<br/>
	<h4>  <?php echo _work_fildes; ?>  </h4>
	<h2><?php echo _our_travel_part2; ?>    </h2>
	
	<div class="row"> 
		<div class="col-lg-3">
			<img src="images/fileds/1.png">
		</div>

		<div class="col-lg-4">
			<h5> <b> 01 </b> <?php echo _workfields_part2; ?>  </h5>
			<p> <?php echo _workfields_part3; ?> </p>
		</div>

		<div class="col-lg-5">
			<ul>
			<li> <img src="images/our-message/check.png"> <?php echo _workfields_part4; ?> </li>
			<li> <img src="images/our-message/check.png"> <?php echo _workfields_part5; ?> </li>
			<li> <img src="images/our-message/check.png"> <?php echo _workfields_part6; ?> </li>
			<li> <img src="images/our-message/check.png"> <?php echo _workfields_part7; ?> </li>
			<li> <img src="images/our-message/check.png"> <?php echo _workfields_part8; ?> </li>
			<li> <img src="images/our-message/check.png"> <?php echo _workfields_part9; ?> </li>
			</ul>
		</div>
	</div>

	<div class="row"> 
		<div class="col-lg-4">
			<h5> <b> 02 </b> <?php echo _workfields_part10; ?> </h5>
			<p> <?php echo _workfields_part11; ?> </p>
		</div>
		<div class="col-lg-5">
			<img src="images/our-message/check.png"> <b>  <?php echo _workfields_part111; ?> </b> :<br/>
			<?php echo _workfields_part12; ?> <br/>
			<img src="images/our-message/check.png"> <b> <?php echo _workfields_part222; ?> </b>
			<?php echo _workfields_part13; ?> 		</div>

		<div class="col-lg-3">
			<img src="images/fileds/2.png">
		</div>
	</div>

	<div class="row"> 
		<div class="col-lg-3">
			<img src="images/fileds/3.png">
		</div>

		<div class="col-lg-5">
			<br/>
			<h5> <b> 03 </b> 	<?php echo _workfields_part14; ?> </h5>
			<p>   	<?php echo _workfields_part15; ?>  </p>
		</div>

		<div class="col-lg-4">
			<br/>
			<ul>
			<li> <img src="images/our-message/check.png">	<?php echo _workfields_part16; ?>   </li>
			<li> <img src="images/our-message/check.png"> 	<?php echo _workfields_part17; ?> </li>
			<li> <img src="images/our-message/check.png"> 	<?php echo _workfields_part18; ?> </li>
			<li> <img src="images/our-message/check.png">	<?php echo _workfields_part19; ?>  </li>
			<li> <img src="images/our-message/check.png"> 	<?php echo _workfields_part20; ?> </li>
			
			</ul>
		</div>
	</div>

	<div class="row"> 
		<div class="col-lg-4">
			<h5> <b> 04 </b> 	<?php echo _workfields_part21; ?> </h5>
			<p> 	 </p>
		</div>
		<div class="col-lg-5">
		<img src="images/our-message/check.png"> 	<?php echo _workfields_part22; ?> 	<br/>		<img src="images/our-message/check.png"> 
			<?php echo _workfields_part23; ?> 		</div>

		<div class="col-lg-3">
			<img src="images/fileds/4.png">
		</div>
	</div>

		<div class="row"> 
		<div class="col-lg-3">
			<img src="images/fileds/5.png">
		</div>

		<div class="col-lg-5">
			<br/>
			<h5> <b> 05 </b> <?php echo _workfields_part24; ?> </h5>
			<p>  <?php echo _workfields_part25; ?>  </p>
		</div>

		<div class="col-lg-4">
			<br/>
			<ul>
			<li> <img src="images/our-message/check.png"><?php echo _workfields_part26; ?>  </li>
			<li> <img src="images/our-message/check.png"> <?php echo _workfields_part27; ?> </li>
			<li> <img src="images/our-message/check.png"> <?php echo _workfields_part28; ?> </li>
			<li> <img src="images/our-message/check.png"><?php echo _workfields_part29; ?>  </li>
			
			</ul>
		</div>
	</div>


	<div class="row"> 
		<div class="col-lg-4">
			<h5> <b> 06 </b> <?php echo _workfields_part30; ?> </h5>
			<p> <?php echo _workfields_part31; ?>  </p>
		</div>
		<div class="col-lg-5">
			
			<ul>
			<li> <img src="images/our-message/check.png"><?php echo _workfields_part32; ?>  </li>
			<li> <img src="images/our-message/check.png"> <?php echo _workfields_part33; ?> </li>
			<li> <img src="images/our-message/check.png"> <?php echo _workfields_part34; ?> </li>
			
			</ul>

		</div>

		<div class="col-lg-3">
			<img src="images/fileds/6.png">
		</div>
	</div>
</section>

<img src="images/divider2.png" style="width: 100%;border:none;">

<?php include 'footer.php'; ?>
</body>
</html>