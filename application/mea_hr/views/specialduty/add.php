<?php
/**
* @comment หน้า เพิ่มและแก้ไขข้อมูล ของ การปฏิบัติราชการพิเศษ
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 19/01/2016
*/

?>
<div class="block" style="width:99%; margin:0.5%;">
	<div class="form-group title"><?php echo $_GET['runid'] == ''?"เพิ่มข้อมูล":"แก้ไขข้อมูล"; ?>การปฏิบัติราชการพิเศษ</div>
	<div class="block">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div><br><br>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-2 control-label text-right"> ปี พ.ศ. : </label>
					<div  class="col-md-2">
						<select id="sd_yy" name="sd_yy" class="form-control selectpicker input_account_id">
							<option>เลือกปี พ.ศ.</option>
							<? 	$thisyear = date("Y") + 543;
								$y1 = $thisyear - 80;
								$y2 = $thisyear ;	
								for ($i=$y1;$i<=$y2;$i++){
									$selected = (($specialdutyData->sd_year)==$i) ? " selected " : "";
									echo "<option value=\"".$i."\" ".$selected.">".$i."</option>";
								}?>
						</select>
					</div>
				 </div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-2 control-label text-right"> รายการ : </label>
					<div  class="col-md-4">
						<textarea class="form-control" style="width:400px; height:80px;" name="comment" id="comment"><?php echo $specialdutyData->comment?></textarea>
					</div>
				 </div>
			</div> 
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-2 control-label text-right"> ประเภท : </label>
					<div  class="col-md-3">
						<select id="sd_type" name="sd_type" class="form-control selectpicker input_account_id">
							<option>เลือกประเภท</option>
							<option value="1" <? $specialdutyData->type==1?"selected":""?>>ไม่นับเวลาทวีคูณ</option>
							<option value="2" <? $specialdutyData->type==1?"selected":""?>>กฎอัยการศึก</option>
						</select>
					</div>
				 </div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-2 control-label text-right"> ตั้งแต่วันที่ : </label>
					<div  class="col-md-3">
						<input type="text" name="dateStart_Joker" id="dateStart_Joker" value="<?php echo $dateTime->date_eng2thai($specialdutyData->date_start,543,'L','L')?>" class="form-control datethaiStart" style="margin-right:10px;" />
						<input type="hidden" name="dateStart" id="dateStart" value="<?php echo $specialdutyData->date_start?>" />
					</div>
				 </div>
			</div>  			
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-2 control-label text-right"> ถึงวันที่ : </label>
					<div  class="col-md-3">
						<input type="text" name="dateEnd_Joker" id="dateEnd_Joker" value="<?php echo $dateTime->date_eng2thai($specialdutyData->date_end,543,'L','L')?>" class="form-control datethaiStart" style="margin-right:10px;" />
						<input type="hidden" name="dateEnd" id="dateEnd" value="<?php echo $specialdutyData->date_end?>" />
					</div>
				 </div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-2 control-label text-right"> ล่าป่วย : </label>
					<div  class="col-md-2">
						<input type="number" name="sick" id="sick" value="<?php echo $specialdutyData->sick?>" class="form-control" />
					</div>
					<label class="col-md-1 control-label text-left"> วัน </label>
					<label class="col-md-1 control-label text-right"> ลากิจ : </label>
					<div  class="col-md-2">
						<input type="number" name="mission" id="mission" value="<?php echo $specialdutyData->mission?>" class="form-control" />
					</div>
					<label class="col-md-1 control-label text-left"> วัน </label>
				 </div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-2 control-label text-right"> คงเหลือเวลาราชการทวีคูณ : </label>
					<div  class="col-md-2">
						<input type="number" name="salary_amount" id="salary_amount" value="" class="form-control" />
					</div>
					<label class="col-md-2 control-label text-left"> ปี </label>
					<div  class="col-md-2">
						<input type="number" name="salary_amount" id="salary_amount" value="" class="form-control" />
					</div>
					<label class="col-md-1 control-label text-left"> เดือน </label>
					<div class="col-md-2">
						<input type="number" name="salary_amount" id="salary_amount" value="" class="form-control" />
					</div>
					<label class="col-md-1 control-label text-left"> วัน </label>
				</div>
			</div>	
		</div>
	</div>
</div>