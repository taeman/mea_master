<?php
/**
* @comment เมนู สำหรับส่วน seminar
* @projectCode 57LIQ01
* @tor 3.2.4.2
* @package core
* @author Kiatisak Chansawang
* @access public
* @created 05/01/2016
*/
?>
<div class="block" id="menu" style="width:99%; margin-right:0.5%; text-align:right;">

<?php if($function == '' || $function == 'dashboard'){ ?>
	<img src="../../images/mea_hr/icon-create.png" class="btn-img" onclick="document.location='?controller=seminar&fn=form_keyin'" title="เพิ่มข้อมูล" />
	<a href="index.php?controller=general&fn=dashboard"><img src="../../images/mea_hr/icon-prev.png" class="btn-img" title="กลับหน้าแรก" /></a>
<?php }elseif($function == 'form_keyin'){ ?>
	<img src="../../images/mea_hr/icon-save.png" class="btn-img" onclick="checkForm_keyin();" title="บันทึกข้อมูล" />
    <?php if($_GET['runid'] != ''){ ?>
    <img src="../../images/mea_hr/icon-delete.png" class="btn-img" onclick="deleteData('<?php echo $_GET['runid']?>');" title="ลบข้อมูล" />
    <?php } ?>
    <img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="document.location='?controller=seminar&fn=dashboard'" title="กลับหน้าแรก" />
<?php } ?>
</div>