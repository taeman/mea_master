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
    <?php if($_GET[fn]=='general'){ ?>
    <img src="../../images/mea_hr/icon-edit.png" class="btn-img" onclick="document.location='?controller=personal&fn=add_person'" title="แก้ไขข้อมูล" />
    <img src="../../images/mea_hr/icon-delete.png" class="btn-img" onclick="" title="ลบข้อมูล" />
    <img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="document.location='?controller=general&fn=dashboard'" title="ย้อนกลับ" />
   <?php }else if($_GET[fn]=='add_person'){ ?>
    <img src="../../images/mea_hr/icon-save.png" class="btn-img" onclick="" title="บันทึกข้อมูล" />
    <img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="document.location='?controller=personal&fn=general'" title="ย้อนกลับ" />
   <?php } ?>
</div>