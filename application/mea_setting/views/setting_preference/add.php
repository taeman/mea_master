<?php
/**
* @comment view สำหรับหน้าเพิ่ม/แก้ไข ข้อมูลผู้ละเมิด
* @projectCode PS58MKT
* @tor 1.2.1
* @package core
* @author Wannapa Thongtawee
* @access public
* @created 18/04/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">เพิ่ม/แก้ไข ข้อมูลผู้ละเมิด</div>
<form name="infraction_form" method="POST" action="" enctype="multipart/form-data">
<div class="row">
    <div class="col-md-10">
		<div class="form-group">
			<div class="col-md-12">
				<label class="col-md-2 control-label text-right">คำนำหน้า : </label>
					<div  class="col-md-10 form-group">
                    	<select name="salutation" class="form-control">
						<option value="" selected>เลือกหน่วยงาน</option>
						<?php foreach($salutation as $key => $value){?>
							<option value="<?php echo $key; ?>" <?php echo ($key==$data['id'])?'selected':''; ?>><?php echo $value; ?></option>
						<?php } ?>
						</select>
                    
                    	<label class="col-md-2 control-label text-right">ชื่อ : </label>
                        <input type="text" name="place" class="col-md-1 form-control" value="<?php echo $data['add_Name']; ?>">
                        
                        <label class="col-md-3 control-label text-right">นามสกุล:</label>
                    	<input type="text" name="place" class="col-md-1 form-control" value="<?php echo $data['add_lastnames']; ?>">
                    </div>
            </div>
		</div>

        <div class="form-group">
            <div class="col-md-12">
                <label class="col-md-2 control-label text-right">เลขประจำตัวประชาชน:</label>
                <div  class="col-md-3">
					<input type="text" name="place" class="form-control" value="<?php echo $data['add_idCard']; ?>">
                </div>
                <div  class="col-md-7"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label class="col-md-2 control-label text-right">ที่อยู่ : </label>
                <div  class="col-md-4">
					<textarea row="5" name="infraction" class="form-control"><?php echo $data['add_address']; ?></textarea>
                </div>
                <div  class="col-md-6"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label class="col-md-2 control-label text-right">เบอร์โทรศัพท์ : </label>
                <div  class="col-md-3">
					<input type="text" name="place" class="form-control" value="<?php echo $data['add_telephoneNumber']; ?>">
                </div>
                <div  class="col-md-7"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label class="col-md-2 control-label text-right">อีเมลล์ : </label>
                <div  class="col-md-3">
					<input type="text" name="place" class="form-control" value="<?php echo $data['add_email']; ?>">
                </div>
                <div  class="col-md-7"></div>
            </div>
        </div>
     </div>
</div>
</form>
</div>
