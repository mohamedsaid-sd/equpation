<?php 
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
The contract form page
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
<title> أيكوبيشن > الخدمات >  خدمة المقاولة  </title>
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
  // ready to go with js function 
  $skill_counter = 2 ; 

   // deal with period  
   function select_period(){
     var type = document.getElementById("work_duration_id").value;
      if(type == "hand"){
      document.getElementById("durationhide").style.display = "block";
      }else{
      document.getElementById("durationhide").value = "";
      document.getElementById("durationhide").style.display = "none";
      }
   }

  //deal with hour of day
   function select_hourday(){
     var type = document.getElementById("daily_work_hours_id").value;
      if(type == "hand"){
      document.getElementById("work_hourshide").style.display = "block";
      }else{
      document.getElementById("work_hourshide").value = "";
      document.getElementById("work_hourshide").style.display = "none";
      }
   }


    // deal with filed
    function select_work_field(){
     var type = document.getElementById("work_field_id").value;
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
     var type = document.getElementById("customer_type_selection").value;
      if(type == "company"){
      document.getElementById("company").style.display = "block";
      }else{
      document.getElementById("company").value = "";
      document.getElementById("company").style.display = "none";
      }
   }

   // deal with work with us 
   function select_wwus(){
     var type = document.getElementById("ever_work_with_us").value;
      if(type == "yes"){
      document.getElementById("wwushide").style.display = "block";
      }else{
      document.getElementById("wwushide").value = "";
      document.getElementById("wwushide").style.display = "none";
      }
   }


    // deal with work with us 
    function select_wwus(){
     var type = document.getElementById("ever_work_with_us").value;
      if(type == "yes"){
      document.getElementById("wwushide").style.display = "block";
      }else{
      document.getElementById("wwushide").value = "";
      document.getElementById("wwushide").style.display = "none";
      }
   }

   function add_distance_line() {
    //alert("go");
    var skills = document.getElementById("distancediv");

    var div = document.createElement("div");
    div.setAttribute("class" , "col-md-3 form-group");
    var label = document.createElement("label");
    var input = document.createElement("input");
    input.setAttribute("class" , "form-control");
    input.setAttribute("placeholder" , "إسم المنتج");
    input.setAttribute("name" , "product" + $skill_counter);
    div.appendChild(label);
    div.appendChild(input);

    var div2 = document.createElement("div");
    div2.setAttribute("class" , "col-md-3 form-group");
    var label2 = document.createElement("label");
    label2.innerHTML = "";
    var input2 = document.createElement("input");
    input2.setAttribute("class" , "form-control");
    input2.setAttribute("placeholder" , "مسافة النقل");
    input2.setAttribute("name" , "distance" + $skill_counter);
    div2.appendChild(label2);
    div2.appendChild(input2);


    skills.appendChild(div);
    skills.appendChild(div2);
    
    $skill_counter ++;
  }


  function add_distance_lineEng() {
    //alert("go");
    var skills = document.getElementById("distancediv");

    var div = document.createElement("div");
    div.setAttribute("class" , "col-md-3 form-group");
    var label = document.createElement("label");
    var input = document.createElement("input");
    input.setAttribute("class" , "form-control");
    input.setAttribute("placeholder" , "product name ");
    input.setAttribute("name" , "product" + $skill_counter);
    div.appendChild(label);
    div.appendChild(input);

    var div2 = document.createElement("div");
    div2.setAttribute("class" , "col-md-3 form-group");
    var label2 = document.createElement("label");
    label2.innerHTML = "";
    var input2 = document.createElement("input");
    input2.setAttribute("class" , "form-control");
    input2.setAttribute("placeholder" , "Transportation distance ");
    input2.setAttribute("name" , "distance" + $skill_counter);
    div2.appendChild(label2);
    div2.appendChild(input2);


    skills.appendChild(div);
    skills.appendChild(div2);
    
    $skill_counter ++;
  }



</script>
<body>

<?php include 'header.php'; ?>

