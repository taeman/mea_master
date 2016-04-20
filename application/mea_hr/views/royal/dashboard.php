<?php
/**
* @comment view สำหรับหน้าจอเครื่องราชอิสริยาภรณ์ (dashboard)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
* @access 			public
* @created 			16/01/2016
*/

$data[0] = array(
			'royal' => 'ตริตาภรณ์มงกุฎไทย (ต.ม.)',
			'dateReceived' => '5 ธ.ค. 2555',
			'dateReturn' => ' ',
			'noRoyal' => '4026',
			'bookNumber' => '6/1',
			'bookRoyal' => '130',
			'whenRoyal' => '16ข',
			'pageRoyal' => '210',
			'dateCommand' => '14 ก.ค. 2556'
		   );
$data[1] = array(
			'royal' => 'ทวีตาภรณ์มงกุฎไทย (ท.ม.)',
			'dateReceived' => '5 ธ.ค. 2557',
			'dateReturn' => ' ',
			'noRoyal' => '2775',
			'bookNumber' => '6/1',
			'bookRoyal' => '132',
			'whenRoyal' => '17ข',
			'pageRoyal' => '139',
			'dateCommand' => '2 มิ.ย. 2558'
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">เครื่องราชอิสริยาภรณ์</div>
<div class="block">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div>
<table class="table">
<thead>
	<tr>
    	<th>เครื่องราช/เหรียญตรา</th>
        <th>วัน เดือน ปี ที่ได้รับ</th>
        <th>วัน เดือน ปี ที่ส่งคืน</th>
        <th>ลำดับที่</th>
        <th>เล่มที่</th>
        <th>เล่ม</th>
        <th>ตอน</th>
        <th>หน้า</th>
        <th>ลงวันที่</th>
    </tr>
</thead>
<tbody>
<?php 
 $i=1; foreach($tdList as $id => $detail){ 

 ?>
	<tr class="tr-link" onclick="document.location='?controller=royal&fn=form_keyin&runid=<?php echo $id; ?>'" >
    	<td><?php echo $detail->royal; ?></td>
		<td align="center"><?php echo $detail->dateReceived; ?></td>
		<td align="center"><?php echo $detail->dateReturn; ?></td>
		<td align="center"><?php echo $detail->noRoyal; ?></td>
        <td align="center"><?php echo $detail->bookNumber; ?></td>
        <td align="center"><?php echo $detail->bookRoyal; ?></td>
        <td align="center"><?php echo $detail->whenRoyal; ?></td>
        <td align="center"><?php echo $detail->pageRoyal; ?></td>
        <td align="center"><?php echo $detail->dateCommand; ?></td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="text-center">
<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="ก่อนหน้า"/>
<img src="../../images/mea_hr/icon-next.png" class="btn-img" onclick="" title="ถัดไป"/>
</div>
</div>