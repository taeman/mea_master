<?php
/**
* @comment view เพิ่มข้อมูลการละเมิด
* @projectCode 
* @tor 
* @package core
* @author Pinya (pinya@sapphire.co.th)
* @access public
* @created 18/04/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">บันทึก/แก้ไข/ลบ ระเบียบข้อกำหนดหรือกฏหมาย</div>
<form name="infraction_form" method="POST" action="" enctype="multipart/form-data">
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
			<label class="col-md-5 control-label text-right">ชื่อระเบียบ/ข้อกำหนด/กฏหมาย : </label>
			<div class="col-md-7"><input type="text" class="form-control" name="ruleName" value="<?php echo $data['ruleName']; ?>"></div>
        </div>
		<div class="form-group">
			<label class="col-md-5 control-label text-right">รายละเอียด : </label>
			<div class="col-md-7"><textarea row="5" name="ruleDetail" class="form-control"><?php echo $data['ruleDetail']; ?></textarea></div>
        </div>
		<div class="form-group">
			<label class="col-md-5 control-label text-right">ภาพถ่ายที่เกี่ยวข้อง : </label>
			<div  class="col-md-7">
				<?php
				if(isset($data['uploadFile'])){
				foreach($data['uploadFile'] as $key => $value){ ?>
					<a href=""><?php echo $value."<br>"; ?></a>
				<?php }
				} ?>
			</div>
        </div>
		<div class="form-group">
			<label class="col-md-5 control-label text-right">เลือกไฟล์ : </label>
			<div  class="col-md-7">
				<input type="file" name="uploadFile" class="form-control">
			</div>
        </div>
    </div>
</div>
</form>
</div>