<?php 
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
The Job form page
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
<title> أيكوبيشن > الخدمات >  خدمة  التوظيف   </title>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=0.7" name="viewport">
<link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link href="vendor/css/style.css" rel="stylesheet"/>
</head>
<script type="text/javascript">
 

  $habbit_counter = 2;
  $ref_counter = 2 ;
  $skill_counter = 2 ; 
  $exper_counter = 2 ;

  function add_exper_line(argument) {
    // alert("gooo");
    var exper = document.getElementById("exper_ids");

    var div = document.createElement("div");
    div.setAttribute("class" , "col-md-3 form-group");
    var label = document.createElement("label");
    var input = document.createElement("input");
    input.setAttribute("class" , "form-control");
    input.setAttribute("placeholder" , "إسم المؤسسة");
    input.setAttribute("name" , "exper_name" + $exper_counter);
    div.appendChild(label);
    div.appendChild(input);

    var div1 = document.createElement("div");
    div1.setAttribute("class" , "col-md-2 form-group");
    var label1 = document.createElement("label");
    label1.innerHTML = "من تاريخ";
    var input1 = document.createElement("input");
    input1.setAttribute("class" , "form-control");
    input1.setAttribute("type" , "date");
    input1.setAttribute("name" , "exper_date_from" + $exper_counter);
    div1.appendChild(label1);
    div1.appendChild(input1);

    var div2 = document.createElement("div");
    div2.setAttribute("class" , "col-md-2 form-group");
    var label2 = document.createElement("label");
    label2.innerHTML = "الي تاريخ";
    var input2 = document.createElement("input");
    input2.setAttribute("class" , "form-control");
    input2.setAttribute("type" , "date");
    input2.setAttribute("name" , "exper_date_to" + $exper_counter);
    div2.appendChild(label2);
    div2.appendChild(input2);

    var div3 = document.createElement("div");
    div3.setAttribute("class" , "col-md-2 form-group");
    var label3 = document.createElement("label");
    var input3 = document.createElement("input");
    input3.setAttribute("class" , "form-control");
    input3.setAttribute("placeholder" , "المسمي الوظيفي");
    input3.setAttribute("name" , "exper_job" + $exper_counter);
    div3.appendChild(label3);
    div3.appendChild(input3);

    var div4 = document.createElement("div");
    div4.setAttribute("class" , "col-md-3 form-group");
    var label4 = document.createElement("label");
    var textarea = document.createElement("textarea");
    textarea.setAttribute("class" , "form-control");
    textarea.setAttribute("placeholder" , "المهام");
    textarea.setAttribute("name" , "exper_tasks" + $exper_counter);
    div4.appendChild(label4);
    div4.appendChild(textarea);

    exper.appendChild(div);
    exper.appendChild(div1);
    exper.appendChild(div2);
    exper.appendChild(div3);
    exper.appendChild(div4);

  }


  function add_skill_line() {
    //alert("go");
    var skills = document.getElementById("skill_ids");

    var div = document.createElement("div");
    div.setAttribute("class" , "col-md-3 form-group");
    var label = document.createElement("label");
    var input = document.createElement("input");
    input.setAttribute("class" , "form-control");
    input.setAttribute("placeholder" , "المهارة ");
    input.setAttribute("name" , "skill" + $skill_counter);
    div.appendChild(label);
    div.appendChild(input);

    var div2 = document.createElement("div");
    div2.setAttribute("class" , "col-md-3 form-group");
    var label2 = document.createElement("label");
    label2.innerHTML = "التقييم";
    var select = document.createElement("select");
    select.setAttribute("class" , "form-control");
    select.setAttribute("name" , "skill_val" + $skill_counter);
    var option1 = document.createElement("option");
    option1.setAttribute("selected" , "true ");
    option1.setAttribute("disabled" , "true ");
    option1.innerHTML = "-- Select --";
    var option2 = document.createElement("option");
    option2.innerHTML = "جيدة";
    option2.value = "Good";
    var option3 = document.createElement("option");
    option3.innerHTML = "ممتازة";
    option3.value = "Excellent";
    select.appendChild(option1);
    select.appendChild(option2);
    select.appendChild(option3);

    div2.appendChild(label2);
    div2.appendChild(select);


    skills.appendChild(div);
    skills.appendChild(div2);
    
    $skill_counter ++;
  }









  function add_habbit_line() {
    // alert("go");
    
    var habbits = document.getElementById("habbits");

    var div = document.createElement("div");
    div.setAttribute("class" , "col-md-4 form-group");

    var label = document.createElement("label");
   
    var input = document.createElement("input");
    input.setAttribute("type" , "text");
    input.setAttribute("class" , "form-control");
    input.setAttribute("placeholder" , "ادخل الهوية");
    input.setAttribute("name" , "h" + $habbit_counter);

    div.appendChild(label);
    div.appendChild(input);

    habbits.appendChild(div);

    $habbit_counter ++ ;
  }

  function add_ref_line() {


  
    var ref = document.getElementById("ref_ids");

    var div = document.createElement("div");
    div.setAttribute("class" , "col-md-3 form-group");
    var label = document.createElement("label");
    var input = document.createElement("input");
    input.setAttribute("class" , "form-control");
    input.setAttribute("placeholder" , "الاسم");
    input.setAttribute("name" , "ref_name" + $ref_counter);
    div.appendChild(label);
    div.appendChild(input);

    var div2 = document.createElement("div");
    div2.setAttribute("class" , "col-md-3 form-group");
    var label2 = document.createElement("label");
    var input2 = document.createElement("input");
    input2.setAttribute("class" , "form-control");
    input2.setAttribute("placeholder" , "الوظيفة");
    input2.setAttribute("name" , "ref_job" + $ref_counter);
    div2.appendChild(label2);
    div2.appendChild(input2);

    var div3 = document.createElement("div");
    div3.setAttribute("class" , "col-md-3 form-group");
    var label3 = document.createElement("label");
    var input3 = document.createElement("input");
    input3.setAttribute("class" , "form-control");
    input3.setAttribute("placeholder" , "الجوال");
    input3.setAttribute("name" , "ref_mobile" + $ref_counter);
    div3.appendChild(label3);
    div3.appendChild(input3);

    var div4 = document.createElement("div");
    div4.setAttribute("class" , "col-md-3 form-group");
    var label4 = document.createElement("label");
    var input4 = document.createElement("input");
    input4.setAttribute("class" , "form-control");
    input4.setAttribute("placeholder" , "الشركة");
    input4.setAttribute("name" , "ref_company" + $ref_counter);
    div4.appendChild(label4);
    div4.appendChild(input4);


    ref.appendChild(div);
    ref.appendChild(div2);
    ref.appendChild(div3);
    ref.appendChild(div4);

    $ref_counter ++ ;

  }
