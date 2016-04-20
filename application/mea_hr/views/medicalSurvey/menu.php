<?php
/**
* @comment menu สำหรับส่วน education
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Bussarawadee Manorach
* @access 			public
* @created 			15/01/2016
*/
?>
<div class="block" id="menu" style="width:99%; margin-right:0.5%; text-align:right;">
	<?php if($_GET['fn']=="dashboard"){?>
		<img src="../../images/mea_hr/icon-create.png" class="btn-img" onclick="document.location='?controller=medicalSurvey&fn=add'" title="เพิ่มข้อมูล" />
		<a href="index.php?controller=general&fn=dashboard"><img src="../../images/mea_hr/icon-prev.png" class="btn-img" title="กลับหน้าแรก" /></a>
	<?php }else{?>
		<img src="../../images/mea_hr/icon-save.png" class="btn-img" onclick="" title="บันทึกข้อมูล" />
		<?php if($_GET['detailMedical'] != ''){ ?>
			<img src="../../images/mea_hr/icon-delete.png" class="btn-img" onclick="deleteData('<?php echo $_GET['detailMedical']?>');" title="ลบข้อมูล" />
		<?php } ?>
		<img src="../../images/mea_hr/icon-cancel.png" class="btn-img" onclick="document.location='?controller=medicalSurvey&fn=dashboard'" title="ยกเลิก" />
	<?php } ?>
</div>