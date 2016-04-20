<?php
/**
* @comment หน้า dashboard ของ การปฏิบัติราชการพิเศษ
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 19/01/2016
*/

?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">การปฏิบัติราชการพิเศษ</div>
<div class="block">ชื่อ / นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div>
<table class="table">
<thead>
	<tr>
    	<th align="center" width="20%">พ.ศ.</th>
        <th align="center" width="80%">รายการ</th>
    </tr>
</thead>
<tbody>
<?php foreach($specialdutyData as $id => $detail){ ?>
	<tr class="tr-link" onclick="document.location = '?controller=specialduty&fn=add&runid=<?php echo $detail->id?>'">
    	<td class="text-center"><?php echo $detail->sd_year?></td>
        <td class="text-left"><?php 
		$date_show="".($detail->date_end==""?"ณ วันที่ ".$dateTime->date_eng2thai($detail->date_start,543,'L','L'):"ช่วงวันที่ ".$dateTime->date_eng2thai($detail->date_start,543,'L','L')." - ".$dateTime->date_eng2thai($detail->date_end,543,'L','L'));
		$many_sick_mission="".($detail->sick==""?"":"มีวัน ลาป่วย".$detail->sick."วัน")." ".($detail->mission==""?"":"ลากิจ".$detail->mission."วัน");
		echo $detail->comment." ".$date_show." ".$many_sick_mission;?></td>
	</tr>
<?php } ?>
</tbody>
</table>
</div>
<script type="text/javascript">
$(document).ready(function(){
		$("#editW").fancybox({
			'width': '30%',
			'height': '40%',
			'autoScale': false,
			'autoSize': false,
			'transitionIn': 'none',
			'transitionOut': 'none',
			'type': 'iframe',
			'scrolling': 'no'
		});
});
</script>