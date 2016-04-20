<?php
/**
* @comment view สำหรับหน้าจอการแนบเอกสาร ก.พ.7 ต้นฉบับ
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.4
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
* @access 			public
* @created 			20/01/2016
*/

$data[0] = array(
			'attachYear' => '2556',
			'attachDate' => '1 ม.ค. 2556',
			'attachKp7' => '<img src="../../images/mea_hr/icon-pdf.png" class="btn-img" >',
		   );
$data[1] = array(
			'attachYear' => '2557',
			'attachDate' => '15 ก.พ. 2557',
			'attachKp7' => '<img src="../../images/mea_hr/icon-pdf.png" class="btn-img" >',
		   );
$data[2] = array(
			'attachYear' => '2558',
			'attachDate' => '10 ม.ค. 2558',
			'attachKp7' => '<img src="../../images/mea_hr/icon-pdf.png" class="btn-img" >',
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);

$yearNow = date('Y')+543;
$yearNav = $yearNow - 80;
$yearPlus = $yearNow + 80;

?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">แนบเอกสาร ก.พ.7 ต้นฉบับ</div>
<div class="block">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div><br /><br />
<div class="block" font style="color:#C00000; width:100%; margin-left:3%;">หมายเหตุ</div><br />
<div class="block" font style="color:#C00000; width:100%; margin-left:4%;">1).ไฟล์ต้องเป็นนามสกุล .PDF เท่านั้น</div><br />
<div class="block" font style="color:#C00000; width:100%; margin-left:4%;">2).ขนาดไฟล์ต้องไม่เกิน 20Mb</div>
<hr width="100%" style="border-color:#999999;">
<div class="row">
		<div class="col-md-12">      
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> ปี พ.ศ. : </label>
					<div  class="col-md-2">         	
						<select class="form-control">
                        <option>เลือกปี พ.ศ.</option>
                        <?php
						  for($year = $yearNav; $year <= $yearPlus; $year++){
						   $selected = ($year == $tdList[$_GET[runid]]->attachYear) ? 'selected' : '';
						   echo '<option value="'.$year.'" '.$selected.'>'.$year.'</option>'; 
						  }
						?>
                    </select>
                    </div>
				 </div>
			</div>
            
            <div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> เลือกไฟล์ ก.พ.7 ต้นฉบับ : </label>
					<div  class="col-md-5">         	
						<input type="file" name="attachKp7" id="attachKp7" accept="application/pdf" style="float: left;"> 
                        <img src="../../images/mea_hr/icon-pdf.png" ;="">
                    </div>
				 </div>
			</div>
            
		</div>
     </div>
</div>