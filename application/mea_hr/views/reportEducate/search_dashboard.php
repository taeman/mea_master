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
<div class="form-group <?php echo $classTitle ?>">สืบค้นข้อมูลคุณวุฒิการศึกษาของพนักงาน</div>
    <table width="100%">
        <tr>
            <td align='right'>รหัสพนักงาน : </td>
            <td><input type='text' name='id' id='id' class='form-control' value="<?php echo $_GET['id']; ?>"></td>
            <td align='right'>ชื่อ-สกุล : </td>
            <td><input type='text' name='name' id='name' class='form-control' value="<?php echo $_GET['name']; ?>"></td>
        </tr>
        <tr>
            <td align='right'>ตำแหน่ง : </td>
            <td><input type='text' name='position' id='position' class='form-control' value="<?php echo $_GET['position']; ?>"></td>
            <td align='right'>แผนก : </td>
            <td><input type='text' name='department' id='department' class='form-control' value="<?php echo $_GET['department']; ?>"></td>
        </tr>
        <tr>
            <td align='right'>กอง : </td>
            <td><input type='text' name='divition' id='divition' class='form-control' value="<?php echo $_GET['divition']; ?>"></td>
            <td align='right'>ฝ่าย : </td>
            <td><input type='text' name='party' id='party' class='form-control' value="<?php echo $_GET['party']; ?>"></td>
        </tr>
        <tr>
            <td align='right'>คุณวุฒิ : </td>
            <td><input type='text' name='education' id='education' class='form-control' value="<?php echo $_GET['education']; ?>"></td>
        </tr>
        <tr>
            <td align='center' colspan='4'><br><input type='button' value='ค้นหา' onclick="submit_form()"> | <input type='button' value='ล้างค่า' onclick="reset_form()"></td>
        </tr>
    </table>
</div>
<script>
    function submit_form(){
        var id = $('#id').val();
        var name = $('#name').val();
        var position = $('#position').val();
        var department = $('#department').val();
        var divition = $('#divition').val();
        var party = $('#party').val();
        var education = $('#education').val();
        parent.location.href="index.php?controller=reportEducate&fn=dashboard&id="+id+"&name="+name+"&position="+position+"&department="+department+"&divition="+divition+"&party="+party+"&education="+education;
    }
    function reset_form(){
        var id = $('#id').val('');
        var name = $('#name').val('');
        var position = $('#position').val('');
        var department = $('#department').val('');
        var divition = $('#divition').val('');
        var party = $('#party').val('');
        var education = $('#education').val('');
    }
</script>