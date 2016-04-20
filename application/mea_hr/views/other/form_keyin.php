<?php
/**
* @comment view สำหรับหน้าจอบันทึกรายการอื่นๆ ที่จำเป็น
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Wannapa Thongtawee (wannapa@sapphire.co.th)
* @access public
* @created 19/01/2016
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

$data[0] = array(
			'otherDetail' => 'ข้าพเจ้านายสมชาย  ชูธงชาติ ขอมอบเงินช่วยเหลือหลักจากเสียชีวิตให้ นางศิราภรณ์ ชูธงชาติ (มารดา)',
		   );
$data[1] = array(
			'otherDetail' => 'ข้าพเจ้านายสมชาย ชูธงชาติ ขอรับอุปการะ ด.ช.ชนาธิป คำปาศรี เป็นบุตรบุญธรรม',
		   );
$data[2] = array(
			'otherDetail' => 'ข้าพเจ้านายสมชาย ชูธงชาติ ขอมอบเงินช่วยเหลือการเลี้ยงดูบุตรบุญธรรมแก่ ด.ช.ชนาธิป คำปาศรี ตามกำลังทรัพย์ตลอดชีวิต',
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);

?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">รายการอื่นๆ ที่จำเป็น -> เพิ่ม/ลบ/แก้ไข ข้อมูล</div>
<div class="block" style="width:100%">ชื่อ / นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div><br /><br />
<table align="center">
	<tr>
    <td class="text-right bold" valign="top">รายการ : </td>
        <td class="text-left" style="padding-left:10px;">
        <textarea class="form-control" style="width:400px; height:150px;" name="otherDetail" id="otherDetail"><?php echo $tdList[$_GET[runid]]->otherDetail;?></textarea>
        </td>
    </tr>
</table>
</div>