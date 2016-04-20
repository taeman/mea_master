<?php
/**
* @comment view หน้า dashboard บริหารจัดการข้อมูลการกระทำการละเมิด
* @projectCode 57LIQ01
* @tor 
* @package core
* @author Wannapa Thongtawee
* @access public
* @created 18/04/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">จัดการข้อมูลจากระบบเดิม [ทั้งหมด : <?php echo count($tdList); ?> รายการ]</div>
<table class="table">
<thead>
	<tr>
    	<th>ลำดับ</th>
        <th>เลขที่งาน</th>
        <th>วันที่เกิดเหตุ</th>
        <th>ลักษณะอุบัติเหตุ</th>
		<th>ทะเบียนรถ</th>
		<th>สถานที่เกิดเหตุ</th>
		<th>work order<br>การไฟฟ้านครหลวง</th>
		<th>รหัสแฟ้มฝ่ายกฏหมาย</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($tdList as $id => $detail){ ?>
	<tr class="tr-link" onclick="">
    	<td class="text-center"><?php echo $i; ?></td>
        <td class="text-center"><?php echo $detail->workId; ?></td>
        <td class="text-center"><?php echo $detail->dateAccident; ?></td>
		<td class="text-center"><?php echo $detail->detailAccident; ?></td>
		<td class="text-center"><?php echo $detail->licensePlate; ?></td>
		<td class="text-center"><?php echo $detail->placeAccident; ?></td>
		<td class="text-center"><?php echo $detail->workOrder; ?></td>
		<td class="text-center"><?php echo $detail->ruleId; ?></td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="text-center">
<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="ก่อนหน้า"/>
<img src="../../images/mea_hr/icon-next.png" class="btn-img" onclick="" title="ถัดไป"/>
</div>
</div>