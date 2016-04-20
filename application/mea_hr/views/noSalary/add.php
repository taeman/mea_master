<?php 
/**
* @comment view สำหรับส่วนการแสดง popup บันทึกความสามารถพิเศษ
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Bussarawadee Manorach
* @access 			public
* @created 			19/01/2016
*/

$data[0] = array(			
			'fromDate' => '2015-11-01',
			'toDate' => '2015-11-30',
			'listComment' => 'ไม่ได้รับเงินเดือน เนื่องจาก ขาดงานเป็นเวลา 1 เดือน',
			'reference' => '-'
		   );
$data[1] = array(
			'fromDate' => '2015-11-01',
			'toDate' => '2015-11-31',
			'listComment' => 'ไม่ได้รับเงินเดือน เนื่องจาก ทำผิดทางวินัย',
			'reference' => '-'
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">วันที่ไม่ได้รับเงินเดือนหรือได้รับเงินเดือนไม่เต็ม หรือวันที่มิได้ประจำ<br />ปฏิบัติหน้าที่อยู่ในเขตที่ได้มีประกาศใช้กฎอัยการศึก</div>
<div class="block" style="width:100%">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div><br /><br />
<table align="center">
	<tr>
    	<td class="text-right bold" valign="top">ตั้งแต่วันที่ : <font style="color:red;">*</font></td>
        <td class="text-left" style="padding-left:10px;">
        <input type="text" name="fromDateJoker" id="fromDateJoker" value="<?php echo $dateTime->date_eng2thai($tdList[$_GET[runid]]->fromDate,543,'L','L')?>" class="form-control datethai" style="margin-right:10px;" />
        <input type="hidden" name="fromDate" id="fromDate" value="<?php echo $tdList[$_GET[runid]]->fromDate?>" />
        </td>
	</tr>
    <tr>
    	<td class="text-right bold" valign="top">ถึงวันที่ : <font style="color:red;">*</font></td>
        <td class="text-left" style="padding-left:10px;">
        <input type="text" name="toDateJoker" id="toDateJoker" value="<?php echo $dateTime->date_eng2thai($tdList[$_GET[runid]]->toDate,543,'L','L')?>" class="form-control datethai" style="margin-right:10px;" />
        <input type="hidden" name="toDate" id="toDate" value="<?php echo $tdList[$_GET[runid]]->toDate?>" />
        </td>
	</tr>
    <tr>
    	<td class="text-right bold" valign="top">รายละเอียด : </td>
        <td class="text-left" style="padding-left:10px;">
        <textarea class="form-control" style="width:400px; height:150px;" name="listComment" id="listComment"><?php echo $tdList[$_GET[runid]]->listComment;?></textarea>
        </td>
	</tr>
    <tr>
    	<td class="text-right bold" valign="top">เอกสารอ้างอิง : </td>
        <td class="text-left" style="padding-left:10px;">
        <input type="text" class="form-control" name="reference" id="reference" value="<?php echo $tdList[$_GET[runid]]->reference;?>" />
        </td>
	</tr>
</table>
</div>