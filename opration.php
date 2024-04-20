<?php 
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
The Opration form page
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
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
<title> أيكوبيشن > الخدمات >  خدمة التشغيل </title>
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
   function select_brand(){
     var type = document.getElementById("brand_id").value;
      if(type == "hand"){
      document.getElementById("brand_idhide").style.display = "block";
      }else{
      document.getElementById("brand_idhide").value = "";
      document.getElementById("brand_idhide").style.display = "none";
      }
   }

    function select_size(){
     var type = document.getElementById("size_id").value;
      if(type == "hand"){
      document.getElementById("size_idhide").style.display = "block";
      }else{
      document.getElementById("size_idhide").value = "";
      document.getElementById("size_idhide").style.display = "none";
      }
   }

   function select_model(){
     var type = document.getElementById("model_id").value;
      if(type == "hand"){
      document.getElementById("model_idhide").style.display = "block";
      }else{
      document.getElementById("model_idhide").value = "";
      document.getElementById("model_idhide").style.display = "none";
      }
   }

  function select_year(){
     var type = document.getElementById("year_of_manufacture_id").value;
      if(type == "hand"){
      document.getElementById("year_of_manufacture_idhide").style.display = "block";
      }else{
      document.getElementById("year_of_manufacture_idhide").value = "";
      document.getElementById("year_of_manufacture_idhide").style.display = "none";
      }
   }

   function select_condition(){
     var type = document.getElementById("condition_id").value;
      if(type == "hand"){
      document.getElementById("condition_idhide").style.display = "block";
      }else{
      document.getElementById("condition_idhide").value = "";
      document.getElementById("condition_idhide").style.display = "none";
      }
   }

  function select_state(){
     var type = document.getElementById("state_id").value;
      if(type == "hand"){
      document.getElementById("state_idhide").style.display = "block";
      }else{
      document.getElementById("state_idhide").value = "";
      document.getElementById("state_idhide").style.display = "none";
      }
   }

   function select_advance(){
     var type = document.getElementById("advance_id").value;
      if(type == "hand"){
      document.getElementById("advance_idhide").style.display = "block";
      }else{
      document.getElementById("advance_idhide").value = "";
      document.getElementById("advance_idhide").style.display = "none";
      }
   }

   function select_catogry(){
     var type = document.getElementById("category_id").value;
      if(type == "hand"){
      document.getElementById("category_idhide").style.display = "block";
      }else{
      document.getElementById("category_idhide").value = "";
      document.getElementById("category_idhide").style.display = "none";
      }
   }

   function select_hourly_work(){
    var variable = document.getElementById("hourly_work_id").value;
    if(variable == "hand" || variable == "handx"){
      document.getElementById("hourly_work_idhide").style.display = "block";
    }else{
      document.getElementById("hourly_work_idhide").value = "";
      document.getElementById("hourly_work_idhide").style.display = "none";
    }
   }

   function select_gorvernment_fees(){
    var variable = document.getElementById("gorvernment_fees_id").value;
    if(variable == "hand" || variable == "handx"){
      document.getElementById("gorvernment_fees_idhide").style.display = "block";
    }else{
      document.getElementById("gorvernment_fees_idhide").value = "";
      document.getElementById("gorvernment_fees_idhide").style.display = "none";
    }
   }

   function select_availablity(){
    var variable = document.getElementById("availability_id").value;
    if(variable == "hand" || variable == "handx"){
      document.getElementById("availability_idhide").style.display = "block";
    }else{
      document.getElementById("availability_idhide").value = "";
      document.getElementById("availability_idhide").style.display = "none";
    }
   }

   function select_hair_operator(){
    var variable = document.getElementById("hair_operator_id").value;
    if(variable == "hand"){
      document.getElementById("hair_operator_idhide").style.display = "block";
    }else{
      document.getElementById("hair_operator_idhide").value = "";
      document.getElementById("hair_operator_idhide").style.display = "none";
    }
   }

   function select_maintenance(){
    var variable = document.getElementById("maintenance_id").value;
    if(variable == "hand" || variable == "handx"){
      document.getElementById("maintenance_idhide").style.display = "block";
    }else{
      document.getElementById("maintenance_idhide").value = "";
      document.getElementById("maintenance_idhide").style.display = "none";
    }
   }

   function select_contracts(){
    var variable = document.getElementById("cotracts_id").value;
    if(variable == "hand"){
      document.getElementById("cotracts_idhide").style.display = "block";
    }else{
      document.getElementById("cotracts_idhide").value = "";
      document.getElementById("cotracts_idhide").style.display = "none";
    }
   }

   function select_clearences(){
    document.getElementById("clearances_idhide").style.display = "block";
   }
