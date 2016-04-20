<?php
/**
* @comment เมนู สำหรับหน้าหลัก
* @projectCode PS58MKT
* @tor 1.2.1 
* @package core
* @author Wannapa Thongtawee
* @access public
* @created 18/04/2016
*/
?>
<div class="block" id="menu_general" style="width:99%; margin-right:0.5%; text-align:right;">
<?php if($function=='add'){?>
	<img src="../../images/mea_setting/icon-edit.png" class="btn-img" onclick="" title="แก้ไขข้อมูล" />
	<img src="../../images/mea_setting/icon-save.png" class="btn-img" onclick="" title="บันทึกข้อมูล" />
	<img src="../../images/mea_setting/icon-delete.png" class="btn-img" onclick="" title="ลบข้อมูล" />
	<img src="../../images/mea_setting/icon-prev.png" class="btn-img" onclick="document.location.href='?controller=setting_preference&fn=dashboard'" title="กลับหน้าหลัก" />
<?php }else if($function=='dashboard'){?>
	<img src="../../images/mea_setting/icon-search.png" class="btn-img" onclick="" title="ค้นหาข้อมูล" />
	<img src="../../images/mea_setting/icon-create.png" class="btn-img" onclick="document.location.href='?controller=setting_preference&fn=add'" title="เพิ่มข้อมูล" />
	<img src="../../images/mea_setting/icon-prev.png" class="btn-img" onclick="document.location.href='?controller=setting_preference&fn=setting_preference'" title="กลับหน้าหลัก" />
<?php } ?>
</div>