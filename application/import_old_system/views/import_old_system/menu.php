<?php
/**
* @comment เมนู สำหรับหน้าหลัก
* @projectCode 57LIQ01
* @tor 3.2.4.2
* @package core
* @author Kiatisak Chansawang
* @access public
* @created 05/01/2016
*/
?>
<div class="block" id="menu_general" style="width:99%; margin-right:0.5%; text-align:right;">
<?php if($function=='dashboard'){ ?>
	<img src="../../images/mea_hr/icon-search.png" class="btn-img" onclick="" title="ค้นหาข้อมูล" />
	<img src="../../images/mea_hr/icon-create.png" class="btn-img" onclick="document.location.href='?controller=import_old_system&fn=add'" title="เพิ่มข้อมูล" />
<?php }else if($function=='add'){ ?>
	<img src="../../images/mea_hr/icon-save.png" class="btn-img" onclick="" title="บันทึก" />
	<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="document.location.href='?controller=import_old_system&fn=dashboard'" title="กลับหน้าหลัก" />
<?php } ?>
</div>