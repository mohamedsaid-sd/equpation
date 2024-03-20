<!DOCTYPE html>
<html dir="rtl">
<head>
	<title> أيكوبيشن > الخدمات >  خدمة الصيانة </title>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
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
	/ <a href="#"><b> الخدمات </b></a> / <a href="#"><b> خدمة الصيانة </b></a>
</section>

<section id="forms">
	<br/><br/>
<div class="container">
  
 <div class="form-head">
   <!--  <img style="width: 100%;height: 100px;" src="../images/hero.jpg"> -->
    <h1 align="center"> طلب الصيانة </h1>
  </div>

<div class="stepwizard col-lg-12">



    <div class="stepwizard-row setup-panel">

      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-warning btn-circle"> <b> 1 </b>  بيانات المعدة  </a>
       
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

                <div class="col-md-4 form-group">
                  <label></label>
                  <input type="text" name="Type" class="form-control" id="Type" placeholder="نوع الالية " required>
                </div>

                <div class="col-md-4 form- mt-3 mt-md-0">
                  <label></label>
                  <input type="text" class="form-control" name="model" id="model" placeholder=" موديل الالية   " required>
                </div>

                <div class="col-md-4 form- mt-3 mt-md-0">
                  <label></label>
                    <input type="text" class="form-control" name="chassis" id="Sashinumber" placeholder="رقم الشاسي  " required>
                  </div>

                </div>

     <!-- Start Input Start Time -->
     <div class="row">


    <div class="col-md-4 form- mt-3 mt-md-0">
      <label></label>
    <input type="text" class="form-control" name="engine" id="engine" placeholder="رقم المحرك  " required>
    </div>


     <div class="form- col-md-4">
      <label></label>   
    <input type="text" class="form-control" name="km_read" id="km_read" placeholder="    عداد الساعات /الكيلومترات    " required>
      </div>

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

      </div>


      <div class="row">
        

        <div class="form- col-md-4">
            <label for="inputDate">سنة الصنع</label>
            <input type="date" class="form-control" id="inputDate" name="date" required />
          </div>

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

       <div class="col-md-4 form- mt-3">
        <textarea class="form-control" name="issue_description" rows="5" placeholder="وصف المشكلة " required></textarea>
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
   
         <div class="col-md-4 form- mt-3 mt-md-0">
              <br/>
            <input type="text" class="form-control" name="city" id="site_location" placeholder="   اقرب مدينة    " required>
          </div>

          <div class="col-md-4 form- mt-3 mt-md-0">
            <br/>
            <input type="text" class="form-control" name="Nearest_market" id="Nearest_market" placeholder="    مسافة أقرب طريق معبَّد    " required>
          </div>
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

              </div>


      <br/>

          <div style="text-align: left;">
         
          <button class="btn btn-warning nextBtn btn-lg pull-right" type="button"> تأكيد وإستمرار -> </button>

           <button class="btn btn-warning prevBtn btn-lg pull-left" type="button"> <- السابق  </button>
          </div>
        </div>
      </div>
    </div>





    <div class="row setup-content" id="step-3">
      <div class=" col-lg-12 col-xs-6 col-md-offset-3">


      
              <div class="row">

                <div class="col-md-4 form-">
                  <label></label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="   الاسم  ثلاثي" required>
                </div>

                <div class="col-md-4 form-">
                  <label></label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="   رقم الهاتف  مثال 00249123000000" required>
                </div>

                <div class="col-md-4 form-">
                  <label></label>
                  <input type="text" name="whatsapp_num" class="form-control" id="phone" placeholder="    رقم الواتساب  مثال 00249123000000" required>
                </div>

              </div>

              <div class="row">


                <div class="col-md-4 form- mt-3 mt-md-0">
                  <label></label>
                  <input type="text" class="form-control" name="email" id="email" placeholder=" الايميل " required>
                </div>

                <div class="col-md-4 form- mt-3 mt-md-0">
                <label>   نوع العلاقة بالموقع </label> 
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

              <div class="col-md-4 form-">
                <label> الجةة التابع لها </label> 
                <select class="form-control mr-1" name="work_for" id="work_for" onchange="select_side();" required>
                <option value="" disabled selected> -- اختار  -- </option>
                <option value="company"> شركة </option>
                <option value="individual"> فرد </option>
                </select>  
                <input id="sidehide" type="text" name="company_name" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
              </div>

              <div class="col-md-4 form- mt-3 mt-md-0">
              <label> هل  سبق لك العمل معنا </label> 
                <select class="form-control mr-1" name="previous" id="previous" onchange="select_wwus();" required>
                <option value="" disabled selected> -- اختار الاجابة -- </option>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
                </select>

               <input id="wwushide" type="text" class="form-control" placeholder=" في اي موقع عملت معنا " style="display: none;" />
               <!-- required style="display:none" -->
               
              

              </div>

              <div class="col-md-4 form- mt-3 mt-md-0">
              <div class="form-">
              <label for="exampleFormControlSelect2">طريقة التعرف علينا</label>
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

      <div style="text-align: left;">
       
          <button class="btn btn-success btn-lg pull-right" type="submit"> تأكيد إرسال الطلب </button>

             <button class="btn btn-warning prevBtn btn-lg pull-left" type="button"> <- السابق </button>
        </div>
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