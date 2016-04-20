<?php
/**
* @comment view บันทึกข้อมูลเครื่องราชอิสริยาภรณ์
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Wannapa Thongtawee (wannapa@sapphire.co.th)
* @access public
* @created 18/01/2016
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
			'royal' => 'ตริตาภรณ์มงกุฎไทย (ต.ม.)',
			'dateReceived' => '5 ธ.ค. 2555',
			'dateReturn' => ' ',
			'noRoyal' => '4026',
			'bookNumber' => '6/1',
			'bookRoyal' => '130',
			'whenRoyal' => '16ข',
			'pageRoyal' => '210',
			'dateCommand' => '14 ก.ค. 2556'
		   );
$data[1] = array(
			'royal' => 'ทวีตาภรณ์มงกุฎไทย (ท.ม.)',
			'dateReceived' => '5 ธ.ค. 2557',
			'dateReturn' => ' ',
			'noRoyal' => '2775',
			'bookNumber' => '6/1',
			'bookRoyal' => '132',
			'whenRoyal' => '17ข',
			'pageRoyal' => '139',
			'dateCommand' => '2 มิ.ย. 2558'
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">เครื่องราชอิสริยาภรณ์ -> เพิ่ม/ลบ/แก้ไข ข้อมูล</div>
<div class="block" style="width:100%">ชื่อ / นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div><br /><br />
<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> เครื่องราช/เหรียญตรา : </label>
					<div  class="col-md-8">
                    	<select id="royal" name="royal" class="form-control selectpicker input_account_id">
                        	<option>เลือกเครื่องราช/เหรียญตรา</option>
                        	<?php foreach($tdList as $id => $detail){ ?>
								<option value="<?php echo $detail->royal;?>" <?php echo ($detail->royal==$tdList[$_GET[runid]]->royal)?"selected":""; ?>><?php echo $detail->royal;?></option>  
							<?php } ?>
                        </select>
					</div>
				 </div>
			</div>
            
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> วัน เดือน ปี ที่ส่งคืน : </label>
					<div  class="col-md-8">
						<input type="text" name="dateReturn" id="dateReturn" value="<?php echo $tdList[$_GET[runid]]->dateReturn;?>" class="form-control datethaiEnd" style="margin-right:10px;" />
						
					</div>
				 </div>
			</div>
            
            <div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> เล่มที่ : </label>
					<div  class="col-md-8">
						<input type="text" name="bookNumber" id="bookNumber" value="<?php echo $tdList[$_GET[runid]]->bookNumber;?>" class="form-control" />
					</div>
				 </div>
			</div>     
             
            <div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> ตอน : </label>
					<div  class="col-md-8">
						<input type="text" name="whenRoyal" id="whenRoyal" value="<?php echo $tdList[$_GET[runid]]->whenRoyal;?>" class="form-control" />
					</div>
				</div>
			</div>
            
            <div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> ลงวันที่ : </label>
					<div  class="col-md-8">
                    	<input type="text" name="dateCommand" id="dateCommand" value="<?php echo $tdList[$_GET[runid]]->dateCommand;?>" class="form-control datethaiEnd" style="margin-right:10px;" />                      
					</div>
				</div>
			</div>
		</div>
        	
		<div class="col-md-6">
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> วัน เดือน ปี ที่ได้รับ : </label>
					<div  class="col-md-8">
						<input type="text" name="dateReceived" id="dateReceived" value="<?php echo $tdList[$_GET[runid]]->dateReceived;?>" class="form-control datethaiStart" style="margin-right:10px;" />
					</div>
				</div>
			</div>
            
			 <div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> ลำดับที่ : </label>
					<div  class="col-md-3">
						<input type="text" name="noRoyal" id="noRoyal" value="<?php echo $tdList[$_GET[runid]]->noRoyal;?>" class="form-control" />
					</div>
				 </div>
			</div>
            
            <div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> เล่ม : </label>
					<div  class="col-md-3">
						<input type="text" name="bookRoyal" id="bookRoyal" value="<?php echo $tdList[$_GET[runid]]->bookRoyal;?>" class="form-control" />
					</div>
				 </div>
			</div>

            <div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> หน้า : </label>
					<div  class="col-md-3">
						<input type="text" name="pageRoyal" id="pageRoyal" value="<?php echo $tdList[$_GET[runid]]->pageRoyal;?>" class="form-control" />
					</div>
				 </div>
			</div>
		
		</div>
	</div>
</div>