<?php
/**
* @comment view สำหรับหน้าจอการแนบเอกสาร ก.พ.7 ต้นฉบับ (dashboard)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.4
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
* @access 			public
* @created 			20/01/2016
*/

$data[0] = array(
			'attachYear' => '2556',
			'attachDate' => '1 ม.ค. 2556',
			'attachKp7' => '<img src="../../images/mea_hr/icon-pdf.png" class="btn-img" >',
		   );
$data[1] = array(
			'attachYear' => '2557',
			'attachDate' => '15 ก.พ. 2557',
			'attachKp7' => '<img src="../../images/mea_hr/icon-pdf.png" class="btn-img" >',
		   );
$data[2] = array(
			'attachYear' => '2558',
			'attachDate' => '10 ม.ค. 2558',
			'attachKp7' => '<img src="../../images/mea_hr/icon-pdf.png" class="btn-img" >',
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">แนบเอกสาร ก.พ.7 ต้นฉบับ</div>
<div class="block">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div>
<table class="table" align="center" style="width:50%"><br /><br />
<thead>
	<tr>
    	<th style="width:1%;">ปี พ.ศ.</th>
        <th style="width:2%;">วันที่อัพโหลด</th>
        <th style="width:2%;">ไฟล์ ก.พ.7 ต้นฉบับ</th>
    </tr>
</thead>
<tbody>
<?php 
 $i=1; foreach($tdList as $id => $detail){ 

 ?>
	<tr class="tr-link" onclick="document.location='?controller=attachmentKp7&fn=form_keyin&runid=<?php echo $id; ?>'" >
    	<td align="center"><?php echo $detail->attachYear; ?></td>
		<td align="center"><?php echo $detail->attachDate; ?></td>
		<td align="center"><?php echo $detail->attachKp7; ?></td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="text-center">
<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="ก่อนหน้า"/>
<img src="../../images/mea_hr/icon-next.png" class="btn-img" onclick="" title="ถัดไป"/>
</div>
</div>