<?php 

if($_SESSION['lang'] == 'en'){
include 'lang/en.php';  
}else{
include 'lang/ar.php';  
}

?>
<div id="topbar">
 	<div class="container d-flex justify-content-between">
 		<div class="contact-info d-flex align-items-center">

 		<i class="bi bi-phone"></i> <img style="width: 17px;margin-bottom: 4px;" src="images/header/phone.png"/> +249912322447   

        <img style="width: 25px;margin-bottom: -3px;" src="images/header/masseg.png"/> <a href="mailto:contact@example.com"> info@equpation.sd </a>
        
        <a href="index.php?lang=en" class="linkedin" style="padding: 5px;margin: 5px;"> <img src="images/header/world.png"/> Eng </i></a> 
        <a href="index.php?lang=ar" class="linkedin" style="padding: 5px;margin: 5px;"> Ara <img src="images/header/arabic.png"/></i></a>

 		</div>
 	</div>
 </div>

  <header id="headerr">
    <div class="container d-flex align-items-center">

      <nav id="navbar" class="navbar order-last order-lg-0">



      	  <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php"><?php echo _home; ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="aboutus.php"><?php echo _about; ?></a></li>
              <li class="dropdown"><a href="#"><span> <?php echo _our_services; ?> </span>  <i class="bi bi-chevron-down"></i></a>
          <ul>
    <li> <a href="services.php?id=construct"> 
      <?php echo _services_list_part1; ?></a>
    </li>
    <li><a href="services.php?id=tracking">
      <?php echo _services_list_part2; ?></a> 
    </li>
    <li><a href="services.php?id=transport">
      <?php echo _services_list_part3; ?></a> 
   </li>
   <li><a href="services.php?id=maintenance">
      <?php echo _services_list_part4; ?></a> 
   </li>
    <li><a href="services.php?id=employement">
      <?php echo _services_list_part5; ?></a> 
   </li>
    <li> <a href="services.php?id=rental"> 
      <?php echo _services_list_part6; ?></a>
    </li>
    <li> <a href="services.php?id=opration"> 
      <?php echo _services_list_part7; ?></a>
    </li>
    <li> <a href="services.php?id=contract"> 
      <?php echo _services_list_part8; ?></a>
    </li>
  </ul>
          </li>
              <li><i class="bx bx-chevron-right"></i> <a href="workfields.php"> <?php echo _work_fildes; ?> </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="news.php"> <?php echo _news; ?> </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contactus.php"><?php echo _contact; ?> </a></li>
              <li style="text-align: right;"><button class="btn-main"> إستعلام وإستفسار >> </button></li>
            </ul>

       <!--  <ul> 
          <li><a class="nav-link scrollto active" href="index.php#hero">الرئيسية</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">من نحن</a></li>
          <li><a class="nav-link scrollto" href="index.php#departments">الخدمات</a></li>
          <li><a class="nav-link scrollto" href="index.php#services"> مجالات عملنا </a></li>
          <li><a class="nav-link scrollto" href="index.php#parenter"> شركائنا </a></li>
          <li><a class="nav-link scrollto" href="index.php#cleints"> عملاءنا</a></li>
          <li><a class="nav-link scrollto" href="store.php">
            الاسطول
          <li class="dropdown"><a href="#"><span> تقديم طلب </span>  <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="contract_request.php">طلب مقاولة</a></li>
              <li><a href="rental_request.php">طلب تأجير</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="job_request.php">طلب توظيف</a></li>
              <li><a href="run_request.php">طلب تشغيل</a></li>
              <li><a href="maintenance_request.php">طلب صيانة</a></li>
              <li><a href="deportation_request.php">طلب ترحيل</a></li>
              
    
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="notofication_request.php">رفع بلاغ او شكوى</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">تواصل معنا</a></li>
           
           <?php
           if(isset($_SESSION['cart']))
          {
           ?>

          <a href="cart.php" style='border:none;'>
          <div id="cart" class="icon" style='padding: 10px;color:#123;'> <span style='background-color:red;color:#fff;border-radius:50px;padding:6px;margin:5px;'><b> <?php

          echo sizeof($_SESSION['cart']) / 3 ;

          ?> </b></span> <i style="width:100px;" class="fa fa-shopping-cart"></i></div>
          </a>
          <?php
          }
          else
          {
          ?>
          <a href="#" style='border:none;'>
          <div class="icon" style='padding: 10px;color:#123;'> <span style='background-color:red;color:#fff;border-radius:50px;padding:6px;margin:5px;'><b> <?php

          echo '0' ;

          ?> </b></span> <i style="width:100px;" class="fa fa-shopping-cart"></i></div>
          </a>
          <?php
          }
          ?>
        </ul -->

        <i class="bi bi-list mobile-nav-toggle"></i>



      </nav><!-- .navbar -->
   <div  style="background-color: #fff;padding: 0px;width: 100%;text-align: right;">
		<?php if($_SESSION['lang'] == "ar"){ ?>
    <img style="float: left;"  src="images/logo/logo-right.jpg" width="180" height="100%">
    <?php }else{ ?>
    <img style="float: right;" src="images/logo/logo-left.jpg" width="180" height="100%">
    <?php } ?>
	</div>

 <!--      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->

         

    </div>
  </header><!-- End Header -->

