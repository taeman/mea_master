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


?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">สืบค้นข้อมูล</div>
    <table width="80%" class="center">
        <tr>
            <td align='right'>วันที่เริ่มต้น : </td>
            <td><input type='text' name='date_start_Joker' id='date_start_Joker' class='form-control datethai' value="<?php echo $dateTime->date_eng2thai($_GET['DStart'],543,'L','L'); ?>">
            <input type='hidden' name='date_start' id='date_start' value="<?php echo $_GET['DStart']; ?>"></td>
        </tr>
        <tr>
            <td align='right'>วันที่สิ้นสุด : </td>
            <td><input type='text' name='date_end_Joker' id='date_end_Joker' class='form-control datethai' value="<?php echo $dateTime->date_eng2thai($_GET['DEnd'],543,'L','L'); ?>">
            <input type='hidden' name='date_end' id='date_end' value="<?php echo $_GET['DEnd']; ?>"></td>
        </tr>
        <tr>
            <td align='right'>ประเภทอุปกรณ์ : </td>
            <td><input type='text' name='typeItem' id='typeItem' class='form-control' value="<?php echo $_GET['TItem'];?>"></td>
        </tr>
        <tr>
            <td align='right'>สาเหตุการละเมิด : </td>
            <td><input type='text' name='abuse' id='abuse' class='form-control' value="<?php echo $_GET['Abuse'];?>">
            </td>
        </tr>
        <tr>
            <td align='center' colspan="2"><br><button class="btn btn-default" onclick="submit_form()">ค้นหา</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-default" onclick="reset_form()">ยกเลิก</button></td>
        </tr>
    </table>
</div>
<script>
    function submit_form(){
        var DStart = $('#date_end').val();
        var DEnd = $('#date_end').val();
        var TItem = $('#typeItem').val();
        var Abuse = $('#abuse').val();
        parent.location.href="index.php?controller=reportEducate&fn=dashboard&DStart="+DStart+"&DEnd="+DEnd+"&TItem="+TItem+"&Abuse="+Abuse;
    }
    function reset_form(){
      var DStart = $('#date_start_Joker').val('');
        var DStart = $('#date_end').val('');
        var DEnd = $('#date_end_Joker').val('');
        var DEnd = $('#date_end').val('');
        var TItem = $('#typeItem').val('');
        var Abuse = $('#abuse').val('');
    }
</script>
