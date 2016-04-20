<?php
/**
* @comment หน้า เพิ่มแก้ไขไฟล์ ของระบบ แนบไฟล์เอกสารหลักฐาน
* @projectCode 57LIQ01
* @tor 3.2.4.2.1.2
* @package core
* @author Amata Kongsaingern
* @access public
* @created 21/01/2016
 */
header('Content-Type: text/html; charset=utf-8');
include("../../../../config/db_define.php"); 
?>

<link rel="stylesheet" type="text/css" href="../../../../common/mea_hr/css/main.css" />
<link rel="stylesheet" href="../../../../common/global/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../../common/global/css/jquery-ui-1.7.2.custom.css">
<link rel="stylesheet" href="../../../../common/mea_hr/css/liq.css">

<script src="../../../../common/global/js/jquery-1.10.2.js"></script>
<script src="../../../../common/global/js/jquery-ui.js"></script>
<script src="../../../../common/global/js/bootstrap.min.js"></script>
<script src="../../../../common/mea_hr/js/main.js"></script>
<script>
$(document).ready(function() {
	if($('#file_ref_new').val()!="")
		{
			$('#preview_pic').show();
		}else{
			$('#preview_pic').hide();
		}
});

</script>
<div class="block" style="width:99%; margin:0.5%;">
	<div class="form-group title">อัพโหลดไฟล์เอกสารหลักฐาน : </div>
	<input type="hidden" name="date_upload" id="date_upload" value="<?php echo date('Y-m-d');?>">
	<table width="98%">
		<tr>
			<td width="40%" align="right"><label class="col-md-4 control-label text-right"> ประเภทเอกสาร : </label></td>
			<td colspan="3">
				<select id="file_type" name="file_type">
					<option>เลือกประเภทเอกสาร</option>
					<?php for($i=1;$i<=8;$i++){ ?>
						<option value="<?php echo $i?>" <?php echo $_GET['type']==$i?"selected":""?>><?php echo $fileType[$i]?></option>
					<? } ?>
				</select>
			</td>
		</tr>		
		<?php if($_GET['runid']!=''){ ?>
		<tr>
			<td align="right"><label class="col-md-4 control-label text-right" id="H_name" name="H_name"> เลือกไฟล์เอกสารหลักฐาน : </label></td>
			<td align="left"><label class="col-md-4 control-label text-right" id="F_name" name="F_name"><a href="<?php echo PATH_REF_DOC."/".$fileName?>" target="_blank"><img src="../../../../images/mea_hr/pdf_ref.png" title="แสดงไฟล์เอกสาร"></a></label></td>
			<td>
				<input type="file" name="file_ref" id="file_ref" accept="application/pdf">
			</td>			
			<td>
				<input type="checkbox" class="myCheckbox" id="addfile" name="addfile">เปลี่ยนไฟล์</input>
			</td>
			
		</tr>
		<?php }else{ ?>
		<tr>
			<td align="right"><label class="col-md-4 control-label text-right"> เลือกไฟล์เอกสารหลักฐาน : </label></td>
			<td >
				<input type="file" name="file_ref_new" id="file_ref_new" accept="application/pdf">
			</td>
			<td align="left" colspan="2"><label class="col-md-4 control-label text-right" id="Preview_file" name="Preview_file"><a href="<?php echo PATH_REF_DOC."/".$fileName?>" target="_blank" id="preview_link"><img src="../../../../images/mea_hr/pdf_ref.png" title="แสดงไฟล์เอกสาร" id="preview_pic"></a></label></td>
		</tr>
		<?php } ?>
		<tr>
			<td align="right" valign="top"><label class="col-md-4 control-label text-right"> คำอธิบาย : </label></td>
			<td colspan="3">
				<textarea class="form-control" style="width:400px; height:80px;" name="comment" id="comment"><?php echo $commentFile;?></textarea>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td colspan="3" align="left">
			<br>
				<button id="btnsubmit" class="btn btn-default" onclick="">ตกลง</button>&nbsp;&nbsp;
				<button class="btn btn-danger" onclick="window.top.$.fancybox.close();">ยกเลิก</button>
			</td>
		</tr>
	</table>
</div>
