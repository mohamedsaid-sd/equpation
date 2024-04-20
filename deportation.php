<?php 
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
The  Transportation form page
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
	<title> أيكوبيشن > الخدمات >  خدمة الترحيل </title>
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
	/ <a href="services.php?id=transport"><b>   <?php echo _forms_migration_step1; ?></b></a> / <a href="#"><b> <?php echo _Apply; ?></b></a>
</section>

<section id="forms">
	<br/><br/>
<div class="container">
  
 <div class="form-head">
   <!--  <img style="width: 100%;height: 100px;" src="../images/hero.jpg"> -->
    <h1 align="center"><?php echo _forms_migration_title; ?></h1>
  </div>

<div class="stepwizard col-lg-12">



    <div class="stepwizard-row setup-panel">

      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-warning btn-circle"> <b> 1 </b>  <?php echo _forms_migration_step2; ?> </a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 2 </b>  <?php echo _forms_migration_step3; ?>  </a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 3 </b>   <?php echo _forms_migration_step4; ?></a>
      
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
          <?php if($_SESSION['lang'] == "ar"){ ?>
            <div class="col-md-4 form-group">
                  <label>نوع الآلية المرحلة</label>
                  <select class="form-control mr-1" name="machine" id="machine" onchange="select_type();" >
                    <option value="" disabled selected>   </option>
                    <option> دفار </option>
                    <option> دوزر </option>
                    <option> مولد </option>
                    <option value="hand"> يدوي </option>
                  </select>
                  <input id="machinehide" name="machinehide" type="text" class="form-control" placeholder=" ادخل نوع الالية يدوي "  style="display:none">
                </div>

	<?php }else{ ?>
    <div class="col-md-4 form-group">
                <label> Type of machine </label>
                  <select class="form-control mr-1" name="machine" id="machine" onchange="select_type();">
                    <option value="" disabled selected>  </option>
                    <option> Excavator </option>
                    <option> Dozer </option>
                    <option> Generator </option>
                    <option value="hand"> Manual Entry </option>
                  </select>
                  <input id="machinehide" name="machinehide" type="text" class="form-control" placeholder="  Manual Entry " style="display:none">
                </div>
	<?php } ?>
             
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label> <?php echo _forms_migration_step5; ?></label>
                  <input type="number" step="0.01" id="comprossor" name="comprossor" class="form-control" placeholder="<?php echo _forms_migration_step7; ?>">
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                <input type="number" step="0.01" id="generator" name="generator" class="form-control" placeholder="  <?php echo _forms_migration_step6; ?> ">
                </div>

              </div>

              <div class="row">
                
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                <input type="number" step="0.01" id="welding_machine" name="welding_machine" class="form-control" placeholder="    <?php echo _forms_migration_step8; ?>  ">
               </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                <input type="number" step="0.01" id="excavator" name="excavator" class="form-control" placeholder="<?php echo _forms_migration_step9; ?>  ">
              </div>


              <?php if($_SESSION['lang'] == "ar"){ ?>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                 <label>ماركة الآلية المرحلة</label>
                 <select class="form-control mr-1" name="model" id="model" onchange="select_brand();" >
                    <option disabled selected> --  اختار الماركة  -- </option>
                    <option> GAT </option>
                    <option> JCB </option>
                    <option> ATLAS CAPS </option>
                    <option value="hand"> يدوي </option>
                  </select>    
                  <input id="modelhide" name="modelhide" type="text" class="form-control" placeholder=" ادخل ماركة الالية يدوي "  style="display:none">
                </div>

	       <?php }else{ ?>
    <div class="col-md-4 form-group mt-3 mt-md-0">
                 <label>Model of machine</label>
                 <select class="form-control mr-1" name="model" id="model" onchange="select_brand();">
                    <option disabled selected> -- </option>
                    <option > GAT </option>
                    <option> JCB </option>
                    <option> ATLAS CAPS </option>
                    <option value="hand"> manual entry </option>
                  </select>    
                  <input id="modelhide" name="modelhide" type="text" class="form-control" placeholder="    manual entry " style="display:none">
              
                </div>
	<?php } ?>

          
              
          

                </div>

     <!-- Start Input Start Time -->
     <div class="row">

    
      <?php if($_SESSION['lang'] == "ar"){ ?>
        <div class="col-md-4 form-group">
        <label>وزن الآلية (طن) </label>
       
          <select class="form-control mr-1" name="wieght" id="wieght" onchange="select_weight();" >
          <option value="" disabled selected> -- اختار الوزن -- </option>  
            <option value="10">10</option>
            <option value="12">20</option>
            <option value="15">30</option>
            <option value="hand">ادخال يدوي</option>
          </select>
          <input id="wieghthide" name="wieghthide" type="text" class="form-control" placeholder=" ادخل الوزن يدوي " style="display: none;" />
      </div>
	<?php }else{ ?>
    <div class="col-md-4 form-group">
        <label>   wieght of machine(TON) </label>
          <select class="form-control mr-1" name="wieght" id="wieght" onchange="select_weight();">
          <option value="" disabled selected> -- </option>  
            <option value="10">10</option>
            <option value="12">20</option>
            <option value="15">30</option>
            <option value="hand"> manual entry</option>
          </select>
          <input id="wieghthide" name="wieghthide" type="text" class="form-control" placeholder="   manual entry " style="display: none;" />
      </div>

	<?php } ?>
   
      <div class="form-group col-md-4">
        <label>   <?php echo _forms_migration_step10; ?>   </label>
        <input id="lowbed" name="lowbed" type="number" step="0.01" class="form-control" placeholder="<?php echo _forms_migration_step11; ?>   "/>
      </div>

      <div class="form-group col-md-4">
      <label></label>
     <input id="truck" name="truck" type="number" step="0.01" class="form-control" placeholder=" <?php echo _forms_migration_step12; ?>   "/>
      </div>
  
  </div>

  <?php if($_SESSION['lang'] == "ar"){ ?>
    <div class="form-group col-md-4">
     <label>   سطحة </label>
          <select class="form-control mr-1" name="trailer" id="trailer" >
            <option value="zs" disabled selected> --  اختار -- </option>
            <option value="zs">  zs </option>
            <option value="zy">  zy </option>
          
          </select>
    </div>
	<?php }else{ ?>
    <div class="form-group col-md-4">
     <label>   Trailer </label>
          <select class="form-control mr-1" name="trailer" id="trailer" >
            <option value="zs" disabled selected> -- </option>
            <option value="zs">  zs </option>
            <option value="zy">  zy </option>
          
          </select>
    
      </div>
	<?php } ?>

 
       


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



    <br/><h3 for="textAreaRemark">   <?php echo _forms_migration_step13; ?> </h3>


      <div class="row">
      <?php if($_SESSION['lang'] == "ar"){ ?>
        <div class="col-md-4 form-group">
          <label></label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="state" name="state">
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
	<?php }else{ ?>
    <div class="col-md-4 form-group">
       <label>Location machine</label>

          <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="state" name="state_id">
               <option value="" disabled selected> -- state -- </option>
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
	<?php } ?>
      

        <div class="col-md-4 form-group mt-3 mt-md-0">
          <label></label>
          <input type="text" class="form-control" id="zone" name="zone" placeholder=" <?php echo _forms_migration_step14; ?> " >
        </div>

        <div class="form-group col-md-4">
          <label></label>
          <input type="text" class="form-control" id="workplace" name="workplace" placeholder="<?php echo _forms_migration_step15; ?> " >
        </div>

      </div>

      <div class="row">
      
      <div class="col-md-4 form-group mt-3 mt-md-0">
        <label></label>
        <textarea class="form-control" id="validationTextarea" name="description" placeholder="     <?php echo _forms_migration_step16; ?> " ></textarea>    
      </div>

      <div class="col-md-4 form-group mt-3 mt-md-0">
      <label></label>
      <input type="text" class="form-control" id="location" name="location" placeholder="  <?php echo _forms_migration_step17; ?> ">
      </div>
       
      <div class="form-group col-md-4">
      <label></label>
        <input type="number" class="form-control" id="phone" name="phone" placeholder="   <?php echo _forms_migration_step18; ?>     " >  
    </div>
         
   
         <div class="form-group col-md-4">
          <label></label>
         <input type="number" class="form-control" id="mobile" name="mobile" placeholder=" <?php echo _forms_migration_step19; ?>      " >  
         </div>

    </div>




          <h3 for="textAreaRemark"> <?php echo _forms_migration_step20; ?>   </h3>
     
          <div class="row">

          <?php if($_SESSION['lang'] == "ar"){ ?>
            <div class="col-md-4 form-group">
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="des_state" name="des_state">
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
<?php }else{ ?>
  <div class="col-md-4 form-group">


          <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="des_state" name="des_state">
               <option value="" disabled selected> -- state -- </option>
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
<?php } ?>

   
        
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <input type="text" class="form-control" id="zone" name="des_zone" placeholder=" <?php echo _forms_migration_step21; ?> " >
        </div>

        <div class="form-group col-md-4">
          <input type="text" class="form-control" id="workplace" name="des_workplace" placeholder="   <?php echo _forms_migration_step22; ?> " >
        </div>

      </div>

      <div class="row">
      
      <div class="col-md-4 form-group mt-3 mt-md-0">
        <label></label>
        <textarea class="form-control" id="validationTextarea" name="des_description" placeholder="  <?php echo _forms_migration_step23; ?>    " ></textarea>    
      </div>
       
      <div class="form-group col-md-4">
        <label></label>  
        <input type="number" class="form-control" id="phone" name="des_phone" placeholder="      <?php echo _forms_migration_step24; ?>   " >  
      </div>
         
   
         <div class="form-group col-md-4">
          <label></label>
         <input type="number" class="form-control" id="mobile" name="des_mobile" placeholder="   <?php echo _forms_migration_step25; ?>      " >  
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


                <div class="col-md-4 form-group">
                  <label></label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo _forms_oprations_step3_f1; ?>" >
                </div>

                <div class="col-md-4 form-">
                  <label></label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="<?php echo _forms_oprations_step3_f2; ?>">
                </div>

                <div class="col-md-4 form-">
                  <label></label>
                  <input type="text" name="whatsapp_num" class="form-control" id="whatsapp_num" placeholder="<?php echo _forms_oprations_step3_f3; ?>">
                </div>               

              </div>

              <div class="row">

               <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="<?php echo _forms_oprations_step3_f4; ?>" >
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                <?php if($_SESSION['lang'] =="ar"){ ?>
                <label>   نوع العلاقة بالموقع </label> 
                <select class="form-control mr-1" name="job" id="job" onchange="">
                <option value="" disabled selected> -- </option>
                <option value="مالك"> مالك   </option>
                <option value="شريك"> شريك </option>
                <option value="مدير"> مدير </option>
                <option value="موظف"> موظف </option>
                <option value="مشرف"> مشرف </option>
                <option value="وكيل"> وكيل </option>
                <option value="وسيط"> وسيط </option>
                </select> 
                <?php }else{ ?>
                <label>Type of relationship to the site </label> 
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

              <div class="col-md-4 form-group">
                <?php if($_SESSION['lang'] =="ar"){ ?>
                <label> الجهة  التابع لها </label> 
                <select class="form-control mr-1" name="work_for" id="work_for" onchange="select_side();" >
                <option value="" disabled selected> -- </option>
                <option value="company"> شركة </option>
                <option value="individual"> فرد </option>
                </select>  
                <input id="work_forhide" name="work_forhide" type="text" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
                <?php }else{ ?>
                <label> Category</label> 
                <select class="form-control mr-1" name="work_for" id="work_for" onchange="select_side();">
                <option value="" disabled selected> -- </option>
                <option value="company"> company </option>
                <option value="individual"> personal </option>
                </select>  
                <input id="work_forhide" name="work_forhide" type="text" class="form-control" placeholder="  company name (manual entry) " style="display: none;" />
                <?php } ?>
              </div>

            </div>

            <div class="row">

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <?php if($_SESSION['lang'] == "ar"){ ?>
              <label>هل  سبق لك العمل معنا </label> 
                <select class="form-control mr-1" name="previous" id="previous" onchange="select_wwus();" >
                <option value="yes" disabled selected> -- </option>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
                </select>
               <input id="previoushide" name="previoushide" type="text" class="form-control" placeholder=" في اي موقع عملت معنا " style="display: none;"/>
               <?php }else{ ?>
                <label>  Have you ever work with us </label> 
               <select class="form-control mr-1" name="previous" id="previous" onchange="select_wwus();">
                <option value="" disabled selected>  -- </option>
                <option value="yes"> Yes </option>
                <option value="no"> No </option>
                </select>
               <input id="previoushide" name="previoushide" type="text" class="form-control" placeholder=" workplace(manual entry)  " style="display: none;" />
               <?php } ?>
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
               <?php if($_SESSION['lang'] == "ar"){ ?>
              <label> كيف تعرفت علينا </label>
              <select  class="form-control" id="exampleFormControlSelect2" name="know">
                <option value="media"> الفيسبوك </option>
                <option value="media"> التويتر </option>
                <option value="media"> الانستغرام </option>
                <option value="friend"> عن طريق صديق </option>
                <option value="advertisemen">  الاعلانات  </option>
                <option value="other">  اخري  </option>
              </select>
              <?php }else{ ?>
              <label> How to know us : </label>
              <select  class="form-control" id="know" name="know">
                <option value="media"> facebook  </option>
                <option value="google"> google </option>
                <option value="media"> instagram </option>
                <option value="friend">   friend </option>
                <option value="advertisemen">   Advertisemen  </option>
                <option value="other">  other  </option>
              </select>
              <?php } ?>
              
              </div>
             </div>

              </div>


       <div class="row">
      <?php if($_SESSION['lang'] =="ar"){ ?>
      <div class="col-md-3 form-group">
        <label>  رخصة الآلة </label>
        <input type="file" name="Machinelicense" class="form-control">
      </div>   
      <div class="col-md-3 form-group">
        <label>  شهادة العميل </label>
        <input type="file" name="Customercertificate" class="form-control">
      </div>
      <div class="col-md-3 form-group">
        <label>  الترخيص </label>
        <input type="file" name="Authorization" class="form-control">
      </div>
      <div class="col-md-3 form-group">
        <label>  ملفات اخري </label>
        <input type="file" name="otherdocument" class="form-control">
      </div>
      <?php }else{ ?>
      <div class="col-md-3 form-group">
        <label>   Machine license </label>
        <input type="file" name="Machinelicense" class="form-control">
      </div>
      <div class="col-md-3 form-group">
        <label>   Customer certificate </label>
        <input type="file" name="Customercertificate" class="form-control">
      </div>
      <div class="col-md-3 form-group">
        <label>  Authorization </label>
        <input type="file" name="Authorization" class="form-control">
      </div>
      <div class="col-md-3 form-group">
        <label> other document </label>
        <input type="file" name="otherdocument" class="form-control">
      </div>
      <?php } ?>
      </div>

      <br>
  



      <br/><br/>

      <div>
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
      </div>
    </form></div>

</section>


<img src="images/divider2.png" style="width: 100%;border:none;">
<?php include 'footer.php'; ?>
</body>
</html>