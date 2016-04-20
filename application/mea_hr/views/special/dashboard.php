<?php
/**
* @comment view สำหรับหน้า Dashboard ของ special (ความสามารถพิเศษ)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Bussarawadee Manorach
* @access 			public
* @created 			16/01/2016
*/

$data[0] = array(			
			'specialDetail' => 'เป็นวิทยากร'
		   );
$data[1] = array(
			'specialDetail' => 'เล่นกีตาร์'
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">ความสามารถพิเศษ</div>
<div class="block" style="width:100%">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div>
<table class="table" align="center" style="width:65%"><br /><br />
<thead>
	<tr>
    	<th>ลำดับที่</th>
        <th>รายละเอียด</th>
    </tr>
</thead>
<tbody>
<?php 
 $i=1; foreach($tdList as $id => $detail){ 
?>
	<tr class="tr-link" onclick="document.location='?controller=special&fn=add&detail=<?php echo $detail->specialDetail; ?>'">
    	<td class="text-center" style="width:20%"><?php echo $i; ?></td>
		<td><?php echo $detail->specialDetail; ?></td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
</div>
