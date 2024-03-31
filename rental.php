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
<title> أيكوبيشن > الخدمات >  خدمة التأجير </title>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=0.7" name="viewport">
<link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>
<?php
if($_SESSION['lang'] == "ar"){ ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php }elseif ($_SESSION['lang'] == "en") {?>
<link rel="stylesheet" type="text/css" href="css/style-eng.css">
 <?php } ?>
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link href="vendor/css/style.css" rel="stylesheet"/>
</head>
<script type="text/javascript">
      // deal with period  
     function select_period(){
     var type = document.getElementById("duration").value;
      if(type == "hand"){
      document.getElementById("durationhide").style.display = "block";
      }else{
      document.getElementById("durationhide").value = "";
      document.getElementById("durationhide").style.display = "none";
      }
   }

   //deal with hour
   function select_hour(){
     var type = document.getElementById("month_rent").value;
      if(type == "false"){
      document.getElementById("hour_num").style.display = "block";
      }else{
      document.getElementById("hour_num").value = "0";
      document.getElementById("hour_num").style.display = "none";
      }
   }

  //deal with hour of day
   function select_hourday(){
     var type = document.getElementById("work_hours").value;
      if(type == "hand"){
      document.getElementById("work_hourshide").style.display = "block";
      }else{
      document.getElementById("work_hourshide").value = "";
      document.getElementById("work_hourshide").style.display = "none";
      }
   }


  // deal with filed
    function select_work_field(){
     var type = document.getElementById("work_field").value;
      if(type == "hand"){
      document.getElementById("work_fieldhide").style.display = "block";
      }else{
      document.getElementById("work_fieldhide").value = "";
      document.getElementById("work_fieldhide").style.display = "none";
      }
   }


    // deal with old
    function select_old(){
     var type = document.getElementById("site_age").value;
      if(type == "old"){
      document.getElementById("oldhide").style.display = "block";
      }else{
      document.getElementById("start_date").value = "";
      document.getElementById("oldhide").style.display = "none";
      }
   }


      // deal with location side
   function select_side(){
     var type = document.getElementById("categ").value;
      if(type == "company"){
      document.getElementById("company").style.display = "block";
      }else{
      document.getElementById("company").value = "";
      document.getElementById("company").style.display = "none";
      }
   }

   // deal with work with us 
   function select_wwus(){
     var type = document.getElementById("wwus").value;
      if(type == "yes"){
      document.getElementById("wwushide").style.display = "block";
      }else{
      document.getElementById("wwushide").value = "";
      document.getElementById("wwushide").style.display = "none";
      }
   }
</script>
<body>

<?php include 'header.php'; ?>

<section id="pointer">
	<img src="images/pointer/divider.png"/>
	<a href="index.php"><img style="height: 30px;" src="images/pointer/home.png"></a>
	/ <a href="services.php?id=rental"><b> <?php echo _forms_rental_title; ?> </b></a> / <a href="#"><b> تقديم طلب </b></a>
</section>

<section id="forms">
	<br/><br/>
<div class="container">
  
 <div class="form-head">
   <!--  <img style="width: 100%;height: 100px;" src="../images/hero.jpg"> -->
    <h1 align="center"> <?php echo _forms_rental_title; ?> </h1>
  </div>

