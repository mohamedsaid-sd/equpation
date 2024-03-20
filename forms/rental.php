<!DOCTYPE html>
<html dir="rtl">
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<title> أيكوبيشن > الخدمات >  خدمة التأجير </title>
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
	<img src="../images/pointer/divider.png"/>
	<a href="index.php"><img style="height: 30px;" src="../images/pointer/home.png"></a>
	/ <a href="#"><b> الخدمات </b></a> / <a href="#"><b> خدمة التأجير </b></a>
</section>

<section id="forms">
	<br/><br/>
<div class="container">
  
 <div class="form-head">
   <!--  <img style="width: 100%;height: 100px;" src="../images/hero.jpg"> -->
    <h1 align="center"> طلب التأجير </h1>
  </div>

<div class="stepwizard col-lg-12">



    <div class="stepwizard-row setup-panel">

      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-warning btn-circle"> <b> 1 </b>  مطلوبات التأجير</a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 2 </b>  بيانات موقع الآلية</a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 3 </b>  بيانات العميل</a>
      
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
  		يرجي ملئ جميع بياات ومواصفات المعدة بشكل صحيح ...
		</div>


     <div class="row">
   
                <div class="col-md-3 form-group">
               <label> نوع المعدة </label>
                  <select class="form-control mr-1" name="machine_type" id="machine_type"  required>
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


                <div class="form-group col-md-3">
        <label>    العدد المطلوب </label>
         <input type="number" class="form-control" id="inputDate" name="requested_number"  required />
         
      </div>

      <div class="form-group col-md-3">
        <label>     مقاس المعدة </label>
         <input type="text" class="form-control" id="inputDate" name="size_machine"  required />
         
      </div>

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

              </div>
     <!-- Start Input Start Time -->
     <div class="row">

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

      <div class="form-group col-md-3">
        <label>  بداية العمل المتوقعة </label>
         <input type="date" class="form-control" id="inputDate" name="work_date"  required />
         
      </div>
      </div>


        <div style="text-align: left;">

          <button class="btn btn-warning nextBtn btn-lg" type="button"> تأكيد وإستمرار -> </button>

        </div>

        </div>
      </div>
    </div>



    <div class="row setup-content" id="step-2">
      <div class="col-lg-12 col-xs-6 col-md-offset-3">
        <div class="col-md-12">

       <div class="alert alert-warning" role="alert">
      يرجي ملئ جميع بياات موقع الآلية بشكل صحيح ...
    </div>

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


  

      <br/>

          <div style="text-align: left;">
          <button class="btn btn-warning prevBtn btn-lg pull-left" type="button"> السابق  </button>
          <button class="btn btn-warning nextBtn btn-lg pull-right" type="button"> تأكيد وإستمرار -> </button>
          </div>
        </div>
      </div>
    </div>

















    <div class="row setup-content" id="step-3">
      <div class=" col-lg-12 col-xs-6 col-md-offset-3">

      <div class="row">

                <div class="col-md-4 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="   الاسم  ثلاثي" required>
                </div>

                <div class="col-md-4 form-group">
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="   رقم الهاتف  مثال 00249123000000" required>
                </div>

                <div class="col-md-4 form-group">
                  <input type="text" name="whatsapp_num" class="form-control" id="whatsapp_num" placeholder="    رقم الواتساب  مثال 00249123000000" required>
                </div>

              </div>

              <div class="row">

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label></label>
                  <input type="text" class="form-control" name="email" id="email" placeholder=" الايميل " required >
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
 


      <br/><br/>

      <div style="text-align: left;">
          <button class="btn btn-warning prevBtn btn-lg pull-left" type="button"> <- السابق </button>
          <button class="btn btn-success btn-lg pull-right" type="submit"> تأكيد إرسال الطلب </button>
        </div>
        </div>
      </div>
    </form></div>

</section>


<img src="../images/divider2.png" style="width: 100%;border:none;">
<?php include 'footer.php'; ?>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>