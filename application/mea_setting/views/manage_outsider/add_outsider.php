<?php
/**
* @comment view สำหรับหน้าจอเพิ่มและแก้ไขข้อมูลหน่วยงานภายนอก (dashboard)
* @projectCode 		PS58MKT
* @tor 				1.2.1
* @package 			core
* @author 			Amata Kongsaingern (wannapa@sapphire.co.th)
* @access 			public
* @created 			18/04/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title"><?php echo $_GET['id']!=""?"แก้ไข":"บันทึก";?>ข้อมูลหน่วยงานภายนอก</div>
<div>
  <div class="form-group row col-md-12">
    <label class="col-md-3 control-label right"><?php echo 'ชื่อหน่วยงาน :'; ?></label>
    <label class="col-md-3 control-label">
      <input type="hidden" class="form-control" name="partyId" id="partyId" value="<?php echo ""; ?>">
      <input type="text" class="form-control" name="partyName" id="partyName" value="<?php echo ""; ?>">
    </label>
  </div>
  <div class="form-group row col-md-12">
    <label class="col-md-3 control-label right"><?php echo 'ที่ตั้ง :'; ?></label>
    <label class="col-md-3 control-label">
        <textarea cols="50" rows="5" class="form-control"><?php echo "";?></textarea>
    </label>
  </div>
  <div class="form-group row col-md-12">
    <label class="col-md-3 control-label right"><?php echo 'แนบเอกสาร :'; ?></label>
    <label class="col-md-3 control-label">
        <ol type="1">
          <li>เอกสาร1.pdf</li>
          <li>เอกสาร2.xls</li>
        </ol>
    </label>
  </div>
  <div class="form-group row col-md-12">
    <label class="col-md-3 control-label right"><?php echo 'เลือกไฟล์ :'; ?></label>
    <label class="col-md-3 control-label">
        <input type="file" name="uploadFile" id="uploadFile" accept="application/pdf,application/msexcel">
    </label>
  </div>
</div>
</div>
