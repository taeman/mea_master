<?php
/**
* @comment view สำหรับหน้าจอรายงานจำนวนพนักงานจำแนกตามประเภทพนักงาน (detail)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.3.7
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
* @access 			public
* @created 			22/01/2016
*/

$data[0] = array(
			'employeesType' => 'ข้าราชการหรือลูกจ้างประจำ',
			'employeesAmount' => '150',
		   );
$data[1] = array(
			'employeesType' => 'ลูกจ้างชั่วคราว',
			'employeesAmount' => '15',
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);

$classTitle = ($_GET['printPdf'] == 'true') ? 'titlePDF' : 'title';
$classTable = ($_GET['printPdf'] == 'true') ? 'tablePDF' : 'table';
?>

<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group <?php echo $classTitle ?>">รายงานจำนวนพนักงานจำแนกตามประเภทพนักงาน</div>
<table class="<?php echo $classTable?>" align="center" style="width:50%"><br /><br />
<thead>
	<tr style="background:#eaeaea;">
    	<th>ลำดับ</th>
    	<th>ประเภทพนักงาน</th>
        <th>จำนวนพนักงาน (คน)</th>
    </tr>
</thead>
<tbody>

<?php 
 $i=1;
 $total=0;
  foreach($tdList as $id => $detail){ 

 ?>
	<tr class>
    	<td class="text-center"><?php echo $i; ?></td>
    	<td class="text-left"><?php echo $detail->employeesType; ?></td>
        <td class="text-right"><?php echo number_format($detail->employeesAmount); ?></td>
    </tr>
<?php  
$total+=$detail->employeesAmount;
$i++; } ?>
    <tr bgcolor="#eaeaea">
        <th style="text-align:center; font-weight:bold;" colspan="2"><strong>รวม</strong></th>
        <th style="text-align:right; font-weight:bold;"><?php echo number_format($total) ?></th>
    </tr>
</tbody>
</table>
</div>