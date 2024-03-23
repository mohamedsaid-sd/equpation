<!DOCTYPE html>
<html dir="rtl">
<head>
	<title> أيكوبيشن > الخدمات >  خدمة الترحيل </title>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=0.7" name="viewport">
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
	/ <a href="services.php?id=transport"><b> خدمة الترحيل </b></a> / <a href="#"><b> تقديم طلب </b></a>
</section>

<section id="forms">
	<br/><br/>
<div class="container">
  
 <div class="form-head">
   <!--  <img style="width: 100%;height: 100px;" src="../images/hero.jpg"> -->
    <h1 align="center"> طلب الترحيل </h1>
  </div>

<div class="stepwizard col-lg-12">



    <div class="stepwizard-row setup-panel">

      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-warning btn-circle"> <b> 1 </b>  مطلوبات الترحيل</a>
       
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
                  <label>نوع الآلية المرحلة</label>
                  <select class="form-control mr-1" name="machine" id="machine" onchange="select_type();" >
                    <option value="" disabled selected> -- اختار النوع  -- </option>
                    <option> دفار </option>
                    <option> دوزر </option>
                    <option> مولد </option>
                    <option value="hand"> يدوي </option>
                  </select>
                  <input id="machinehide" name="machinehide" type="text" class="form-control" placeholder=" ادخل نوع الالية يدوي "  style="display:none">
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label>مقاس الآلية</label>
                  <input type="number" step="0.01" id="comprossor" name="comprossor" class="form-control" placeholder="ادخل حجم كمبروسير ">
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                <input type="number" step="0.01" id="generator" name="generator" class="form-control" placeholder="ادخل حجم مولد ">
                </div>

              </div>

              <div class="row">
                
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                <input type="number" step="0.01" id="welding_machine" name="welding_machine" class="form-control" placeholder="ادخل حجم  مكنة لحام  ">
               </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                <input type="number" step="0.01" id="excavator" name="excavator" class="form-control" placeholder="ادخل حجم حفار">
              </div>


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

              
                </div>

     <!-- Start Input Start Time -->
     <div class="row">

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

   
      <div class="form-group col-md-4">
        <label>  مقاس الالية المطلوبة للترحيل </label>
        <input id="lowbed" name="lowbed" type="number" step="0.01" class="form-control" placeholder="ادخل مقاس اللوبيد"/>
      </div>

      <div class="form-group col-md-4">
      <label></label>
     <input id="truck" name="truck" type="number" step="0.01" class="form-control" placeholder="ادخل مقاس الدفار"/>
      </div>
  
  </div>

    <div class="form-group col-md-4">
     <label>   سطحة </label>
          <select class="form-control mr-1" name="trailer" id="trailer" >
            <option value="zs" disabled selected> --  اختار -- </option>
            <option value="zs">  zs </option>
            <option value="zy">  zy </option>
          
          </select>
    </div>
       


        <div style="text-align: left;">

          <button class="btn btn-warning nextBtn btn-lg" type="button"> تأكيد وإستمرار <i class="icon-arrow-left"></i> </button>

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



    <br/><h3 for="textAreaRemark">معلومات الموقع</h3>


      <div class="row">

        <div class="col-md-4 form-group">
          <label></label>
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
          <label></label>
          <input type="text" class="form-control" id="zone" name="zone" placeholder=" المدينة " >
        </div>

        <div class="form-group col-md-4">
          <label></label>
          <input type="text" class="form-control" id="workplace" name="workplace" placeholder="الشركة " >
        </div>

      </div>

      <div class="row">
      
      <div class="col-md-4 form-group mt-3 mt-md-0">
        <label></label>
        <textarea class="form-control" id="validationTextarea" name="description" placeholder="  وصف كتابي دقيق للموقع " ></textarea>    
      </div>

      <div class="col-md-4 form-group mt-3 mt-md-0">
      <label></label>
      <input type="text" class="form-control" id="location" name="location" placeholder="  الموقع ">
      </div>
       
      <div class="form-group col-md-4">
      <label></label>
        <input type="number" class="form-control" id="phone" name="phone" placeholder=" رقم التواصل 1    مثال 00249123000000" >  
    </div>
         
   
         <div class="form-group col-md-4">
          <label></label>
         <input type="number" class="form-control" id="mobile" name="mobile" placeholder=" رقم التواصل 2   مثال 00249123000000" >  
         </div>

    </div>




          <h3 for="textAreaRemark"> جهة توصيل الآلية </h3>


          <div class="row">
        <div class="col-md-4 form-group">
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="des_state" name="des_state" required>
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
          <input type="text" class="form-control" id="zone" name="des_zone" placeholder=" المدينة " >
        </div>

        <div class="form-group col-md-4">
          <input type="text" class="form-control" id="workplace" name="des_workplace" placeholder="   الشركة " >
        </div>

      </div>

      <div class="row">
      
      <div class="col-md-4 form-group mt-3 mt-md-0">
        <label></label>
        <textarea class="form-control" id="validationTextarea" name="des_description" placeholder="  وصف كتابي دقيق للموقع " ></textarea>    
      </div>
       
      <div class="form-group col-md-4">
        <label></label>  
        <input type="number" class="form-control" id="phone" name="des_phone" placeholder="    رقم التواصل 1   مثال 00249123000000" >  
      </div>
         
   
         <div class="form-group col-md-4">
          <label></label>
         <input type="number" class="form-control" id="mobile" name="des_mobile" placeholder="   رقم التواصل 2   مثال 00249123000000" >  
         </div>
              </div>

      <br/>

          <div>
     
          <button class="btn btn-warning nextBtn btn-lg pull-right" type="button"> تأكيد وإستمرار <i class="icon-arrow-left"></i> </button>

               <button class="btn btn-warning prevBtn btn-lg pull-left" type="button"> <i class="icon-arrow-right"></i> السابق  </button>
          </div>
        </div>
      </div>
    </div>









    <div class="row setup-content" id="step-3">
      <div class=" col-lg-12 col-xs-6 col-md-offset-3">


  
    <div class="row">

                <div class="col-md-4 form-group">
                  <label></label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="  الاسم  ثلاثي" >
                </div>

                <div class="col-md-4 form-">
                  <label></label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="   رقم الهاتف  مثال 00249123000000" required>
                </div>

                <div class="col-md-4 form-">
                  <label></label>
                  <input type="text" name="whatsapp_num" class="form-control" id="whatsapp_num" placeholder="    رقم الواتساب  مثال 00249123000000" required>
                </div>               

              </div>

              <div class="row">

               <div class="col-md-4 form-group mt-3 mt-md-0">
                <label></label>
                  <input type="text" class="form-control" name="email" id="email" placeholder=" الايميل " >
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
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

              <div class="col-md-4 form-group">
                <label> الجهة  التابع لها </label> 
                <select class="form-control mr-1" name="work_for" id="work_for" onchange="select_side();" >
                <option value="" disabled selected> -- اختار الجهة-- </option>
                <option value="company"> شركة </option>
                <option value="individual"> فرد </option>
                </select>  
                <input id="work_forhide" name="work_forhide" type="text" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
              </div>

            </div>

            <div class="row">

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <label>هل  سبق لك العمل معنا </label> 
                <select class="form-control mr-1" name="previous" id="previous" onchange="select_wwus();" >
                <option value="yes" disabled selected> -- اختار الاجابة -- </option>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
                </select>
               <input id="previoushide" name="previoushide" type="text" class="form-control" placeholder=" في اي موقع عملت معنا " style="display: none;" />
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2">طريقة التعرف علينا</label>
              <select  class="form-control" id="exampleFormControlSelect2" name="know">
                <option value="media"> الفيسبوك </option>
                <option value="media"> التويتر </option>
                <option value="media"> الانستغرام </option>
                <option value="friend"> عن طريق صديق </option>
                <option value="advertisemen">  الاعلانات  </option>
                <option value="other">  اخري  </option>
              </select>
              </div>
             </div>

              </div>


                   <div class="row">

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
      </div>
      <br>
  



      <br/><br/>

      <div>
         
          <button class="btn btn-success btn-lg pull-right" type="submit"> تأكيد إرسال الطلب <i class="icon-check"></i> </button>

           <button class="btn btn-warning prevBtn btn-lg pull-left" type="button"> <i class="icon-arrow-right"></i> السابق </button>

        </div>
        </div>
      </div>
    </form></div>

</section>


<img src="images/divider2.png" style="width: 100%;border:none;">
<?php include 'footer.php'; ?>
</body>
</html>