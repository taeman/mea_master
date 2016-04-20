<?php
/**
* @comment เมนู สำหรับหน้า การปฏิบัติราชการพิเศษ
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 19/01/2016
*/
?>
<div class="block" id="menu" style="width:99%; margin-right:0.5%; text-align:right;">
		<?php if($_GET['fn']=="dashboard"){?>
		<img src="../../images/mea_hr/icon-create.png" class="btn-img" onclick="document.location='?controller=specialduty&fn=add'" title="เพิ่มข้อมูล" />
		<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="document.location='?controller=general&fn=dashboard'" title="กลับหน้าแรก" />
	<?php }else{?>
		<img src="../../images/mea_hr/icon-save.png" class="btn-img" onclick="" title="บันทึกข้อมูล" />
		<?php if($_GET['runid'] != ''){ ?>
			<img src="../../images/mea_hr/icon-delete.png" class="btn-img" onclick="deleteData('<?php echo $_GET['runid']?>');" title="ลบข้อมูล" />
		<?php } ?>
		<img src="../../images/mea_hr/icon-cancel.png" class="btn-img" onclick="document.location='?controller=specialduty&fn=dashboard'" title="ย้อนกลับ" />
	<?php } ?>
</div>