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
<div class="form-group title">เพิ่มข้อมูลการละเมิด</div>
<form name="infraction_form" method="POST" action="" enctype="multipart/form-data">
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">ชื่อ - สกุล : </label>
				<div class="col-md-7"><input type="text" class="form-control" name="fullName" value="<?php echo $data['fullName']; ?>"></div>
				<div class="col-md-1"><img src="../../images/mea_hr/icon-search.png" class="btn-img" onclick="" title="" /></div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">การกระทำการละเมิด : </label>
                <div  class="col-md-8">
					<textarea row="5" name="infraction" class="form-control"><?php echo $data['infraction']; ?></textarea>
                </div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">สถานที่กระทำ : </label>
                <div  class="col-md-8">
					<input type="text" name="place" class="form-control" value="<?php echo $data['place']; ?>">
                </div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">ภาพถ่ายที่เกี่ยวข้อง : </label>
                <div  class="col-md-8">
					<?php
					if(isset($data['photo'])){
					foreach($data['photo'] as $key => $value){ ?>
						<a href=""><?php echo $value."<br>"; ?></a>
					<?php }
					} ?>
                </div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">เลือกไฟล์ : </label>
                <div  class="col-md-8">
					<input type="file" name="photo" class="form-control">
                </div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">แนบเอกสารที่เกี่ยวข้อง : </label>
                <div  class="col-md-8">
					<?php 
					if(isset($data['uploadFile'])){
					foreach($data['uploadFile'] as $key => $value){ ?>
						<a href=""><?php echo $value."<br>"; ?></a>
					<?php }
					} ?>
                </div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">เลือกไฟล์ : </label>
                <div  class="col-md-8">
					<input type="file" name="uploadFile" class="form-control">
                </div>
            </div>
        </div>
    </div>
	<div class="col-md-6">
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">วันที่กระทำ : </label>
                <div  class="col-md-8">
					<input type="text" name="infractionDate_Joker" id="infractionDate_Joker" class="form-control datethai" style="margin-right:10px;" value="<?php echo $data['infractionDate']; ?>"/>
					<input type="hidden" name="infractionDate" id="infractionDate" value="" />
                </div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">หน่วยงานที่รับผิดชอบ : </label>
                <div  class="col-md-8">
					<select name="department" class="form-control">
					<option value="">เลือกหน่วยงาน</option>
					<?php foreach($department as $key => $value){?>
						<option value="<?php echo $key; ?>" <?php echo ($key==$data['department'])?'selected':''; ?>><?php echo $value; ?></option>
					<?php } ?>
				</select>
                </div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">สถานะการกำเนินการของเจ้าหน้าที่ : </label>
                <div  class="col-md-8">
					<select name="status" class="form-control">
					<option value="">เลือกสถานะ</option>
					<?php foreach($status as $key => $value){?>
						<option value="<?php echo $key; ?>" <?php echo ($key==$data['status'])?'selected':''; ?>><?php echo $value; ?></option>
					<?php } ?>
				</select>
                </div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">ประเภทอุปกรณ์ : </label>
                <div  class="col-md-8">
					<select name="deviceType" class="form-control">
					<option value="">เลือกประเภทอุปกรณ์</option>
					<?php foreach($deviceType as $key => $value){?>
						<option value="<?php echo $key; ?>" <?php echo ($key==$data['deviceType'])?'selected':''; ?>><?php echo $value; ?></option>
					<?php } ?>
				</select>
                </div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">ตำแหน่งที่กระทำการละเมิด : </label>
                <div  class="col-md-4">
					ละติจูด <input type="text" name="latitude" class="form-control" value="<?php echo $data['latitude']; ?>">
				</div>
				<div  class="col-md-4">
					ลองจิจูด <input type="text" name="longitude" class="form-control" value="<?php echo $data['longitude']; ?>">
                </div>
            </div>
        </div>
	</div>
</div>
<div class="form-group title">ตั้งค่าการแจ้งเตือน</div>
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label class="col-md-2 control-label text-right">ประเภทการแจ้งเตือน : </label>
			<div class="col-md-6">
				<input type="checkbox" name="email" <?php echo ($data['email']=='1')?'checked':''; ?>> อีเมล์ <input type="checkbox" name="sms" <?php echo ($data['sms']=='1')?'checked':''; ?>> SMS
			</div>
        </div>
		<div class="form-group">
			<div class="col-md-8">
			<label class="col-md-2 control-label text-right">วันที่แจ้งเตือน : </label>
			<div  class="col-md-4">
				<input type="text" name="notificationDate_Joker" id="notificationDate_Joker" class="form-control datethai" style="margin-right:10px;" value="<?php echo $data['notificationDate']; ?>"/>
				<input type="hidden" name="notificationDate" id="notificationDate" value="" />
			</div>
			<label class="col-md-2 control-label text-right">ถึงวันที่ : </label>
			<div  class="col-md-4">
				<input type="text" name="notificationDateTo_Joker" id="notificationDateTo_Joker" class="form-control datethai" style="margin-right:10px;" value="<?php echo $data['notificationDateTo']; ?>"/>
				<input type="hidden" name="notificationDateTo" id="notificationDateTo" value="" />
			</div>
			</div>
        </div>
		<div class="form-group">
			<label class="col-md-2 control-label text-right">ความถี่ของการแจ้งเตือน : </label>
			<div class="col-md-6">
			<?php if($data['frequency']=='1'){
				$frequency1 = '';
				$frequency2 = 'checked';
				$frequency3 = '';
			}else if($data['frequency']=='2'){
				$frequency1 = '';
				$frequency2 = '';
				$frequency3 = 'checked';
			}else{
				$frequency1 = 'checked';
				$frequency2 = '';
				$frequency3 = '';
			}?>
				<input type="radio" name="frequency" value="0" <?php echo $frequency1; ?>> วันละครั้ง<br>
				<input type="radio" name="frequency" value="1" <?php echo $frequency2; ?>> สัปดาห์ละครั้ง<br>
				<input type="radio" name="frequency" value="2" <?php echo $frequency3; ?>> เดือนละครั้ง
			</div>
        </div>
	</div>
</div>
</form>
</div>