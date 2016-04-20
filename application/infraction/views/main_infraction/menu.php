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
<?php if($function=='add'){?>
	<img src="../../images/mea_hr/icon-edit.png" class="btn-img" onclick="" title="แก้ไขข้อมูล" />
	<img src="../../images/mea_hr/icon-save.png" class="btn-img" onclick="" title="บันทึกข้อมูล" />
	<img src="../../images/mea_hr/icon-delete.png" class="btn-img" onclick="" title="ลบข้อมูล" />
	<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="document.location.href='?controller=main_infraction&fn=dashboard'" title="กลับหน้าหลัก" />
<?php } else if($function=='dashboard'){ ?>
	<img src="../../images/mea_hr/icon-search.png" class="btn-img" onclick="$('a.fancy-request').trigger('click');" title="ค้นหาข้อมูล" />
	<img src="../../images/mea_hr/icon-create.png" class="btn-img" onclick="document.location.href='?controller=main_infraction&fn=add'" title="เพิ่มข้อมูล" />
	<img src="../../images/mea_hr/icon-print.png" class="btn-img" onclick="" title="ออกรายงาน PDF" />
	<img src="../../images/mea_hr/icon-excel.png" class="btn-img" onclick="" title="ออกรายงาน Excel" />
<?php } else if($function=='rule_management_dashboard'){ ?>
	<img src="../../images/mea_hr/icon-search.png" class="btn-img" onclick="$('a.fancy-request').trigger('click');" title="ค้นหาข้อมูล" />
	<img src="../../images/mea_hr/icon-create.png" class="btn-img" onclick="document.location.href='?controller=main_infraction&fn=add_rule'" title="เพิ่มข้อมูล" />
<?php } else if($function=='add_rule'){ ?>
	<img src="../../images/mea_hr/icon-edit.png" class="btn-img" onclick="" title="แก้ไขข้อมูล" />
	<img src="../../images/mea_hr/icon-save.png" class="btn-img" onclick="" title="บันทึกข้อมูล" />
	<img src="../../images/mea_hr/icon-delete.png" class="btn-img" onclick="" title="ลบข้อมูล" />
	<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="document.location.href='?controller=main_infraction&fn=rule_management_dashboard'" title="กลับหน้าหลัก" />
<?php } ?>
</div>