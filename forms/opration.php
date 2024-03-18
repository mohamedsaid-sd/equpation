<!DOCTYPE html>
<html dir="rtl">
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<title> أيكوبيشن > الخدمات >  خدمة التشغيل </title>
</head>
<body>

<?php include 'header.php'; ?>
<section id="pointer">
	<img src="../images/pointer/divider.png"/>
	<a href="index.php"><img style="height: 30px;" src="../images/pointer/home.png"></a>
	/ <a href="#"><b> الخدمات </b></a> / <a href="#"><b> خدمة التشغيل </b></a>
</section>

<section id="forms">
	
<div class="container">
	
</div>,
<div class="container">
  
<div class="stepwizard col-lg-12">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-warning btn-circle">1</a>
        <p> بيانات المعدة </p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p> بيانات موقع الآلية </p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p> بيانات العميل </p>
      </div>
    </div>
  </div>
  
  <form role="form" action="#" method="post">
    <div class="row setup-content" id="step-1">

      <div class=" col-lg-12 col-xs-6 col-md-offset-3">
        <div class="col-md-12">
           
        <div class="alert alert-warning" role="alert">
  		يرجي ملئ جميع بياات ومواصفات المعدة بشكل صحيح ...
		</div>

		<div class="row">

       <div class="col-md-6 form-group">
                <label> نوع المعدة </label>
                
                  <select class="form-control mr-1" name="machine_type" id="machine_type">
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

       <div class="form-group col-md-6">
         <label>     مقاس المعدة </label>
         <input type="text" class="form-control" id="inputDate" name="size_id"/></div>

        </div>

     <div class="row">

      <div class="form-group col-md-6">
        <label>     ماركة المعدة </label>
         <input type="text" class="form-control" id="inputDate" name="brand_id"/></div>

    <div class="form-group col-md-6">
        <label>      سنة الصنع </label>
        <input type="text" class="form-control " id="year_of_manufacture_idhide" name="year_of_manufacture_idhide" placeholder="ادخل سنة الصنع" >     
      </div>

  	</div>

  	<div class="row">

     <div class="form-group col-md-6">
            <label>  الترخيص </label>
            <select class="form-control" id="" name="">
              <option value="" disabled selected> </option>
              <option value="ترخيص ساري ">  ترخيص ساري  </option>
              <option value="ترخيص منتهي ">  ترخيص منتهي  </option>
              <option value="غير مرخصة ">   غير مرخصة  </option>

            </select>
      </div>

          <div class="form-group col-md-6">
            <label>  التأمين </label>
            <select class="form-control" id="insurance_type" name="insurance_type">
              <option value="" disabled selected> </option>
              <option value=".تأمين شامل  ">  .تأمين شامل    </option>
              <option value=".تأمين هندسي  ">   .تأمين هندسي  </option>
              <option value=".تأمين إجباري   ">   .تأمين إجباري   </option>
              <option value=".غير مؤمنة    "> .غير مؤمنة   </option>


            </select>
          </div>

      </div>
        

        <div class="row">

      <div class="col-md-6 form-group  mt-3 mt-md-0">  
      <label>  إضافة أي ملحقات مع المعدة  </label>

      <input type="text" id="description" name="description" class="form-control" placeholder="   
