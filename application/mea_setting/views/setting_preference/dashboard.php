<?php
/**
* @comment view หน้า dashboard จัดการข้อมูลผู้ละเมิดทรัพย์สิน
* @projectCode PS58MKT
* @tor 1.2.1 
* @package core
* @author Wannapa Thongtawee
* @access public
* @created 18/04/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">จัดการข้อมูลผู้ละเมิดทรัพย์สิน [ทั้งหมด: 54 รายการ]</div>
<table class="table">
<thead>
	<tr>
    	<th>ลำดับ</th>
        <th>ชื่อ-สกุล</th>
        <th>เลขประจำตัวประชาชน</th>
        <th>ที่อยู่</th>
		<th>เบอร์โทรศัพท์</th>
		<th>อีเมล์</th>
		<th></th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($tdList as $id => $detail){ ?>
	<tr class="tr-link" onclick="document.location = '?controller=setting_preference&fn=add&id=1'">
    	<td class="text-center"><?php echo $i; ?></td>
        <td class="text-left"><?php echo $detail->setting_name; ?></td>
        <td class="text-center"><?php echo $detail->setting_idCard; ?></td>
		<td class="text-left"><?php echo $detail->setting_address; ?></td>
		<td class="text-left"><?php echo $detail->setting_telephoneNumber; ?></td>
		<td class="text-left"><?php echo $detail->setting_email; ?></td>
		<td class="text-center"><?php echo $detail->setting_Tool; ?></td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="text-center">
<img src="../../images/mea_setting/icon-prev.png" class="btn-img" onclick="" title="ก่อนหน้า"/>
<img src="../../images/mea_setting/icon-next.png" class="btn-img" onclick="" title="ถัดไป"/>
</div>
</div>