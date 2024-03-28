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
	<title> أيكوبيشن >  الاخبار </title>
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
	/ <a href="#"><b> الاخبار </b></a>
</section>

<section id="news">
	<br/>
	<h4> الاخبار </h4>
	<h2> رحلة الإبداع والإحتراف في تحقيق مشاريعكم الوطنية </h2>
	<br/>

	<div class="row">
		
		<div class="col-lg-8">
			<div>
			<img src="images/news/main.png">
			
			<h6> 25 يونيو 2023 </h6>
			<h5> توقيع إتفاقية : شركة مقاولات تشارك في مشروع بنية تحتية مهم في المنطقة </h5>
			<p> شركة المقاولات تعزز تواجدها مع توقيع اتفاقية للمشاركة في مشروع بنية تحتية ضخم يهدف الي تحسين البني التحتية في المنطقة وتلتزم الشركة بتقديم اعلي مستويات الجودة والكفاءة لانجاح هذا المشروع بنجاح شركة المقاولات تعزز تواجدها مع توقيع اتفاقية للمشاركة في مشروع بنية تحتية ضخم يهدف الي تحسين البني التحتية في المنطقة وتلتزم الشركة بتقديم اعلي مستويات الجودة والكفاءة لانجاح هذا المشروع بنجاح  </p><br/>
			<a href="details.php"> تفاصيل الخبر >>  </a>
			<br/>
			</div>

		</div>

		<div class="col-lg-4">
			<div>
			<img src="images/news/1.png">
			<h6> 25 يونيو 2023 </h6>
			<h5> توقيع إتفاقية : شركة مقاولات تشارك في مشروع بنية تحتية مهم في المنطقة </h5>
			<a href="#"> نفاصيل الخبر >>  </a>
			</div>
			<br/>
			<div>
			<img src="images/news/2.png">
			<h6> 25 يونيو 2023 </h6>
			<h5> توقيع إتفاقية : شركة مقاولات تشارك في مشروع بنية تحتية مهم في المنطقة </h5>
			<a href="#"> نفاصيل الخبر >>  </a>
			</div>
		</div>

	</div>

	<hr/>

	<div class="row">

		<div class="col-lg-4">
			<div>
			<img src="images/news/3.png">
			<h6> 25 يونيو 2023 </h6>
			<h5> توقيع إتفاقية : شركة مقاولات تشارك في مشروع بنية تحتية مهم في المنطقة </h5>
			<a href="#"> نفاصيل الخبر >>  </a>
			</div>
			<br/>
		</div>

		<div class="col-lg-4">
			<div>
			<img src="images/news/4.png">
			<h6> 25 يونيو 2023 </h6>
			<h5> توقيع إتفاقية : شركة مقاولات تشارك في مشروع بنية تحتية مهم في المنطقة </h5>
			<a href="#"> نفاصيل الخبر >>  </a>
			</div>
			<br/>
		</div>

		<div class="col-lg-4">
			<div>
			<img src="images/news/5.png">
			<h6> 25 يونيو 2023 </h6>
			<h5> توقيع إتفاقية : شركة مقاولات تشارك في مشروع بنية تحتية مهم في المنطقة </h5>
			<a href="#"> نفاصيل الخبر >>  </a>
			</div>
			<br/>
		</div>
		
	</div>

		<div class="row">

		<div class="col-lg-4">
			<div>
			<img src="images/news/6.png">
			<h6> 25 يونيو 2023 </h6>
			<h5> توقيع إتفاقية : شركة مقاولات تشارك في مشروع بنية تحتية مهم في المنطقة </h5>
			<a href="#"> نفاصيل الخبر >>  </a>
			</div>
			<br/>
		</div>

		<div class="col-lg-4">
			<div>
			<img src="images/news/7.png">
			<h6> 25 يونيو 2023 </h6>
			<h5> توقيع إتفاقية : شركة مقاولات تشارك في مشروع بنية تحتية مهم في المنطقة </h5>
			<a href="#"> نفاصيل الخبر >>  </a>
			</div>
			<br/>
		</div>

		<div class="col-lg-4">
			<div>
			<img src="images/news/8.png">
			<h6> 25 يونيو 2023 </h6>
			<h5> توقيع إتفاقية : شركة مقاولات تشارك في مشروع بنية تحتية مهم في المنطقة </h5>
			<a href="#"> نفاصيل الخبر >>  </a>
			</div>
			<br/>
		</div>
		
	</div>
	
</section>

<img src="images/divider2.png" style="width: 100%;border:none;">
<?php include 'footer.php'; ?>
</body>
</html>