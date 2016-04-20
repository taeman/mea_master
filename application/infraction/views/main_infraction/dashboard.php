<?php
/**
* @comment view หน้า dashboard บริหารจัดการข้อมูลการกระทำการละเมิด
* @projectCode PS58MKT
* @tor 1.2.1 
* @package core
* @author Wannapa Thongtawee
* @access public
* @created 18/04/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">จัดการข้อมูลการกระทำการละเมิด [ทั้งหมด : <?php echo count($tdList); ?> รายการ]</div>
<table class="table">
<thead>
	<tr>
    	<th>ลำดับ</th>
        <th>วันที่กระทำการละเมิด</th>
        <th>ชื่อ-สกุล ผู้กระทำการละเมิด</th>
        <th>การกระทำการละเมิด</th>
		<th>สถานที่ที่กระทำการละเมิด</th>
		<th>หน่วยงานที่รับผิดชอบ</th>
		<th>สถานะการดำเนินการของเจ้าหน้าที่</th>
		<th>ตั้งค่าการแจ้งเตือน</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($tdList as $id => $detail){ ?>
	<tr class="tr-link" onclick="document.location = '?controller=main_infraction&fn=add&id=1'">
    	<td class="text-center"><?php echo $i; ?></td>
        <td class="text-center"><?php echo $detail->infraction_date; ?></td>
        <td class="text-center"><?php echo $detail->infraction_name; ?></td>
		<td class="text-center"><?php echo $detail->infraction_action; ?></td>
		<td class="text-center"><?php echo $detail->infraction_place; ?></td>
		<td class="text-center"><?php echo $detail->infraction_institution; ?></td>
		<td class="text-center"><?php echo $detail->infraction_status; ?></td>
		<td class="text-center"><?php echo $detail->infraction_notification; ?></td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="text-center">
<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="ก่อนหน้า"/>
<img src="../../images/mea_hr/icon-next.png" class="btn-img" onclick="" title="ถัดไป"/>
</div>
</div>
<div style="display:none;">
  <a href='#export_gis' class='fancy-request' id='link_export'></a>
  <div id="export_gis">
    <div class="form-group title">ค้นหา</div>
    <div class="form-group">
      <div class="col-md-12">
        <div class="col-md-4 text-right">วันที่กระทำ : </div>
        <div class="col-md-8"><input type="text" name="infractionDate_Joker" id="infractionDate_Joker" class="form-control datethai" style="margin-right:10px;" value="<?php echo $data['infractionDate']; ?>"/>
					<input type="hidden" name="infractionDate" id="infractionDate" value="" /></div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <div class="col-md-4 text-right">ชื่อ - สกุล : </div>
        <div class="col-md-6"><input type="text" id="fullName" class="form-control" name="fullName" value=""></div>
      </div>
    </div>
	<div class="form-group">
      <div class="col-md-12">
        <div class="col-md-4 text-right">การละเมิด : </div>
        <div class="col-md-6"><input type="text" id="infraction" class="form-control" name="infraction" value=""></div>
      </div>
    </div>
	<div class="form-group">
      <div class="col-md-12">
        <div class="col-md-4 text-right">สถานที่ที่กระทำการละเมิด : </div>
        <div class="col-md-6"><input type="text" id="place" class="form-control" name="place" value=""></div>
      </div>
    </div>
	<div class="form-group">
      <div class="col-md-12">
        <div class="col-md-4 text-right">หน่วยงานที่รับผิดชอบ : </div>
        <div class="col-md-6"><input type="text" id="department" class="form-control" name="department" value=""></div>
      </div>
    </div>
	<div class="form-group">
      <div class="col-md-12">
        <div class="col-md-4 text-right">สถานะ : </div>
        <div class="col-md-6"><select name="status" class="form-control">
					<option value="">เลือกสถานะ</option>
					<?php foreach($status as $key => $value){?>
						<option value="<?php echo $key; ?>" ><?php echo $value; ?></option>
					<?php } ?>
				</select></div>
      </div>
    </div>
	<div class="form-group">
        <div class="col-md-12 text-center"><input type="button" value="ค้นหา">&nbsp;&nbsp;&nbsp;<input type="button" value="ยกเลิก"></div>
    </div>
  </div>
</div>
<script>
$(".fancy-request").fancybox({
    'width': '700px',
    'height': '350px',
    'autoScale': true,
    'autoSize': false,
    'transitionIn': 'none',
    'transitionOut': 'none',
    'type': 'inline'
});
</script>