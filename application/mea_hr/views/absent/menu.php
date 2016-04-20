<?php
/**
* @comment menu สำหรับหน้าจอเครื่องราชอิสริยาภรณ์ (dashboard)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
* @access 			public
* @created 			16/01/2016
*/
?>
<div class="block" id="menu" style="width:99%; margin-right:0.5%; text-align:right;">

<?php if($function == '' || $function == 'dashboard'){ ?>
	<img src="../../images/mea_hr/icon-create.png" class="btn-img" onclick="document.location='?controller=absent&fn=form_keyin'" title="เพิ่มข้อมูล" />
    <a href="index.php?controller=general&fn=dashboard"><img src="../../images/mea_hr/icon-prev.png" class="btn-img" title="กลับหน้าแรก" /></a>
<?php }elseif($function == 'form_keyin'){ ?>
	<img src="../../images/mea_hr/icon-save.png" class="btn-img" onclick="" title="บันทึกข้อมูล" />
    <?php if($_GET['id'] != ''){ ?>
    <img src="../../images/mea_hr/icon-delete.png" class="btn-img" onclick="" title="ลบข้อมูล" />
    <?php } ?>
    <img src="../../images/mea_hr/icon-cancel.png" class="btn-img" onclick="document.location='?controller=absent&fn=dashboard'" title="ยกเลิก" />
<?php } ?>
</div>