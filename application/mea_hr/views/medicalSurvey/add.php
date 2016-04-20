<?php 
/**
* @comment view สำหรับส่วนการแสดง popup บันทึกความสามารถพิเศษ
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Bussarawadee Manorach
* @access 			public
* @created 			16/01/2016
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

$yearNow = date('Y')+543;
$yareNav = $yearNow - 80;
$yarePlus = $yearNow + 80;
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">ประวัติการตรวจสุขภาพรายปี -> เพิ่ม/ลบ/แก้ไข ข้อมูล</div>
<div class="block" style="width:100%">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div><br /><br />
	<div class="row">
		<div class="form-group">
			<div class="col-md-12">
				<label class="col-md-4 control-label text-right"> ปี พ.ศ. : </label>
				<div  class="col-md-2">
                    <select class="form-control">
                        <option>เลือกปี พ.ศ.</option>
                        <?php
							for($year = $yareNav; $year <= $yarePlus; $year++){
								$selected = ($year == $_GET['years']) ? 'selected' : '';
								echo '<option value="'.$year.'" '.$selected.'>'.$year.'</option>';	
							}
						?>
                    </select>
				</div>
			</div>			   	
		</div>
        <div class="form-group">
			<div class="col-md-12">
				<label class="col-md-4 control-label text-right"> รายละเอียด : </label>
                <div class="col-md-2">
                    <textarea class="form-control" style="width:400px; height:80px;" name="detailMedical" id="detailMedical"><?php echo $medicalData[$_GET[detailMedical]]->detailMedical;?></textarea>
                </div>
			</div>			   	
		</div>
        <div class="form-group">
			<div class="col-md-12">
				<label class="col-md-4 control-label text-right"> สถานะที่มีความผิดปกติที่ขัดกับ พ.ร.บ. ของโรงงาน : </label>
                <div class="col-md-8">
                    <input type="checkbox" id="abnormality" name="abnormality" value="1" <?php echo ($medicalData[$_GET[detailMedical]]->chestXray == '1')?'checked':''; ?>>
            		ตรวจเอ็กซเรย์ทรวงอก (Chest X-ray) <br />
                    <input type="checkbox" id="abnormality" name="abnormality" value="2" <?php echo ($medicalData[$_GET[detailMedical]]->urineAnalysis == '1')?'checked':''; ?>>
            		ตรวจปัสสาวะทั่วไป (Urine analysis) <br />
                    <input type="checkbox" id="abnormality" name="abnormality" value="3" <?php echo ($medicalData[$_GET[detailMedical]]->completeBloodCount == '1')?'checked':''; ?>>
            		ตรวจความสมบูรณ์ของเลือด (CBC)<br />
                    <input type="checkbox" id="abnormality" name="abnormality" value="4" <?php echo ($medicalData[$_GET[detailMedical]]->fastingSugar == '1')?'checked':''; ?>>
            		ตรวจระดับน้ำตาลในเลือด <br />
                    <input type="checkbox" id="abnormality" name="abnormality" value="5" <?php echo ($medicalData[$_GET[detailMedical]]->totCholesterol == '1')?'checked':''; ?>>
            		ตรวจระดับไขมันโคเลสเตอรอลในเลือด <br />
                    <input type="checkbox" id="abnormality" name="abnormality" value="6" <?php echo ($medicalData[$_GET[detailMedical]]->triglyceride == '1')?'checked':''; ?>>
            		ตรวจระดับไขมันไตกลีเซอรายด์ในเลือด <br />
                    <input type="checkbox" id="abnormality" name="abnormality" value="7" <?php echo ($medicalData[$_GET[detailMedical]]->gout == '1')?'checked':''; ?>>
            		ตรวจระดับกรดยูริคในเลือด (โรคเก๊าท์) <br />
                    <input type="checkbox" id="abnormality" name="abnormality" value="8" <?php echo ($medicalData[$_GET[detailMedical]]->bunAndCretinine == '1')?'checked':''; ?>>
            		ตรวจการทำงานของไต (BUN & Cretinine) <br />
                    <input type="checkbox" id="abnormality" name="abnormality" value="9" <?php echo ($medicalData[$_GET[detailMedical]]->sgotAndSgpt == '1')?'checked':''; ?>>
            		ตรวจการทำงานของตับ (SGOT & SGPT) <br />
                    <input type="checkbox" id="abnormality" name="abnormality" value="10" <?php echo ($medicalData[$_GET[detailMedical]]->alkPhos == '1')?'checked':''; ?>>
            		ตรวจการทำงานของตับและกระดูก (Alk. Phos) <br />
                    <input type="checkbox" id="abnormality" name="abnormality" value="11" <?php echo ($medicalData[$_GET[detailMedical]]->hdlCholesterol == '1')?'checked':''; ?>>
            		ตรวจระดับไขมันดีในเลือด (HDL) <br />
                    <input type="checkbox" id="abnormality" name="abnormality" value="12" <?php echo ($medicalData[$_GET[detailMedical]]->ldlCholesterol == '1')?'checked':''; ?>>
            		ตรวจระดับไขมันไม่ดีในเลือด (LDL) <br />
                    <input type="checkbox" id="abnormality" name="abnormality" value="13" <?php echo ($medicalData[$_GET[detailMedical]]->hypertension == '1')?'checked':''; ?>>
            		ตรวจวัดความดันโลหิต (สูงกว่าปกติ) <br />
                    <input type="checkbox" id="abnormality" name="abnormality" value="14" <?php echo ($medicalData[$_GET[detailMedical]]->overweight == '1')?'checked':''; ?>>
            		ตรวจวัดน้ำหนักร่างกาย (เกินกว่าปกติ)
                </div>
			</div>			   	
		</div>
	</div>
</div>
