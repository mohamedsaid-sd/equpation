<!DOCTYPE html>
<html dir="rtl">
<head>
<title> إكوبيشن > الرئيسية </title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1" name="viewport">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
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
	<img src="images/pointer/divider.png"/>
	<a href="index.php"><img style="height: 30px;" src="images/pointer/home.png"></a>
</section>

<section id="hero">
	<div>
	
 	<h1> مرحبا بكم في منصة <b> إكوبيشن </b> <br/> <b> الإلكترونية </b> </h1>
 	<center>
	<p> نعمل إكوبيشن علي تنفيذ مشاريع المقاولات المدنية والبنى التحتية ومقاولات التعدين، مسلحة في ذلك بأحدث الآليات والمعدات وبفريق من المهندسين والفنيين الأكفاء المهرة، لتنفيذ المشاريع بأعلى جودة مطلوبة </p>
	</center>
	</div>
</section>

<section id="why" style="">

<div class="row">

	<div class="col-lg-5">
		<div>
		<h4> لماذا نحن </h4>
		<h2> لماذا أختار إكوبيشن؟ </h2>
		<p>إكوبيشن هي شركة خدمية تعمل على توفير أحدث وأفضل الآليات والمعدات الثقيلة للمشاريع الإنتاجية في مختلف المجالات، بدأت العمل منذ العام 2015م، وذلك بإستخدام نظم إدارية محكمة ومتطورة، وعبر كوادر ذات كفاءة عالية، وبالإستناد إلى قاعدة بيانات كبيرة ومحكمة، وبالشراكة مع عملائنا القائمين على أكبر المشاريع الإنتاجية بالبلاد</p>
		</div>
	</div>

	<div class="col-lg-7">

		<div class="row">

		<div class="col-lg-1">
			<img src="images/why/1.png">
		</div>

		<div class="col-lg-2">
			أنشطتنا
		</div>

		<div class="col-lg-9">
			لدى إكوبيشن الكثير من الأنشطة في أغلب ولايات السودان من إستخراج المعادن و حفر الحفائر و الآبار والبحث والإستكشاف عن مختلف أنواع الخام
		</div>
			
		</div>

		<hr/>

		<div class="row">

		<div class="col-lg-1">
			<img src="images/why/2.png">
		</div>

		<div class="col-lg-2">
			مشاريعنا
		</div>

		<div class="col-lg-9">
			لدى إكوبيشن الكثير من المشاريع الإنتاجية والخدمية الوطنية من تعبيد الطرق وعمل الجسور وحفر الآبار للقرى البعيدة والإعمار في كافة 
		</div>
			
		</div>


		<hr/>

		<div class="row">

		<div class="col-lg-1">
			<img src="images/why/3.png">
		</div>

		<div class="col-lg-2">
			فريقنا
		</div>

		<div class="col-lg-9">
			تحتوي إكوبيشن على فريق ماهر تقني متتدرب على العمل ومعالجة أكثر المشاكل تعقيدا والتعامل مع العملاء والزبائن بمهارة وحرفية عالية 
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
		<h4> لماذا نحن </h4>
		<h2> لماذا أختار إكوبيشن؟ </h2>
		<p>
			شركة إكوبيشن للاستثمار المحدودة، تأسست في عام 2021م كشركة سودانية واعدة في مجال خدمات التعدين، حيث تقدم مجموعة شاملة ومتكاملة من الخدمات في هذا القطاع، بدأت الشركة رحلتها بتأجير وتشغيل المعدات والآليات الثقيلة، وسرعان ما تمكنت من توسيع نطاق عملها لتشمل مقاولات التعدين وتأسيس وإدارة وتشغيل المناجم في المشاريع التعدينية، 

			<ul>
				<li> نعتبر من الشركات القليلة التي تقدم خدمات النقل ضمن نطاق اعمالها </li> 
				<li> نتميز بجودة عالية وكفاءة في تقديم هذة الخدمات </li> 
			</ul>

			<button class="btn-main"> تعرف اكثر علي منصتنا >> </button> شاهد الفيديو

		</p>
	</div>
	
