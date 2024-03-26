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
	<img src="images/pointer/divider.png"/>
	<a href="index.php"><img style="height: 30px;" src="images/pointer/home.png"></a>
	/ <a href="#"><b> اتصل بنا </b></a>
</section>


<section id="contact">
	
<br/>
	<h4> تواصل معنا </h4>
	<h2> رحلة الإبداع والإحتراف في تحقيق مشاريعكم الوطنية </h2>
<br/>

<div class="row">
	
	<div class="col-lg-6">
		<div class="div" style="background-color: #fff;">
			<br/>
			<h3> ابق علي تواصل </h3>
			<p> لضمان التواصل السريع مع تعليقك او طلبك , يرجي كتابة شرح مفصل لكي نتمكن من خدمتك بفعالية .<br/>
			 </p>
			<form action="success.php" method="post">

			 	<div class="form-group">
			 		<label> الاسم <b>*</b> </label>
			 		<input type="text" class="form-control" name="" placeholder="الاسم">
			 	</div>

			 
			 	<label style="padding-right: 13px;"> رقم الهاتف <b>*</b> </label>
			 	<div class="input-group" style="margin: 0px;">
			 		<input style="text-align: left;" type="number" class="form-control" name="" placeholder="000 000 000">
			 		<img src="images/contact/flag.png" width="50">
			 	</div>
			 	

			 	<div class="form-group">
			 		<label> البريد الإلكتروني <b>*</b> </label>
			 		<input type="text" class="form-control" name="" placeholder="الاسم">
			 	</div>

			 	<div class="form-group">
			 		<label> الموضوع <b>*</b> </label>
			 		<input type="text" class="form-control" name="" placeholder="الاسم">
			 	</div>

			 	<div class="form-group">
			 		<label> الرسالة <b>*</b> </label>
			 		<textarea class="form-control" name=""> الرسالة </textarea>
			 	</div>

			 	<div class="form-group" style="text-align: left;">
			 		<button style="width: 200px;padding: 13px;" class="btn-main"> إرسال <i class="icon-arrow-left"></i>  </button>
			 	</div>

			 	
			 </form>
		</div>
	</div>

	<div class="col-lg-6">
		<div class="div">
			<h3> معلومات التواصل </h3>
			<p> إنضم الي مجتمعنا وكم جزءا من الحوار ! <br/>
			تواص معنا عبر وسائل التواصل الإجتماعي , البريد الإلكتروني , او إتصل بنا علي الارقام المخصصة نحن هنا لنستمع ونستجيب ...
			 </p>
			 <div class="card">
			 <h5>	وسائل التواصل : 
			  <a href="#"><img src="images/social/Twitter.png"/></a>
          <a href="#"><img src="images/social/Fb.png"/></a>
          <a href="#"><img src="images/social/Messages.png"/></a>
          <a href="#"><img src="images/social/Whatsapp.png"/></a>
          <a href="#"><img src="images/social/Insta.png"/></a> </h5>
			 </div>

			 <h3> المكتب الرئيسي </h3>

			  <div class="card">
			 	<h5> <img style="width: 45px;" src="images/contact/loc.png">  قطر الدوحة - لوسيل </h5>
			 </div>

			  <div class="card">
			 	<h5> <img style="width: 45px;" src="images/contact/call.png"> +97450095633 </h5>
			 </div>

			 <h3> مكاتب السودان </h3>

			 <div class="card">
			 	<h5> <img style="width: 45px;" src="images/contact/loc.png"> الخرطوم - عطبرة - بورتسودان </h5>
			 </div>

			  <div class="card">
			 	<h5> <img style="width: 45px;" src="images/contact/call.png"> الخرطوم : 249912322447+ <br/>
			 	<img style="width: 45px;" src="images/contact/call.png"> عطبرة  : 249123214737+ <br/>
			 	<img style="width: 45px;" src="images/contact/call.png">بورتسودان : 249912322596+ </h5>
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