<!DOCTYPE html>
<html dir="rtl">
<head>
	<title> أيكوبيشن > الخدمات </title>
			<meta charset="utf-8">
<meta content="width=device-width, initial-scale=0.7" name="viewport">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="vendor/css/style.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>

<?php 
$id = $_GET['id'];
include 'header.php'; ?>
<section id="pointer">
	<img src="images/pointer/divider.png"/>
	<a href="index.php"><img style="height: 30px;" src="images/pointer/home.png"></a>
	/ 

	<?php if($id == "contract"){ ?>
	<a href="#"><b> خدمات المقاولة </b></a>
	<?php } elseif ($id == "rental") { ?>
	<a href="#"><b>  خدمات التأجير </b></a>
	<?php } elseif ($id == "opration") { ?>
	<a href="#"><b> خدمة التشغيل </b></a>
	<?php } elseif ($id == "employement") { ?>
	<a href="#"><b> خدمات التوظيف </b></a>
	<?php } elseif ($id == "maintenance") { ?>
	<a href="#"><b> خدمات الصيانة </b></a>
	<?php } elseif ($id == "transport") { ?>
	<a href="#"><b> خدمات الترحيل </b></a>
	<?php } elseif ($id == "tracking") { ?>
	<a href="#"><b> خدمات انظمة التتبع </b></a>
	<?php } elseif ($id == "construct") { ?>
	<a href="#"><b> خدمات تاسيس المواقع </b></a>
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
				<h3> خدمات المقاولة </h3>
				<p> نقدم خدمات متخصصة في مقاولات التعدين، حيث نتمتع بخبرة واسعة وموارد متميزة في هذا المجال، كما نقدم حلولًا شاملة ومتكاملة للعملاء في مجال التعدين، بدءًا من التخطيط والتصميم وصولًا إلى التنفيذ وإدارة المشاريع، وتتضمن خدماتنا في مقاولات التعدين إدارة عمليات تشغيل المناجم وتحقيق أعلى مستويات الإنتاجية والكفاءة، بالإضافة إلى الالتزام بأعلى معايير السلامة والجودة، ونسعى جاهدين لتحقيق أهداف عملائنا وتوفير الحلول المبتكرة التي تضمن تحقيق أقصى قيمة مضافة من المشاريع التعدينية. </p>
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
			<a href="contract.php"><button class="btn-main"> تقديم طلب الخدمة </button></a>
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
				<h3> خدمات التاجير </h3>
				<p> نوفر مجموعة متنوعة من المعدات الثقيلة عالية الجودة والتي تشمل الحفارات، الجرافات، اللوادر، والشاحنات الضخمة، بالإضافة إلى مجموعة واسعة من المعدات الأخرى المستخدمة في عمليات التعدين، ونلتزم بتوفير المعدات بحالة ممتازة وجاهزة للاستخدام في أي وقت، ونضمن تقديم خدمات التأجير بكفاءة عالية وبأسعار تنافسية، كما نوفر خدمات الصيانة والدعم الفني المستمر للمعدات المستأجرة لضمان استمرارية العمليات التعدينية لعملائنا. </p>
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
			<a href="rental.php"><button class="btn-main"> تقديم طلب الخدمة </button></a>
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
				<h3> خدمات التشغيل </h3>
				<p> نوفر خدمات متخصصة ومتميزة في تشغيل وإدارة مجموعة متنوعة من المعدات والآليات الثقيلة المستخدمة في عمليات التعدين، بما في ذلك الحفارات الكبيرة، والشاحنات الضخمة، واللوادر والبلدوزرات وغيرها من المعدات الضرورية لعمليات التعدين، كما نضمن تشغيل هذه المعدات بكفاءة عالية وبأعلى معايير السلامة، ونلتزم بتوفير فرق عمل مدربة ومؤهلة للتعامل مع هذه المعدات بشكل آمن وفعال، كما نهتم بالصيانة الدورية والتشغيل الفعال للمعدات لضمان استمرارية العمليات التعدينية للشركات وتحقيق أقصى استفادة من الموارد المتاحة. </p>
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
			<a href="opration.php"><button class="btn-main"> تقديم طلب الخدمة </button></a>
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
				<h3> خدمات التوظيف </h3>
				<p> شركة إكوبيشن للإستثمار المحدودة تضمن توفير الموارد البشرية المتخصصة وذات الخبرة العالية في قطاع التعدين، ونولي اهتماماً كبيراً باستيعاب واختيار الكوادر البشرية المؤهلة والمتميزة، التي تتمتع بالخبرة والمعرفة اللازمة في كافة تخصصات مجال التعدين، لتكون لهم المساهمة الكبيرة في تحليل وتقييم احتياجات الشركات بشكل دقيق، ومساعدتهم في إكمال الجوانب الإدارية والفنية والتشغيلية المتخصصة على الوجه الأكمل، لتحقق هذه الشركات أهدافها في الوصول لغاياتها وتطلعاتها، لتكون مساهمتنا معهم بتوفير فريق الموارد البشرية الانسب؛ دعمًا منا لشركاء النجاح في هذا المجال. بالإضافة إلى ذلك، نحرص على توفير بيئة عمل محفزة وملهمة تشجع على التطوير المهني والشخصي للموظفين، وكذلك رعاية مشاريع التدريب والتطوير للكوادر في هذا المجال، مما يساهم في تعزيز الانتماء ورفع مستوى الأداء. </p>
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
			<a href="#"><button class="btn-main"> تقديم طلب الخدمة </button></a>
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
				<h3> خدمات الصيانه </h3>
				<p> تعتبر خدمات الصيانة للمعدات والآليات الثقيلة جزءًا أساسيًا من التزامنا بتقديم خدمات متكاملة وموثوقة في قطاع التعدين، حيث نولي اهتمامًا كبيرًا للحفاظ على سلامة وأداء المعدات بأعلى مستوياتها، من خلال تقديم برامج صيانة شاملة تشمل الصيانة الوقائية والتصحيحية والتنبؤية، ويعمل فريق الصيانة المتخصص لدينا على مدار الساعة لضمان استجابة فورية وحل مشاكل الصيانة بفعالية، مما يضمن استمرارية العمليات التعدينية بدون انقطاع وبأعلى مستويات الأمان والكفاءة، وتعتبر خدمات الصيانة لدينا عاملاً أساسيًا في تحقيق رؤيتنا لتحقيق الاستدامة والنجاح في صناعة التعدين. </p>
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
			<a href="maintenance.php"><button class="btn-main"> تقديم طلب الخدمة </button></a>
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
				<h3> خدمات الترحيل </h3>
				<p> شركة إكوبيشن للاستثمار المحدودة تقدم خدمات النقل والترحيل الشاملة في قطاع التعدين، حيث نوفر حلول النقل المخصصة والمتكاملة لنقل المواد الخام والمعدات الثقيلة والمنتجات التعدينية بكفاءة وسلامة، وتشمل خدماتنا النقل البري، حيث نقدم الشاحنات والمعدات اللازمة لنقل المواد من وإلى مواقع التعدين بشكل فعال وفي الوقت المناسب، كما نقدم خدمات النقل البحري والجوي للشحنات الكبيرة والمعقدة والمستعجلة، مع الحرص على تقديم هذه الخدمات بأعلى معايير السرعة والجودة والأمان، بالإضافة إلى ذلك، نوفر خدمات الترحيل الداخلي المستمر لرفع ونقل وتحريك المعدات الثقيلة والمواد داخل مواقع التعدين وبين المواقع المختلفة، مع الاهتمام بتوفير حلول متكاملة وفعَّالة لتلبية احتياجات عملائنا بشكل كامل وموثوق. </p>
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
			<a href="deportation.php"><button class="btn-main"> تقديم طلب الخدمة </button></a>
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
				<h3> خدمات أنظمة التتبع </h3>
				<p> نهدف إلى توفير حلول متكاملة لعملائنا، تساهم في تحسين إدارة المعدات والآليات الثقيلة وتعزيز كفاءة العمليات التعدينية، ويتمثل تركيزنا في توفير أنظمة تتبع متقدمة وفعالة، وتثبيتها بدقة عالية، ثم متابعة أدائها وتشغيلها بكفاءة لضمان الاستخدام الأمثل للموارد وتحقيق أقصى قدر من الإنتاجية والسلامة، وتعتبر هذه الخدمات جزءًا أساسيًا من استراتيجيتنا لتحقيق تطلعات عملائنا وتلبية احتياجاتهم بشكل موثوق ومتميز في مجال صناعة التعدين. </p>
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
				<h3> خدمات تأسيس مشاريع التعدين </h3>
				<p> شركة إكوبيشن للاستثمار المحدودة متخصصة في تأسيس مشاريع التعدين، حيث تقدم خبرة واسعة وخدمات متكاملة للعملاء في هذا القطاع، وتتمثل رؤيتنا في تقديم حلول مبتكرة ومستدامة لبناء وتشغيل المشاريع التعدينية بكفاءة عالية، مما يضمن الحصول على أقصى قيمة مضافة من الموارد الطبيعية وتحقيق النجاح الاقتصادي والبيئي، كما نلتزم بالجودة والاحترافية في كل مرحلة من مراحل عملية تأسيس المشاريع، ونسعى جاهدين لتحقيق رضا العملاء وتحقيق أهدافهم بشكل موثوق ومستدام. </p>
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