<section id="pointer">
<?php if($_SESSION['lang'] == "ar"){ ?>
	<img src="images/pointer/divider.png"/>
	<?php }else{ ?>
	<img src="images/pointer/divideren.png"/>
	<?php } ?>
	<a href="index.php"><img style="height: 30px;" src="images/pointer/home.png"></a>
	/  <a href="services.php?id=contract"><b>  <?php echo _forms_contract_title; ?>  </b></a> / <a href="#"><b>   <?php echo _Apply; ?>  </b></a>
</section>

<section id="forms">
	<br/><br/>
<div class="container">
  
 <div class="form-head">
   <!--  <img style="width: 100%;height: 100px;" src="../images/hero.jpg"> -->
    <h1 align="center">  <?php echo _forms_contract_title; ?>  </h1>

    
  </div>

<div class="stepwizard col-lg-12">

<!-- The step wizerd to devid the form into theree tabs and steps  -->

    <div class="stepwizard-row setup-panel">

      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-warning btn-circle"> <b> 1 </b> <?php echo _forms_contract_step1; ?>   </a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 2 </b>  <?php echo _forms_contract_step2; ?>  </a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 3 </b> <?php echo _forms_contract_step3; ?>  </a>
      
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



<?php if($_SESSION['lang'] == "ar"){ ?>
    <div class="row">
               
                <div class="col-md-4 form-group">
                <label> نوع العمل</label>
                <select class="form-control mr-1" name="work_type_id" id="work_type_id" onchange="select_period();">
                    <option value="" selected disabled> -- </option>
                    <option value="نقل مواد "> نقل مواد </option>
                    <option value=" تشغيل منجم"> تشغيل منجم  </option>
                    <option value="تأسيس معسكر"> تأسيس معسكر </option>
                    <option value="تجهيز أحواض">  تجهيز أحواض </option>
                    <option value="تعبيد طرق">  تعبيد طرق </option>

                  </select>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                <label>المدة</label>
                  <select class="form-control mr-1" name="work_duration_id" id="work_duration_id" onchange="select_period();">
                    <option value="" selected disabled> -- </option>
                    <option value="month"> شهر </option>
                    <option value="3month"> 3 شهور  </option>
                    <option value="year"> سنه </option>
                    <option value="hand">  يدوي </option>
                  </select>
                  <input id="durationhide" name="durationhide" type="text" class="form-control" placeholder=" ادخال يدوي" style="display: none;">
                </div>

                <div class="col-md-4 form-group">
         <label>    وحدة القياس </label>
         <select class="form-control mr-1" id="unit_of_measure" name="unit_of_measure" onchange="select_hourday();">
            <option value="" selected disabled> -- </option>
            <option value="طن">طن</option>
            <option value="متر مكعب">متر مكعب</option>
            <option value="كيلومتر">كيلومتر</option>
            <option value="اخري">اخري</option>
          </select>
        </div> 
               

              <div class="col-md-4 form-group">
              <label style="color: red;">   </label> 
              <input id="total_ton" name="total_ton" type="number" class="form-control" placeholder="الكميه الكلية"/>
              </div>

              
              <div class="col-md-4 form-group">
              <label style="color: red;">   </label> 
              <input id="daily_ton" name="daily_ton" type="number" class="form-control" placeholder="الكمية اليومية"/>
              </div> 

                <!-- <div class="col-md-4 form-group">
                <label style="color: red;">   </label> 
                <input id="mobilization_row_distance" name="mobilization_row_distance" type="number" class="form-control" placeholder="Distance of mobilization row"/>
                </div> -->


              </div>



      <h3> اضافه  إسم المنتج المراد نقله ومسافة النقل </h3>
      
      <div id="distancediv" class="row">

      <div class="col-md-3 form-group">
      <label></label>
      <input type="text" name="product1" class="form-control" placeholder="اسم المنتج"/>
      </div>

      <div class="col-md-3 form-group">
      <label>  </label>
      <input type="text" name="distance1" class="form-control" placeholder="مسافة النقل"/>

      </div>


      </div><br/>
      <span style="width: 150px; padding: 3px; margin: 5px;" class="btn btn-primary" onclick="add_distance_line();"> أضافة منتج + </span>
     
              <div class="row">

        <div class="form-group col-md-4">
        <label> ساعات العمل اليومية  </label>
          <select class="form-control mr-1" id="daily_work_hours_id" name="daily_work_hours_id" onchange="select_hourday();">
            <option value="" selected disabled> -- </option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="20">20</option>
            <option value="hand"> ادخال يدوي </option>
          </select>
          <input id="work_hourshide" name="work_hourshide" type="number" class="form-control" placeholder="  manual entry Hour   " style="display: none;">
        </div>

         <div class="col-md-4 form-group">
         <label> التاريخ المتوقع لبداية العمل </label>
          <input id="expected_beginning_of_work" name="expected_beginning_of_work" type="date" class="form-control" placeholder=" "/>
        </div> 


   
                
              </div>

  <?php }else{ ?>



      <div class="row">
               
                <div class="col-md-4 form-group">
                Work type <br/>

                <select class="form-control mr-1" name="work_type_id" id="work_type_id" onchange="select_period();">
                  <option value="" selected disabled> -- </option>
                    <option value="Moving materials">Moving materials</option>
                    <option value="Run Mine">Run Mine</option>
                    <option value="Establishing a camp">Establishing a camp</option>
                    <option value="Equipping basins">Equipping basins</option>
                    <option value="road paving">road paving</option>

                  </select>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                Duration <br/>
                  <select class="form-control mr-1" name="work_duration_id" id="work_duration_id" onchange="select_period();">
                    <option value="" selected disabled> -- </option>
                    <option value="month"> month </option>
                    <option value="3month"> 3 month  </option>
                    <option value="year"> year </option>
                    <option value="hand">  Manual entry </option>
                  </select>
                  <input id="durationhide" name="durationhide" type="text" class="form-control" placeholder="    Manual entry " style="display: none;">
                </div>


                <div class="col-md-4 form-group">
         <label>Unit of measurement</label>
         <select class="form-control mr-1" id="unit_of_measure" name="unit_of_measure" onchange="select_hourday();">
            <option value="" selected disabled> -- </option>
            <option value="tons">tons</option>
            <option value="cubic metres">cubic metres</option>
            <option value="kilometers">Kilometers</option>
            <option value="other">other</option>
          </select>
        </div>

<div class="col-md-4 form-group">
              <label>Otal TION</label>
              <input id="total_ton" name="total_ton" type="number" class="form-control" placeholder="distance of mobilization waste"/>
              </div> 

              <div class="col-md-4 form-group">
              <label>Daily TON</label>
              <input id="daily_ton" name="daily_ton" type="number" class="form-control" placeholder="distance of mobilization waste"/>
              </div> 
              

              </div>



                            <h5>  Add the name of the transport intended to be transported and the transport distance </h5>
      
      <div id="distancediv" class="row">

      <div class="col-md-3 form-group">
      <label></label>
      <input type="text" name="product1" class="form-control" placeholder="product name"/>
      </div>

      <div class="col-md-3 form-group">
      <label>  </label>
      <input type="text" name="distance1" class="form-control" placeholder="Transportation distance"/>

      </div>


      </div><br/>
      <span style="width: 150px; padding: 3px; margin: 5px;" class="btn btn-primary" onclick="add_distance_lineEng();">  Add a product + </span>
    

             <div class="row">

        <div class="form-group col-md-4">
        <label> Daily work hours   </label>
          <select class="form-control mr-1" id="daily_work_hours_id" name="daily_work_hours_id" onchange="select_hourday();">
            <option value="" selected disabled> -- </option>
            <option value="10">10</option>
            <option value="12">12</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="20">20</option>
            <option value="hand"> manual entry  </option>
          </select>
          <input id="work_hourshide" name="work_hourshide" type="number" class="form-control" placeholder="  manual entry Hour   " style="display: none;">
        </div>

         <div class="col-md-4 form-group">
         <label> Expected begining of work</label>
          <input id="expected_beginning_of_work" name="expected_beginning_of_work" type="date" class="form-control" placeholder=" "/>
        </div> 
                
              </div>
    <br/>



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


<?php if($_SESSION['lang'] == "ar"){ ?>

  <div class="row">
       
         <div class="col-md-4 form- mt-3 mt-md-0">
            <label>    الولاية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="state" name="state">
               <option value="" selected disabled> -- </option>
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

          <div class="col-md-4 form-group mt-3 mt-md-0">
        طبيعة العمل <br/>
                  <select class="form-control mr-1" name="work_field_id" id="work_field_id" onchange="select_work_field();">
                    <option value="" selected disabled> -- </option>
                    <option> التعدين </option>
                    <option>  الاسمنت </option>
                    <option>  الزراعة </option>
                    <option value="hand"> ادخال يدوي </option>
                  </select>

                  <input id="work_fieldhide" name="work_fieldhide" type="text" class="form-control" placeholder=" ادخال يدوي " style="display: none;">
          </div>

          <div class="form- col-md-4">
           <label>  طبيعة الموقع </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="region">
               <option value="" selected disabled> -- </option>
               <option value="جبال">جبال </option>
               <option value="أبار">أبار</option>
               <option value="مزرعة">مزرعة </option>
               <option value="منجم">منجم </option>
               <option value="مواقع مفتوحة">مواقع مفتوحة </option>
             </select>
           </div>
         </div>
         <div class="col-md-4 form-group mt-3 mt-md-0">
            <label>  اقرب مدينة </label>
            <input type="text" name="nearest_city" class="form-control" placeholder="ادخل اقرب مدينة"/>
            </div>
            
        <div class="col-md-4 form-group mt-3 mt-md-0">
        <label>   اقرب طريق معبد </label>
        <input type="text" id="nearest_paved_road" name="nearest_paved_road" class="form-control" placeholder="ادخل اقرب طريق معبد"/>
        </div>  
       
        
        <div class="form-group col-md-4">
             تاريخ بداية العمل (ادخال يدوي) :  <br/>
             <input type="date" name="start_date" class="form-control" placeholder="   work starting date (manual entry/calendar) ">
         </div>

            <!-- <div class="col-md-4 form-group mt-3 mt-md-0">
            <label> اقرب سوق </label>
            <input type="text" id="nearest_market" name="nearest_market" class="form-control" placeholder=" ادخل اقرب سوق" required/>
            </div> -->
      </div>



          <div class="row">

                
          <div class="form-group col-md-4">
           <label> السكن </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="living_selection" name="living_selection">
               <option value="" selected disabled> -- </option>
               <option value="excellent"> ممتاز </option>
               <option value="good"> جيد </option>
               <option value="normal"> عادي </option>
             </select>
           </div>
         </div>


          <div class="form-group col-md-4">
           <label> الإعاشة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="subsistence_selection" name="subsistence_selection">
               <option value="" selected disabled> -- </option>
                <option value="excellent"> ممتاز </option>
               <option value="good"> جيد </option>
               <option value="normal"> عادي </option>
             </select>
           </div>
         </div>

         <div class="form-group col-md-4">
           <label>  الاتصالات </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="communication_selection" name="communication_selection">
               <option value="" selected disabled> -- </option>
               <option value="available"> متوفر </option>
               <option value="not_available"> غير متوفر </option>
             </select>
           </div>
         </div>
            
          </div>

       <div class="row">

                  <div class="form-group col-md-4">
           <label> الانترنت </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="internet_selection" name="internet_selection">
               <option value="" selected disabled> -- </option>
               <option value="available"> متوفر </option>
               <option value="not_available"> غير متوفر </option>
             </select>
           </div>
         </div>
            
    
         <div class="form-group col-md-4">
           <label>  الورشة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="workshop_selection" name="workshop_selection">
               <option value="" selected disabled> -- </option>
               <option value="available"> متوفر </option>
               <option value="not_available"> غير متوفر </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> الكمبرسون </label> 
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="compressor_selection" name="compressor_selection">
               <option value="" selected disabled> -- </option>
               <option value="available"> متوفر </option>
               <option value="not_available"> غير متوفر </option>
             </select>
           </div>
         </div>

          </div>

          <div class="row">

          <div class="form-group col-md-4">
           <label> الوقود </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="fuel_selection" name="fuel_selection">
               <option value="" selected disabled> -- </option>
               <option value="available"> متوفر </option>
               <option value="not_available">  غير متوفر </option>
             </select>
           </div>
         </div>
            

           <div class="form-group col-md-4">
           <label> المياة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="water_selection" name="water_selection">
              <option value="" selected disabled> -- </option>
               <option value="available"> متوفر  </option>
               <option value="not_available">  غير متوفر </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> الكهرباء </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="electricity_selection" name="electricity_selection">
              <option value="" selected disabled> -- </option>
               <option value="available"> متوفرة </option>
               <option value="not_available"> غير متوفرة </option>
             </select>
           </div>
         </div>
          </div>




  <?php }else{ ?>


      <div class="row">
      
        <div class="form-group col-md-4">
           <label>  states  </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="state" name="state">
               <option value="" selected disabled> -- </option>
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
             <select class="form-control mr-1" id="region" name="region">
               <option value="" selected disabled> -- </option>
               <option value="Mountains"> Mountains </option>
               <option value=" Wells"> Wells </option>
               <option value="Farm"> Farm </option>
               <option value="Mine"> Mine </option>
               <option value="Open sites"> Open sites </option>
             </select>
           </div>
         </div>

             
        <div class="col-md-4 form-group mt-3 mt-md-0">
        WORK FIELD <br/>
                  <select class="form-control mr-1" name="work_field_id" id="work_field_id" onchange="select_work_field();">
                    <option value="" selected disabled> -- </option>
                    <option value="1"> mining </option>
                    <option value="2">  cement </option>
                    <option value="3">  agricultural </option>
                    <option value="hand">   manual entry </option>
                  </select>

                  <input id="work_fieldhide" name="work_fieldhide" type="text" class="form-control" placeholder="   manual entry " style="display: none;">
          </div>
        <!-- <div class="form-group col-md-4">
       <input type="number" class="form-control" name="distance_from_nearest" id="distance_from_nearest" placeholder=" Nearest city  " required>
          </div> -->



          <div class="col-md-4 form-group mt-3 mt-md-0">
            <label> Narest City </label>
            <input type="text" name="nearest_city" class="form-control" placeholder="Enter nearest city"/>
            </div>

            <!-- <div class="col-md-4 form-group mt-3 mt-md-0">
            <label> Nearest Market </label>
            <input type="text" id="nearest_market" name="nearest_market" class="form-control" placeholder="Enter nearest market" required/>
            </div> -->

            <div class="col-md-4 form-group mt-3 mt-md-0">
            <label> Nearest Paved Road </label>
            <input type="text" id="nearest_paved_road" name="nearest_paved_road" class="form-control" placeholder="Enter nearest paved road"/>
            </div>

            <div class="form-group col-md-4">
             work starting date (manual entry/calendar) :  <br/>
             <input type="date" name="start_date" class="form-control" placeholder="   work starting date (manual entry/calendar)">     
         </div>                      
            
      </div>

      <div class="row">
   

        
             

        </div>
  <label> <b>JOB SITE READINESS  : </b> </label><br>

          <div class="row">

        
          
          <div class="form-group col-md-4">
           <label> living </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="living_selection" name="living_selection">
               <option value="" selected disabled> -- </option>
               <option value="excellent"> excellent </option>
               <option value="good"> good </option>
               <option value="normal"> normal </option>
             </select>
           </div>
         </div>


          <div class="form-group col-md-4">
           <label> subsistence </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="subsistence_selection" name="subsistence_selection">
               <option value="" selected disabled> -- </option>
                <option value="excellent"> excellent </option>
               <option value="good"> good </option>
               <option value="normal"> normal </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> internet </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="internet_selection" name="internet_selection">
               <option value="" selected disabled> -- </option>
               <option value="available"> available </option>
               <option value="not_available"> not available </option>
             </select>
           </div>
         </div>
            
          </div>

       <div class="row">
            
        <div class="form-group col-md-4">
           <label>  communication </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="communication_selection" name="communication_selection">
               <option value="" selected disabled> -- </option>
               <option value="available"> available </option>
               <option value="not_available"> not available </option>
             </select>
           </div>
         </div>

         <div class="form-group col-md-4">
           <label>  workshop </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="workshop_selection" name="workshop_selection">
               <option value="" selected disabled> -- </option>
               <option value="available"> available </option>
               <option value="not_available"> not available </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> compressor </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="compressor_selection" name="compressor_selection">
               <option value="" selected disabled> -- </option>
               <option value="available"> available </option>
               <option value="not_available"> not available </option>
             </select>
           </div>
         </div>

          </div>

          <div class="row">

          <div class="form-group col-md-4">
           <label> fuel </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="fuel_selection" name="fuel_selection">
               <option value="" selected disabled> -- </option>
               <option value="available"> available </option>
               <option value="not_available"> not available </option>
             </select>
           </div>
         </div>
            

           <div class="form-group col-md-4">
           <label> water </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="water_selection" name="water_selection">
               <option value="" selected disabled> -- </option>
               <option value="available"> available </option>
               <option value="not_available"> not available </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> electricity </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="electricity_selection" name="electricity_selection">
               <option value="" selected disabled> -- </option>
               <option value="available"> available </option>
               <option value="not_available"> not available </option>
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
                  <label></label>
                  <input type="text" name="customer_name" class="form-control" placeholder="<?php echo _forms_oprations_step3_f1; ?>">
                </div>


                <div class="col-md-4 form-group">
                  <label style="color: red">  </label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="<?php echo _forms_oprations_step3_f2; ?>">
                </div>

                <div class="col-md-4 form-group">
                  <label style="color: red">  </label>
                  <input type="text" name="whatsapp_num" class="form-control" id="phone" placeholder="<?php echo _forms_oprations_step3_f3; ?>">
                </div>

              </div>

              <div class="row">

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label></label>
                  <input type="email" class="form-control" name="customer_email" placeholder="<?php echo _forms_oprations_step3_f4; ?>">
                </div>


              <div class="col-md-4 form- mt-4 mt-md-0">
              <?php if($_SESSION['lang'] == "ar"){ ?>
               <label>   نوع العلاقة بالموقع </label> 
                <select class="form-control mr-1" name="customer_job_title" id="job" onchange="">
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
                <label>   Type of relationship to the site </label> 
                <select class="form-control mr-1" name="customer_job_title" id="job" onchange="">
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
                <?php if($_SESSION['lang'] == "ar"){ ?>
                 <label>   الجهه التابع لها </label> 
                <select class="form-control mr-1" name="customer_type_selection" id="customer_type_selection" onchange="select_side();">
                <option value="" selected disabled> -- </option>
                <option value="company"> شركة </option>
                <option value="person"> فرد </option>
                </select>  
                <input id="company" name="company" type="text" class="form-control" placeholder="ادخل اسم الشركة" style="display: none;" />
                <?php }else{ ?>
                <label>  Your side is </label> 
                <select class="form-control mr-1" name="customer_type_selection" id="customer_type_selection" onchange="select_side();">
                <option value="" disabled selected> -- </option>
                <option value="company"> Company </option>
                <option value="person"> Individual </option>
                </select>  
                <input id="company" name="company" type="text" class="form-control" placeholder="    Company Name" style="display: none;" />
                <?php } ?>
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <?php if($_SESSION['lang'] == "ar"){ ?>
                <label> هل سبق لك العمل معنا </label>
                <select class="form-control mr-1" name="ever_work_with_us" id="ever_work_with_us" onchange="select_wwus();">
                <option value="" selected disabled> -- </option>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
                </select>
                <?php }else{ ?>
                <label> Have you over worked with us : </label>
                <select class="form-control mr-1" name="ever_work_with_us" id="ever_work_with_us" onchange="select_wwus();">
                <option value="" disabled selected> -- </option>
                <option value="yes"> Yes </option>
                <option value="no"> No </option>
                </select>
                <?php } ?>
               <!-- <input id="wwushide" type="text" class="form-control" placeholder=" workplace  " style="display: none;" /> -->
               
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <?php if($_SESSION['lang'] == "ar"){ ?>
              <label> كيف تعرفت علينا </label>
              <?php }else{ ?>
              <label> How to know us : </label>
              <?php } ?>
             <select  class="form-control" id="exampleFormControlSelect2" name="social_media_selection">
                <option value="" selected disabled> -- </option>
                <option value="facebook">Facebook</option>
                <option value="twitter"> Twitter </option>
                <option value="instagram"> Instagram </option>
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
    </form>
  </div>

</section>


<img src="images/divider2.png" style="width: 100%;border:none;">
<?php include 'footer.php'; ?>
</body>
</html>