<header id="header">
<div id="top">

	<div class="row">

		<div  class="col-lg-2">
			<a href="#"> info@equpation.sd <img style="width: 25px;margin-bottom: -3px;" src="images/header/masseg.png"/></a>
		</div>

		<div  class="col-lg-2">
			<a href="#">  00956-247457745 <img style="width: 17px;margin-bottom: 4px;" src="images/header/phone.png"/> </a>
		</div>

		<div style="text-align: right;" class="col-lg-6">
			7:301m - 4:30pm <img style="margin-bottom: 4px;" src="images/header/clock.png"/>
		</div>

		<div class="col-lg-1">
			<a href="index.php?lang=en"> <img src="images/header/world.png"/> EN </a>
		</div>

		<div class="col-lg-1">
			<a href="index.php?lang=ar"> <img src="images/header/Arabic.png"/> العربية</a>
		</div>
		
	</div>


</div>

<!-- <hr style="color: gray;background-color: gray;" /> -->

<div class="bottom">

<div class="row">

	<div class="col-lg-2" style="background-color: #fff;padding: 0px;">
    <?php if($_SESSION['lang'] == "ar"){ ?>
		<img src="images/logo/logo-right.jpg" width="180" height="100%">
    <?php }else{ ?>
    <img style="float: right;" src="images/logo/logo-left.jpg" width="180" height="100%">
    <?php } ?>
	</div>

	<div class="col-lg-8">
		    <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php"><?php echo _home; ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="aboutus.php"><?php echo _about; ?></a></li>
              <li><i class="bx bx-chevron-right" onclick="fun();" id="service-togle"></i> <a onclick="fun();" href="#"><?php echo _our_services; ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="workfields.php"><?php echo _work_fildes; ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="news.php"> <?php echo _news; ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contactus.php"><?php echo _contact; ?></a></li>
            </ul>
	</div>

	<div class="col-lg-2">
		<button  type="button" class="btn-main" > إستعلام وإستفسار </button>
	</div>
		
	</div>

</div>

</header>

<section id="services_list">
	<ul>
		<li> <a href="services.php?id=construct"> 
      <?php echo _services_list_part1; ?></a>
    </li>
		<li><a href="services.php?id=tracking">
      | <?php echo _services_list_part2; ?></a> 
    </li>
		<li><a href="services.php?id=transport">
      | <?php echo _services_list_part3; ?></a> 
   </li>
	 <li><a href="services.php?id=maintenance">
      | <?php echo _services_list_part4; ?></a> 
   </li>
		<li><a href="services.php?id=employement">
      | <?php echo _services_list_part5; ?></a> 
   </li>
		<li> <a href="services.php?id=rental"> 
      | <?php echo _services_list_part6; ?></a>
    </li>
		<li> <a href="services.php?id=opration"> 
      | <?php echo _services_list_part7; ?></a>
    </li>
		<li> <a href="services.php?id=contract"> 
      | <?php echo _services_list_part8; ?></a>
    </li>
	</ul>
  <hr/>
</section>

<div class="modal fade" id="form_modal" aria-hidden="true">
<div class="modal-dialog">
  <form method="POST" action="#">
    <h3 align="center"> إضافة عميل جديد </h3>
  </form>
</div>
</div>


	<!-- <div class="modal fade" id="form_modal" aria-hidden="true">
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
 -->

<script type="text/javascript">
	function fun(argument) {
		$("#services_list").toggle();
	}
</script>

