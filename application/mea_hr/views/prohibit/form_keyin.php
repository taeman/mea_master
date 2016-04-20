<?php
/**
* @comment view บันทึกข้อมูลความผิดทางวินัย (from_keyin)
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
			'prohibitDate' => '16 มิถุนายน 2556',
			'prohibitComment' => 'ขาดงานโดยไม่แจ้งล่วงหน้าทำให้งานที่ตนเองรับผิดชอบเสร็จไม่ตรงเวลาที่ลูกค้ากำหนดทำให้องค์การต้องเสียค่าปรับ
ดังนั้น ให้พักงานเป็นเวลา 1 เดือน มีผลตั้งแต่วันที่ 17 มิถุนายน 2556 ถึง วันที่ 17 กรกฎาคม 2556',
			'prohibitType' => 'พักงาน',
			'prohibitRefdoc' => 'ศธ 125/2556 ลว.16 มิถุนายน 2556',
		   );
$data[1] = array(
			'prohibitDate' => '1 พฤษภาคม 2557',
			'prohibitComment' => 'ทำวัถุดิบที่ใช้ผลิตสุราเสียหายโดยความประมาท ส่งผลให้วัถุติบไม่เพียงพอต่อกระบวนการผลิต 
ดังนั้น ให้บันทึกภาคทัณฑ์ลงสุมดบันทึกพฤติกรรม ในวันที่ 1 พฤษภาคม 2557',
			'prohibitType' => 'ภาคทัณฑ์',
			'prohibitRefdoc' => 'ศธ 205/2557 ลว.1 พฤษภาคม 2557',
		   );
$data[2] = array(
			'prohibitDate' => '7 เมษายน 2558',
			'prohibitComment' => 'ทำวัถุดิบที่ใช้ผลิตสุราเสียหายโดยความประมาท ส่งผลให้วัถุติบไม่เพียงพอต่อกระบวนการผลิต  และองค์การต้องเสียค่าปรับให้ลูกค้าตามเงื่อนไข
ดังนั้น ให้ออกจากราชการ มีผลตั้งแต่ วันที่ 8 เมษายน 2558',
			'prohibitType' => 'ให้ออกเหตุวินัย',
			'prohibitRefdoc' => 'ศธ 49/2558 ลว.7 เมษายน 2558',
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);

?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">ความผิดทางวินัย -> เพิ่ม/ลบ/แก้ไข ข้อมูล</div>
<div class="block" style="width:100%">ชื่อ / นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div><br /><br />
<div class="row" align="center">
		<div class="col-md-12">
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> วันเดือนปี : </label>
					<div  class="col-md-8">
                    	<input type="text" name="prohibitDate" id="prohibitDate" value="<?php echo $tdList[$_GET[runid]]->prohibitDate;?>" class="form-control datethaiEnd" style="margin-right:10px;" />
					</div>
				 </div>
			</div>
            
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> หมวดโทษทางวินัย : </label>
					<div  class="col-md-2">
						<select id="royal" name="royal" class="form-control selectpicker input_account_id">
                        	<option>เลือกโทษทางวินัย</option>
                        	<?php foreach($tdList as $id => $detail){ ?>
								<option value="<?php echo $detail->prohibitType;?>" <?php echo ($detail->prohibitType==$tdList[$_GET[runid]]->prohibitType)?"selected":""; ?>><?php echo $detail->prohibitType;?></option>  
							<?php } ?>
                        </select>
					</div>
				 </div>
			</div>
            
            <div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> เรื่อง : </label>
					<div  class="col-md-8" align="left">
						<textarea class="form-control" style="width:500px; height:100px;" name="prohibitComment" id="prohibitComment"><?php echo $tdList[$_GET[runid]]->prohibitComment;?></textarea>
					</div>
				 </div>
			</div>     
             
            <div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> คำสั่ง : </label>
					<div  class="col-md-3">
						<input type="text" name="prohibitRefdoc" id="prohibitRefdoc" value="<?php echo $tdList[$_GET[runid]]->prohibitRefdoc;?>" class="form-control" />
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>