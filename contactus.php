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
	<title> أيكوبيشن >  إتصل بنا </title>
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
	/ <a href="#"><b>   <?php echo _CONTACT; ?>  </b></a>
	
</section>


<section id="contact">
	
<br/>
	<h4>  <?php echo _CONTACT; ?>  </h4>
	<h2> <?php echo _our_travel_part2; ?>  </h2>
<br/>

<div class="row">
	
	<div class="col-lg-6">
		<div class="div" style="background-color: #fff;">
			<br/>
			<h3>  <?php echo _Connect_us_part1; ?>  </h3>
			<p>  <?php echo _Connect_us_part2; ?> <br/>
			 </p>
			<form action="success.php" method="post">

			 	<div class="form-group">
			 		<label>  <?php echo _Connect_us_part3; ?>  <b>*</b> </label>
			 		<input type="text" class="form-control" name="" placeholder="">
			 	</div>

			 
			 	<label style="padding-right: 13px;">   <?php echo _Connect_us_part4; ?>  <b>*</b> </label>
			 	<div class="input-group" style="margin: 0px;">
			 		<input style="text-align: left;" type="number" class="form-control" name="" placeholder="000 000 000">
			 		<img src="images/contact/flag.png" width="50">
			 	</div>
			 	

			 	<div class="form-group">
			 		<label>  <?php echo _Connect_us_part5; ?>  <b>*</b> </label>
			 		<input type="text" class="form-control" name="" placeholder="">
			 	</div>

			 	<div class="form-group">
			 		<label> <?php echo _Connect_us_part6; ?>  <b>*</b> </label>
			 		<input type="text" class="form-control" name="" placeholder="">
			 	</div>

			 	<div class="form-group">
			 		<label> <?php echo _Connect_us_part7; ?>  <b>*</b> </label>
			 		<textarea class="form-control" name="">  </textarea>
			 	</div>

			 	<div class="form-group" style="text-align: left;">
			 		<button style="width: 200px;padding: 13px;" class="btn-main"> <?php echo _Connect_us_part18; ?> <i class="icon-arrow-left"></i>  </button>
			 	</div>

			 	
			 </form>
		</div>
	</div>

	<div class="col-lg-6">
		<div class="div">
			<h3> <?php echo _Connect_us_part8; ?> </h3>
			<p> <?php echo _Connect_us_part9; ?> 	 </p>
			 <div class="card">
			 <h5><?php echo _Connect_us_part10; ?>  : 
			  <a href="#"><img src="images/social/Twitter.png"/></a>
          <a href="#"><img src="images/social/Fb.png"/></a>
          <a href="#"><img src="images/social/Messages.png"/></a>
          <a href="#"><img src="images/social/Whatsapp.png"/></a>
          <a href="#"><img src="images/social/Insta.png"/></a> </h5>
			 </div>

			 <h3>  <?php echo _Connect_us_part11; ?>  </h3>

			  <div class="card">
			 	<h5> <img style="width: 45px;" src="images/contact/loc.png"> <?php echo _Connect_us_part12; ?>  </h5>
			 </div>

			  <div class="card">
			 	<h5> <img style="width: 45px;" src="images/contact/call.png"> +97450095633 </h5>
			 </div>

			 <h3>  <?php echo _Connect_us_part16; ?> </h3>

			 <div class="card">
			 	<h5> <img style="width: 45px;" src="images/contact/loc.png"> <?php echo _Connect_us_part17; ?></h5>
			 </div>

			  <div class="card">
			 	<h5> <img style="width: 45px;" src="images/contact/call.png"> <?php echo _Connect_us_part13; ?> : 249912322447+ <br/>
			 	<img style="width: 45px;" src="images/contact/call.png"> <?php echo _Connect_us_part14; ?>  : 249123214737+ <br/>
			 	<img style="width: 45px;" src="images/contact/call.png"><?php echo _Connect_us_part15; ?> : 249912322596+ </h5>
			 </div>

			 <div class="card">
			 	<h5> <img style="width: 45px;" src="images/contact/message.png"> info@equpation.sd </h5>
			 </div>

		</div>
	</div>

</div>

</section>


<img src="images/divider2.png" style="width: 100%;border:none;">
<?php include 'footer.php'; ?>
</body>
</html>