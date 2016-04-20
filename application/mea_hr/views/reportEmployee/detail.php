<?php
/**
* @comment view สำหรับหน้าจอรายงานจำนวนพนักงานที่คงอยู่ปฏิบัติงาน (detail)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.3.1
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
* @access 			public
* @created 			21/01/2016
*/

$data[0] = array(
			'employeesDepartment' => 'บรรจุและผลิตภัณฑ์',
			'employeesDivision' => 'การผลิต',
			'employeesCotton' => 'ผลิต',
			'employeesAmount' => '10',
		   );
$data[1] = array(
			'employeesDepartment' => 'ควบคุมคุณภาพ',
			'employeesDivision' => 'ควบคุมและพัฒนาคุณภาพ',
			'employeesCotton' => 'ผลิต',
			'employeesAmount' => '20',
		   );
$data[2] = array(
			'employeesDepartment' => 'การตลาดและลูกค้าสัมพันธ์',
			'employeesDivision' => 'การตลาดและจำหน่าย',
			'employeesCotton' => 'บริหาร',
			'employeesAmount' => '10',
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);

$classTitle = ($_GET['printPdf'] == 'true') ? 'titlePDF' : 'title';
$classTable = ($_GET['printPdf'] == 'true') ? 'tablePDF' : 'table';
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group <?php echo $classTitle ?>">รายงานจำนวนพนักงานที่คงอยู่ปฏิบัติงาน</div>
<table class="<?php echo $classTable?>" style="width:100%"><br /><br />
<thead>
	<tr style="background:#eaeaea;">
    	<th style="width:5%;">ลำดับ</th>
    	<th>แผนก</th>
    	<th>กอง</th>
        <th>ฝ่าย</th>
        <th style="width:15%;">จำนวนพนักงาน (คน)</th>
    </tr>
</thead>
<tbody>
<?php 
 $i=1;
 $total=0;
  foreach($tdList as $id => $detail){ 

 ?>
	<tr style="background-color:#FFF;">
    	<td class="text-center"><?php echo $i; ?></td>
    	<td class="text-left"><?php echo $detail->employeesDepartment; ?></td>
        <td class="text-left"><?php echo $detail->employeesDivision; ?></td>
        <td class="text-center"><?php echo $detail->employeesCotton; ?></td>
        <td class="text-right"><?php echo number_format($detail->employeesAmount); ?></td>
    </tr>
<?php  
$total+=$detail->employeesAmount;
$i++; } ?>
    <tr bgcolor="#eaeaea">
        <th class="text-center" colspan="4"><strong>รวม</strong></th>
        <th style="text-align:right; font-weight:bold;"><?php echo number_format($total) ?></th>
    </tr>
</tbody>
</table>
</div>