إضافة أي ملحقات مع المعدة "> <font color="red">  </font> 
          </div> 


        <div class="col-md-6 form-group mt-3 mt-md-0">
              <label> مجال العمل </label>
                  <select class="form-control mr-1" name="work_field" id="work_field" onchange="select_work_field();">
                    <option disabled selected>  </option>
                    <option> التعدين </option>
                    <option>  الاسمنت </option>
                    <option>  الزراعة </option>
                    <!-- <option value="hand">  ادخال يدوي </option> -->
                  </select>

                  <!-- <input id="work_fieldhide" name="work_fieldhide" type="text" class="form-control" placeholder=" ادخل مجال العمل  يدويا " style="display: none;"> -->
          </div>
      </div>

      <div class="row"> 
      	

          <div class="form-group col-md-6">
          <label> مدة العقد:  </label>
          <select class="form-control" id="cotracts_id" name="cotracts_id" onchange="select_contracts();">
            <option value="" disabled selected>  </option>
            <option> لا يوجد قيد </option>
            <option> عقود طويلة (لا تقل عن 12 شهر) </option>
            <option> عقود متوسطة (لا تقل عن 3 شهور)  </option>
            <option> عقود قصيرة (لا تزيد عن شهر)  </option>
            <option value="hand"> اضافة قيد جديد </option>
          </select>
        <input  id="cotracts_idhide" name="cotracts_idhide" type="text" class="form-control" placeholder="حدد القيد" style="display: none;">
        </div>

        <div class="form-group col-md-6">
          <label> المكان </label>
          <select class="form-control" id="state_id" name="state_id" onchange="select_state();">
            <option value="" disabled selected>  </option>
            <option> لا يوجد قيود </option>
            <option> داخل السودان فقط </option>
            <option> كل ولايات السودان عدا ... </option>
            <option> ولاية محددة .... </option>
            <option value="hand"> اضافة قيد مكان جديد </option>
          </select>
        <input type="text" id="state_idhide" name="state_idhide" class="form-control" placeholder="حدد الولاية" style="display: none;">
        </div>

        </div>

        <div class="row">

        <div class="form-group col-md-6">
          <label> تعيين المشغلين  </label>
            <select class="form-control mr-1" id="hair_operator_id" name="hair_operator_id" onchange="select_hair_operator();">
               <option value="" disabled selected>  </option>
               <option> تعيين بواسطة إكوبيشن </option>
               <option> تعيين بواسطتي </option>
               <option value="hand"> إضافة قيد جديد </option>
             </select>
        <input id="hair_operator_idhide" name="hair_operator_idhide" type="text" class="form-control" placeholder=" حدد القيد  " style="display: none;">
        </div>


        <div class="form-group col-md-6">
          <label>  الجهات المفضلة في العمل: </label>
          <select class="form-control" id="category_id" name="category_id" onchange="select_catogry();">
            <option value="" disabled selected> </option>
            <option> لا قيود في العمل    </option>
            <option>  العمل مع الشركات فقط </option>
            <!-- <option  value="hand"> اضافة قيد جديد </option> -->
          </select>
        <input type="text" id="category_idhide" name="category_idhide" class="form-control" placeholder="حدد القيد" style="display: none;">
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

          <div class="form-group col-md-6">
           <label>  الولاية </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
           <select class="form-control mr-1" id="state_id" name="">
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

         <div class="col-md-6 form- mt-3 mt-md-0">
              <br/>
            <input type="text" class="form-control" name="address" id="address" placeholder="   اقرب مدينة    ">
          </div>

          </div>

          <div class="row">

          <div class="col-md-6 form- mt-3 mt-md-0">
            <br/>
            <input type="text" class="form-control" name="nearest_road" id="nearest_road" placeholder="مسافة أقرب طريق معبَّد">
          </div>

          <div class="col-md-6 form- mt-3 mt-md-0">
              <label>  توفر الشبكة </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="network">
               <option value="" disabled selected> -- حدد نوع الشبكة -- </option>
               <option value="متاح"> متاح  </option>
               <option value="غير متاح"> غير متاح</option>
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

<div class="col-md-6 form-">
  <label></label>
  <input type="text" name="full_name" class="form-control" id="full_name" placeholder="   الاسم  ثلاثي" required>
</div>

<div class="col-md-6 form-">
  <label></label>
  <input type="text" name="phone_number" class="form-control" id="phone" placeholder="   رقم الهاتف  مثال 00249123000000" required>
</div>

</div>

<div class="row">
  
<div class="col-md-6 form-">
  <label></label>
  <input type="text" name="whatsapp_num" class="form-control" id="whatsapp_num" placeholder="    رقم الواتساب  مثال 00249123000000" required>
</div>

      <div class="col-md-6 form- mt-3 mt-md-0">
                  <label></label>
                  <input type="text" class="form-control" name="email" id="email" placeholder=" الايميل " required>
                </div>

</div>

      <div class="row">



                <div class="col-md-6 form-group">
                <label>   نوع العلاقة بالموقع </label> 
                <select class="form-control mr-1" name="job" id="job" onchange="" required>
                <option value="مالك"> مالك   </option>
                <option value="شريك"> شريك </option>
                <option value="مدير"> مدير </option>
                <option value="موظف"> موظف </option>
                <option value="مشرف"> مشرف </option>
                <option value="وكيل"> وكيل </option>
                <option value="وسيط"> وسيط </option>
                </select> 
                  </div>

              <div class="col-md-6 form-">
                <label> الجهة التابع لها </label> 
                <select class="form-control mr-1" name="work_for" id="work_for" onchange="select_side();" required>
                <option value="company"> شركة </option>
                <option value="individual"> فرد </option>
                </select>  
                <input id="sidehide" type="text" name="company_name" class="form-control" placeholder=" ادخل اسم الشركة يدوي " style="display: none;" />
              </div>  

            </div>




            <div class="row">

              <div class="col-md-6 form- mt-3 mt-md-0">
              <label> هل  سبق لك العمل معنا </label> 
                <select class="form-control mr-1" name="previous" id="previous" onchange="select_wwus();" required>
                <option value="yes"> نعم </option>
                <option value="no"> لا </option>
                </select>

               <input id="wwushide" type="text" class="form-control" placeholder=" في اي موقع عملت معنا " style="display: none;" />
               <!-- required style="display:none" -->
               
              

              </div>


              <div class="col-md-6 form- mt-3 mt-md-0">
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