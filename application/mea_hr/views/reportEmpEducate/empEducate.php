<?php
/**
* @comment view สำหรับหน้าจอรายงานจำนวนพนักงานจำแนกตามช่วงอายุและวุฒิการศึกษา
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.3.5
* @package 			core
* @author 			Bussarawadee Manorach
* @access 			public
* @created 			22/01/2016
*/

$data[0] = array(
			'educate' => 'ปริญญาโท',
			'age21btage30' => '-',
			'age31btage40' => '2',
			'age41btage50' => '-',
			'agemorethan50' => '3',
			'totalList' => '5'
		   );
$data[1] = array(
			'educate' => 'ปริญญาตรี',
			'age21btage30' => '-',
			'age31btage40' => '14',
			'age41btage50' => '21',
			'agemorethan50' => '20',
			'totalList' => '55'
		   );
$data[2] = array(
			'educate' => 'อนุปริญญา',
			'age21btage30' => '-',
			'age31btage40' => '-',
			'age41btage50' => '-',
			'agemorethan50' => '3',
			'totalList' => '3'
		   );
$data[3] = array(
			'educate' => 'ปวส.-ปวท.',
			'age21btage30' => '-',
			'age31btage40' => '4',
			'age41btage50' => '11',
			'agemorethan50' => '13',
			'totalList' => '28'
		   );
$data[4] = array(
			'educate' => 'ปวช.',
			'age21btage30' => '-',
			'age31btage40' => '1',
			'age41btage50' => '9',
			'agemorethan50' => '16',
			'totalList' => '26'
		   );
$data[5] = array(
			'educate' => 'ต่ำกว่า ปวช.',
			'age21btage30' => '-',
			'age31btage40' => '3',
			'age41btage50' => '18',
			'agemorethan50' => '27',
			'totalList' => '48'
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);

$classTitle = ($_GET['printPdf'] == 'true') ? 'titlePDF' : 'title';
$classTable = ($_GET['printPdf'] == 'true') ? 'tablePDF' : 'table';
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group <?php echo $classTitle ?>">รายงานจำนวนพนักงานจำแนกตามช่วงอายุและวุฒิการศึกษา</div>
<table class="<?php echo $classTable?>" style="width:100%"><br /><br />
<thead>
	<tr bgcolor="#eaeaea">
    	<th>วุฒิการศึกษา/ช่วงอายุ</th>
    	<th>21-30</th>
    	<th>31-40</th>
        <th>41-50</th>
        <th>มากกว่า 50 ปี</th>
        <th>รวม</th>
    </tr>
</thead>
<tbody>
<?php 
 $i=1; $total=0;
 foreach($tdList as $id => $detail){ ?>
	<tr class>
    	<td style="width:20%" class="text-left"><?php echo $detail->educate; ?></td>
    	<td style="width:10%" class="text-right"><?php echo $detail->age21btage30; ?></td>
        <td style="width:10%" class="text-right"><?php echo $detail->age31btage40; ?></td>
        <td style="width:10%" class="text-right"><?php echo $detail->age41btage50; ?></td>
        <td style="width:10%" class="text-right"><?php echo $detail->agemorethan50; ?></td>
        <td style="width:10%" class="text-right"><?php echo number_format($detail->totalList); ?></td>
    </tr>
<?php  
$total21to30+=$detail->age21btage30;
$total31to40+=$detail->age31btage40;
$total41to50+=$detail->age41btage50;
$totalMorethan50+=$detail->agemorethan50;
$totalSummary += $detail->totalList;
$i++; } ?>
    <tr bgcolor="#eaeaea">
        <th style="text-align:center; font-weight:bold;">รวม</td>
        <th style="text-align:right; font-weight:bold;"><?php echo number_format($total21to30); ?></td>
        <th style="text-align:right; font-weight:bold;"><?php echo number_format($total31to40) ?></td>
        <th style="text-align:right; font-weight:bold;"><?php echo number_format($total41to50) ?></td>
        <th style="text-align:right; font-weight:bold;"><?php echo number_format($totalMorethan50) ?></td>
        <th style="text-align:right; font-weight:bold;"><?php echo number_format($totalSummary) ?></td>
    </tr>
</tbody>
</table>
</div>