<?php 
/**
* @comment view สำหรับส่วนการแสดง popup บันทึกความสามารถพิเศษ
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Bussarawadee Manorach
* @access 			public
* @created 			16/01/2016
*/
?>
<div class="block" style="width:93%; margin:0.5%; margin-left:3%;">
<div class="form-group title">ความสามารถพิเศษ</div>
<div class="block" style="width:100%">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div><br /><br />
<table align="center">
	<tr>
    	<td class="text-right bold" valign="top">รายละเอียด : <font style="color:red;">*</font></td>
        <td class="text-left" style="padding-left:10px;">
        <textarea class="form-control" style="width:400px; height:150px;" name="specialDetail" id="specialDetail"><?php echo $_GET['detail'];?></textarea>
        </td>
	</tr>
</table>
</div>