<?php
/**
* @comment หน้า dashboard ของ ออกจากราชการและกลับเข้ารับราชการใหม่
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 18/01/2016
*/

?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">ออกจากราชการและกลับเข้ารับราชการใหม่</div>
<div class="block">ชื่อ / นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div>
<br><br>
<div class="row" style="margin-left:3%;"><font style="color:#C00000;">
	***ข้อมูลในส่วนนี้ ให้กรอกเฉพาะ ท่านที่ เคยออกจากราชการและกลับเข้ารับราชการใหม่ ซึ่งจะมีผลต่ออายุราชการของท่าน วิธีการเลือก คือ<br>
    &nbsp;&nbsp;&nbsp;1). ให้คลิกที่ รูปดินสอใน ปีสุดท้ายก่อนออกจากราชการ จากนั้นเลือก "ออกจากราชการ" จะมีข้อความสีแดงแสดงสถานะการออกจากราชการปรากฎขึ้นมา<br>
    &nbsp;&nbsp;&nbsp;2). ให้คลิกที่ รูปดินสอ ในปีแรกหลังจากเข้ารับราชการใหม่ และเลือก "กลับเข้ารับราชการใหม่" จะมีข้อความสีเขียวแสดงสถานะการกลับเข้ารับราชการใหม่ปรากฎขึ้นมา<br>
</font></div><br>
<table class="table">
<thead>
	<tr>
    	<th align="center" width="10%">วัน เดือน ปี ที่มีผล</th>
        <th align="center" width="15%">ตำแหน่ง</th>
        <th align="center" width="10%">รหัสพนักงาน</th>
        <th align="center" width="10%">อัตราเงินเดือน</th>
        <th align="center" width="30%">เอกสารอ้างอิง</th>
        <th align="center" width="10%">	สถานะทางราชการ</th>
        <th align="center" width="5%">แก้ไขข้อมูล</th>
    </tr>
</thead>
<tbody>
<?php foreach($salaryData as $id => $detail){ ?>
	<tr>
    	<td class="text-center"><?php echo $dateTime->date_eng2thai($detail->date_active,543,'L','L')?></td>
        <td class="text-center"><?php echo $positionData[$detail->position]?></td>
        <td class="text-center"><?php echo $detail->id_employee?></td>
        <td class="text-right"><?php echo $detail->salary?></td>
        <td class="text-left"><?php echo $detail->ref_doc." ".$downData[$detail->down_on]." ".$dateTime->date_eng2thai($detail->down_date)?></td>
        <td class="text-center"><?php echo $detail->status_work==1?'<font style="color:red;">ออกจากราชการ</font>':($detail->status_work==2?'<font style="color:green;">เข้ารับราชการใหม่</font>':"");?></td>
		<td class="text-center"><img src="../../images/mea_hr/icon-edit.png" class="btn-img" id="editW" href="/mea_hr_mvc/application/mea_hr/controls/endStartWork/edit.php?id=<?php echo $detail->id ?>&idcard=<?php echo $detail->id_card; ?>" onclick="" title="แก้ไขข้อมูล" width="20" height="20"></td>
	</tr>
<?php } ?>
</tbody>
</table>
</div>
<script type="text/javascript">
$(document).ready(function(){
		$("#editW").fancybox({
			'width': '30%',
			'height': '40%',
			'autoScale': false,
			'autoSize': false,
			'transitionIn': 'none',
			'transitionOut': 'none',
			'type': 'iframe',
			'scrolling': 'no'
		});
});
</script>