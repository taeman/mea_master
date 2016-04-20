<?php
/**
* @comment หน้า เพิ่มและแก้ไขข้อมูล ของ salary
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 15/01/2016
*/

?>
<div class="block" style="width:99%; margin:0.5%;">
	<div class="form-group title">แก้ไขข้อมูลตำแหน่งและอัตราเงินเดือน</div>
	<div class="block">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th;?></div><br><br>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> วัน เดือน ปี ที่มีผล : </label>
					<div  class="col-md-8">
						<input type="text" name="dateActive_Joker" id="dateActive_Joker" value="<?php echo $dateTime->date_eng2thai($salaryData->date_active,543,'L','L');?>" class="form-control datethaiStart" style="margin-right:10px;" />
						<input type="hidden" name="dateActive" id="dateActive" value="<?php echo $salaryData->date_active;?>" />
					</div>
				 </div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> ตำแหน่ง : </label>
					<div  class="col-md-8">
						<select id="position" name="position" class="form-control selectpicker input_account_id">
							<option>เลือกตำแหน่ง</option>
							<?php foreach($positionData as $id => $detail){ ?>
								<option value="<?php echo $detail->po_id;?>" <? echo ($detail->po_id==$salaryData->position)?"selected":""; ?>><?php echo $detail->po_name;?></option>
							<?php } ?>
						</select>
					</div>
				 </div>
			</div>               
		</div>	
		<div class="col-md-6">
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> รหัสพนักงาน : </label>
					<div  class="col-md-8">
						<input type="text" name="id_employee" id="id_employee" value="<?php echo $salaryData->id_employee;?>" class="form-control" />
					</div>
				 </div>
			</div>       
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-4 control-label text-right"> อัตราเงินเดือน : </label>
					<div  class="col-md-8">
						<input type="number" name="salary_amount" id="salary_amount" value="<?php echo $salaryData->salary;?>" class="form-control" />
					</div>
				 </div>
			</div>		
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-2 control-label text-right"> เอกสารอ้างอิง : </label>
					<div  class="col-md-4">
						<textarea class="form-control" style="width:400px; height:50px;" name="ref_doc" id="ref_doc"><?php echo $salaryData->ref_doc;?></textarea>
					</div>
				 </div>
			</div> 
		</div>	
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-2 control-label text-right"> ลงวันที่ : </label>
					<div  class="col-md-2">
						<label style="font-weight:normal;"><input type="radio" id="order1" name="order" class="stype" value="0" <?php echo ($salaryData->down_on == '0') ? 'checked' : 'checked';?> />&nbsp;ลว.</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label style="font-weight:normal;"><input type="radio" id="order2" name="order" class="stype" value="1" <?php echo ($salaryData->down_on == '1') ? 'checked' : '';?> />&nbsp;สั่ง</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label style="font-weight:normal;"><input type="radio" id="order3" name="order" class="stype" value="2" <?php echo ($salaryData->down_on == '2') ? 'checked' : '';?> />&nbsp;อื่นๆ</label>
					</div>
					<div class="col-md-8">
						<input type="text" id="order_other" name="order_other" <?php echo ($salaryData->down_on == '2') ? 'value="'.$salaryData->down_on_other.'"' : 'disabled';?> style="width:150px;" class="form-control"/>
					</div>
				 </div>
			</div> 
		</div>	
	</div>	
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-2 control-label text-right"></label>
					<div  class="col-md-5">
						<label style="font-weight:normal;"><input type="radio" id="date_order1" name="date_order" class="stype" value="1" <?php echo ($salaryData->down_date_on == '1') ? 'checked' : 'checked';?> />&nbsp;ไม่ระบุวันที่</label>&nbsp;&nbsp;&nbsp;
						<label style="font-weight:normal;"><input type="radio" id="date_order2" name="date_order" class="stype" value="2" <?php echo ($salaryData->down_date_on == '2') ? 'checked' : '';?> />&nbsp;ระบุวันที่</label>&nbsp;&nbsp;&nbsp;
						<input type="text" name="dateOrder_Joker" id="dateOrder_Joker" <?php echo ($salaryData->down_date_on == '2') ? 'value="'.$dateTime->date_eng2thai($salaryData->down_date,543,'L','L').'"' : 'disabled';?> class="form-control datethaiStart col-md-5" style="margin-right:10px;" />
						<input type="hidden" name="dateActive" id="dateActive" value="<?php echo $salaryData->down_date;?>" />
					</div>
				 </div>
			</div> 
		</div>	
	</div>	
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<div class="col-md-12">
					<label class="col-md-2 control-label text-right"> หมายเหตุ : </label>
					<div  class="col-md-4">
						<textarea class="form-control" style="width:400px; height:50px;" name="comment" id="comment"><?php echo $salaryData->comment;?></textarea>
					</div>
				 </div>
			</div> 
		</div>
	</div>
</div>