<?php
/**
* @comment หน้า dashboard ของ salary
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 15/01/2016
*/

?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">ตำแหน่งและอัตราเงินเดือน</div>
<div class="block">ชื่อ / นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div>
<table class="table">
<thead>
	<tr>
    	<th align="center" width="10%">วัน เดือน ปี ที่มีผล</th>
        <th align="center" width="25%">ตำแหน่ง</th>
        <th align="center" width="10%">รหัสพนักงาน</th>
        <th align="center" width="15%">อัตราเงินเดือน</th>
        <th align="center" width="30%">เอกสารอ้างอิง</th>
        <th align="center" width="10">หมายเหตุ</th>
    </tr>
</thead>
<tbody>
<?php foreach($salaryData as $id => $detail){ ?>
	<tr class="tr-link" onclick="document.location = '?controller=salary&fn=add&runid=<?php echo $detail->id?>'">
    	<td class="text-center"><?php echo $dateTime->date_eng2thai($detail->date_active,543,'L','L')?></td>
        <td class="text-center"><?php echo $positionData[$detail->position]?></td>
        <td class="text-center"><?php echo $detail->id_employee?></td>
        <td class="text-right"><?php echo $detail->salary?></td>
        <td class="text-left"><?php echo $detail->ref_doc." ".$downData[$detail->down_on]." ".$dateTime->date_eng2thai($detail->down_date)?></td>
        <td class="text-center"><?php echo $detail->comment?></td>
    </tr>
<?php } ?>
</tbody>
</table>
</div>