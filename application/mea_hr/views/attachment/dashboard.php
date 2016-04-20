<?php
/**
* @comment หน้า dashboard ของระบบ แนบไฟล์เอกสารหลักฐาน
* @projectCode 57LIQ01
* @tor 3.2.4.2.1.2
* @package core
* @author Amata Kongsaingern
* @access public
* @created 21/01/2016
 */
$align_TH="left";
?>
<style>
.img-circular {
	width: 210px;
	height: 210px;
	border-radius: 150px;
	-webkit-border-radius: 150px;
	-moz-border-radius: 150px;
	background: url(../../images/mea_hr/noimg.png) no-repeat;
	box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	-moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	}
.border-profile{
	border:3px solid;
	border-top-color:#eaeaea;
	border-left-color:#eaeaea;
	border-right-color:#eaeaea;
	border-bottom-color:#eaeaea;
}
</style>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">การแนบเอกสารหลักฐาน</div>
<br>
<div class="row" style="width:90%; margin-left:5%">
	<div class="form-group col-md-4 border-profile">
		<table>
			<tr>
				<td class="col-sm-3 control-label" colspan="2" align="center"><br><div class="img-circular"></div><br></td>
			<tr>
			<tr>
				<td class="col-sm-1 control-label right"> ชื่อ-สกุล : </td>
				<td class="col-sm-2 control-label left"><?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></td>
			<tr>			
			<tr>
				<td class="col-sm-1 control-label right">ตำแหน่ง : </td>
				<td class="col-sm-2 control-label left"><?php echo $personData->position?></td>
			<tr>			
			<tr>
				<td class="col-sm-1 control-label right">แผนก : </td>
				<td class="col-sm-2 control-label left"><?php echo $personData->department?></td>
			<tr>			
			<tr>
				<td class="col-sm-3 control-label right" colspan="2"><a href="?controller=personal&fn=general" title="แสดงข้อมูลส่วนตัว">ทั้งหมด</a><br></td>
			<tr>
		</table>
	</div>
	<div class="form-group col-md-1">
	</div>
	<div class="form-group col-md-7">
		<table class="table" border="0">
			<thead>
				<tr>
					<th class="col-sm-3 control-label center">ประเภทเอกสาร</th>
					<th class="col-sm-1 control-label center">จำนวนเอกสาร</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="col-sm-3 control-label <?php echo $align_TH?>">สำเนาบัตรประจำตัวประชาชน</th>
					<td class="col-sm-1 control-label right"><a href="?controller=attachment&fn=dashboard&type=1"><?php echo $amountFileData->amount_file_idcard?></a></td>
				</tr>
				<tr>
					<td class="col-sm-3 control-label <?php echo $align_TH?>">สำเนาทะเบียนบ้าน</th>
					<td class="col-sm-1 control-label right"><a href="?controller=attachment&fn=dashboard&type=2"><?php echo $amountFileData->amount_file_home?></a></td>
				</tr>
				<tr>
					<td class="col-sm-3 control-label <?php echo $align_TH?>">สำเนาวุฒิการศึกษา</th>
					<td class="col-sm-1 control-label right"><a href="?controller=attachment&fn=dashboard&type=3"><?php echo $amountFileData->amount_file_education?></a></td>
				</tr>
				<tr>
					<td class="col-sm-3 control-label <?php echo $align_TH?>">ใบสมัคร</th>
					<td class="col-sm-1 control-label right"><a href="?controller=attachment&fn=dashboard&type=4"><?php echo $amountFileData->amount_file_register?></a></td>
				</tr>
				<tr>
					<td class="col-sm-3 control-label <?php echo $align_TH?>">ผลการตรวจพิสูจน์ลายนิ้วมือ</th>
					<td class="col-sm-1 control-label right"><a href="?controller=attachment&fn=dashboard&type=5"><?php echo $amountFileData->amount_file_results?></a></td>
				</tr>
				<tr>
					<td class="col-sm-3 control-label <?php echo $align_TH?>">คำสั่ง</th>
					<td class="col-sm-1 control-label right"><a href="?controller=attachment&fn=dashboard&type=6"><?php echo $amountFileData->amount_file_order?><a/></td>
				</tr>
				<tr>
					<td class="col-sm-3 control-label <?php echo $align_TH?>">สัญญาจ้าง</th>
					<td class="col-sm-1 control-label right"><a href="?controller=attachment&fn=dashboard&type=7"><?php echo $amountFileData->amount_file_contract?></a></td>
				</tr>
				<tr>
					<td class="col-sm-3 control-label <?php echo $align_TH?>">อื่น ๆ</th>
					<td class="col-sm-1 control-label right"><a href="?controller=attachment&fn=dashboard&type=8"><?php echo $amountFileData->amount_file_other?></a></td>
				</tr>
			</tbody>
			<thead>
				<tr>
					<th class="col-sm-3 control-label center">รวม</th>
					<th class="col-sm-1 control-label right"><a href="?controller=attachment&fn=dashboard"><?php echo $amountFileData->amount_file_sum?></a></th>
				</tr>
			</thead>
		</table>
	</div>
</div>
</div>
<br/>
<table width="100%" class="table" border="0">
	<thead>
		<tr>
			<th class="col-sm-1 control-label center">ลำดับ</th>
			<th class="col-sm-2 control-label center">ประเภทเอกสาร</th>
			<th class="col-sm-2 control-label center">วันที่อัพโหลด</th>
			<th class="col-sm-7 control-label center">คำอธิบาย</th>
		</tr>
	</thead>
	<tbody>
	<?php $i=0; 
		foreach($fileData as $id_file => $detail_file){ 
		
				if($_GET['type']!=""){
					if($detail_file->type_upload==$_GET['type']){ $i++;?>
					<tr class="tr-link" id="addFile" href="/mea_hr_mvc/application/mea_hr/controls/attachment/add.php?runid=<?php echo $detail_file->id?>&type=<?php echo $detail_file->type_upload?>">
						<td class="control-label center"><?php echo $i?></td>
						<td class="control-label left"><?php echo $fileType[$detail_file->type_upload]?></td>
						<td class="control-label center"><?php echo $dateTime->date_eng2thai($detail_file->date_upload,543,'L','L')?></td>
						<td class="control-label left"><?php echo $detail_file->comment?></td>
					</tr>
					<?php }
				}else{ $i++;?>
					<tr class="tr-link" id="addFile" href="/mea_hr_mvc/application/mea_hr/controls/attachment/add.php?runid=<?php echo $detail_file->id?>&type=<?php echo $detail_file->type_upload?>">
						<td class="control-label center"><?php echo $i?></td>
						<td class="control-label left"><?php echo $fileType[$detail_file->type_upload]?></td>
						<td class="control-label center"><?php echo $dateTime->date_eng2thai($detail_file->date_upload,543,'L','L')?></td>
						<td class="control-label left"><?php echo $detail_file->comment?></td>
					</tr>
				<?php }
	} ?>
	</tbody>
</table>
</div>
<script type="text/javascript">
$(document).ready(function(){
		$("#addFile").fancybox({
			'width': '60%',
			'height': '60%',
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