</script>
<body>

<?php include 'header.php'; ?>

<section id="pointer">
	<img src="images/pointer/divider.png"/>
	<a href="index.php"><img style="height: 30px;" src="images/pointer/home.png"></a>
	/  <a href="services.php?id=contract"><b> خدملة التوظيف   </b></a> / <a href="#"><b> تقديم طلب </b></a>
</section>

<section id="forms">
	<br/><br/>
<div class="container">
  
 <div class="form-head">
   <!--  <img style="width: 100%;height: 100px;" src="../images/hero.jpg"> -->
    <h1 align="center">  طلب التوظيف   </h1>
  </div>

<div class="stepwizard col-lg-12">



    <div class="stepwizard-row setup-panel">

      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-warning btn-circle"> <b> 1 </b>   المعلومات الشخصية    </a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 2 </b>  الشهادات التعليميمة    </a>
       
      </div>

      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"><b> 3 </b>  اسئلة </a>
      
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
      
        <label> نوع الطلب  </label>
        <select name="request_type" class="form-control">
          <option selected disabled> --  -- </option>
          <option value="employment"> توظيف </option>
          <option value="training"> تدريب </option>
        </select>

      </div> 

      <div class="col-md-4 form-group">
        <label> الصورة الشخصية </label>
        <input type="file" name="image" class="form-control">
         <label> <b style="color: #a12;"> نوع الصورة يجب ان يكون JPG , JPEG  </b> </label>
      </div>

      <div class="col-md-4 form-group">
        <label>   </label>
        <input type="text" name="full_name" class="form-control" placeholder="الإسم الرباعي (عربي)">
      </div>

      <div class="col-md-4 form-group">
        <label> تاريخ الميلاد  </label>
        <input type="date" name="birthdate" class="form-control" placeholder=" ">
      </div>



      <div class="col-md-4 form-group">
        <label>   </label>
        <input type="text" name="place" class="form-control" placeholder="مكان الميلاد">
      </div> 


      </div>


           <div class="row">

      <div class="col-md-4 form-group">
        <label>   </label>
        <input type="text" name="national" class="form-control" placeholder="الجنسية">
      </div>  

       <div class="col-md-4 form-group">
        <label> نوع الجنسية  </label>
        <select name="type_national" class="form-control">
          <option selected disabled>    </option>
          <option value="original"> اصلية </option>
          <option value="naturalize"> توطين </option>
        </select>
      </div> 

      <div class="col-md-4 form-group">
        <label> هل لديك جنسية اخرى  </label>
        <select name="other_national" class="form-control">
          <option selected disabled>    </option>
          <option value="yes"> نعم </option>
          <option value="no"> لا </option>
        </select>
      </div> 
        
      </div>

            <div class="row">

      <div class="col-md-4 form-group">
        <label> الحاله الإجتماعية  </label>
        <select name="social_state" class="form-control">
          <option selected disabled>    </option>
          <option value="single"> اعزب </option>
          <option value="married"> متزوج </option>
          <option value="cohabitant"> مرتبط </option>
          <option value="divorced"> مطلق </option>
          <option value="widower"> ارمل </option>
        </select>
      </div> 

      <div class="col-md-4 form-group">
      <label> هل لديك ابناء  </label>
        <select name="children" class="form-control">
          <option selected disabled>    </option>
          <option value="yes"> نعم </option>
          <option value="no"> لا </option>
        </select>
        <input type="text" name="boys"  class="form-control" placeholder="الابناء"/>
        <input type="text" name="girl" class="form-control" placeholder="البنات"/>
      </div> 
  

      </div>


      <h3> معلومات التواصل </h3>
     <div class="row">

       <div class="col-md-4 form-group">
        <label> رقم الهاتف  </label>
        <input type="number" name="mobile" class="form-control" placeholder="ex : 249912322447">
      </div>

      <div class="col-md-4 form-group">
      <label> رقم هاتف آخر </label>
      <input type="number" name="phone" class="form-control" placeholder="ex : 249912322447">
      </div>

      <div class="col-md-4 form-group">
      <label> رقم الواتساب </label>
      <input type="number" name="whatsapp_num" class="form-control" placeholder="ex : 249912322447">
      </div>
        
      </div>
        <div class="row">

      <div class="col-md-4 form-group">
      <label> البريد الإلكتروني  </label>
      <input type="email" name="email" class="form-control" placeholder="ex : example@gmail.com">
      </div>

      <div class="col-md-4 form-group">
      <label> حساب الفيسبوك  </label>
      <input type="text" name="facebook" class="form-control" placeholder="https://www.facebook.com/facebook.user">
      </div>

      <div class="col-md-4 form-group">
      <label> حساب الإنستقرام  </label>
      <input type="text" name="instagram" class="form-control" placeholder="https://www.instagram.com/instagram.user">
      </div>

      <div class="col-md-4 form-group">
      <label> حساب التويتر  </label>
      <input type="text" name="twiter" class="form-control" placeholder="https://www.twitter.com/twitter.user">
      </div>

      <div class="col-md-4 form-group">
      <label> الموقع شخصى  </label>
      <input type="text"  name="web" class="form-control" placeholder="ex: www.website.com">
      </div>        
      </div>


          <h3> معلومات السكن </h3>

      <h4> السكن الاصلي </h4>
      <div class="row">

  

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="o1" class="form-control" placeholder="الولاية"/>
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="o2" class="form-control" placeholder="المحلية"/>
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="o3" class="form-control" placeholder="المربع">
      </div>

      </div>




