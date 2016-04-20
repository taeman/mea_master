<?php
/**
* @comment view สำหรับหน้า Dashboard ของ medicalSurvey (การตรวจสุขภาพรายปี)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.1.5
* @package 			core
* @author 			Bussarawadee Manorach
* @access 			public
* @created 			20/01/2016
*/
$medical[0] = array(			
			'years' => '2558',
			'detailMedical' => 'ตรวจสุขภาพรวม 14 รายการ',
			'chestXray' => '1',
			'urineAnalysis' => '1',
			'completeBloodCount' => '1',
			'fastingSugar' => '1',
			'totCholesterol' => '1',
			'triglyceride' => '1',
			'gout' => '1',
			'bunAndCretinine' => '1',
			'sgotAndSgpt' => '1',
			'alkPhos' => '1',
			'hdlCholesterol' => '1',
			'ldlCholesterol' => '1',
			'hypertension' => '1',
			'overweight' => '1',
		   );
$medicalData = json_encode($medical);
$medicalData = json_decode($medicalData);
if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($medicalData);
	echo '</pre>';
}
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">ประวัติการตรวจสุขภาพรายปี</div>
<div class="block" style="width:100%">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div>
<table class="table" align="center" style="width:65%"><br /><br />
<thead>
	<tr>
    	<th>ปี พ.ศ.</th>
        <th>รายละเอียดการตรวจสุขภาพ</th>
        <th>สถานะที่มีความผิดปกติที่ขัดกับ พ.ร.บ. ของโรงงาน</th>
    </tr>
</thead>
<tbody>
<?php
	if(count($medicalData) > 0){
        $cnt = 1;
        foreach($medicalData as $key => $value){
            $text_status = ($value->chestXray == '1') ? 'Ⓧ ตรวจเอ็กซเรย์ทรวงอก (Chest X-ray)<br>' : '';
            $text_status .= ($value->urineAnalysis == '1') ? 'Ⓧ ตรวจปัสสาวะทั่วไป (Urine analysis)<br>' : '';
            $text_status .= ($value->completeBloodCount == '1') ? 'Ⓧ ตรวจความสมบูรณ์ของเลือด (CBC)<br>' : '';
            $text_status .= ($value->fastingSugar == '1') ? 'Ⓧ ตรวจระดับน้ำตาลในเลือด<br>' : '';
			$text_status .= ($value->totCholesterol == '1') ? 'Ⓧ ตรวจระดับไขมันโคเลสเตอรอลในเลือด<br>' : '';
            $text_status .= ($value->triglyceride == '1') ? 'Ⓧ ตรวจระดับไขมันไตกลีเซอรายด์ในเลือด<br>' : '';
            $text_status .= ($value->gout == '1') ? 'Ⓧ ตรวจระดับกรดยูริคในเลือด (โรคเก๊าท์)<br>' : '';
            $text_status .= ($value->bunAndCretinine == '1') ? 'Ⓧ ตรวจการทำงานของไต (BUN & Cretinine)<br>' : '';
			$text_status .= ($value->sgotAndSgpt == '1') ? 'Ⓧ ตรวจการทำงานของตับ (SGOT & SGPT)<br>' : '';
            $text_status .= ($value->alkPhos == '1') ? 'Ⓧ ตรวจการทำงานของตับและกระดูก (Alk. Phos)<br>' : '';
            $text_status .= ($value->hdlCholesterol == '1') ? 'Ⓧ ตรวจระดับไขมันดีในเลือด (HDL)<br>' : '';
            $text_status .= ($value->ldlCholesterol == '1') ? 'Ⓧ ตรวจระดับไขมันไม่ดีในเลือด (LDL)<br>' : '';
			$text_status .= ($value->hypertension == '1') ? 'Ⓧ ตรวจวัดความดันโลหิต (สูงกว่าปกติ)<br>' : '';
            $text_status .= ($value->overweight == '1') ? 'Ⓧ ตรวจวัดน้ำหนักร่างกาย (เกินกว่าปกติ)<br>' : ''; 
?>
	<tr id="row<?php echo $cnt?>" class="tr-link" onclick="document.location='?controller=medicalSurvey&fn=add&detailMedical=<?php echo $key; ?>&years=<?php echo $value->years; ?>'">
    	<td class="text-center" style="width:20%"><?php echo $value->years; ?></td>
		<td><?php echo $value->detailMedical; ?></td>
        <td><?php echo $text_status; ?></td>
    </tr>
<?php $cnt++; }} ?>
</tbody>
</table>
</div>
