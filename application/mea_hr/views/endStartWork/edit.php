<?php
/**
* @comment หน้า dashboard ของ ออกจากราชการและกลับเข้ารับราชการใหม่
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 18/01/2016
*/
header('Content-Type: text/html; charset=utf-8');
?>
<link rel="stylesheet" type="text/css" href="../../../../common/mea_hr/css/main.css" />
<link rel="stylesheet" href="../../../../common/global/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../../common/global/css/jquery-ui-1.7.2.custom.css">
<link rel="stylesheet" href="../../../../common/mea_hr/css/liq.css">

<script src="../../../../common/global/js/jquery-1.10.2.js"></script>
<script src="../../../../common/global/js/jquery-ui.js"></script>
<script src="../../../../common/global/js/bootstrap.min.js"></script>
<script src="../../../../common/mea_hr/js/main.js"></script>

<div class="block" style="width:99%; margin:0.5%;">
	<div class="form-group title">สถานะทางราชการ</div>
	<div class="row" style="margin-left:10%;">
		<label style="font-weight:normal;"><input type="radio" id="order1" name="order" class="stype" value="0" <?php echo $status_work_check == '1' ? 'checked' : '';?> />&nbsp;ออกจากราชการ</label>
		<br>
		<label style="font-weight:normal;"><input type="radio" id="order2" name="order" class="stype" value="1" <?php echo $status_work_check == '2' ? 'checked' : '';?> />&nbsp;เข้ารับราชการใหม่</label>
	</div>
	<br>
	<div class="row form-group" style="margin-left:5%;">
		<button id="btnsubmit" class="btn btn-default" onclick="">ตกลง</button>&nbsp;&nbsp;
		<button class="btn btn-danger" onclick="window.top.$.fancybox.close();">ยกเลิก</button>
	</div>
</div>