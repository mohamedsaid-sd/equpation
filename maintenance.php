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
	<title> أيكوبيشن > الخدمات >  خدمة الصيانة </title>
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
   function select_side(){
     var type = document.getElementById("work_for").value;
      if(type == "company"){
      document.getElementById("sidehide").style.display = "block";
      }else{
      document.getElementById("sidehide").value = "";
      document.getElementById("sidehide").style.display = "none";
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
	/ <a href="services.php?id=maintenance"><b> <?php echo _forms_maintenance_title; ?> </b></a> / <a href="#"><b> تقديم طلب </b></a>
</section>

<section id="forms">
	<br/><br/>
<div class="container">
  
 <div class="form-head">
   <!--  <img style="width: 100%;height: 100px;" src="../images/hero.jpg"> -->
    <h1 align="center"> <?php echo _forms_maintenance_title; ?></h1>
  </div>
  
<div class="stepwizard col-lg-12">


    <div class="stepwizard-row setup-panel">

      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-warning btn-circle"> <b> 1 </b>   <?php echo _forms_oprations_step1; ?>  </a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 2 </b>   <?php echo _forms_oprations_step2; ?> </a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 3 </b>   <?php echo _forms_oprations_step3; ?></a>
      
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

                <div class="col-md-4 form-group">
                  <label></label>
                  <input type="text" name="Type" class="form-control" id="Type" placeholder="<?php echo _forms_maintenance_step1; ?>" required>
                </div>

                <div class="col-md-4 form- mt-3 mt-md-0">
                  <label></label>
                  <input type="text" class="form-control" name="model" id="model" placeholder="<?php echo _forms_maintenance_step2; ?> " required>
                </div>

                <div class="col-md-4 form- mt-3 mt-md-0">
                  <label></label>
                    <input type="text" class="form-control" name="chassis" id="Sashinumber" placeholder="<?php echo _forms_maintenance_step4; ?> " required>
                  </div>

                </div>

     <!-- Start Input Start Time -->
     <div class="row">


    <div class="col-md-4 form- mt-3 mt-md-0">
      <label></label>
    <input type="text" class="form-control" name="engine" id="engine" placeholder="<?php echo _forms_maintenance_step3; ?> " required>
    </div>


     <div class="form- col-md-4">
      <label></label>   
    <input type="text" class="form-control" name="km_read" id="km_read" placeholder="   <?php echo _forms_maintenance_step5; ?>   " required>
      </div>



        <?php if($_SESSION['lang'] == "ar"){ ?>

      <div class="form- col-md-4">
        <label>  نوع الاصلاح المطلوب </label>
        <div class="d-flex flex-row justify-content-between align-items-center">
          <select class="form-control mr-1" id="main_type" name="main_type" required>
            <option value="" disabled selected> -- حدد نوع الاصلاح -- </option>
            <option value="مشكلة مكانيكا"> مشكلة مكانيكا</option>
            <option value="كةرباء">كةرباء</option>
            <option value="كةرباء">حدادة</option>
            <option value="تكيف">تكيف</option>
            <option value="ةيدروليك">ةيدروليك</option>
          </select>
        </div>
      </div>  

  <?php }else{ ?>
          <div class="form-group col-md-4">
        <label>  Type of repaire </label>
        <div class="d-flex flex-row justify-content-between align-items-center">
          <select class="form-control mr-1" id="typeoffix" name="main_type" required>
            <option value="" disabled selected>  </option>
            <option value="Mechanics"> Mechanics </option>
            <option value="Electricity"> Electricity </option>
            <option value="Metalworks"> Metalworks </option>
            <option value="Adaptation"> Adaptation </option>
            <option value="Hydraulic"> Hydraulic </option>


          </select>
        
        </div>
      </div>



  <?php } ?>



      </div>


      <div class="row">
        

        <div class="form- col-md-4">
            <label for="inputDate">"<?php echo _forms_maintenance_step6; ?></label>
            <input type="date" class="form-control" id="inputDate" name="date" required />
          </div>


            <?php if($_SESSION['lang'] == "ar"){ ?>
 
          <div class="form- col-md-4">
        <label>    طبيعة عمل الآلية </label>
        <div class="d-flex flex-row justify-content-between align-items-center">
          <select class="form-control mr-1" id="fleet_operating_type" name="fleet_operating_type" required>
            <option value="" disabled selected> -- حدد نوع الاصلاح -- </option>
            <option value=" جردل"> جردل</option>
            <option value="جاك ةمر">جاك ةمر</option>
          </select>
        </div>
      </div>


  <?php }else{ ?>
       <div class="form-group col-md-4">
        <label>   The nature of the mechanism's work </label>
        <div class="d-flex flex-row justify-content-between align-items-center">
          <select class="form-control mr-1" id="fleet_operating_type" name="fleet_operating_type" required>
            <option value="" disabled selected> -- Choose   -- </option>
            <option value=" Bucket"> Bucket</option>
            <option value=" Jack Hammer"> Jack Hammer</option>
          </select>
        </div>

      </div>

  <?php } ?>




       <div class="col-md-4 form- mt-3">
        <textarea class="form-control" name="issue_description" rows="5" placeholder="<?php echo _forms_maintenance_step7; ?>  " required></textarea>
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

      <div class="row">



          <?php if($_SESSION['lang'] == "ar"){ ?>
               <div class="col-md-4 form- mt-3 mt-md-0">
            <label>    الولاية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="state_id" name="state_id" required>
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
               <option value="ولاية نةر النيل">ولاية نةر النيل </option>
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


                 <div class="form- col-md-4">
           <label>  طبيعة الموقع </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="site_nature" required>
               <option value="" disabled selected> -- حدد طبيعة الموقع -- </option>
               <option value="جبال">جبال </option>
               <option value="أبار">أبار</option>
               <option value="مزرعة">مزرعة </option>
               <option value="منجم">منجم </option>
               <option value="مواقع مفتوحة">مواقع مفتوحة </option>
             </select>
           </div>
         </div>


  <?php }else{ ?>

  <div class="form-group col-md-4">
           <label>  states  </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="state_id" name="state_id" required>
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

              <div class="form-group col-md-4">
           <label>  The nature of the site </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="site_nature" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option value="Mountains"> Mountains </option>
               <option value=" Wells"> Wells </option>
               <option value="Farm"> Farm </option>
               <option value="Mine"> Mine </option>
               <option value="Open sites"> Open sites </option>
             </select>
           </div>
         </div>
   
  <?php } ?>

     


 
   
         <div class="col-md-4 form- mt-3 mt-md-0">
              <br/>
            <input type="text" class="form-control" name="city" id="site_location" placeholder="  <?php echo _forms_maintenance_step9; ?>     " required>
          </div>

          <div class="col-md-4 form- mt-3 mt-md-0">
            <br/>
            <input type="text" class="form-control" name="Nearest_market" id="Nearest_market" placeholder="    <?php echo _forms_maintenance_step10; ?>    " required>
          </div>

            <?php if($_SESSION['lang'] == "ar"){ ?>

                <div class="col-md-4 form- mt-3 mt-md-0">
              <label>  توفر الشبكة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="network" required>
               <option value="" disabled selected> -- حدد نوع الشبكة -- </option>
               <option value="متاح"> متاح  </option>
               <option value="غير متاح"> غير متاح</option>
             </select>
           </div>
          </div>
  <?php }else{ ?>
       <div class="col-md-4 form-group mt-3 mt-md-0">
              <label>  Network availability </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="network" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option value="available"> Available  </option>
               <option value="not_available"> Not Available </option>
             </select>
           </div>
          </div>
  <?php } ?>
        

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

                <div class="col-md-4 form-">
                  <label></label>
                  <input type="text" name="name" class="form-control" id="name" placeholder=" <?php echo _forms_oprations_step3_f1; ?>     " required>
                </div>

                <div class="col-md-4 form-">
                  <label></label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="   <?php echo _forms_oprations_step3_f2; ?>    " required>
                </div>

                <div class="col-md-4 form-">
                  <label></label>
                  <input type="text" name="whatsapp_num" class="form-control" id="phone" placeholder="  <?php echo _forms_oprations_step3_f3; ?>     " required>
                </div>

              </div>

              <div class="row">


                <div class="col-md-4 form- mt-3 mt-md-0">
                  <label></label>
                  <input type="text" class="form-control" name="email" id="email" placeholder=" <?php echo _forms_oprations_step3_f4; ?>  " required>
                </div>

                <div class="col-md-4 form- mt-3 mt-md-0">
                <label> <?php echo _forms_oprations_step3_f5; ?>  </label> 
                <select class="form-control mr-1" name="job" id="job" onchange="" required>
                <option value="" disabled selected>  </option>
                <option value="مالك"> مالك   </option>
                <option value="شريك"> شريك </option>
                <option value="مدير"> مدير </option>
                <option value="موظف"> موظف </option>
                <option value="مشرف"> مشرف </option>
                <option value="وكيل"> وكيل </option>
                <option value="وسيط"> وسيط </option>
                </select> 
                  </div>

              <div class="col-md-4 form-">
                <label> <?php echo _forms_oprations_step3_f6; ?></label> 
                <select class="form-control mr-1" name="work_for" id="work_for" onchange="select_side();" required>
                <option value="" disabled selected> </option>
                <option value="company"> شركة </option>
                <option value="individual"> فرد </option>
                </select>  
                <input id="sidehide" type="text" name="company_name" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
              </div>

              <div class="col-md-4 form- mt-3 mt-md-0">
              <label>  <?php echo _forms_oprations_step3_f7; ?></label> 
                <select class="form-control mr-1" name="previous" id="previous" onchange="select_wwus();" required>
                <option value="" disabled selected>  </option>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
                </select>

               <input id="wwushide" type="text" class="form-control" placeholder=" في اي موقع عملت معنا " style="display: none;" />
               <!-- required style="display:none" -->
               
              

              </div>

              <div class="col-md-4 form- mt-3 mt-md-0">
              <div class="form-">
              <label for="exampleFormControlSelect2"><?php echo _forms_oprations_step3_f8; ?></label>
              <select  class="form-control" name="know" id="exampleFormControlSelect2">
                <option value="media"> الفيسبوك </option>
                <option value="media"> التويتر </option>
                <option value="media"> الانستغرام </option>
                <option value="friend"> عن طريق صديق </option>
                <option value="advertisemen"> عن طريق الاعلانات  </option>
                <option value="other">  اخري  </option>
              </select>
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