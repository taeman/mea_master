<?php
/**
* @comment หน้า แก้ไข ลำดับการแสดงผลรูปภาพใน ก.พ.7 ของระบบ HR หน้าแก้ไขรูปภาพ
* @projectCode 57LIQ01
* @tor 3.2.4.1.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 14/01/2016
*/
header('Content-Type: text/html; charset=utf-8');
?>
<link rel="stylesheet" type="text/css" href="../../../../common/mea_hr/css/main.css" />
<link rel="stylesheet" href="../../../../common/global/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../../common/global/css/jquery-ui-1.7.2.custom.css">
<link rel="stylesheet" href="../../../../common/mea_hr/css/liq.css">

<script src="../../../../common/global/js/jquery-1.10.2.js"></script>
<script src="../../../../common/global/js/jquery-ui.js"></script>
<script src="../../../../common/global/js/bootstrap.min.js"></script>
<script src="../../../../common/mea_hr/js/main.js"></script>

<div class="block" style="width:93%; margin:0.5%; margin-left:3%;">
<div class="form-group title">กำหนดลำดับภาพในเอกสาร ก.พ. 7</div>
<div class="block">คลังข้อมูลภาพ   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th; ?></div><br>
<table align="center">
	<tr>
	<?php foreach($picData as $id => $detail){ ?>
		<td valign="top">
			<table border="1" width="100" height="100" align="center">
				<tr>
					<td align="right">
						<select name="id_kp7_new" id="id_kp7_new" style="width:80px;" onchange="">
						<?php 	
						foreach($picData as $id_list => $detail_list){
							$selected = ($detail->id_kp7==$detail_list->id_kp7) ? " selected " : "";
							echo "<option value=\"".$detail_list->id_kp7."\" ".$selected.">".$detail_list->id_kp7."</option>";
						}?>
					</select>
					</td>
				</tr>
				<tr>
					<td align="center" colspan="2">
					<?php if($_GET['controller']!=""){ ?>
						<img src="<?php echo ($detail->pic_path)==""?"../../images/mea_hr/noimg.png":$detail->pic_path;?>" width="160" height="160">
					<?php }else{ ?>
						<img src="<?php echo ($detail->pic_path)==""?"../../../../images/mea_hr/noimg.png":$detail->pic_path;?>" width="160" height="160">
					<?php } ?>
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
<br>
<table width="100%">
	<tr>
		<td height="20" align="center">
			<button id="btnsubmit" class="btn btn-default" onclick="">ตกลง</button>&nbsp;&nbsp;
			<button class="btn btn-danger" onclick="window.top.$.fancybox.close();">ยกเลิก</button>
		</td>
	</tr>
</table>
</div>