</div>


	
</section>

<section id="services">
<center>
	<h4> خدمات إكوبيشن </h4>
	<h2> رحلة الإبداع والإحتراف في تحقيق مشاريعكم الوطنية </h2>
</center>
<br/>

<div class="row">

	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/1.png"> </b> <br/>
			<h5>  انظمة التتبع </h5>
			<p> 
				نقدم حلول مبتكرة ومستدامة لبناء وتشغيل المشاريع التعدينية بكفاءة عالية
			</p>
			<br/>
			<a href="services.php?id=tracking"> استعراض الخدمة >> </a>
		</div>
	</div>

	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/2.png"> </b> <br/>
			<h5> خدمات المقاولة </h5>
			<p> 
				نقدم حلول مبتكرة ومستدامة لبناء وتشغيل المشاريع التعدينية بكفاءة عالية
			</p>
			<br/>
			<a href="services.php?id=contract"> استعراض الخدمة >> </a>
		</div>
	</div>

	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/3.png"> </b> <br/>
			<h5> خدمات التشغيل </h5>
			<p> 
				نقدم حلول مبتكرة ومستدامة لبناء وتشغيل المشاريع التعدينية بكفاءة عالية
			</p>
			<br/>
			<a href="services.php?id=opration"> استعراض الخدمة >> </a>
		</div>
	</div>


	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/4.png"> </b> <br/>
			<h5> خدمات التأجير </h5>
			<p> 
				نقدم حلول مبتكرة ومستدامة لبناء وتشغيل المشاريع التعدينية بكفاءة عالية
			</p>
			<br/>
			<a href="services.php?id=rental"> استعراض الخدمة >> </a>
		</div>
	</div>









	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/5.png"> </b> <br/>
			<h5> خدمات التوظيف  </h5>
			<p> 
				نقدم حلول مبتكرة ومستدامة لبناء وتشغيل المشاريع التعدينية بكفاءة عالية
			</p>
			<br/>
			<a href="services.php?id=employement"> استعراض الخدمة >> </a>
		</div>
	</div>

	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/6.png"> </b> <br/>
			<h5> خدمات الصيانة  </h5>
			<p> 
				نقدم حلول مبتكرة ومستدامة لبناء وتشغيل المشاريع التعدينية بكفاءة عالية
			</p>
			<br/>
			<a href="services.php?id=maintenance"> استعراض الخدمة >> </a>
		</div>
	</div>

	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/7.png"> </b> <br/>
			<h5> خدمات الترحيل </h5>
			<p> 
				نقدم حلول مبتكرة ومستدامة لبناء وتشغيل المشاريع التعدينية بكفاءة عالية
			</p>
			<br/>
			<a href="services.php?id=transport"> استعراض الخدمة >> </a>
		</div>
	</div>

	<div class="col-lg-3">
		<div>
			<b> <img src="images/services/8.png"> </b> <br/>
			<h5> تأسيس المواقع </h5>
			<p> 
				نقدم حلول مبتكرة ومستدامة لبناء وتشغيل المشاريع التعدينية بكفاءة عالية
			</p>
			<br/>
			<a href="services.php?id=construct"> استعراض الخدمة >> </a>
		</div>
	</div>
	
</div>


</section>



<section id="statics">
	<br/>
	
	<h4> إحصائيات إكوبيشن </h4>
	<h2> نكشف عن إنجازاتنا بتفاصيل رقمية تكشف قوة الإنجاز والتميز </h2>	
	<br/>

