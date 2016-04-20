<?php
/**
* @comment view สำหรับหน้า dashboard ของ education
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Bussarawadee Manorach
* @access 			public
* @created 			15/01/2016
*/

$data[0] = array(
			'school' => 'โรงเรียนบ้านโนนตาล',
			'dateLable' => '2530 - 2535',
			'degree' => 'ประถมศึกษาปีที่ 6',
			'major' => ' '
		   );
$data[1] = array(
			'school' => 'โรงเรียนสตรีศึกษา จ.ร้อยเอ็ด',
			'dateLable' => '2536 - 2541',
			'degree' => 'มัธยมศึกษาตอนปลาย',
			'major' => ' '
		   );
$data[2] = array(
			'school' => 'มหาวิทยาลัยราชภัฎนครราชสีมา',
			'dateLable' => '2542 - 2546',
			'degree' => 'ครุศาสตรบัณฑิต (ค.บ.)',
			'major' => 'การศึกษาปฐมวัย'
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">ประวัติการศึกษา</div>
<div class="block">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div>
<table class="table">
<thead>
	<tr>
    	<th>สถานศึกษา</th>
        <th>ตั้งแต่ - ถึง</th>
        <th>วุฒิที่ได้รับ</th>
        <th>สาขาวิชาเอก</th>
    </tr>
</thead>
<tbody>
<?php 
 $i=1; foreach($tdList as $id => $detail){ 

 ?>
	<tr class="tr-link" onclick="" <?php echo $detail->runid;?> >
    	<td><?php echo $detail->school; ?></td>
		<td align="center"><?php echo $detail->dateLable; ?></td>
		<td><?php echo $detail->degree; ?></td>
		<td><?php echo $detail->major; ?></td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
</div>