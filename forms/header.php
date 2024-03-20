 

<header id="header">
<div id="top">

	<div class="row">

		<div  class="col-lg-2">
			<a href="#">info@equpation.sd</a>
		</div>

		<div  class="col-lg-2">
			<a href="#"> 00956-247457745 </a>
		</div>

		<div style="text-align: right;" class="col-lg-6">
			7:301m - 4:30pm
		</div>

		<div class="col-lg-1">
			<a href="#"> EN </a>
		</div>

		<div class="col-lg-1">
			<a href="#">العربية</a>
		</div>
		
	</div>


</div>

<!-- <hr style="color: gray;background-color: gray;" /> -->

<div class="bottom">

<div class="row">

	<div class="col-lg-2" style="background-color: #fff;padding: 0px;">
		<img src="../images/logo/logo.jpg" width="100" height="49">
		<img src="../images/h-divider.png" width="50" height="53" style="float: left;">
	</div>

	<div class="col-lg-8">
		    <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php">الرئيسية</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../aboutus.php">من نحن</a></li>
              <li><i class="bx bx-chevron-right" onclick="fun();" id="service-togle"></i> <a onclick="fun();" href="#">خدماتنا</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../workfields.php"> مجالات العمل </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../news.php"> الأخبار</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../contactus.php"> إتصل بنا</a></li>
            </ul>
	</div>

	<div class="col-lg-2">
		<button  type="button" class="btn-main" data-toggle="modal" data-target="#form_modal"> إستعلام وإستفسار >> </button>
	</div>
		
	</div>

</div>

</header>

<section id="services_list">
	<ul>
		<li> <a href="#"> خدمات تاسبس المواقع </a> </li>
		<li> <a href="#"> | خدمات انظمة التتبع </a> </li>
		<li> <a href="#"> | خدمات الترحيل </a> </li>
		<li> <a href="#"> | خدمات الصيانة </a> </li>
		<li> <a href="#"> | خدمات التوظيف </a> </li>
		<li> <a href="#"> | خدمات التأجير </a> </li>
		<li> <a href="#"> | خدمات التشغيل </a> </li>
		<li> <a href="#"> | خدمات المقاولة </a> </li>
		<li> <a href="#"> | خدمات تأسيس المواقع </a> </li>
	</ul>
</section>

<div class="modal fade" id="form_modal" aria-hidden="true">
<div class="modal-dialog">
  <form method="POST" action="#">
    <h3 align="center"> إضافة عميل جديد </h3>
  </form>
</div>
</div>


	<!-- <div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog">
		
		<form method="POST" action="customers.php?invoice_number=<?php echo $_GET['invoice_number']; ?>">

		<h3 align="center"> إضافة عميل جديد </h3>	
  	  	  <table id="table" style="width: 400px; margin: auto;overflow-x:auto; overflow-y: auto;">
  	  	 <tr>

         <td> أسم العميل:</td>
         <td><input type="text" name="c_name" size="10" placeholder=" أسم العميل" required></td>
          </tr>
          <tr id="row1">
         <td> رقم الهاتف :</td>
         <td><input type="text" name="c_phone"  size="10" placeholder="رقم الهاتف" required ></td>
        </tr>
        <tr>
        <td> العنوان :</td>
          <td><input type="text" name="c_address" size="10" placeholder="العنوان العميل "  required></td>
        </tr>

        <td> رقم بطاقة التامين :</td>
          <td><input type="number" name="card" size="10" placeholder="Card  0123456789"><br/>
          	<font color="red"> * حقل اختياري </font></td>
        </tr>

        <tr>
        	<td> شركة التامين :</td>
          <td>
          	<select name="company">
          		<option value=""> -- اختار شركة التامين -- </option>
          		<option value="0"> -- خارج التامين -- </option>
          		<?php

          		$select_company = mysqli_query( $con , "SELECT * FROM `company`");
          		while ($row = mysqli_fetch_array($select_company )) {
          			echo "<option>". $row['name'] ."</option>";
          		}

          		?> 
          	</select><br/>
          	<font color="red"> * حقل اختياري </font></td>
          </td>
        </tr>
        </tr>
  
        <tr>
          <td><button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> إغلاق </button></td>
          <td> <input type="submit" name="insert_customer" class="btn btn-success btn-large" style="width: 225px" value=" حفظ "> </td>
        </tr>

  	  	 </table> 
        <br>
  	  	 </form>
		</div>
	</div>
 -->

<script type="text/javascript">
	function fun(argument) {
		$("#services_list").toggle();
	}
</script>