<div class="row">

	<div class="col-lg-2">
		<div>
		<img src="images/statics/1.png">
		<h3> 323+ </h3>	
		<b> إجمالى المشاريع </b>
		</div>
	</div>

	<div class="col-lg-2">
		<div>
		<img src="images/statics/2.png">
		<h3> 69+ </h3>	
		<b> العملاء </b>
		</div>
	</div>

	<div class="col-lg-2">
		<div>
		<img src="images/statics/3.png">
		<h3> 71+ </h3>	
		<b> ساعات عمل المعدة </b>
		</div>
	</div>

	<div class="col-lg-2">
		<div>
		<img src="images/statics/4.png">
		<h3> 771979+ </h3>	
		<b> كمية العمل بالإنتاج </b>
		</div>
	</div>

	<div class="col-lg-2">
		<div>
		<img src="images/statics/5.png">
		<h3> 40+ </h3>	
		<b> الآليات المشغلة </b>
		</div>
	</div>


	<div class="col-lg-2">
		<div>
		<img src="images/statics/6.png">
		<h3> 10000+ </h3>	
		<b> المختصين بالقطاع </b>
		</div>
	</div>
	
</div>

</section>

<img src="images/divider.png" style="width: 100%;border:none;">

<section id="fileds">
<h4> مجالات العمل </h4>
<h2> رحلة الإنجاز والإبداع في تحقيق مشاريعكم الوطنية </h2>	
<br/>

	<div class="item">
		<img src="images/fileds/1.jpg">
		<div class="trans">
		<h5> المشاريع الوطنية </h5>
		<p> نعمل في جميع مشاريع استخراج الدهب في كل مناطق السودان </p>
		<a href="#"> مجالات العمل >> </a>
		</div>
	</div>

	<div class="item">
		<img src="images/fileds/3.jpg">
		<div class="trans">
		<h5> المشاريع الزراعية </h5>
		<p> نعمل في جميع مشاريع استخراج الدهب في كل مناطق السودان </p>
		<a href="#"> مجالات العمل >> </a>
		</div>
	</div>

	<div class="item">
		<img src="images/fileds/2.jpg">
		<div class="trans">
		<h5> مشاريع إستخراج المعادن </h5>
		<p> نعمل في جميع مشاريع استخراج الدهب في كل مناطق السودان </p>
		<a href="#"> مجالات العمل >> </a>
		</div>
	</div>

	<div class="item">
		<img src="images/fileds/4.jpg">
		<div class="trans">
		<h5> مشاريع استخراج الاحجار </h5>
		<p> نعمل في جميع مشاريع استخراج الدهب في كل مناطق السودان </p>
		<a href="#"> مجالات العمل >> </a>
		</div>
	</div>

	<div class="item">
		<img src="images/fileds/5.jpg">
		<div class="trans">
		<h5> مشاريع الطرق والجسور </h5>
		<p> نعمل في جميع مشاريع استخراج الدهب في كل مناطق السودان </p>
		<a href="#"> مجالات العمل >> </a>
		</div>
	</div>

	<div class="item">
		<img src="images/fileds/6.jpg">
		<div class="trans">
		<h5> مشاريع الإنشاءات </h5>
		<p > نعمل في جميع مشاريع استخراج الدهب في كل مناطق السودان </p>
		<a href="#"> مجالات العمل >> </a>
		</div>
	</div>


<hr style="clear: both;" />

<button style="clear: both;" class="btn-main"> إكتشف مجالات العمل >> </button>

</section>


<section id="galary">

<h4> معرض الصور </h4>
<h2> جانب من الاعمال والخدمات التي قدمتها الشركة لعملائها في جميع <br/>ولايات السودان </h2>	
<br/>

<div class="row">

<div class="col-lg-4">
<img src="images/fileds/a5.jpeg">
<img src="images/fileds/a6.jpeg">
<img src="images/fileds/a5.jpeg">
</div>

<div class="col-lg-4">
<img class="center" src="images/fileds/a3.jpeg" style="height:380px;">
<img class="center" src="images/fileds/a4.jpeg" style="height:380px;">	
</div>

<div class="col-lg-4">
<img src="images/fileds/a1.jpeg">
<img src="images/fileds/a2.jpeg">
<img src="images/fileds/a2.jpeg">
</div>
	
</div>

</section>

<section id="partener">
<h4> شركاء النجاح في الريادة </h4>
<h2> معا نبني مستقبل الإبتكار ونحقق الإنجازات والتميز </h2>
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