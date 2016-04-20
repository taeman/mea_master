<?php
/**
* @comment controller สำหรับหน้า dashboard ของ general
* @projectCode 57LIQ01
* @tor 3.2.4.1
* @package core
* @author Pinya Thanagorntiraporn
* @access public
* @created 12/01/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">จัดการข้อมูลทะเบียนประวัติบุคคล</div>
<table class="table">
<thead>
	<tr>
    	<th>ลำดับ</th>
        <th>รหัสพนักงาน</th>
        <th>เลขประจำตัวประชาชน</th>
        <th>ชื่อ - สกุล</th>
		<th>ตำแหน่ง</th>
		<th>แผนก</th>
		<th>กอง</th>
		<th>ฝ่าย</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($tdList as $id => $detail){ ?>
	<tr class="tr-link" onclick="document.location = '?controller=personal&fn=general&runid=<?php echo $detail->runid?>'">
    	<td class="text-center"><?php echo $i; ?></td>
        <td class="text-center"><?php echo $detail->id; ?></td>
        <td class="text-center"><?php echo $detail->idcard; ?></td>
		<td><?php echo $detail->fullname; ?></td>
		<td><?php echo $detail->position; ?></td>
		<td><?php echo $detail->department; ?></td>
		<td><?php echo $detail->division; ?></td>
		<td><?php echo $detail->party; ?></td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="text-center">
<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="ก่อนหน้า"/>
<img src="../../images/mea_hr/icon-next.png" class="btn-img" onclick="" title="ถัดไป"/>
</div>
</div>