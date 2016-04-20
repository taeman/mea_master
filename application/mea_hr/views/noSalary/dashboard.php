<?php
/**
* @comment view สำหรับหน้า dashboard วันที่ไม่ได้รับเงินเดือนหรือได้รับเงินเดือนไม่เต็มขั้น ในเขตที่ได้มีการประกาศใช้กฎอัยการศึก
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
<div class="block" style="width:100%">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div>
<table class="table" align="center" style="width:65%"><br /><br />
<thead>
	<tr>
    	<th>ตั้งแต่วันที่-ถึงวันที่</th>
        <th>รายละเอียด</th>
        <th>เอกสารอ้างอิง</th>
    </tr>
</thead>
<tbody>
<?php 
 $i=1; foreach($tdList as $id => $detail){ 
?>
	<tr class="tr-link" onclick="document.location='?controller=noSalary&fn=add&runid=<?php echo $id; ?>'">
    	<td class="text-center"><?php echo $dateTime->date_eng2thai($detail->fromDate,543,'L','L'); ?> - <?php echo $dateTime->date_eng2thai($detail->toDate,543,'L','L'); ?></td>
        <td><?php echo $detail->listComment; ?></td>
		<td><?php echo $detail->reference; ?></td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
</div>
