<?php
/**
* @comment หน้า dashboard ของระบบ HR หน้าแก้ไขรูปภาพ
* @projectCode 57LIQ01
* @tor 3.2.4.1.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 13/01/2016
*/

?>
<div class="block" style="width:93%; margin:0.5%; margin-left:3%;">
<div class="form-group title">แก้ไขรูปภาพ</div>
<div class="block">คลังข้อมูลภาพ   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th; ?></div><br>
<table align="center">
	<tr>
	<?php foreach($picData as $id => $detail){ ?>
		<td valign="top">
			<table border="1" width="100" height="100" align="center">
				<tr><td align="right"><?php echo "(".$detail->id_kp7.")"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="../../images/mea_hr/icon-edit.png" class="btn-img" id="editP" href="/mea_hr_mvc/application/mea_hr/controls/picHistory/add_edit_pic.php?id=<?php echo $detail->id ?>&year=<?php echo $detail->pic_year; ?>&s_kp7=<?php echo $detail->id_kp7; ?>" onclick="" title="แก้ไขข้อมูลรูปภาพ" width="16" height="16">
						<img src="../../images/mea_hr/icon-delete.png" class="btn-img" onclick="" title="ลบรูปภาพ" width="16" height="16">
					</td>
				</tr>
				<tr>
					<td align="center" colspan="2">
					<img src="<?php echo ($detail->pic_path)==""?"../../images/mea_hr/noimg.png":$detail->pic_path;?>" width="160" height="160">
					<br>
					พ.ศ. <?php echo ($detail->pic_year)==""?"..............":$detail->pic_year;?>
					</td>
				</tr>
				<tr>
					<td align="center" colspan="2">
						<font color='green'><b><?php echo ($detail->status_kp7)==1?"แสดงใน ก.พ. 7 ":'&nbsp;';?></b></font>
					</td>
				</tr>
			</table>
		</td>
	<?php } ?>
	</tr>
</table>
<script type="text/javascript">
$(document).ready(function(){
		$("#editP").fancybox({
			'width': '80%',
			'height': '100%',
			'autoScale': false,
			'autoSize': false,
			'transitionIn': 'none',
			'transitionOut': 'none',
			'type': 'iframe',
			'scrolling': 'no'
		});
		$("#changeKp7").fancybox({
			'width': '70%',
			'height': '80%',
			'autoScale': false,
			'autoSize': false,
			'transitionIn': 'none',
			'transitionOut': 'none',
			'type': 'iframe',
			'scrolling': 'no'
		});
});
</script>
</div>