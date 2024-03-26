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
<title> إكوبيشن > الرئيسية </title>
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


<!--------------------------ADDING NEW CUSTOMER---------->
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog">
		
		<form method="POST" action="customers.php?invoice_number=<?php echo $_GET['invoice_number']; ?>">

		<h3 align="center"> إضافة عميل جديد </h3>	
  	  	  <table id="table" style="width: 400px; margin: auto;overflow-x:auto; overflow-y: auto;">
  	  	 <tr>

         <td> أسم العميل:</td>
         <td><input type="text" name="c_name" size="10" placeholder=" أسم العميل" required></td>
          </tr>
          <tr id="row1">
         <td> رقم الهاتف :</td>
         <td><input type="text" name="c_phone"  size="10" placeholder="رقم الهاتف" required ></td>
        </tr>
        <tr>
        <td> العنوان :</td>
          <td><input type="text" name="c_address" size="10" placeholder="العنوان العميل "  required></td>
        </tr>

        <td> رقم بطاقة التامين :</td>
          <td><input type="number" name="card" size="10" placeholder="Card  0123456789"><br/>
          	<font color="red"> * حقل اختياري </font></td>
        </tr>

        <tr>
        	<td> شركة التامين :</td>
          <td>
          	<select name="company">
          		<option value=""> -- اختار شركة التامين -- </option>
          		<option value="0"> -- خارج التامين -- </option>
          		<?php

          		$select_company = mysqli_query( $con , "SELECT * FROM `company`");
          		while ($row = mysqli_fetch_array($select_company )) {
          			echo "<option>". $row['name'] ."</option>";
          		}

          		?> 
          	</select><br/>
          	<font color="red"> * حقل اختياري </font></td>
          </td>
        </tr>
        </tr>
  
        <tr>
          <td><button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> إغلاق </button></td>
          <td> <input type="submit" name="insert_customer" class="btn btn-success btn-large" style="width: 225px" value=" حفظ "> </td>
        </tr>

  	  	 </table> 
        <br>
  	  	 </form>
		</div>
	</div>
<!-------------------------------------------------------->

<section id="pointer">
	<?php if($_SESSION['lang'] == "ar"){ ?>
	<img src="images/pointer/divider.png"/>
	<?php }else{ ?>
	<img src="images/pointer/divideren.png"/>
	<?php } ?>
	<a href="index.php"><img style="height: 30px;" src="images/pointer/home.png"></a>
</section>

<section id="hero">
	<div>
	
 	<h1> <?php  echo _Hero_part1; ?> <b> <?php  echo _Hero_part2; ?> </b> <br/> <b> <?php  echo _Hero_part3; ?> </b> </h1>
 	<center>
	<p> <?php  echo _Hero_part4; ?>  </p>
	</center>
	</div>
</section>

<section id="why" style="">

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


<section id="about">

<div class="row">

	<div class="col-lg-6">
		
	</div>

	<div class="col-lg-6">
		<h4> <?php echo _about_part1;?> </h4>
		<h2> <?php echo _about_part2;?> </h2>
		<p>
			<?php echo _about_part3;?>
			<br/>
				 <br/><img width="25" src="images/our-message/black-check.png"> <?php echo _about_part4;?>  
				 <br/><img width="25" src="images/our-message/black-check.png"> <?php echo _about_part5;?>
			
			<br/><br/>
			<button class="btn-main"> <?php echo _about_part6;?> 
			<?php if($_SESSION['lang'] == "en"){ ?>
			<i class="icon-arrow-right"></i> 
			<?php }else{ ?>
			<i class="icon-arrow-left"></i> 
			<?php } ?>
			</button> <?php echo _about_part7;?>

		</p>
	</div>
	
</div>


	
</section>

<section id="services">
<center>
	<h4> <?php echo _services_part1; ?> </h4>
	<h2> <?php echo _services_part2; ?> </h2>
</center>
<br/>

