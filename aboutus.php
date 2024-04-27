<?php 
session_start();
// set session
if(!isset($_SESSION['lang'])){
  // set english as default

  // using session to set language for web site 
  // en = english language 
  // ar = arabic language 

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
	<title> إكوبيشن >  من نحن </title>
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
<style type="text/css">
	#more , #more2{display: none;}
</style>
<body>

<!-- Call the header of the web site  -->
<?php include 'header.php'; ?>

<section id="pointer">
	<!-- The section that display the name of the currunt page and link  --> 
	<?php if($_SESSION['lang'] == "ar"){ ?>
	<img src="images/pointer/divider.png"/>
	<?php }else{ ?>
	<img src="images/pointer/divideren.png"/>
	<?php } ?>
	<a href="index.php"><img style="height: 30px;" src="images/pointer/home.png"></a>
	/ <a href="#"><b> <?php echo _about; ?> </b></a>
</section>

<section id="about">
<!-- The section That descripe how is Equpation with more detailes  -->
<div class="row">

	<div class="col-lg-6">
		
	</div>

	<div class="col-lg-6">
		<h4 > <?php echo _about_part1; ?> </h4>
		<h2> <?php echo _about_part2; ?> </h2>
		<p>
		 <?php echo _about_part8; ?>
		</p>
	</div>
	
</div>


	
</section>

<section id="our-story">
	<!-- The section That descripe how is Equpation  -->
	<div class="row">

		<div class="col-lg-6">
			
		<div class="title">
			<br/>
			
				
				<h4>  <?php echo _our_story_part1; ?> </h4>
				<h2> <?php echo _our_story_part2; ?> </h2>

		</div>
		</div>

			<div class="col-lg-6">

		<div>
			<?php echo _our_story_part3; ?>
		</div>
		
	</div>
		
	</div>



</section>

<img src="images/divider2.png" style="width: 100%;border:none;">

<section id="our-travel">
<!-- Section that display the small vedio of introduce the company -->
		<h4> <?php echo _our_travel_part1; ?> </h4>
		<h2> <?php echo _our_travel_part2; ?> </h2>

		<video width="90%" height="500" controls>
			<source src="../" type="video/mp4">

		</video>
	
</section>

<img style="width: 100%;" src="images/divider.png">

<section id="why" style="">
<!-- The section that display why choose Equpation Company : activities , projects , team -->
<div class="row">

	<div class="col-lg-5">
		<div>
		<h4> <?php echo _why_part1; ?> </h4>
		<h2> <?php echo _why_part2; ?> </h2>
		<p><?php echo _why_part3;?></p>
		</div>
	</div>

	<div class="col-lg-7">

		<div class="row">

		<div class="col-lg-1">
			<img src="images/why/1.png">
		</div>

		<div class="col-lg-2">
			<?php echo _why_part4;?>
		</div>

		<div class="col-lg-9">
			<p> <?php echo _why_part5;?> </p>
		</div>
			
		</div>

		<hr/>

		<div class="row">

		<div class="col-lg-1">
			<img src="images/why/2.png">
		</div>

		<div class="col-lg-2">
			<?php echo _why_part6;?>
		</div>

		<div class="col-lg-9">
			<p> <?php echo _why_part7;?></p>
		</div>
			
		</div>


		<hr/>

		<div class="row">

		<div class="col-lg-1">
			<img src="images/why/3.png">
		</div>

		<div class="col-lg-2">
			<?php echo _why_part8;?>
		</div>

		<div class="col-lg-9">
			<p> <?php echo _why_part9;?>  </p>
		</div>
			
		</div>


	</div>


	
</div>

</section>



<section id="our-messages">

<!-- The section that display message Vision Goals and Values of the company  -->

<div class="row">
	<div class="col-lg-2">
		<img class="main" src="images/our-message/r.jpeg">
		<img class="icon" src="images/our-message/1.png">
	</div>

	<div class="col-lg-10">
		<h2> <img class="main" src="images/our-message/arrow.png"> <?php echo _our_messages_part1;?>  </h2>
		<p> <?php echo _our_messages_part2;?> </p>
	</div>
</div>

<div class="row">
	<div class="col-lg-2">
		<img class="main" src="images/our-message/r2.jpeg"">
		<img class="icon" src="images/our-message/2.png">
	</div>

	<div class="col-lg-10">
		<h2> <img class="main" src="images/our-message/arrow.png"> 
			<?php echo _our_messages_part3;?> </h2>
		<p> <?php echo _our_messages_part4;?> </p>
	</div>
</div>

<div class="row">
	<div class="col-lg-2">
		<img class="main" src="images/our-message/r3.jpeg"">
		<img class="icon" src="images/our-message/3.png">
	</div>

	<div class="col-lg-10">
		<h2> <img class="main" src="images/our-message/arrow.png"> <?php echo _our_messages_part5;?></h2>
		<p> 
		<div class="row">
			
			<div class="col-lg-4">
				<img src="images/our-message/check.png"> <?php echo _our_messages_part6;?>
				<br/>
				<img src="images/our-message/check.png"> <?php echo _our_messages_part7;?>
			</div>

			<div class="col-lg-4">
				<img src="images/our-message/check.png"> <?php echo _our_messages_part8;?>
				<br/>
				<img src="images/our-message/check.png"> <?php echo _our_messages_part9;?>
			</div>

			<div class="col-lg-4">
				<img src="images/our-message/check.png"> <?php echo _our_messages_part10;?>
			</div>

		</div>
		</p>
	</div>
</div>

<div class="row">
	<div class="col-lg-2">
		<img class="main" src="images/our-message/r4.jpeg">
		<img class="icon" src="images/our-message/4.png">
	</div>

	<div class="col-lg-10">
		<h2> <img class="main" src="images/our-message/arrow.png"> <?php echo _our_messages_part11;?> </h2>

		<div class="row">

			<div class="col-lg-6">
				<img src="images/our-message/check.png"> 
				<?php echo _our_messages_part12;?>
				<br/>
				<img src="images/our-message/check.png"> 
				<?php echo _our_messages_part13;?>
			</div>

			<div class="col-lg-6">
				<img src="images/our-message/check.png">
				<?php echo _our_messages_part14;?>
				<br/>
				<img src="images/our-message/check.png">
				<?php echo _our_messages_part15;?> 
			</div>
		</div>
</p>
	</div>
</div>

	
</section>

<img src="images/divider2.png" style="width: 100%;">

<section id="messter">
<!-- Section that diplay The CEO Statement -->	
	<h3> <?php echo _messter_part1;?>  </h3>
	<br/>

	<div class="row">

		<div class="col-lg-1">
			<?php if($_SESSION['lang'] == "ar"){ ?>
			<img src="images/master/right.png">
			<?php }else{ ?>
			<img src="images/master/left.png">
			<?php } ?>
		</div>

		<div class="col-lg-10">
				<p> 
					<?php echo _messter_part2;?>
				 </p>
				<br/>
	<img src="images/master/master.jpg"><br/>

	<b> <?php echo _messter_part3;?> </b><br/>
	<i> <?php echo _messter_part4;?> </i>
		</div>

		<div class="col-lg-1">
			<?php if($_SESSION['lang'] == "ar"){ ?>
			<img src="images/master/left.png">
			<?php }else{ ?>
			<img src="images/master/right.png">
			<?php } ?>
		</div>
		
	</div>
	<br/><br/>
</section>

<img src="images/divider.png" style="width: 100%;border:none;">

<section id="team">
<!-- Section display a word from the Ecopen team -->
	<div class="row">
		
		<div class="col-lg-4">
			
			<img src="images/team/team.jpg">

		</div>

		<div class="col-lg-1">
			<br/><br/>
			<img src="images/team/right.png">
		</div>

		<div class="col-lg-6">

			<h3> <?php echo _team_part1;?>  </h3>

			<p> 
				<?php echo _team_part2;?>
			</p>
			
		</div>

		<div class="col-lg-1">
			<br/><br/>
			<img src="images/team/left.png">
		</div>



	</div>
	
</section>

<img src="images/divider2.png" style="width: 100%;border:none;">

<!-- Call the header of the web site  -->
<?php include 'footer.php'; ?>

</body>
<script type="text/javascript">


	// The read more function for expand the text
	function fun_readmore() {
		var dots = document.getElementById('dots');
		var more = document.getElementById('more');
		var link = document.getElementById('link');
		if(more.style.display == "none")
		{
			alert("none");
			dots.style.display = "inline";
			more.style.display = "none";
		}
		else
		{
			dots.style.display = "none";	
			more.style.display = "inline";	
			link.style.display = "none";	
		}
	}

		// The read more function for expand the text
	function fun_readmore2() {
		var dots2 = document.getElementById('dots2');
		var more2 = document.getElementById('more2');
		var link2 = document.getElementById('link2');
		if(more2.style.display == "none")
		{
			alert("none");
			dots2.style.display = "inline";
			more2.style.display = "none";
		}
		else
		{
			dots2.style.display = "none";	
			more2.style.display = "inline";	
			link2.style.display = "none";	
		}
	}
</script>
</html>