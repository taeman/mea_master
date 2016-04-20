<?php
/**
* @comment view เพิ่มข้อมูลการละเมิด
* @projectCode
* @tor
* @package core
* @author Pinya (pinya@sapphire.co.th)
* @access public
* @created 18/04/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">นำเข้าข้อมูล</div>
<form name="infraction_form" method="POST" action="" enctype="multipart/form-data">
<div class="row">
    <div class="col-md-6">
		<div class="form-group">
      <div class="col-md-12">
        <label class="col-md-4 control-label text-right">เลือกไฟล์ : </label>
        <div  class="col-md-8">
        <input type="file" name="uploadFile" class="form-control"><br></div>
        <label class="col-md-4 control-label text-right">ประเภทไฟล์ที่นำเข้า : </label>
        <div  class="col-md-8">
        <input type="radio" name="typeFile" value="0" checked> SQL<br>
        <input type="radio" name="typeFile" value="1" > Excel<br>
        <input type="radio" name="typeFile" value="2" > ระบบSAP<br>
        </div>
        </div>
      </div>
    </div>
</div>
</form>
</div>