<div class="row">

	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/1.png"> </b> <br/>
			<h5> <?php echo _services_part3; ?> </h5>
			<p> 
				<?php echo _services_part4; ?>
			</p>
			<br/>
			<a href="services.php?id=tracking"> <?php echo _services_part19; ?> 
			<?php if($_SESSION['lang'] == "en"){ ?>
			<i class="icon-arrow-right"></i> 
			<?php }else{ ?>
			<i class="icon-arrow-left"></i> 
			<?php } ?>
			</a>
		</div>
	</div>

	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/2.png"> </b> <br/>
			<h5> <?php echo _services_part5; ?> </h5>
			<p> 
				<?php echo _services_part6; ?>
			</p>
			<br/>
			<a href="services.php?id=contract"><?php echo _services_part19; ?>
			<?php if($_SESSION['lang'] == "en"){ ?>
			<i class="icon-arrow-right"></i> 
			<?php }else{ ?>
			<i class="icon-arrow-left"></i> 
			<?php } ?>
			</a>
		</div>
	</div>

	<div class="col-lg-3">
		<div> 
			<b> <img src="images/services/3.png"> </b> <br/>
			<h5> <?php echo _services_part7; ?> </h5>
			<p> 
				<?php echo _services_part8; ?>
			</p>
			<br/>
			<a href="services.php?id=opration"> <?php echo _services_part7; ?> 
			<?php if($_SESSION['lang'] == "en"){ ?>
			<i class="icon-arrow-right"></i> 
			<?php }else{ ?>
			<i class="icon-arrow-left"></i> 
			<?php } ?>
		</a>
		</div>
	</div>


	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/4.png"> </b> <br/>
			<h5> <?php echo _services_part9; ?> </h5>
			<p> 
				<?php echo _services_part10; ?> 
			</p>
			<br/>
			<a href="services.php?id=rental"> <?php echo _services_part19; ?> 
			<?php if($_SESSION['lang'] == "en"){ ?>
			<i class="icon-arrow-right"></i> 
			<?php }else{ ?>
			<i class="icon-arrow-left"></i> 
			<?php } ?>
			</a>
		</div>
	</div>









	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/5.png"> </b> <br/>
			<h5> <?php echo _services_part11; ?>   </h5>
			<p> 
				<?php echo _services_part12; ?> 
			</p>
			<br/>
			<a href="services.php?id=employement"> <?php echo _services_part19; ?>  >> </a>
		</div>
	</div>

	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/6.png"> </b> <br/>
			<h5> <?php echo _services_part13; ?>   </h5>
			<p> 
				<?php echo _services_part14; ?> 
			</p>
			<br/>
			<a href="services.php?id=maintenance"> <?php echo _services_part19; ?>  >> </a>
		</div>
	</div>

	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/7.png"> </b> <br/>
			<h5> <?php echo _services_part15; ?>  </h5>
			<p> 
				<?php echo _services_part16; ?> 
			</p>
			<br/>
			<a href="services.php?id=transport"> <?php echo _services_part19; ?>  >> </a>
		</div>
	</div>

	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/8.png"> </b> <br/>
			<h5> <?php echo _services_part17; ?>  </h5>
			<p> 
				<?php echo _services_part18; ?> 
			</p>
			<br/>
			<a href="services.php?id=construct"> <?php echo _services_part19; ?>  >> </a>
		</div>
	</div>
	
</div>


</section>



<section id="statics">
	<br/>
	
	<h4> <?php echo _statics_part1; ?> </h4>
	<h2> <?php echo _statics_part2; ?> </h2>	
	<br/>

<div class="row">

	<div class="col-lg-2">
		<div>
		<img src="images/statics/1.png">
		<h3> 323+ </h3>	
		<b> <?php echo _statics_part8; ?> </b>
		</div>
	</div>

	<div class="col-lg-2">
		<div>
		<img src="images/statics/2.png">
		<h3> 69+ </h3>	
		<b> <?php echo _statics_part7; ?> </b>
		</div>
	</div>

	<div class="col-lg-2">
		<div>
		<img src="images/statics/3.png">
		<h3> 71+ </h3>	
		<b> <?php echo _statics_part6; ?> </b>
		</div>
	</div>

	<div class="col-lg-2">
		<div>
		<img src="images/statics/4.png">
		<h3> 771979+ </h3>	
		<b> <?php echo _statics_part5; ?> </b>
		</div>
	</div>

	<div class="col-lg-2">
		<div>
		<img src="images/statics/5.png">
		<h3> 40+ </h3>	
		<b> <?php echo _statics_part4; ?> </b>
		</div>
	</div>


	<div class="col-lg-2">
		<div>
		<img src="images/statics/6.png">
		<h3> 10000+ </h3>	
		<b> <?php echo _statics_part3; ?> </b>
		</div>
	</div>
	
</div>

</section>

<img src="images/divider.png" style="width: 100%;border:none;">

