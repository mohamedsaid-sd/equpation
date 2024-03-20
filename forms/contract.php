<!DOCTYPE html>
<html dir="rtl">
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<title> أيكوبيشن > الخدمات >  خدمة المقاولة  </title>
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
	/ <a href="#"><b> الخدمات </b></a> / <a href="#"><b> خدمة المقاولة  </b></a>
</section>

<section id="forms">
	<br/><br/>
<div class="container">
  
 <div class="form-head">
   <!--  <img style="width: 100%;height: 100px;" src="../images/hero.jpg"> -->
    <h1 align="center"> طلب المقاولة  </h1>
  </div>

<div class="stepwizard col-lg-12">



    <div class="stepwizard-row setup-panel">

      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-warning btn-circle"> <b> 1 </b>   متطلبات المقاولة  </a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 2 </b>  مواصفات الموقع  </a>
       
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
               
                <div class="col-md-4 form-group">
                <label> نوع العمل</label>
                <select class="form-control mr-1" name="work_type_id" id="work_type_id" onchange="select_period();" required>
                    <option value="نقل مواد "> نقل مواد </option>
                    <option value=" تشغيل منجم"> تشغيل منجم  </option>
                    <option value="تأسيس معسكر"> تأسيس معسكر </option>
                    <option value="تجهيز أحواض">  تجهيز أحواض </option>
                    <option value="تعبيد طرق">  تعبيد طرق </option>

                  </select>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                <label>المدة</label>
                  <select class="form-control mr-1" name="work_duration_id" id="work_duration_id" onchange="select_period();" required>
                    <option value="" disabled selected>   </option>
                    <option value="month"> شهر </option>
                    <option value="3month"> 3 شهور  </option>
                    <option value="year"> سنه </option>
                    <option value="hand">  يدوي </option>
                  </select>
                  <input id="durationhide" name="durationhide" type="text" class="form-control" placeholder=" ادخال يدوي" style="display: none;">
                </div>

                <div class="col-md-4 form-group">
         <label>    وحدة القياس </label>
         <select class="form-control mr-1" id="unit_of_measure" name="unit_of_measure" onchange="select_hourday();" required>
            <option value="" disabled selected>   </option>
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
          <select class="form-control mr-1" id="daily_work_hours_id" name="daily_work_hours_id" onchange="select_hourday();" required>
            <option value="" disabled selected> -- اختار  -- </option>
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
       
         <div class="col-md-4 form- mt-3 mt-md-0">
            <label>    الولاية </label>
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
                  <select class="form-control mr-1" name="work_field_id" id="work_field_id" onchange="select_work_field();" required>
                    <option disabled selected>   </option>
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
             <select class="form-control mr-1" id="ready" name="region" required>
               <option value="" disabled selected> -- حدد طبيعة الموقع -- </option>
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
            <input type="text" name="nearest_city" class="form-control" placeholder="ادخل اقرب مدينة" required/>
            </div>
            
        <div class="col-md-4 form-group mt-3 mt-md-0">
        <label>   اقرب طريق معبد </label>
        <input type="text" id="nearest_paved_road" name="nearest_paved_road" class="form-control" placeholder="ادخل اقرب طريق معبد" required/>
        </div>  
       
        
        <div class="form-group col-md-4">
             تاريخ بداية العمل (ادخال يدوي) :  <br/>
             <input type="date" name="start_date" class="form-control" placeholder="   work starting date (manual entry/calendar) " required>
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
             <select class="form-control mr-1" id="living_selection" name="living_selection" required>
               <option value="" disabled selected> -- اختار --  </option>
               <option value="excellent"> ممتاز </option>
               <option value="good"> جيد </option>
               <option value="normal"> عادي </option>
             </select>
           </div>
         </div>


          <div class="form-group col-md-4">
           <label> الإعاشة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="subsistence_selection" name="subsistence_selection" required>
               <option value="" disabled selected>  -- اختار -- </option>
                <option value="excellent"> ممتاز </option>
               <option value="good"> جيد </option>
               <option value="normal"> عادي </option>
             </select>
           </div>
         </div>

         <div class="form-group col-md-4">
           <label>  الاتصالات </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="communication_selection" name="communication_selection" required>
               <option value="" disabled selected> -- اختار --  </option>
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
             <select class="form-control mr-1" id="internet_selection" name="internet_selection" required>
               <option value="" disabled selected> -- اختار --  </option>
               <option value="available"> متوفر </option>
               <option value="not_available"> غير متوفر </option>
             </select>
           </div>
         </div>
            
    
         <div class="form-group col-md-4">
           <label>  الورشة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="workshop_selection" name="workshop_selection" required>
               <option value="" disabled selected> -- اختار --  </option>
               <option value="available"> متوفر </option>
               <option value="not_available"> غير متوفر </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> الكمبرسون </label> 
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="compressor_selection" name="compressor_selection" required>
               <option value="" disabled selected> -- اختار --  </option>
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
             <select class="form-control mr-1" id="fuel_selection" name="fuel_selection" required>
               <option value="" disabled selected> -- اختار --  </option>
               <option value="available"> متوفر </option>
               <option value="not_available">  غير متوفر </option>
             </select>
           </div>
         </div>
            

           <div class="form-group col-md-4">
           <label> المياة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="water_selection" name="water_selection" required>
               <option value="" disabled selected> -- اختار --  </option>
               <option value="available"> متوفر  </option>
               <option value="not_available">  غير متوفر </option>
             </select>
           </div>
         </div>

          <div class="form-group col-md-4">
           <label> الكهرباء </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="electricity_selection" name="electricity_selection" required>
               <option value="" disabled selected> -- اختار --  </option>
               <option value="available"> متوفرة </option>
               <option value="not_available"> غير متوفرة </option>
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
                  <label></label>
                  <input type="text" name="customer_name" class="form-control" placeholder="الاسم ثلاثي" required>
                </div>


                <div class="col-md-4 form-group">
                  <label style="color: red">  </label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="   رقم الهاتف  مثال 00249123000000" required>
                </div>

                <div class="col-md-4 form-group">
                  <label style="color: red">  </label>
                  <input type="text" name="whatsapp_num" class="form-control" id="phone" placeholder="    رقم الواتساب  مثال 00249123000000" required>
                </div>

              </div>

              <div class="row">

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label></label>
                  <input type="email" class="form-control" name="customer_email" placeholder=" الايميل" required>
                </div>


              <div class="col-md-4 form- mt-4 mt-md-0">
              <label>   نوع العلاقة بالموقع </label> 
                <select class="form-control mr-1" name="customer_job_title" id="job" onchange="" required>
                <option value="" disabled selected> -- اختار -- </option>
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
                <label>   الجهه التابع لها </label> 
                <select class="form-control mr-1" name="customer_type_selection" id="customer_type_selection" onchange="select_side();" required>
                <option value="" disabled selected>  -- اختار --</option>
                <option value="company"> شركة </option>
                <option value="person"> فرد </option>
                </select>  
                <input id="company" name="company" type="text" class="form-control" placeholder="ادخل اسم الشركة" style="display: none;" />
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <label> هل سبق لك العمل معنا </label> 
                <select class="form-control mr-1" name="ever_work_with_us" id="ever_work_with_us" onchange="select_wwus();" required>
                <option value="" disabled selected> -- اختار --  </option>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
                </select>

               <!-- <input id="wwushide" type="text" class="form-control" placeholder=" workplace  " style="display: none;" /> -->
               
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2"> كيف تعرفت علينا </label>
             <select  class="form-control" id="exampleFormControlSelect2" name="social_media_selection" required>
                <option value="" selected disabled> -- اختار -- </option>
                <option value="facebook">Facebook</option>
                <option value="twitter"> Twitter </option>
                <option value="instagram"> Instagram </option>
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