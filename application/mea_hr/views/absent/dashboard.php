<?php
/**
* @comment view สำหรับหน้าจอความผิดทางวินัย (dashboard)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
* @access 			public
* @created 			19/01/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">จำนวนวันลาหยุดราชการ ขาดราชการ มาสาย</div>
<div class="block">ชื่อ - นามสกุล : <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th; ?></div>
<table class="table">
<thead>
	<tr>
    	<th>พ.ศ.</th>
        <th>ลาป่วย</th>
        <th>ลากิจและลาพักผ่อน</th>
        <th>มาสาย</th>
        <th>ขาดราชการ</th>
        <th>ลาศึกษาต่อ</th>
    </tr>
</thead>
<tbody>
<?php 
 $i=1; foreach($tdList as $id => $detail){ 
 ?>
	<tr class="tr-link" onclick="document.location='?controller=absent&fn=form_keyin&id=<?php echo $id; ?>'" >
            <td align="center"><?php echo $detail->year; ?></td>
            <td align="center"><?php echo $detail->sick; ?></td>
            <td align="center"><?php echo $detail->mission+$detail->vacation; ?></td>
            <td align="center"><?php echo $detail->late; ?></td>
            <td align="center"><?php echo $detail->absent; ?></td>
            <td align="center"><?php echo $detail->study; ?></td>
        </tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="text-center">
<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="ก่อนหน้า"/>
<img src="../../images/mea_hr/icon-next.png" class="btn-img" onclick="" title="ถัดไป"/>
</div>
</div>