<section id="fileds">
<h4> <?php echo _fileds_part1; ?> </h4>
<h2> <?php echo _fileds_part2; ?> </h2>	
<br/>

	<div class="item">
		<img src="images/fileds/1.jpg">
		<div class="trans">
		<h5> <?php echo _fileds_part8; ?></h5>
		<p> نعمل في جميع مشاريع استخراج الدهب في كل مناطق السودان </p>
		<a href="#"> <?php echo _fileds_part10; ?> 
			<?php if($_SESSION['lang'] == "en"){ ?>
			<i class="icon-arrow-right"></i> 
			<?php }else{ ?>
			<i class="icon-arrow-left"></i> 
			<?php } ?>
		</a>
		</div>
	</div>

	<div class="item">
		<img src="images/fileds/3.jpg">
		<div class="trans">
		<h5> <?php echo _fileds_part7; ?> </h5>
		<p> نعمل في جميع مشاريع استخراج الدهب في كل مناطق السودان </p>
		<a href="#">  <?php echo _fileds_part10; ?>  
			<?php if($_SESSION['lang'] == "en"){ ?>
			<i class="icon-arrow-right"></i> 
			<?php }else{ ?>
			<i class="icon-arrow-left"></i> 
			<?php } ?> 
		</a>
		</div>
	</div>

	<div class="item">
		<img src="images/fileds/2.jpg">
		<div class="trans">
		<h5> <?php echo _fileds_part6; ?> </h5>
		<p> نعمل في جميع مشاريع استخراج الدهب في كل مناطق السودان </p>
		<a href="#"> <?php echo _fileds_part10; ?>  
			<?php if($_SESSION['lang'] == "en"){ ?>
			<i class="icon-arrow-right"></i> 
			<?php }else{ ?>
			<i class="icon-arrow-left"></i> 
			<?php } ?>
		</a>
		</div>
	</div>

	<div class="item">
		<img src="images/fileds/4.jpg">
		<div class="trans">
		<h5> <?php echo _fileds_part5; ?> </h5>
		<p> نعمل في جميع مشاريع استخراج الدهب في كل مناطق السودان </p>
		<a href="#">  <?php echo _fileds_part10; ?>  
			<?php if($_SESSION['lang'] == "en"){ ?>
			<i class="icon-arrow-right"></i> 
			<?php }else{ ?>
			<i class="icon-arrow-left"></i> 
			<?php } ?> 
		</a>
		</div>
	</div>

	<div class="item">
		<img src="images/fileds/5.jpg">
		<div class="trans">
		<h5> <?php echo _fileds_part4; ?></h5>
		<p> نعمل في جميع مشاريع استخراج الدهب في كل مناطق السودان </p>
		<a href="#"> <?php echo _fileds_part10; ?> 
			<?php if($_SESSION['lang'] == "en"){ ?>
			<i class="icon-arrow-right"></i> 
			<?php }else{ ?>
			<i class="icon-arrow-left"></i> 
			<?php } ?>
		</a>
		</div>
	</div>

	<div class="item">
		<img src="images/fileds/6.jpg">
		<div class="trans">
		<h5> <?php echo _fileds_part3; ?> </h5>
		<p > نعمل في جميع مشاريع استخراج الدهب في كل مناطق السودان </p>
		<a href="#"> <?php echo _fileds_part10; ?> 
			<?php if($_SESSION['lang'] == "en"){ ?>
			<i class="icon-arrow-right"></i> 
			<?php }else{ ?>
			<i class="icon-arrow-left"></i> 
			<?php } ?>
		</a>
		</div>
	</div>


<hr style="clear: both;" />

<button style="clear: both;" class="btn-main"> <?php echo _fileds_part10; ?>
<?php if($_SESSION['lang'] == "en"){ ?>
			<i class="icon-arrow-right"></i> 
			<?php }else{ ?>
			<i class="icon-arrow-left"></i> 
			<?php } ?>
</button>

</section>

<section id="galary">
<br/>
<h4> <?php echo _galary_part1; ?>  </h4>
<h2> <?php echo _galary_part2; ?></h2>	
<br/>

<div class="row">

<div class="col-lg-4">
<img src="images/galary/a5.jpeg">
<img src="images/galary/a6.jpeg">
<img src="images/galary/a5.jpeg">
</div>

<div class="col-lg-4">
<img class="center" src="images/galary/a3.jpeg" style="height:380px;">
<img class="center" src="images/galary/a4.jpeg" style="height:380px;">	
</div>

<div class="col-lg-4">
<img src="images/galary/a1.jpeg">
<img src="images/galary/a2.jpeg">
<img src="images/galary/a2.jpeg">
</div>
	
</div>

</section>

<section id="partener">
<h4> <?php echo _partener_part1; ?> </h4>
<h2> <?php echo _partener_part2; ?> </h2>
<br/>

<img src="images/logo/logo.jpg"/>
<img src="images/logo/logo.jpg"/>
<img src="images/logo/logo.jpg"/>
<img src="images/logo/logo.jpg"/>
<img src="images/logo/logo.jpg"/>
<img src="images/logo/logo.jpg"/>
<img src="images/logo/logo.jpg"/>
<img src="images/logo/logo.jpg"/>

</section>

<img src="images/divider2.png" style="width: 100%;border:none;">


<?php include 'footer.php'; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>
</html>