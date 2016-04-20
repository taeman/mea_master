<?php
/**
* @comment view สำหรับหน้าจอรายการอื่นๆ ที่จำเป็น (dashboard)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
* @access 			public
* @created 			19/01/2016
*/

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
<div class="form-group title">รายการอื่นๆ ที่จำเป็น</div>
<div class="block">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div>
<table class="table" align="center" style="width:65%"><br /><br />
<thead>
	<tr>
    	<th>ลำดับ</th>
    	<th>รายการอื่นๆ ที่จำเป็น</th>
    </tr>
</thead>
<tbody>
<?php 
 $i=1; foreach($tdList as $id => $detail){ 

 ?>
	<tr class="tr-link" onclick="document.location='?controller=other&fn=form_keyin&runid=<?php echo $id; ?>'" >
    	<td class="text-center" style="width:20%"><?php echo $i; ?></td>
    	<td><?php echo $detail->otherDetail; ?></td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="text-center">
<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="ก่อนหน้า"/>
<img src="../../images/mea_hr/icon-next.png" class="btn-img" onclick="" title="ถัดไป"/>
</div>
</div>