<div class="row">

      <!-- <div class="col-md-4 form-group">
        <br/>
        <label> نوع السكن   </label>
         <select name="house_type" class="form-control">
          <option selected disabled>  </option>
          <option value="owned"> ملك </option>
          <option value="rental_request"> ايجار </option>
        </select>
      </div>  -->

      <div class="col-md-4 form-group">
      <label>   </label>
      <textarea name="c8" class="form-control" placeholder="وصف تفصيلي"></textarea>
      </div>        
      </div>

    <h4> السكن الحالى </h4>
       <div class="row">


  

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="c1" class="form-control" placeholder="الولاية">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="c2" class="form-control" placeholder="المحلية">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="c3" class="form-control" placeholder="المربع">
      </div>


        <div class="col-md-4 form-group">
      <label>   </label>
      <textarea name="c8" class="form-control" placeholder="وصف تفصيلى"></textarea>
      </div>

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

   
   <h3> إثبات الشخصية </h3>
    <div class="row">
   

      <div class="col-md-4 form-group">
      <label> نوع إثبات الشخصية</label>
      <select name="id_type" class="form-control">
      <option selected disabled>  </option>
      <option value="id_card"> بطاقة قومية </option>
      <option value="car_lince"> رخصة قيادة </option>
      <option value="passport"> جواز سفر </option>
      <option value="other"> اخرى </option>
      </select>
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="issue_place" class="form-control" placeholder="مكان الإصدار">
      </div>

      <div class="col-md-4 form-group">
      <label> تاريخ الإصدار  </label>
      <input type="date" name="issue_date" class="form-control">
      </div>
        
      </div>



      <div class="row">

      <div class="col-md-4 form-group">
      <label> تاريخ الانتهاء  </label>
      <input type="date" name="expirty_date" class="form-control">
      </div>

      <div class="col-md-4 form-group">
      <label> هل قمت بانهاء الخدمة الوطنية ؟ </label>
      <select name="service" class="form-control">
      <option selected disabled> --  -- </option>
      <option value="yes"> نعم </option>
      <option value="no"> لا </option>
      </select>
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <textarea name="other" class="form-control" placeholder="ملاحظات"></textarea>
      </div>

      <div class="col-md-4 form-group">
      <label> إرفاق اثبات الشخصية  </label>
      <input type="file" name="id_attachment" class="form-control"/>
      <label> <b style="color: #a12;"> ارفاق صورة JPG , JPEG , PNG  </b> </label>
      </div> 

      </div>



         <br/>

      <h3> الشهادات التعليميمة </h3>
   

  
      <div class="row">

      <div class="col-md-4 form-group">
      <label> مستوي التعليم  </label>
      <select name="education_level" class="form-control">
      <option>  </option>
      <option> دون الثانوي </option>
      <option> الثانوى </option> 
      <option> دبلوم </option> 
      <option> بكلريوس </option> 
      <option> ماجستير </option> 
      <option> دكتوراة </option> 
      <option> شهادة فنية </option> 
      </select>
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="study_school" class="form-control" placeholder="إسم المؤسسة">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="university_address" class="form-control" placeholder="مكان المؤسسة">
      </div>

      </div>

        

 <div class="row">

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="study_field" class="form-control" placeholder="التخصص">
      </div>
     

      <div class="col-md-4 form-group">
      <label> الدرجة العلمية  </label>
      <select name="certificate" class="form-control">
      <option selected disabled>  </option>
      <option value="graduate"> تخريج </option>
      <option value="bachelor"> بكلريوس </option>
      <option value="master"> ماجستير </option>
      <option value="doctor"> دكتوراة </option>
      <option value="other"> اخرى </option>
      </select>
      </div>

      <div class="col-md-4 form-group">
      <label> ارفاق الشهادة  </label>
      <input type="file" name="ed_certificate" class="form-control"/>
      <label> <b style="color: #a12">  الرجاء ارفاق الشهادة بصيغة PDF </b> </label>
      </div>
   
  
      </div>





      <h3> الخبرات الوظيفية </h3>

      <div class="row">
      
      <div id="exper_ids" class="row">
        <div class="col-md-3 form-group">
        <label></label>
        <input type="text" name="exper_name1" class="form-control" placeholder="إسم المؤسسة"/>
        </div>
        <div class="col-md-2 form-group">
        <label> من تاريخ </label>
        <input type="date" name="exper_date_from1" class="form-control"/>
        </div>
        <div class="col-md-2 form-group">
        <label> الى تاريخ </label>
        <input type="date" name="exper_date_to1" class="form-control"/>
        </div>
        <div class="col-md-2 form-group">
        <label></label>
        <input type="text" name="exper_job1" class="form-control" placeholder="المسمى الوظيفي"/>
        </div>
        <div class="col-md-3 form-group">
        <label></label>
        <textarea class="form-control" name="exper_tasks1" placeholder="المهام"></textarea>
        </div>
      </div><br/>
      <span style="width: 150px; padding: 3px; margin: 5px;" class="btn btn-primary" onclick="add_exper_line();"> أضافة خبرة + </span>

      </div>



      <h3> المهارات </h3>
      
      <div id="skill_ids" class="row">

      <div class="col-md-3 form-group">
      <label></label>
      <input type="text" name="skill1" class="form-control" placeholder="المهارة"/>
      </div>

      <div class="col-md-3 form-group">
      <label> التقييم </label>
      <select name="skill_val1" class="form-control">
        <option selected disabled>  </option>
        <option value="Good"> جيدة  </option>
        <option value="Excellent"> ممتازة  </option>
      </select>
      </div>
      </div><br/>
      <span style="width: 150px; padding: 3px; margin: 5px;" class="btn btn-primary" onclick="add_skill_line();"> أضافة مهارة + </span>



      <h3> الهوايات </h3>

      <div id="habbits" class="row">
      
      <div class="col-md-4 form-group">
      <label></label>
      <input type="text" name="h1" class="form-control" placeholder="ادخل الهواية">
      </div>

      </div><br/>
      <span style="width: 150px; padding: 3px; margin: 5px;" class="btn btn-primary" onclick="add_habbit_line();"> أضافة هواية + </span>

     

       <h3> اشخاص يمكن الرجوع لهم </h3> 

      <div id="ref_ids" class="row">
          <div class="col-md-3 form-group">
              <label></label>
              <input type="text" name="ref_name1" class="form-control" placeholder="الاسم"/>
          </div>

          <div class="col-md-3 form-group">
              <label></label>
              <input type="text" name="ref_job1" class="form-control" placeholder="الوظيفة"/>
          </div>

          <div class="col-md-3 form-group">
              <label></label>
              <input type="text" name="ref_mobile1" class="form-control" placeholder="الجوال"/>
          </div>

          <div class="col-md-3 form-group">
              <label></label>
              <input type="text" name="ref_company1" class="form-control" placeholder="الشركة"/>
          </div>
      </div>
      <br/>
       <span style="width: 150px; padding: 3px; margin: 5px;" class="btn btn-primary" onclick="add_ref_line();"> أضافة شخص + </span>


      <br/>

          <div style="text-align: left;">
         
          <button class="btn btn-warning nextBtn btn-lg" type="button"> تأكيد وإستمرار <i class="icon-arrow-left"></i> </button>
           <button class="btn btn-warning prevBtn btn-lg" type="button"> <i class="icon-arrow-right"></i> السابق  </button>

          </div>
        </div>
      </div>
    </div>













    <div class="row setup-content" id="step-3">
      <div class=" col-lg-12 col-xs-6 col-md-offset-3">


      
           <div class="row">
      <div class="col-md-4 form-group">
      <label> كيف تعرفت على شركة إيكيوبيشن ؟ </label>
     <br/>
      <select  class="form-control" name="know" id="exampleFormControlSelect2">

          <option value="media"> الفيسبوك </option>
                <option value="social"> وسائل التواصل الاجتماعي </option>
                <option value="tv"> التلفزيون </option>
                <option value="friend"> عن طريق صديق </option>
                <option value="ads"> عن طريق الاعلانات  </option>
                <option value="other">  اخري  </option>
              </select>
     </div>

      <div class="col-md-4 form-group">
      <label> هل لديك شريك او صديق يعمل بالشركة ؟ </label>
     <br/>
    <select class="form-control"   name="related">
      <option> --  -- </option>
      <option value="yes" > نعم </option>
      <option value="no"> لا </option>
    </select>
    <!-- <input type="text" class="form-control" placeholder="اذكره"> -->
     </div>

    <div class="col-md-4 form-group">
      <label> ما نوع التوظيف الذى ترغب بالإلتحاق به ضمن فريق إيكيوبيشن ؟ </label>
     <br/>
    <select class="form-control" name="employment_type">
      <option>  </option>
      <option  value="full" > دائم </option>
      <option  value="part" > بارت تايم </option>
      <option  value="temp" > مؤقت(موسم) </option>
      <option  value="training" > تدريب</option>

    </select>

  
     </div>


    <div class="col-md-4 form-group">
    <label> ما الراتب المتوقع ؟ </label>
    <input type="number"  name="excepted" class="form-control" placeholder="ادخل الراتب المتوقع">

     </div>


    </div>
        

            <div class="row">

     <div class="col-md-4 form-group">
    <label>ما هى المشاكل او الهواجس التي ستمنعك من الإستمرار ضمن فريق إيكيوبيشن ؟</label>
    <textarea class="form-control" name="complain" placeholder="الجواب"></textarea>
    </div>

    <div class="col-md-4 form-group">
    <label> هل لديك إضافة او ملاحظة تريد أن تقدمها لشركة ايكيوبيشن ؟</label>
    <textarea class="form-control"  name="info" placeholder="الجواب"></textarea>
    </div>

    <div class="col-md-4 form-group">
    <label>هل لديك مانع بالعمل في فروع ايكيوبيشن خارج الخرطوم او السودان ؟</label>
    <textarea class="form-control" name="restruction"  placeholder="الجواب"></textarea>
    </div>
      
    </div>



       <div class="row">

       <div class="col-md-4 form-group">
          <label> السيرة الذاتية </label>
              <input type="file" name="cv" class="form-control" placeholder="الجوال"/>
          <label> <b style="color: #a12;"> إرفاق السيرة الذاتية إن وجدت  </b> </label>
        </div>

        <div class="col-md-4 form-group">
              <label> مرفقات اخرى </label>
              <input type="file" name="other_attachment" class="form-control"/>
              <label> <b style="color: #a12;"> إضافة مستندات اخرى بصيغة PDF  </b> </label>
        </div>

    </div>

       
      <br/><br/>

      <div style="text-align: left;">
          <button class="btn btn-success btn-lg" type="submit"> تأكيد إرسال الطلب <i class="icon-check"></i> </button>
          <button class="btn btn-warning prevBtn btn-lg " type="button"> <i class="icon-arrow-right"></i> السابق </button>
        </div>
        </div>
      </div>
    </form></div>

</section>


<img src="images/divider2.png" style="width: 100%;border:none;">
<?php include 'footer.php'; ?>
</body>
</html>