<div class="stepwizard col-lg-12">


    <div class="stepwizard-row setup-panel">

      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-warning btn-circle"> <b> 1 </b>  <?php echo _forms_rental_step1; ?> </a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 2 </b> <?php echo _forms_rental_step2; ?>   </a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 3 </b>   <?php echo _forms_rental_step3; ?></a>
      
      </div>

    </div>
  </div>

  <br/>
  <br/>
  
  <form role="form" action="#" method="post">
    <div class="row setup-content" id="step-1">

      <div class=" col-lg-12 col-xs-6 col-md-offset-3">
        <div class="col-md-12">
           
        <div class="alert alert-warning" role="alert">
        <?php echo _forms_massage; ?>
		</div>


     <div class="row">


      <?php if($_SESSION['lang'] == "ar"){ ?>
   <div class="col-md-4 form-group">
               <label> نوع المعدة </label>
                  <select class="form-control mr-1" name="machine_type" id="machine_type" >
                    <option value="" disabled selected> -- اختار نوع المعدة  -- </option>
                    <option value="حفار"> حفار </option>
                    <option value="لوبد">  لوبد </option>
                    <option value="لودر">  لودر </option>
                    <option value="دوزر">  دوزر </option>
                    <option value="فوركلفت">  فوركلفت </option>
                    <option value="درداقة">  درداقة </option>
                    <option value="كرين">  كرين </option>
                    <option value="تنكر ماء ">  تنكر ماء </option>
                    <option value="قريدر">  قريدر </option>
                    <option value=" تانكر جاز">   تانكر جاز </option>
                    <option value="سطحة">  سطحة </option>
                    <option value="مولد">  مولد </option>
                    <option value="ماكينة تخريم">  ماكينة تخريم </option>
                  </select>
                </div>
  <?php }else{ ?>
 <div class="col-md-4 form-group">
                Equipment type:  <br/>
                
                  <select class="form-control mr-1" name="machine_type" id="machine_type" >
                    <option value="" disabled selected> --   Choose  -- </option>
                    <option value="Digger"> Digger </option>
                    <option value="LOBID">  LOBID </option>
                    <option value="Loader">  Loader </option>
                    <option value="Dozer">  Dozer </option>
                    <option value="Forklift">  Forklift </option>
                    <option value="Checkout">  Checkout </option>
                    <option value="Crane">  Crane </option>
                    <option value=" Water Disguise ">   Water Disguise </option>
                    <option value="reader">  reader </option>
                    <option value="  Tanker Jazz">    Tanker Jazz </option>
                    <option value="Flat">  Flat </option>
                    <option value="generator">  generator </option>


                  </select>
                </div>

  <?php } ?>
   
              


                <div class="form-group col-md-4">
        <label>    <?php echo _forms_rental_step4; ?></label>
         <input type="number" class="form-control" id="inputDate" name="requested_number"  />
         
      </div>

      <div class="form-group col-md-4">
        <label>    <?php echo _forms_rental_step5; ?></label>
         <input type="text" class="form-control" id="inputDate" name="size_machine"  />
         
      </div>

 

          
              </div>
     <!-- Start Input Start Time -->
     <div class="row">


           <?php if($_SESSION['lang'] == "ar"){ ?>
   <div class="col-md-3 form-group mt-3 mt-md-0">
                <label>مدة العمل الكلية</label>
                  <select class="form-control mr-1" name="duration" id="duration" onchange="select_period();" required>
                    <option value="" disabled selected> --  اختار   -- </option>
                    <option value="month"> شهر </option>
                    <option value="3month"> 3 شهور  </option>
                    <option value="year"> سنه </option>
                    <option value="hand">  يدوي </option>
                  </select>

                  <input id="durationhide" name="durationhide" type="text" class="form-control" placeholder=" ادخل المدة  يدويا " style="display: none;">

                </div>


                    <div class="col-md-3 form-group mt-3 mt-md-0">
                 <label>نوع العقد:</label>
                  <select class="form-control mr-1" name="type_contract" id="month_rent" onchange="select_hour();"  required>
                    <option value="" disabled selected> -- اختار   -- </option>
                    <option value="عقد بالساعات ">  عقد بالساعات  </option>
                    <option value="عقد بالإنتاج">  عقد بالإنتاج </option>
                  </select>

                  <input id="hour_num" name="hour_num" type="text" class="form-control" placeholder=" ادخل عدد  الساعات " style="display: none;">
                </div>

     <div class="form-group col-md-3">
        <label>ساعات العمل اليومية </label>

          <select class="form-control mr-1" id="work_hours" name="work_hours" onchange="select_hourday();"  required >
            <option value="" disabled selected> --اختار  -- </option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="20">20</option>
            <option value="hand"> ادخال يدوي </option>
          </select>

          <input id="work_hourshide" name="work_hourshide" type="text" class="form-control" placeholder=" ادخل عدد الساعات يدوي "   style="display: none;">
        
      </div>

  <?php }else{ ?>

         <div class="col-md-3 form-group mt-3 mt-md-0">
                DURATION <br/>
                  <select class="form-control mr-1" name="duration" id="duration" onchange="select_period();" required>
                    <option value="" disabled selected> --  Choose the duration  -- </option>
                    <option value="month"> month </option>
                    <option value="3month"> 3 month  </option>
                    <option value="year"> year </option>
                    <option value="hand">  Manual entry </option>
                  </select>

                  <input id="durationhide" name="durationhide" type="text" class="form-control" placeholder="    Manual entry " style="display: none;">

                </div>

                    <div class="col-md-3 form-group mt-3 mt-md-0">
                Type of Contract: <br/>
                  <select class="form-control mr-1" name="type_contract" id="month_rent" onchange="select_hour();"  required>
                    <option value="" disabled selected> -- Choose   -- </option>
                    <option value=" Hourly contract "> Hourly contract </option>
                    <option value=" Production contract"> Production contract </option>
                  </select>

                  <input id="hour_num" name="hour_num" type="text" class="form-control" placeholder=" ادخل عدد  الساعات " style="display: none;">
                </div>
           <div class="form-group col-md-3">
        <label>DAILY WORK HOURS   </label>
          <select class="form-control mr-1" id="work_hours" name="work_hours" onchange="select_hourday();" required>
            <option value="" disabled selected> -- Choose  -- </option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="20">20</option>
            <option value="hand"> manual entry  </option>
          </select>
          <input id="work_hourshide" name="work_hourshide" type="text" class="form-control" placeholder="  manual entry Hour   " style="display: none;">
      </div>



  <?php } ?>

         

           


      <div class="form-group col-md-3">
        <label>  <?php echo _forms_rental_step6; ?></label>
         <input type="date" class="form-control" id="inputDate" name="work_date"  required />
         
      </div>
      </div>


           <?php if($_SESSION['lang'] == "ar"){ ?>
        <div style="text-align: left;">
          <button class="btn btn-warning nextBtn btn-lg" type="button"> تأكيد وإستمرار <i class="icon-arrow-left"></i> </button>
        </div>
        <?php }else{ ?> 
        <div style="float: right;">
          <button class="btn btn-warning nextBtn btn-lg" type="button">  <i class="icon-arrow-right"></i> Confirm and continue  </button>
        </div>
        <?php } ?> 

        </div>
      </div>
    </div>


    
    <div class="row setup-content" id="step-2">
      <div class="col-lg-12 col-xs-6 col-md-offset-3">
        <div class="col-md-12">

       <div class="alert alert-warning" role="alert">
       <?php echo _forms_massage; ?>
    </div>

    <?php if($_SESSION['lang'] == "ar"){ ?>
       <div class="row">
        <div class="col-md-4 form-group">


          <label>   الولاية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="state" name="state" required>
               <option value="" disabled selected> -- حدد  الولاية -- </option>
               <option value="ولاية الخرطوم">ولاية الخرطوم </option>
               <option value="ولاية الجزيرة">ولاية الجزيرة</option>
               <option value="ولاية البحر الأحمر">ولاية البحر الأحمر </option>
               <option value="ولاية كسلا">ولاية كسلا </option>
               <option value="ولاية القضارف">ولاية القضارف </option>
               <option value="ولاية سنار">ولاية سنار </option>
               <option value="ولاية النيل الأبيض">ولاية النيل الأبيض </option>
               <option value="ولاية النيل الأزرق">ولاية النيل الأزرق </option>
               <option value="الولاية الشمالية">الولاية الشمالية </option>
               <option value="ولاية نهر النيل">ولاية نهر النيل </option>
               <option value="ولاية غرب كردفان">ولاية غرب كردفان </option>
               <option value="ولاية جنوب كردفان">ولاية جنوب كردفان </option>
               <option value="ولاية شمال دارفور">ولاية شمال دارفور </option>
               <option value="ولاية غرب دارفور">ولاية غرب دارفور </option>
               <option value="ولاية جنوب دارفور">ولاية جنوب دارفور </option>
               <option value="ولاية شرق دارفور">ولاية شرق دارفور </option>
               <option value="ولاية وسط دارفور">ولاية وسط دارفور </option>


             </select>
           </div>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <br/>
          <input type="text" class="form-control" name="region" id="region" placeholder="   ادخل اقرب مدينة" "  required>
        </div>

        <div class="form-group col-md-4">
          <br/>
            <input type="text" class="form-control" name="distance" id="distance" placeholder="     مسافة أقرب طريق معبَّد  "  required>
          </div>
      </div>

      <div class="row">
       
        <div class="col-md-4 form-group mt-3 mt-md-0">
             ,<label>مجال العمل </label>
                  <select class="form-control mr-1" name="work_field" id="work_field" onchange="select_work_field();"  required>
                    <option disabled selected> -- اختار المدة  -- </option>
                    <option> التعدين </option>
                    <option>  الاسمنت </option>
                    <option>  الزراعة </option>
                    <option value="hand">  ادخال يدوي </option>
                  </select>

                  <input id="work_fieldhide" name="work_fieldhide" type="text" class="form-control" placeholder=" ادخل مجال العمل  يدويا " style="display: none;">
          </div>

         

         <div class="form-group col-md-4">
           <label>  عمر الموقع </label>
             <select class="form-control mr-1" id="site_age" name="site_age" onchange="select_old();" required >
               <option value="" disabled selected> -- اختار عمر الموقع -- </option>
               <option value="new"> جديد </option>
               <option value="old"> قديم </option>
             </select>
             <!-- <span id="oldhide" style="display: none;">
              حدد تاريخ بداية العمل :  <br/>
             <input type="date" name="start_date" class="form-control" placeholder=" تاريخ بداية العمل " >
            </span>       -->
         </div>
              </div>


          <div class="row">

      
          
          <div class="form-group col-md-4">
           <label> يتوفر السكن في الموقع بجودة  </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_a" name="site_a" required >
               <option value="" disabled selected> -- حدد   -- </option>
               <option value="السكن ممتاز "> ممتازة </option>
               <option value="السكن عادية"> عادية </option>
               <option value="السكن سيئة"> سيئة </option>
               <option value="السكن لا يتوفر "> لايتوفر </option>

             </select>
           </div>
         </div>


          <div class="form-group col-md-4">
           <label> تتوفر الإعاشه في الموقع بجودة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_b" name="site_b" required >
               <option value="" disabled selected> -- حدد مستوي الاعاشة -- </option>
               <option value="الإعاشه ممتازة"> ممتازة </option>
               <option value="الإعاشه عادية"> عادية </option>
               <option value="الإعاشه سيئة"> سيئة </option>
               <option value="الإعاشه لا يتوفر "> لايتوفر </option>

             </select>
           </div>
         </div>

                 <div class="form-group col-md-4">
           <label> مدي توفر شبكه الاتصالات في الموقع  </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_d" name="site_d"  required>
               <option value="" disabled selected> -- حدد   -- </option>
               <option value="  تتوفر في الموقع "> تتوفر في الموقع </option>
               <option value="   لا تتوفر في الموقع ">  لا تتوفر في الموقع </option>

               <option value="  تتوفر علي بعد مسافه يمكن الذهاب اليها بالأرجل  ">  تتوفر علي بعد مسافه يمكن الذهاب اليها بالأرجل </option>
               <option value="تتوفر عن طريق الذهاب اليها بالسيارة   ">   تتوفر عن طريق الذهاب اليها بالسيارة</option>


             </select>
           </div>
         </div>


       </div>


       <div class="row">
            

         <div class="form-group col-md-4">
           <label> الانترنت </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_c" name="site_c" required >
               <option value="" disabled selected> -- حدد توفر الانترنت -- </option>
               <option value="الانترنت متوفر"> متوفر </option>
               <option value="الانترنت غير متوفر"> غير متوفر </option>
             </select>
           </div>
         </div>
            
 

         <div class="col-md-4 form-group mt-3 mt-md-0">
              <label>    نوع الشبكه المتوفره </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="network" required>
               <option value="" disabled selected> -- حدد   -- </option>
               <option value="زين"> زين  </option>
               <option value=" سوداني">  سوداني</option>
               <option value=" ام تي إن">  ام تي إن</option>
               <option value=" سوداني و زين ">  سوداني و زين  </option>
               <option value=" زين و إم تي إن ">  زين و إم تي إن </option>
               <option value=" سوداني و إم تي إن ">  سوداني و إم تي إن </option>
             </select>
           </div>
          </div>

          <div class="form-group col-md-4">
           <label>  الورشة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_e" name="site_e"  required>
               <option value="" disabled selected> -- حدد توفر الورشة -- </option>
               <option value="الورشة متوفرة"> متوفرة </option>
               <option value="الورشة غير متوفرة"> غير متوفرة </option>
             </select>
           </div>
         </div>

          </div>

          <div class="row">


          <div class="form-group col-md-4">
           <label> الكمبرسون </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_f" name="site_f" required >
               <option value="" disabled selected> -- هل يوجد كمبرسون -- </option>
               <option value="يوجد الكمبرسون"> يوجد </option>
               <option value="لا يوجد الكمبرسون"> لا يوجد </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> الجاز </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_g" name="site_g" required >
               <option value="" disabled selected> -- حدد توفر الجاز -- </option>
               <option value="الجاز متوفر"> متوفر </option>
               <option value="الجاز غير متوفر"> غير متوفر </option>
             </select>
           </div>
         </div>
            

           <div class="form-group col-md-4">
           <label> المياة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_h" name="site_h" required >
               <option value="" disabled selected> -- حدد توفر المياة   -- </option>
               <option value="المياة متوفرة"> متوفرة </option>
               <option value="المياة غير متوفرة "> غير متوفرة  </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> الكهرباء </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_i" name="site_i"  >
               <option value="" disabled selected> -- حدد توفر الكهرباء -- </option>
               <option value="الكهرباء متوفرة"> متوفرة </option>
               <option value="الكهرباء غير متوفرة"> غير متوفرة  </option>
             </select>
           </div>
         </div>
          </div>


  

	<?php }else{ ?>

   <div class="row">
        <div class="col-md-4 form-group">

        <label>  states  </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="state" name="state" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option value="Khartoum"> Khartoum </option>
               <option value=" North Kordofan"> North Kordofan </option>
               <option value="Northern"> Northern </option>
               <option value="Kassala"> Kassala </option>
               <option value="Blue Nile"> Blue Nile </option>
               <option value="North Darfur "> North Darfur  </option>
               <option value="South Darfur "> South Darfur  </option>
               <option value="South Kordofan "> South Kordofan  </option>
               <option value="Gezira"> Gezira </option>
               <option value="White Nile "> White Nile  </option>
               <option value="River Nile "> River Nile  </option>
               <option value="Red Sea"> Red Sea </option>
               <option value="Al Qadarif "> Al Qadarif  </option>
               <option value="Sennar"> Sennar </option>
               <option value="West Darfur "> West Darfur  </option>
               <option value="Central Darfur "> Central Darfur  </option>
               <option value="East Darfur "> East Darfur  </option>
               <option value="West Kordofan"> West Kordofan </option>
             </select>
           </div>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <br/>
          <input type="text" class="form-control" name="region" id="region" placeholder="Enter the nearest city" required>
        </div>

        <div class="form-group col-md-4">
          <br/>
       <input type="text" class="form-control" name="distance" id="distance" placeholder=" Distance to nearest paved road " required>
          </div>
      </div>

      <div class="row">
       
        <div class="col-md-4 form-group mt-3 mt-md-0">
        WORK FIELD <br/>
                  <select class="form-control mr-1" name="work_field" id="work_field" onchange="select_work_field();" required>
                    <option disabled selected> -- Choose   -- </option>
                    <option> mining </option>
                    <option>  cement </option>
                    <option>  agricultural </option>
                    <option value="hand">   manual entry </option>
                  </select>

                  <input id="work_fieldhide" name="work_fieldhide" type="text" class="form-control" placeholder="   manual entry " style="display: none;">
          </div>
     

         <div class="form-group col-md-4">
           <label>   SITE AGE </label>
             <select class="form-control mr-1" id="site_age" name="site_age" onchange="select_old();" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="new"> new </option>
               <option value="old"> old </option>
             </select>
             <span id="oldhide" style="display: none;">
             work starting date (manual entry/calendar) :  <br/>
             <input type="date" name="start_date" class="form-control" placeholder="   work starting date (manual entry/calendar) " >
            </span>      
         </div>


  <div class="form-group col-md-4">
           <label> living </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_a" name="site_a" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="living is excellent"> excellent </option>
               <option value="living is Standard"> Standard </option>
               <option value="living is Bad "> Bad  </option>
               <option value="living is not available "> not available  </option>

             </select>
           </div>
         </div>

              </div>


          <div class="row">
          <br/>
         
          
        

          <div class="form-group col-md-4">
           <label> subsistence </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_b" name="site_b" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="subsistence is excellent"> excellent </option>
               <option value="subsistence is Standard"> Standard </option>
               <option value="subsistence is Bad"> Bad </option>
               <option value="subsistence is not available "> not available  </option>

             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> internet </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_c" name="site_c" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="internet is available"> available </option>
               <option value="internet is not available"> not available </option>
             </select>
           </div>
         </div>
           <div class="form-group col-md-4">
           <label>   network    </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_d" name="site_d" required>
               <option value="" disabled selected> --  Choose  -- </option>
               <option value="communication is available"> available </option>
               <option value="communication is not available">  not available </option>
               <option value="communication is Available within walking distance">  Available within walking distance </option>
               <option value="communication is Available by car">  Available by car </option>


               
             </select>
           </div>
         </div>
            
          </div>

       <div class="row">
            
      

         <div class="col-md-4 form-group mt-3 mt-md-0">
              <label>  Network type </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="network" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option value="Zain"> Zain  </option>
               <option value="MTN"> MTN  </option>
               <option value="Sudanese"> Sudanese  </option>
               <option value="Sudanese and Zain"> Sudanese and Zain  </option>
               <option value="Zain and MTN"> Zain and MTN  </option>
               <option value="Sudanese and MTN"> Sudanese and MTN  </option>

             </select>
           
           </div>

          </div>

         <div class="form-group col-md-4">
           <label>  workshop </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_e" name="site_e" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="workshop is available"> available </option>
               <option value="workshop is not available">   not available </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> compressor </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_f" name="site_f" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="compressor is available"> available </option>
               <option value="compressor is not available"> not available  </option>
             </select>
           </div>
         </div>

          </div>

          <div class="row">

          <div class="form-group col-md-4">
           <label> fuel </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_g" name="site_g" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="fuel is available"> available </option>
               <option value="fuel is not available"> not available </option>
             </select>
           </div>
         </div>
            

           <div class="form-group col-md-4">
           <label> water </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_h" name="site_h" required>
               <option value="" disabled selected> --   Choose   -- </option>
               <option value="water is available"> available </option>
               <option value="water is not available "> not available   </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> electricity </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="site_i" name="site_i" required>
               <option value="" disabled selected> --   Choose -- </option>
               <option value="electricity is available"> available </option>
               <option value="electricity is not available">  not available  </option>
             </select>
           </div>
         </div>
          </div>

	<?php } ?>


      <br/>

             <?php if($_SESSION['lang'] == "ar"){ ?>
          <div style="text-align: left;">
          <button class="btn btn-warning nextBtn btn-lg pull-left" type="button"> تأكيد وإستمرار <i class="icon-arrow-left"></i> </button>
          <button class="btn btn-warning prevBtn btn-lg pull-left" type="button"> <i class="icon-arrow-right"></i> السابق  </button>
          </div>
          <?php }else{ ?>
          <div style="float: right;">
          <button class="btn btn-warning prevBtn btn-lg pull-left" type="button">  Previous <i class="icon-arrow-left"></i> </button>
          <button class="btn btn-warning nextBtn btn-lg pull-left" type="button"> <i class="icon-arrow-right"></i> Confirm & Contenue  </button>
          </div>
          <?php } ?>
          
        </div>
      </div>
    </div>

















    <div class="row setup-content" id="step-3">
      <div class=" col-lg-12 col-xs-6 col-md-offset-3">

      <div class="row">

                <div class="col-md-4 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="  <?php echo _forms_oprations_step3_f1; ?>      " required>
                </div>

                <div class="col-md-4 form-group">
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="    <?php echo _forms_oprations_step3_f2; ?>      " required>
                </div>

                <div class="col-md-4 form-group">
                  <input type="text" name="whatsapp_num" class="form-control" id="whatsapp_num" placeholder="    <?php echo _forms_oprations_step3_f3; ?>    " required>
                </div>

              </div>