</script>
<body>

<?php include 'header.php'; ?>

<section id="pointer">
  <img src="images/pointer/divider.png"/>
  <a href="index.php"><img style="height: 30px;" src="images/pointer/home.png"></a>
  / <a href="services.php?id=opration"><b> <?php echo _forms_oprations_title; ?> </b></a> / <a href="#"><b>   <?php echo _Apply; ?>   </b></a>
</section>

<section id="forms">
  <br/><br/>
<div class="container">
  
 <div class="form-head">
   <!--  <img style="width: 100%;height: 100px;" src="../images/hero.jpg"> -->
    <h1 align="center"> <?php echo _forms_oprations_title; ?> </h1>
  </div>

<div class="stepwizard col-lg-12">



    <div class="stepwizard-row setup-panel">

      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-warning btn-circle"> <b> 1 </b> <?php echo _forms_oprations_step1; ?> </a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 2 </b>  <?php echo _forms_oprations_step2; ?> </a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 3 </b>  <?php echo _forms_oprations_step3; ?> </a>
      
      </div>

    </div>
  </div>

  <br/>
  <br/>
  
  <form role="form" action="success.php" method="post">
    <div class="row setup-content" id="step-1">

      <div class=" col-lg-12 col-xs-6 col-md-offset-3">
        <div class="col-md-12">
           
        <div class="alert alert-warning" role="alert">
      <?php echo _forms_massage; ?>
    </div>

    <div class="row">

       <div class="col-md-6 form-group">
                <label> <?php echo _forms_oprations_step1_f1."TTT"; ?> </label>
                <?php if($_SESSION=="ar"){ ?>
                  <select class="form-control mr-1" name="machine_type" id="machine_type">
                    <option value="" disabled selected> -- </option>
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
                  <?php }else{ ?>
                      <select class="form-control mr-1" name="machine_type" id="machine_type">
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
                 <?php } ?>
                </div>

       <div class="form-group col-md-6">
         <label> <?php echo _forms_oprations_step1_f2; ?> </label>
         <input type="text" class="form-control" id="inputDate" name="size_id"/></div>

        </div>

     <div class="row">

      <div class="form-group col-md-6">
        <label>  <?php echo _forms_oprations_step1_f3; ?> </label>
         <input type="text" class="form-control" id="inputDate" name="brand_id"/></div>

    <div class="form-group col-md-6">
        <label> <?php echo _forms_oprations_step1_f4; ?> </label>
        <input type="text" class="form-control " id="year_of_manufacture_idhide" name="year_of_manufacture_idhide" placeholder="" >     
      </div>

    </div>

    <div class="row">

     <div class="form-group col-md-6">
            <label> <?php echo _forms_oprations_step1_f5; ?> </label>
            <?php if($_SESSION=="ar"){ ?>
            <select class="form-control" id="" name="">
              <option value="" disabled selected> -- </option>
              <option value="ترخيص ساري ">  ترخيص ساري  </option>
              <option value="ترخيص منتهي ">  ترخيص منتهي  </option>
              <option value="غير مرخصة ">   غير مرخصة  </option>
            </select>
            <?php }else{ ?>
             <select class="form-control" id="" name="">
              <option value="" disabled selected> --  </option>
              <option value="valid license">  Valid License </option>
              <option value="expired license">   Expired License  </option>
              <option value="not licensed">   Not Licensed  </option>
            </select>
            <?php } ?>
      </div>

          <div class="form-group col-md-6">
            <label> <?php echo _forms_oprations_step1_f6; ?> </label>
            <?php if($_SESSION=="ar"){ ?>
            <select class="form-control" id="insurance_type" name="insurance_type">
              <option value="" disabled selected> -- </option>
              <option value=".تأمين شامل  ">  .تأمين شامل    </option>
              <option value=".تأمين هندسي  ">   .تأمين هندسي  </option>
              <option value=".تأمين إجباري   ">   .تأمين إجباري   </option>
              <option value=".غير مؤمنة    "> .غير مؤمنة   </option>
            </select>
           <?php }else{ ?>
                <select class="form-control" id="insurance_type" name="insurance_type">
              <option value="" disabled selected> -- </option>
              <option value="full insuarance"> Full Insuarance </option>
              <option value="engineering insuarance"> Engineering Insuarance </option>
              <option value="compulsory Insuarance"> Compulsory Insuarance </option>
              <option value="without insuarance"> Without Insuarance </option>
            </select>
           <?php } ?>
          </div>

      </div>
        

        <div class="row">

      <div class="col-md-6 form-group  mt-3 mt-md-0">  
      <label> <?php echo _forms_oprations_step1_f7; ?> </label>

      <input type="text" id="description" name="description" class="form-control" placeholder="   
 "> <font color="red">  </font> 
          </div> 


        <div class="col-md-6 form-group mt-3 mt-md-0">
              <label> <?php echo _forms_oprations_step1_f8; ?> </label>
              <?php if($_SESSION=="ar"){ ?>
                  <select class="form-control mr-1" name="work_field" id="work_field" onchange="select_work_field();">
                    <option disabled selected> -- </option>
                    <option> التعدين </option>
                    <option>  الاسمنت </option>
                    <option>  الزراعة </option>
                    <!-- <option value="hand">  ادخال يدوي </option> -->
                  </select>
               <?php }else{ ?>
                 <select class="form-control mr-1" name="work_field" id="work_field" onchange="select_work_field();">
                    <option disabled selected> -- </option>
                    <option> mining </option>
                    <option>  cement </option>
                    <option>  agricultural </option>
                    <!-- <option value="hand">  ادخال يدوي </option> -->
                  </select>
               <?php } ?>

                  <!-- <input id="work_fieldhide" name="work_fieldhide" type="text" class="form-control" placeholder=" ادخل مجال العمل  يدويا " style="display: none;"> -->
          </div>
      </div>

      <div class="row"> 
        

          <div class="form-group col-md-6">
          <label> <?php echo _forms_oprations_step1_f9; ?>  </label>
          <?php if($_SESSION=="ar"){ ?>
          <select class="form-control" id="cotracts_id" name="cotracts_id" onchange="select_contracts();">
            <option value="" disabled selected> -- </option>
            <option> لا يوجد قيد </option>
            <option> عقود طويلة (لا تقل عن 12 شهر) </option>
            <option> عقود متوسطة (لا تقل عن 3 شهور)  </option>
            <option> عقود قصيرة (لا تزيد عن شهر)  </option>
            <option value="hand"> اضافة قيد جديد </option>
          </select>
        <input  id="cotracts_idhide" name="cotracts_idhide" type="text" class="form-control" placeholder="حدد القيد" style="display: none;"/>
          <?php }else{ ?>
          <select class="form-control" id="cotracts_id" name="cotracts_id" onchange="select_contracts();">
            <option value="" disabled selected> -- </option>
            <option> none </option>
            <option> long (not less than 12 months) </option>
            <option> medium (not less than 3 months)  </option>
            <option> short ( no more than a month)  </option>
            <option value="hand"> manual entry </option>
          </select>
        <input  id="cotracts_idhide" name="cotracts_idhide" type="text" class="form-control" placeholder="Enter the contract" style="display: none;"/>
          <?php } ?>
        </div>

        <div class="form-group col-md-6">
          <label> <?php echo _forms_oprations_step1_f10; ?>  </label>
          <?php if($_SESSION=="ar"){ ?>
          <select class="form-control" id="state_id" name="state_id" onchange="select_state();">
            <option value="" disabled selected> -- </option>
            <option> لا يوجد قيود </option>
            <option> داخل السودان فقط </option>
            <option> كل ولايات السودان عدا ... </option>
            <option> ولاية محددة .... </option>
            <option value="hand"> اضافة قيد مكان جديد </option>
          </select>
        <input type="text" id="state_idhide" name="state_idhide" class="form-control" placeholder="حدد الولاية" style="display: none;">
          <?php }else{ ?>
              <select class="form-control" id="state_id" name="state_id" onchange="select_state();">
            <option value="" disabled selected> -- </option>
            <option> none </option>
            <option> inside sudan </option>
            <option> all state of sudan except ……… </option>
            <option> specific state….. </option>
            <option value="hand"> add new place </option>
          </select>
        <input type="text" id="state_idhide" name="state_idhide" class="form-control" placeholder="Enter The state" style="display: none;"/>
          <?php } ?>

        </div>

        </div>

        <div class="row">

        <div class="form-group col-md-6">
          <label> <?php echo _forms_oprations_step1_f11; ?>  </label>
          <?php if($_SESSION=="ar"){ ?>
            <select class="form-control mr-1" id="hair_operator_id" name="hair_operator_id" onchange="select_hair_operator();">
               <option value="" disabled selected> -- </option>
               <option> تعيين بواسطة إكوبيشن </option>
               <option> تعيين بواسطتي </option>
               <option value="hand"> إضافة قيد جديد </option>
             </select>
        <input id="hair_operator_idhide" name="hair_operator_idhide" type="text" class="form-control" placeholder=" حدد القيد  " style="display: none;">
        <?php }else{ ?>
         <select class="form-control mr-1" id="hair_operator_id" name="hair_operator_id" onchange="select_hair_operator();">
               <option value="" disabled selected> --  </option>
               <option> by equipation </option>
               <option> by me </option>
               <option value="hand"> manual entry </option>
             </select>
        <input id="hair_operator_idhide" name="hair_operator_idhide" type="text" class="form-control" placeholder="Enter the Maintenance contract" style="display: none;"/>
        <?php } ?>
        </div>


        <div class="form-group col-md-6">
          <label>  <?php echo _forms_oprations_step1_f12; ?> </label>
          <?php if($_SESSION=="ar"){ ?>
          <select class="form-control" id="category_id" name="category_id" onchange="select_catogry();">
            <option value="" disabled selected> -- </option>
            <option> لا قيود في العمل    </option>
            <option>  العمل مع الشركات فقط </option>
            <!-- <option  value="hand"> اضافة قيد جديد </option> -->
          </select>
        <input type="text" id="category_idhide" name="category_idhide" class="form-control" placeholder="حدد القيد" style="display: none;">
        <?php }else{ ?>
          <select class="form-control" id="category_id" name="category_id" onchange="select_catogry();">
            <option value="" disabled selected> -- </option>
            <option>  none    </option>
            <option> companies only </option>
            <!-- <option  value="hand"> اضافة قيد جديد </option> -->
          </select>
        <input type="text" id="category_idhide" name="category_idhide" class="form-control" placeholder="Entry the category " style="display: none;">
        <?php } ?>

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

 <!--       <div class="alert alert-warning" role="alert">
      يرجي ملئ جميع بياات موقع الآلية بشكل صحيح ...
    </div> -->

        <div class="row">

          <div class="form-group col-md-6">
           <label>  <?php echo _forms_oprations_step2_f1; ?> </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
            <?php if($_SESSION=="ar"){ ?>
           <select class="form-control mr-1" id="state_id" name="">
              <option value="" disabled selected> -- </option>
               <option value="ولاية الخرطوم">ولاية الخرطوم </option>
               <option value="ولاية الجزيرة">ولاية الجزيرة</option>
               <option value="ولاية البحر الأحمر">ولاية البحر الأحمر </option>
               <option value="ولاية كسلا">ولاية كسلا </option>
               <option value="ولاية القضارف">ولاية القضارف </option>
               <option value="ولاية سنار">ولاية سنار </option>
               <option value="ولاية النيل الأبيض">ولاية النيل الأبيض </option>
               <option value="ولاية النيل الأزرق">ولاية النيل الأزرق </option>
               <option value="الولاية الشمالية">الولاية الشمالية </option>
               <option value="ولاية نةر النيل">ولاية نةر النيل </option>
               <option value="ولاية غرب كردفان">ولاية غرب كردفان </option>
               <option value="ولاية جنوب كردفان">ولاية جنوب كردفان </option>
               <option value="ولاية شمال دارفور">ولاية شمال دارفور </option>
               <option value="ولاية غرب دارفور">ولاية غرب دارفور </option>
               <option value="ولاية جنوب دارفور">ولاية جنوب دارفور </option>
               <option value="ولاية شرق دارفور">ولاية شرق دارفور </option>
               <option value="ولاية وسط دارفور">ولاية وسط دارفور </option>
             </select>
              <?php }else{ ?>
               <select class="form-control mr-1" id="state_id" name="">
               <option value="" disabled selected> -- </option>
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
             <?php } ?>
             </div>
             
          
         </div>

         <div class="col-md-6 form- mt-3 mt-md-0">
              <br/>
            <input type="text" class="form-control" name="address" id="address" placeholder=" <?php echo _forms_oprations_step2_f2; ?>   ">
          </div>

          </div>

          <div class="row">

          <div class="col-md-6 form- mt-3 mt-md-0">
            <br/>
            <input type="text" class="form-control" name="nearest_road" id="nearest_road" placeholder="<?php echo _forms_oprations_step2_f3; ?>">
          </div>

          <div class="col-md-6 form- mt-3 mt-md-0">
              <label>  <?php echo _forms_oprations_step2_f4; ?> </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
            <?php if($_SESSION=="ar"){ ?>
             <select class="form-control mr-1" id="ready" name="network">
               <option value="" disabled selected>  -- </option>
               <option value="متاح"> متاح  </option>
               <option value="غير متاح"> غير متاح</option>
             </select>
            <?php }else{ ?>
              <select class="form-control mr-1" id="ready" name="network">
                <option value="" disabled selected> -- </option>
               <option value="available"> Available  </option>
               <option value="not_available"> Not Available </option>
             </select>
            <?php } ?>
           
           </div>

          </div>  
      </div>


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

