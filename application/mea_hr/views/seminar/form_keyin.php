<?php
/**
* @comment controller สำหรับหน้า dashboard ของ seminar
* @projectCode 57LIQ01
* @tor 3.2.4.2
* @package core
* @author Kiatisak Chansawang
* @access public
* @created 05/01/2016
*/

$sql_ation = ($_GET['runid'] == '') ? "INSERT INTO" : "UPDATE";
if($_GET['runid'] == ''){
	$runno = $seminar->getMaxRunno($_SESSION['idcard']);
	$runno = json_decode($runno);
}else{
	$data = $seminar->getForm_keyData($_GET['runid']);
	$data = json_decode($data);
	$runno->runno = $data[0]->runno;
}
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">ประวัติการฝึกอบรมและดูงาน -> เพิ่ม/ลบ/แก้ไข ข้อมูล</div>
<div class="block">ชื่อ / นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div>
<table style="width:100%">
<tbody>
	<tr>
    	<td class="text-right bold" style="width:20%;">ประเภท <span class="require-text">*</span></td>
        <td class="text-left" style="padding-left:10px;">
        <label style="font-weight:normal;"><input type="radio" name="stype" class="stype" value="0" <?php echo ($data[0]->stype == '0') ? 'checked' : ''?> />&nbsp;อบรม</label>&nbsp;&nbsp;&nbsp;
        <label style="font-weight:normal;"><input type="radio" name="stype" class="stype" value="1" <?php echo ($data[0]->stype == '1') ? 'checked' : ''?> />&nbsp;ดูงาน</label>&nbsp;&nbsp;&nbsp;
        <label style="font-weight:normal;"><input type="radio" name="stype" class="stype" value="2" <?php echo ($data[0]->stype == '2') ? 'checked' : ''?> />&nbsp;สัมมนา</label>
        </td>
    </tr>
    <tr>
    	<td class="text-right bold top">สถานที่ฝึกอบรมและดูงาน <span class="require-text">*</span></td>
        <td class="text-left" style="padding-left:10px;">
        <textarea class="form-control" style="width:400px; height:150px;" name="place" id="place"><?php echo $data[0]->place?></textarea>
        </td>
    </tr>
    <tr>
    	<td class="text-right bold">ตั้งแต่วันที่ <span class="require-text">*</span></td>
        <td class="text-left" style="padding-left:10px;">
        <input type="text" name="datestart_Joker" id="datestart_Joker" value="<?php echo $dateTime->date_eng2thai($data[0]->startdate,543,'L','L')?>" class="form-control datethaiStart" style="margin-right:10px;" />
        <input type="hidden" name="datestart" id="datestart" value="<?php echo $data[0]->startdate?>" />
        </td>
    </tr>
    <tr>
    	<td class="text-right bold">ถึงวันที่</td>
        <td class="text-left" style="padding-left:10px;">
        <input type="text" name="dateend_Joker" id="dateend_Joker" value="<?php echo $dateTime->date_eng2thai($data[0]->enddate,543,'L','L')?>" class="form-control datethaiEnd" style="margin-right:10px;" />
        <input type="hidden" name="dateend" id="dateend" value="<?php echo $data[0]->enddate?>" />
        </td>
    </tr>
    <tr>
    	<td class="text-right bold top">วุฒิที่ได้รับ</td>
        <td class="text-left" style="padding-left:10px;">
        <textarea class="form-control" style="width:400px; height:100px;" name="subject"  id="subject"><?php echo $data[0]->subject?></textarea>
        </td>
    </tr>
</tbody>
</table>
<input type="hidden" id="id" value="<?php echo $_SESSION['idcard']?>" />
<input type="hidden" id="sql_ation" value="<?php echo $sql_ation?>" />
<input type="hidden" id="runno" value="<?php echo $runno->runno?>" />
<input type="hidden" id="runid" value="<?php echo $data[0]->runid?>" />
</div>