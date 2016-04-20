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
    <?php if($_GET[fn]=='dashboard'){ ?>
    <img src="../../images/mea_hr/icon-edit.png" class="btn-img" onclick="document.location='?controller=education&fn=edit'" title="แก้ไขข้อมูล" />
    <a href="index.php?controller=general&fn=dashboard"><img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="กลับหน้าหลัก" /></a>
   <?php }else if($_GET[fn]=='edit'){ ?>
    <img src="../../images/mea_hr/icon-save.png" class="btn-img" onclick="" title="บันทึกข้อมูล" />
    <a href="index.php?controller=education&fn=dashboard"><img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="กลับหน้าหลัก" /></a>
   <?php } ?>
	
</div>