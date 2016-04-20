<?php
/**
* @comment controller สำหรับหน้า dashboard ของ general
* @projectCode 		57LIQ01
* @tor 				3.2.4.1.1
* @package 			core
* @author 			Bussarawadee Manorach
* @access 			public
* @created 			21/01/2016
*/
$data[0] = array(			
			'years' => '2558',
			'month' => 'ธันวาคม',
			'numberOfEmp' => '165',
			'income' => '5,367,530.00',
			'lessMoney' => '2,586,742.22',
			'netBalance' => '2,780,787.78',
			'statusPayroll' => 'จัดทำ'
		   );
$data[1] = array(			
			'years' => '2558',
			'month' => 'พฤศจิกายน',
			'numberOfEmp' => '165',
			'income' => '5,367,530.00',
			'lessMoney' => '2,586,742.22',
			'netBalance' => '2,780,787.78',
			'statusPayroll' => 'อนุมัติ'
		   );
$payrollList = json_encode($data);
$payrollList = json_decode($payrollList);
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">รายการบัญชีเงินเดือน</div>
<table class="table">
<thead>
	<tr>
    	<th>ลำดับ</th>
        <th>ปี พ.ศ.</th>
        <th>เดือน</th>
        <th>จำนวนพนักงาน</th>
		<th>เงินได้</th>
		<th>เงินสด</th>
		<th>เงินสุทธิ</th>
		<th>สถานะ</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($payrollList as $id => $detail){ ?>
	<tr class="tr-link" onclick="document.location = '?controller=personal&fn=payroll&runid=<?php echo $detail->runid?>'">
    	<td class="text-center"><?php echo $i; ?></td>
        <td class="text-center"><?php echo $detail->years; ?></td>
        <td><?php echo $detail->month; ?></td>
		<td class="text-center"><?php echo $detail->numberOfEmp; ?></td>
		<td class="text-right"><?php echo $detail->income; ?></td>
		<td class="text-right"><?php echo $detail->lessMoney; ?></td>
		<td class="text-right"><?php echo $detail->netBalance; ?></td>
		<td class="text-center"><?php echo $detail->statusPayroll; ?></td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="text-center">
<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="ก่อนหน้า"/>
<img src="../../images/mea_hr/icon-next.png" class="btn-img" onclick="" title="ถัดไป"/>
</div>
</div>