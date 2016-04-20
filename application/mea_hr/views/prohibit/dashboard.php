<?php
/**
* @comment view สำหรับหน้าจอความผิดทางวินัย (dashboard)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
* @access 			public
* @created 			19/01/2016
*/

$data[0] = array(
			'prohibitDate' => '16 มิถุนายน 2556',
			'prohibitComment' => 'ขาดงานโดยไม่แจ้งล่วงหน้าทำให้งานที่ตนเองรับผิดชอบเสร็จไม่ตรงเวลาที่ลูกค้ากำหนดทำให้องค์การต้องเสียค่าปรับ
			<br>ดังนั้น ให้พักงานเป็นเวลา 1 เดือน มีผลตั้งแต่วันที่ 17 มิถุนายน 2556 ถึง วันที่ 17 กรกฎาคม 2556',
			'prohibitType' => 'พักงาน',
			'prohibitRefdoc' => 'ศธ 125/2556 ลว.16 มิถุนายน 2556',
		   );
$data[1] = array(
			'prohibitDate' => '1 พฤษภาคม 2557',
			'prohibitComment' => 'ทำวัถุดิบที่ใช้ผลิตสุราเสียหายโดยความประมาท ส่งผลให้วัถุติบไม่เพียงพอต่อกระบวนการผลิต 
			<br>ดังนั้น ให้บันทึกภาคทัณฑ์ลงสุมดบันทึกพฤติกรรม ในวันที่ 1 พฤษภาคม 2557',
			'prohibitType' => 'ภาคทัณฑ์',
			'prohibitRefdoc' => 'ศธ 205/2557 ลว.1 พฤษภาคม 2557',
		   );
$data[2] = array(
			'prohibitDate' => '7 เมษายน 2558',
			'prohibitComment' => 'ทำวัถุดิบที่ใช้ผลิตสุราเสียหายโดยความประมาท ส่งผลให้วัถุติบไม่เพียงพอต่อกระบวนการผลิต  และองค์การต้องเสียค่าปรับให้ลูกค้าตามเงื่อนไข
			<br>ดังนั้น ให้ออกจากราชการ มีผลตั้งแต่ วันที่ 8 เมษายน 2558',
			'prohibitType' => 'ให้ออกเหตุวินัย',
			'prohibitRefdoc' => 'ศธ 49/2558 ลว.7 เมษายน 2558',
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">ความผิดทางวินัย</div>
<div class="block">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div>
<table class="table">
<thead>
	<tr>
    	<th style="width:10%;">วัน เดือน ปี</th>
        <th style="width:40%">เรื่อง</th>
        <th style="width:20%">โทษ</th>
        <th style="width:30%;">คำสั่ง</th>
    </tr>
</thead>
<tbody>
<?php 
 $i=1; foreach($tdList as $id => $detail){ 

 ?>
	<tr class="tr-link" onclick="document.location='?controller=prohibit&fn=form_keyin&runid=<?php echo $id; ?>'" >
    	<td><?php echo $detail->prohibitDate; ?></td>
		<td align="left"><?php echo $detail->prohibitComment; ?></td>
		<td align="center"><?php echo $detail->prohibitType; ?></td>
		<td align="center"><?php echo $detail->prohibitRefdoc; ?></td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="text-center">
<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="ก่อนหน้า"/>
<img src="../../images/mea_hr/icon-next.png" class="btn-img" onclick="" title="ถัดไป"/>
</div>
</div>