<?php
/**
* @comment เมนู สำหรับหน้าแสดงผลข้อมมูลหน่วยงานภายนอก
* @projectCode PS58MKT
* @tor 1.2.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 10/04/2016
*/
?>
<div class="block" id="menu_general" style="width:99%; margin-right:0.5%; text-align:right;">
  <?php if($_GET['fn']=='add_outsider'){ ?>
    <img src="../../images/mea_hr/icon-edit.png" class="btn-img" onclick="" title="แก้ไขข้อมูล" />
    <img src="../../images/mea_hr/icon-save.png" class="btn-img" onclick="document.location='?controller=manage_outsider&fn=add_outsider'" title="บันทึกข้อมูล" />
    <?php if($_GET['id']!=""){ ?>
    <img src="../../images/mea_hr/icon-delete.png" class="btn-img" onclick="#" title="ลบข้อมูลหน่วยงานนี้" />
    <?php } ?>
  	<a href="index.php?controller=manage_outsider&fn=dashboard"><img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="กลับหน้าหลัก" /></a>
  <?php }else{ ?>
  	<img src="../../images/mea_hr/icon-search.png" class="btn-img" onclick="$('a.fancy-request').trigger('click');" title="ค้นหาข้อมูล" />
    <img src="../../images/mea_hr/icon-create.png" class="btn-img" onclick="document.location='?controller=manage_outsider&fn=add_outsider'" title="เพิ่มข้อมูล" />
    <img src="../../images/mea_hr/icon-excel.png" class="btn-img" onclick="#" title="แสดงเป็นไฟล์ Excel" width="30"/>
  	<img src="../../images/global/icon-pdf.png" class="btn-img" onclick="#" title="แสดงเป็นไฟล์ PDF" width="30" />
  	<a href="index.php?controller=setting_preference&fn=setting_preference"><img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="กลับหน้าหลัก" /></a>
  <?php } ?>
</div>