<?php if($_SESSION['lang'] == "ar"){ ?>
   <div class="row">

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label></label>
                  <input type="text" class="form-control" name="email" id="email" placeholder=" <?php echo _forms_oprations_step3_f4; ?>  " required >
                </div>



                <div class="col-md-4 form-group mt-3 mt-md-0">
                <label>نوع العلاقه بالموقع</label>
                <select class="form-control mr-1" name="job" id="job" onchange="" required>
                <option value="" disabled selected> -- اختار  -- </option>
                <option value="مالك"> مالك   </option>
                <option value="شريك"> شريك </option>
                <option value="مدير"> مدير </option>
                <option value="موظف"> موظف </option>
                <option value="مشرف"> مشرف </option>
                <option value="وكيل"> وكيل </option>
                <option value="وسيط"> وسيط </option>
                </select> 
                </div>

              <div class="col-md-4 form-group">
                <label> الجهة التابع لها </label> 
                <select class="form-control mr-1" name="categ" id="categ" onchange="select_side();"  required>
                <option value="" disabled selected> -- اختار  -- </option>
                <option value="company"> شركة </option>
                <option value="personal"> فرد </option>
                </select>  
                <input id="company" name="company" type="text" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
              </div>

              </div>

              <div class="row">

   

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <label> هل  سبق لك العمل معنا </label> 
                <select class="form-control mr-1" name="work" id="work" onchange="select_wwus();" required >
                <option value="" disabled selected> -- اختار الاجابة -- </option>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
                </select>

               <!-- <input id="wwushide" type="text" class="form-control" placeholder=" في اي موقع عملت معنا " style="display: none;" /> -->
               <!--   style="display:none" -->
               
              

              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2">طريقة التعرف علينا</label>
              <select  class="form-control" id="exampleFormControlSelect2" name="know">
                <option value="friend"> عن طريق صديق </option>
                <option value="social"> وسائل التواصل </option>
                <option value="tv"> التلفزيون </option>
                <option value="radio"> الراديو </option>
                <option value="ads"> الاعلانات  </option>
                <option value="other">  اخرى  </option>
              </select>
              </div>
             </div>

              </div>
 
  <?php }else{ ?>

  <div class="row">


                <div class="col-md-4 form-group mt-3 mt-md-0">
                <label>   </label> 
                  <input type="email" class="form-control" name="email" id="email" placeholder=" EMAIL " required>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                <label>     Type of relationship to the site </label> 
                <select class="form-control mr-1" name="job" id="job" onchange="" required>
                <option value="" disabled selected> --  Choose -- </option>
                <option value="Owner"> Owner   </option>
                <option value="Partner"> Partner </option>
                <option value="Manager"> Manager </option>
                <option value="Employee"> Employee </option>
                <option value="Moderator"> Moderator </option>
                <option value="agent"> agent </option>
                <option value="broker"> broker </option>

                </select>                   </div>

                       <div class="col-md-4 form-group">
                <label>   Your side is </label> 
                <select class="form-control mr-1" name="categ" id="categ" onchange="select_side();" required>
                <option value="" disabled selected> --  Choose -- </option>
                <option value="company"> company </option>
                <option value="personal"> personal </option>
                </select>  
                <input id="company" name="company" type="text" class="form-control" placeholder="Enter company name" style="display: none;" />
              </div>

              </div>

              <div class="row">

       

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <label>  Have you over worked with us :  </label> 
                <select class="form-control mr-1" name="work" id="work" onchange="select_wwus();" required>
                <option value="" disabled selected> --  Choose -- </option>
                <option value="yes"> YES </option>
                <option value="no"> NO </option>
                </select>

               <!-- <input id="wwushide" type="text" class="form-control" placeholder=" workplace  " style="display: none;" /> -->
               
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2">  How to know us : </label>
             <select  class="form-control" id="exampleFormControlSelect2" name="know" required>
                <option value="friend">friend</option>
                <option value="social">social</option>
                <option value="tv">tv</option>
                <option value="radio">radio</option>
                <option value="ads">ads</option>
                <option value="other">other</option>
              </select>
              </div>
             </div>

              </div>
  <?php } ?>
           


      <br/><br/>

            <?php if($_SESSION['lang'] == "ar"){ ?>
      <div style="text-align: left;">
          <button class="btn btn-success btn-lg pull-right" type="submit"> تأكيد إرسال الطلب <i class="icon-check"></i> </button>
           <button class="btn btn-warning prevBtn btn-lg pull-left" type="button"> <i class="icon-arrow-right"></i> السابق </button>
      </div>
      <?php }else{ ?>
        <div style="text-align: left;float: right;">
           <button class="btn btn-warning prevBtn btn-lg pull-left" type="button"> Previous <i class="icon-arrow-left"></i>  </button>
           <button class="btn btn-success btn-lg pull-right" type="submit"> Send Request <i class="icon-check"></i> </button>
      </div>
      <?php } ?>
        </div>
      </div>
    </form></div>

</section>


<img src="images/divider2.png" style="width: 100%;border:none;">
<?php include 'footer.php'; ?>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>