<div class="col-md-6 form-">
  <label></label>
  <input type="text" name="full_name" class="form-control" id="full_name" placeholder="<?php echo _forms_oprations_step3_f1; ?>">
</div>

<div class="col-md-6 form-">
  <label></label>
  <input type="text" name="phone_number" class="form-control" id="phone" placeholder="<?php echo _forms_oprations_step3_f2; ?>">
</div>

</div>

<div class="row">
  
<div class="col-md-6 form-">
  <label></label>
  <input type="text" name="whatsapp_num" class="form-control" id="whatsapp_num" placeholder="<?php echo _forms_oprations_step3_f3; ?>">
</div>

      <div class="col-md-6 form- mt-3 mt-md-0">
                  <label></label>
                  <input type="text" class="form-control" name="email" id="email" placeholder=" <?php echo _forms_oprations_step3_f4; ?> ">
                </div>

</div>

      <div class="row">

                <div class="col-md-6 form-group">
                <label>    <?php echo _forms_oprations_step3_f5; ?> </label> 
                <?php if($_SESSION=="ar"){ ?>
                <select class="form-control mr-1" name="job" id="job" onchange="">
                <option value="" selected disabled> -- </option>
                <option value="مالك"> مالك   </option>
                <option value="شريك"> شريك </option>
                <option value="مدير"> مدير </option>
                <option value="موظف"> موظف </option>
                <option value="مشرف"> مشرف </option>
                <option value="وكيل"> وكيل </option>
                <option value="وسيط"> وسيط </option>
                </select> 
                <?php }else{ ?>
                <select class="form-control mr-1" name="job" id="job" onchange="">
               <option value="" disabled selected> -- </option>
                <option value="Owner"> Owner   </option>
                <option value="Partner"> Partner </option>
                <option value="Manager"> Manager </option>
                <option value="Employee"> Employee </option>
                <option value="Moderator"> Moderator </option>
                <option value="agent"> agent </option>
                <option value="broker"> broker </option>
                </select> 
                <?php } ?>

                  </div>

              <div class="col-md-6 form-">
                <label> <?php echo _forms_oprations_step3_f6; ?> </label> 
                <?php if($_SESSION=="ar"){ ?>
                <select class="form-control mr-1" name="work_for" id="work_for" onchange="select_side();">
                  <option value="" selected disabled> -- </option>
                <option value="company"> شركة </option>
                <option value="individual"> فرد </option>
                </select>  
                <input id="sidehide" type="text" name="company_name" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
                <?php }else{ ?>
                 <select class="form-control mr-1" name="work_for" id="work_for" onchange="select_side();">
                <option value="" disabled selected> -- </option>
                <option value="company"> Company </option>
                <option value="individual"> Individual </option>
                </select>  
                <input id="sidehide" type="text" name="company_name" class="form-control" placeholder="Enter company Name" style="display: none;" />
                <?php } ?>
              </div>  

            </div>




            <div class="row">

              <div class="col-md-6 form- mt-3 mt-md-0">
              <label> <?php echo _forms_oprations_step3_f7; ?> </label> 
              <?php if($_SESSION=="ar"){ ?>
                <select class="form-control mr-1" name="previous" id="previous" onchange="select_wwus();">
                  <option value="" selected disabled> -- </option>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
                </select>
               <input id="wwushide" type="text" class="form-control" placeholder=" في اي موقع عملت معنا " style="display: none;" />
               <?php }else{ ?>
                <select class="form-control mr-1" name="previous" id="previous" onchange="select_wwus();">
                 <option value="" disabled selected> -- </option>
                <option value="yes"> Yes </option>
                <option value="no"> No </option>
                </select>
               <input id="wwushide" type="text" class="form-control" placeholder=" On any construction site with us" style="display: none;" />
                <?php } ?>
              </div>


              <div class="col-md-6 form- mt-3 mt-md-0">
              <div class="form-">
              <label for="exampleFormControlSelect2"> <?php echo _forms_oprations_step3_f8; ?> </label>
              <?php if($_SESSION=="ar"){ ?>
              <select  class="form-control" name="know" id="exampleFormControlSelect2">
                <option value="" selected disabled> -- </option>
                <option value="media"> الفيسبوك </option>
                <option value="media"> التويتر </option>
                <option value="media"> الانستغرام </option>
                <option value="friend"> عن طريق صديق </option>
                <option value="advertisemen"> عن طريق الاعلانات  </option>
                <option value="other">  اخري  </option>
              </select>
              <?php }else{ ?>
              <select  class="form-control" name="know" id="exampleFormControlSelect2">
                <option value="media"> Facebook </option>
                <option value="media"> Twiter </option>
                <option value="advertisemen"> Advertisment </option>
                <option value="friend"> By a friend </option>
                <option value="other"> Others  </option>
              </select>
              <?php } ?>
              </div>
             </div>

      </div>

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