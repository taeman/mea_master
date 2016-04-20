<?php
/**
* @comment controller สำหรับหน้า dashboard ของ seminar
* @projectCode 57LIQ01
* @tor 3.2.4.2
* @package core
* @author Kiatisak Chansawang
* @access public
* @created 05/01/2016
*/

$tdList = $seminar->getDashboardData($_SESSION['idcard']);
$tdList = json_decode($tdList);
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">ประวัติการฝึกอบรมและดูงาน</div>
<div class="block">ชื่อ / นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div>
<table class="table">
<thead>
	<tr>
    	<th class="col-md-2 text-center" style="width:5%;">ประเภท</th>
        <th class="col-md-2 text-center">สถานที่ฝึกอบรมและดูงาน</th>
        <th class="col-md-2 text-center">วุฒิที่ได้รับ</th>
        <th class="col-md-2 text-center" style="width:10%;">ตั้งแต่ ถึง (เดือน ปี)</th>
    </tr>
</thead>
<tbody>
<?php foreach($tdList as $id => $detail){ ?>
	<tr class="tr-link" onclick="document.location = '?controller=seminar&fn=form_keyin&runid=<?php echo $detail->runid?>'">
    	<td class="text-center"><?php echo $detail->stype?></td>
        <td><?php echo $detail->place?></td>
        <td><?php echo $detail->subject?></td>
        <td class="text-center">
		<?php 
			$texDate = $dateTime->date_eng2thai($detail->startdate,543,'L','L');
        	if($detail->enddate != '' && $detail->enddate != '0000-00-00'){
				$texDate .= " - ".$dateTime->date_eng2thai($detail->enddate,543,'L','L');
			}
			echo $texDate;
		?>
        </td>
    </tr>
<?php } ?>
</tbody>
</table>
<div class="text-center">
<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="ก่อนหน้า"/>
<img src="../../images/mea_hr/icon-next.png" class="btn-img" onclick="" title="ถัดไป"/>
</div>
</div>