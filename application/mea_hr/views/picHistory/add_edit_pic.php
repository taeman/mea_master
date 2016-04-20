<?php
/**
* @comment หน้า เพิ่ม แก้ไข รูปภาพ ของระบบ HR หน้าแก้ไขรูปภาพ
* @projectCode 57LIQ01
* @tor 3.2.4.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 13/01/2016
*/
header('Content-Type: text/html; charset=utf-8');
include ("UploadFileImage.php");
$folder_img = "../../../../".PATH_IMAGES;

$id="3149900251095";
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
<div class="form-group title"><?php echo $_GET['id']==0?"เพิ่ม":"แก้ไข";?> ประวัติข้อมูลภาพบุคลากร</div>
<div class="block">คลังข้อมูลภาพ   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th; ?></div><br>
<table align="center" width="100%">	
	<tr>
		<td height="100">
			<table width="90%" border="0" cellspacing="0" cellpadding="0">
				<tr align="left">
					<td>
						<ul>
							<li>รูปภาพควรสวมชุดข้าราชการขาว พื้นหลังสีน้ำเงิน หรือสีขาวเท่านั้น</li>
							<li>ขนาดรูปที่เหมาะสม กว้าง 120 pixel สูง 160 pixel (หากนำเข้ารูปขนาดอื่น การแสดงผลอาจมีการผิดเพี้ยนไม่เหมือนต้นฉบับ) </li>
							<li>ในกรณีไฟล์ขนาดใหญ่เกินไประบบจะทำการประมวลผลเพื่อลดขนาดไฟล์โดยอัตโนมัติเพื่อความเหมาะสมในการแสดงผล</li>
							<li>ไฟล์ต้องเป็นนามสกุล  jpg หรือ jpeg </li>
						</ul>	
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td align="center">
		<form id="formupload" name="post" action="" method="post" enctype="multipart/form-data">	
		<input type="hidden" name="id" value="<?php echo $id?>" />
		<input type="hidden" name="action" value="upload" />
		<div class="row">
		<table width="90%" align="center">
			<tr>
				<td height="20" align="right" width="30%">เลือกรูปแบบ&nbsp;<b>:</b>&nbsp;</td>
				<td align="left">
					<input type="radio" name="flag_imgnull" id="img_upload" value="0"  <?php echo ($_GET['id']>0)?"checked":"";?> />&nbsp;มีรูป&nbsp;
					|&nbsp;<input type="radio" name="flag_imgnull" id="no_img_upload" <?php echo ($_GET['id']==0)?"checked":"";?> value="1"/>&nbsp;ไม่มีรูป
				</td>
			</tr>
		</table>
		</div>
		<div class="row">
		<table width="90%" align="center">
			<tr>
				<td colspan="2"><!--<input type="file" id="xfile" name="file" style="width:200px;" />-->
				<br/>
				<?php
                            $options = array(
                                'path' => '../../../common/mea_hr/css',
								'pathfolder' => $folder_img,
								'pathbeforesmcore' => $folder_img, //เหมือนกับpathfolder เพราะย้ายไฟล์ uploadnow มาในนี้ไม่ได้เรียกจาก smlcore
								'foldername' => $id.'_temp/',
								'themecss' => '../../../common/mea_hr/css/picHistory-bootstrap.css',
								'maxfilesize' => 1000000,
								'acceptfiletypes' => '/(\.|\/)(jpe?g)$/i',
                                'formid' => 'formupload',
								'maxnumberoffiles' => 2,
								'btnstart' => false,
								'btncancel' => false,
								'btndelete' => false,
								'showname' => false,
								'showsize' => true,
                            );
						$Optionbind = array(
						'fileuploadadd' =>"	$('.cancel').click();",
							'fileuploaddone' => "$.each(data.result.files, function(index, file) {
																	$('#uploaddone').val(file.url);		
																	$('#imageurl').val(file.url);
																	$('#imagethumbnailUrl').val(file.thumbnailUrl);
																	$('#imagedeleteUrl').val(file.deleteUrl);
																	$('#btnsubmit').removeAttr('disabled');
																	$('#imageurl').click();															
																	return false;});",
								'fileuploaddestroy' => 'if(confirm("คุณจะทำการลบภาพนี้ใช่หรือไม่!!")==true){
																			return true;
																				}else{
																					throw "stop execution";
																				}',
								'fileuploaddestroyed'=>'window.location.reload();',
								'fileuploadprocessfail' =>"$('#imageurl').val('');
																$('#btnsubmit').attr('disabled',true);
								",
								
																		); 
							


                       $testupload = new uploadfile($options,$Optionbind);
                            ?>
				</td>
			</tr>
		</table>
		</div>
		<div class="row">
		<table width="90%" align="center">
			<tr>
				<td height="20" align="right" width="30%">&nbsp;</td>
				<td>
					<iframe id="iframere" scrolling="auto"  frameborder="0" width="500px" height="260px" style="display:none"></iframe>
				</td>
			</tr>
		</table>
		</div>
		<div class="row">
		<table width="90%" align="center">
			<tr>
				<td height="20" align="right" width="30%">ปี พ.ศ.&nbsp;<b>:</b>&nbsp;</td>
				<td>
					<select name="yy" id="yy" style="width:80px;">
						<option value="ไม่ระบุ">ไม่ระบุ</option>
					<?php 	$thisyear = date("Y") + 543;
						$y1 = $thisyear - 80;
						$y2 = $thisyear ;	
						for ($i=$y1;$i<=$y2;$i++){
							$selected = ($_GET['year']==$i) ? " selected " : "";
							echo "<option value=\"".$i."\" ".$selected.">".$i."</option>";
						}?>
					</select>
				</td>
			</tr>
		</table>
		</div>
		<div class="row">
		<table width="90%" align="center">
			<tr>
				<td height="20" width="30%">&nbsp;</td>
				<td>
					<input name="kp7_active" type="radio" value="1" <?php echo $_GET['s_kp7']==1?"checked='checked'":""?>>
					แสดงใน ก.พ.7
					<input name="kp7_active" type="radio" value="0" <?php echo $_GET['s_kp7']==2?"checked='checked'":""?>>
					ไม่แสดงใน ก.พ.7
				</td>
			</tr>
		</table>
		</div>
		</form>
		</td>
	</tr>
	<tr align="center">
		<td height="20">
			<button id="btnsubmit" class="btn btn-default" onclick="">ตกลง</button>&nbsp;&nbsp;
			<button class="btn btn-danger" onclick="window.top.$.fancybox.close();">ยกเลิก</button>
		</td>
	</tr>
	<input name="submenu_id" id="submenu_id" type="hidden" size="50" value="" >
    <input name="subject_error" id="subject_error" type="hidden" size="50" value="" >
    <input name="value_key_error" id="value_key_error" type="hidden" size="50" value="" >
    <input name="label_key_error" id="label_key_error" type="hidden" size="50" value="" >
	<?php
		$chkfiles = glob($folder_img.$id.'_temp/thumbnail/*');
		if(empty($chkfiles)){
			$fileurl = null;
		}else{
			$fileurl = scandir($folder_img.$id.'_temp/',1);
			$fileurl = $folder_img.$id.'_temp/'.$fileurl[1];
		}
	 ?>
	<input type="hidden" id="uploaddone"  name="file1"  value="<?php echo $fileurl ?>" >
	<input type="hidden" id="imageurl"  name="imageurl" value="<?php echo $fileurl ?>" >
	<input type="hidden" id="imagethumbnailUrl" name="imagethumbnailUrl"  value="" >
	<input type="hidden" id="imagedeleteUrl" name="imagedeleteUrl"  value="" >
</table>
</div>
<script type="text/javascript">	
    $(document).ready(function() {	
        $('#imageurl').click(function() {
			 document.getElementById('iframere').style.display ="block";
			 document.getElementById('iframere').src = "jracimage.php?imageurl=" + $("#imageurl").val() + '&imagethumbnailUrl=' + $("#imagethumbnailUrl").val() + '&imagedeleteUrl=' + $("#imagedeleteUrl").val() + '&newname=' + $("#newname").val()+'&id=<?php echo $_GET['id']?>&yy='+$('#yy').val()+'&act=add_edit_pic';            
            return false;
        });
    });
</script>