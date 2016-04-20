<?php
/**
 * @comment         เพิ่มข้อมูลบุคลากร
 * @projectCode     57LIQ01
 * @tor
 * @package           core
 * @author             Pinya Thanagorntiraporn
 * @created            15/01/2016
 * @access              public
 */
?>
<form method="post" name="add_person" id="add_person" action="">
<script>
$('#myTab a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
});

$("#popup1").fancybox({
    'width': '30%',
    'height': '200px',
    'autoScale': false,
    'autoSize': false,
    'transitionIn': 'none',
    'transitionOut': 'none',
    'type': 'inline',
    'scrolling': 'no'
});

$('#myTab a[href="#person"]').tab('show');
$('#myTab a[href="#mate"]').tab('show');
$('#myTab a[href="#father"]').tab('show');
$('#myTab a[href="#mother"]').tab('show');

function saveData(){
    var error = 0;
    var error_text = '';
    if($.trim($('#personId').val()) == ''){
        error = 1;
        error_text += "Ⓧ ข้อมูลส่วนตัว (เลขประตัวประชาชน)<br>";
    }if($.trim($('#firstName').val()) == '' || $.trim($('#lastName').val()) == ''){
        error = 1;
        error_text += "Ⓧ ข้อมูลส่วนตัว (ชื่อ - นามสกุล)<br>";
    }if($.trim($('#partyId').val()) == ''){
        error = 1;
        error_text += "Ⓧ ข้อมูลส่วนตัว (รหัสพนักงาน)<br>";
    }if($.trim($('#position').val()) == ''){
        error = 1;
        error_text += "Ⓧ ข้อมูลส่วนตัว (ตำแหน่ง)<br>";
    }if(($.trim($('#spousefirstName').val()) == '' || $.trim($('#spouselastName').val()) == '') && $('#marryStatus').val() == 'สมรส'){
        error = 1;
        error_text += "Ⓧ ข้อมูลคู่สมรส (ชื่อ - นามสกุล)<br>";
    }if($.trim($('#fatherfirstName').val()) == '' || $.trim($('#fatherlastName').val()) == ''){
        error = 1;
        error_text += "Ⓧ ข้อมูลบิดา (ชื่อ - นามสกุล)<br>";
    }if($.trim($('#motherfirstName').val()) == '' || $.trim($('#motherlastName').val()) == ''){
        error = 1;
        error_text += "Ⓧ ข้อมูลมารดา (ชื่อ - นามสกุล)<br>";
    }

    if(error == 1){
        var showError = "<u>ตรวจพบการข้อมูลไม่สมบูรณ์</u><br>";
        showError += error_text;
        $('#warning').empty().append(showError);
        $("#popup1").trigger('click');
    }else{
        $('#setting_benefits').submit();
    }
}
</script>
<a href="#warning" id="popup1" style="display: none;">showWarning</a>
<div id="warning" style="display: none;">TEST</div>

<div class="row">
    <div class="col-md-12">
<div role="tabpanel">
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#person" aria-controls="person" role="tab"
    data-toggle="tab">ข้อมูลส่วนตัว</a></li>
    <li role="presentation"><a href="#mate" aria-controls="mate" role="tab"
    data-toggle="tab">คู่สมรส</a></li>
    <li role="presentation"><a href="#father" aria-controls="father" role="tab"
    data-toggle="tab">บิดา</a></li>
    <li role="presentation"><a href="#mother" aria-controls="mother" role="tab"
    data-toggle="tab">มารดา</a></li>
    <li role="presentation"><a href="#child" aria-controls="child" role="tab"
    data-toggle="tab">บุตร</a></li>
</ul>

<div class="tab-content" style="background:#FFF;">
    <div role="tabpanel" class="tab-pane active" id="person">
        <div class="form-group title"><?php echo 'ข้อมูลส่วนตัว'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'เลขประจำตัวประชาชน :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="personId" id="personId" value="<?php echo $personData[0]->personalId; ?>" maxlength="13">
        </label>
        <label class="col-md-2 control-label right"><?php echo 'ชื่อ - สกุล :'; ?></label>
        <label class="col-md-4 control-label">
            <input type="text" class="form-control" name="preName" id="preName" value="<?php echo $personData[0]->preName; ?>" style="width:20%; float:left; padding:5px;">
            <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo $personData[0]->firstName; ?>" style="width:30%; margin-left:10px; float:left;">
            <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo $personData[0]->lastName; ?>" style="width:43%; margin-left:10px; float:left;">
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'วัน เดือน ปี เกิด :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" name="birtday_person_Joker" id="birtday_person_Joker" value="<?php echo $dateTime->date_eng2thai($personData[0]->birthDay,543,'L','L')?>" class="form-control datethai" style="margin-right:10px;" />
            <input type="hidden" name="birtday_person" id="birtday_person" value="<?php echo $personData[0]->birthDay?>" />
        </label>
        <label class="col-md-2 control-label right"><?php echo 'เพศ :'; ?></label>
        <label class="col-md-1 control-label" style="padding-left:7px; padding-right:7px;">
            <select class="form-control" name="gender" id="gender" style="padding:0px;">
                <option value="M" <?php echo ($personData[0]->gender == 'M')?'selected':''; ?>>ชาย</option>
                <option value="F" <?php echo ($personData[0]->gender == 'F')?'selected':''; ?>>หญิง</option>
            </select>
        </label>
        <label class="col-md-1 control-label right" style="padding-left:0px; padding-right:0px;"><?php echo 'สถานภาพ :'; ?></label>
        <label class="col-md-2 control-label right">
            <select class="form-control" name="marryStatus" id="marryStatus" style="width:80%">
                <?php foreach($marry_status as $key => $value){?>
                <option value="<?php echo $key; ?>" <?php echo ($personData[0]->marryStatus == $key)?'selected':''; ?>><?php echo $value; ?></option>
                <?php } ?>
            </select>
        </label>
        </div>
        <div class="form-group title"><?php echo 'ข้อมูลการทำงาน'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'รหัสพนักงาน :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="partyId" id="partyId" value="<?php echo $personData[0]->partyId; ?>">
        </label>
        <label class="col-sm-2 control-label right"><?php echo 'ตำแหน่ง :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="position" id="position" value="<?php echo $personData[0]->position; ?>">
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'แผนก :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="department" id="department" value="<?php echo $personData[0]->department; ?>">
        </label>
        <label class="col-sm-2 control-label right"><?php echo 'กอง :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="division" id="division" value="<?php echo $personData[0]->division; ?>">
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ฝ่าย :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="party" id="party" value="<?php echo $personData[0]->party; ?>">
        </label>

        <label class="col-sm-2 control-label right"><?php echo 'สถานะการทำงาน :'; ?></label>
        <label class="col-sm-3 control-label">
            <select class="form-control" name="workStatus" id="workStatus">
                <?php foreach($work_status as $key => $value){?>
                <option value="<?php echo $key; ?>" <?php echo ($personData[0]->workStatus == $key)?'selected':''; ?>><?php echo $value; ?></option>
                <?php } ?>
            </select>
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ประเภทการทำงาน :'; ?></label>
        <label class="col-sm-3 control-label">
            <select class="form-control" name="employeeStatus" id="employeeStatus">
                <?php foreach($employee_status as $key => $value){?>
                <option value="<?php echo $key; ?>" <?php echo ($personData[0]->employeeStatus == $key)?'selected':''; ?>><?php echo $value; ?></option>
                <?php } ?>
            </select>
        </label>
        </div>
        <div class="form-group title"><?php echo 'สิทธิการเบิกค่ารักษาพยาบาล'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากที่อื่น :'; ?></label>
        <label class="col-sm-3 control-label">
            <select class="form-control" name="personEme" id="personEme">
                <?php foreach($person_eme as $key => $value){?>
                <option value="<?php echo $key; ?>" <?php echo ($personData[0]->personEme == $key)?'selected':''; ?>><?php echo $value; ?></option>
                <?php } ?>
            </select>
        </label>
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;">
        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;"><strong><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากองค์การสุรา'; ?></strong></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo ' ค่ารักษา :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="personemgoMedicalExpenses" id="personemgoMedicalExpenses" value="<?php echo ($personData[0]->emgoMedicalExpenses == '')?'กรมบัญชีกลาง':$personData[0]->emgoMedicalExpenses; ?>">
        </label>
        <label class="col-sm-2 control-label right"><?php echo 'ค่าห้องพัก :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="personemgoHospitalRoom"  id="personemgoHospitalRoom" value="<?php echo $personData[0]->emgoHospitalRoom; ?>">
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ค่าอวัยวะเทียมและอุปกรณ์ในการบำบัดรักษา :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="personemPrivateProsthesis" id="personemPrivateProsthesis" value="<?php echo ($personData[0]->emgoMedicalExpenses == '')?'กรมบัญชีกลาง':$personData[0]->emPrivateProsthesis; ?>">
        </label>

        <label class="col-sm-2 control-label right"><?php echo 'ประเภทอื่นๆ :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="personemPrivateOther" id="personemPrivateOther" value="<?php echo $personData[0]->emPrivateOther; ?>">
        </label>
        </div>
    </div>
    <?php ################################################################################################### ?>

    <div role="tabpanel" class="tab-pane" id="mate">
        <div class="form-group title"><?php echo 'ข้อมูลส่วนตัว'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'เลขประจำตัวประชาชน :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="spouseId" id="spouseId" value="<?php echo $mateData[0]->spouseId; ?>" maxlength="13">
        </label>
        <label class="col-md-2 control-label right"><?php echo 'ชื่อ - สกุล :'; ?></label>
        <label class="col-md-4 control-label">
            <input type="text" class="form-control" name="spousepreName" id="spousepreName" value="<?php echo $mateData[0]->preName; ?>" style="width:20%; float:left; padding:5px;">
            <input type="text" class="form-control" name="spousefirstName" id="spousefirstName" value="<?php echo $mateData[0]->firstName; ?>" style="width:30%; margin-left:10px; float:left;">
            <input type="text" class="form-control" name="spouselastName" id="spouselastName" value="<?php echo $mateData[0]->lastName; ?>" style="width:43%; margin-left:10px; float:left;">
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'วัน เดือน ปี เกิด :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" name="birthday_mate_Joker" id="birthday_mate_Joker" value="<?php echo $dateTime->date_eng2thai($mateData[0]->birthDay,543,'L','L')?>" class="form-control datethai" style="margin-right:10px;" />
            <input type="hidden" name="birthday_mate" id="birthday_mate" value="<?php echo $mateData[0]->birthDay; ?>" />
        </label>
        <label class="col-md-2 control-label right"><?php echo 'เพศ :'; ?></label>
        <label class="col-md-1 control-label" style="padding-left:7px; padding-right:7px;">
            <select class="form-control" name="spouseGender" id="spouseGender" style="padding:0px;">
                <option value="M" <?php echo ($mateData[0]->gender == 'M')?'selected':''; ?>>ชาย</option>
                <option value="F" <?php echo ($mateData[0]->gender == 'F')?'selected':''; ?>>หญิง</option>
            </select>
        </label>
        <label class="col-md-1 control-label right" style="padding-left:0px; padding-right:0px; width:10%;"><?php echo 'ความสัมพันธ์ :'; ?></label>
        <label class="col-md-2 control-label">
        <select class="form-control" name="spouserelation" id="spouserelation" style="width:80%;">
            <option value="H" <?php echo ($mateData[0]->relation == 'H')?'selected':''; ?>>สามี</option>
            <option value="W" <?php echo ($mateData[0]->relation == 'W')?'selected':''; ?>>ภรรยา</option>
        </select>
        </label>
        </div>
        <div class="form-group title"><?php echo 'ข้อมูลการทำงาน'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ตำแหน่ง :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="spousePosition" id="spousePosition" value="<?php echo $mateData[0]->spousePosition; ?>">
        </label>
        <label class="col-sm-2 control-label right"><?php echo 'สังกัด :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="spouseBelongTo" id="spouseBelongTo" value="<?php echo $mateData[0]->spouseBelongTo; ?>">
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ประเภทการทำงาน :'; ?></label>
        <label class="col-sm-3 control-label">
            <select class="form-control" name="spouseEmployeeStatus" id="spouseEmployeeStatus">
                <option value="">ไม่ระบุ</option>
                <?php foreach($employee_status as $key => $value){?>
                <option value="<?php echo $key; ?>" <?php echo ($mateData[0]->spouseEmployeeStatus == $key)?'selected':''; ?>><?php echo $value; ?></option>
                <?php } ?>
            </select>
        </label>
        </div>
        <div class="form-group title"><?php echo 'สิทธิการเบิกค่ารักษาพยาบาล'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากที่อื่น :'; ?></label>
        <label class="col-sm-3 control-label">
            <select class="form-control" name="spouseEme">
                <?php foreach($person_eme as $key => $value){?>
                <option value="<?php echo $key; ?>" <?php echo ($mateData[0]->spouseEme == $key)?'selected':''; ?>><?php echo $value; ?></option>
                <?php } ?>
            </select>
        </label>
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;">
        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;"><strong><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากองค์การสุรา'; ?></strong></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo ' ค่ารักษา :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" value="กรมบัญชีกลาง" name="spouseemgoMedicalExpenses" id="spouseemgoMedicalExpenses" value="<?php echo ($mateData[0]->emgoMedicalExpenses == '')?'กรมบัญชีกลาง':$mateData[0]->emgoMedicalExpenses; ?>">
        </label>

        <label class="col-sm-2 control-label right"><?php echo 'ค่าห้องพัก :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="spouseemgoHospitalRoom" id="spouseemgoHospitalRoom"  value="<?php echo $mateData[0]->emgoHospitalRoom; ?>">
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ค่าอวัยวะเทียมและอุปกรณ์ในการบำบัดรักษา :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" value="กรมบัญชีกลาง" name="spouseemPrivateProsthesis" id="spouseemPrivateProsthesis" value="<?php echo ($mateData[0]->emgoMedicalExpenses == '')?'กรมบัญชีกลาง':$mateData[0]->emPrivateProsthesis; ?>">
        </label>

        <label class="col-sm-2 control-label right"><?php echo 'ประเภทอื่นๆ :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="spouseemPrivateOther" id="spouseemPrivateOther"  value="<?php echo $mateData[0]->emPrivateOther; ?>">
        </label>
        </div>
    </div>

    <?php ################################################################################################### ?>

    <div role="tabpanel" class="tab-pane" id="father">
        <div class="form-group title"><?php echo 'ข้อมูลส่วนตัว'; ?></div>
        <?php #@modify by wised 04/08/2015 เพิ่มกรอกคำนำหน้าชื่อ?>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'เลขประจำตัวประชาชน :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="fatherId" id="fatherId" value="<?php echo $fatherData[0]->parentId; ?>" maxlength="13">
        </label>
        <label class="col-md-2 control-label right"><?php echo 'ชื่อ - สกุล :'; ?></label>
        <label class="col-md-4 control-label">
            <input type="text" class="form-control" name="fatherPrename" id="fatherPrename" value="<?php echo $fatherData[0]->preName; ?>" style="width:20%; float:left; padding:5px;">
            <input type="text" class="form-control" style="width:30%; margin-left:10px; float:left;" name="fatherfirstName" id="fatherfirstName" value="<?php echo $fatherData[0]->firstName; ?>">
            <input type="text" class="form-control" style="width:43%; margin-left:10px; float:left;" name="fatherlastName" id="fatherlastName" value="<?php echo $fatherData[0]->lastName; ?>">
        </label>
        </div>
        <?php #@end?>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'วัน เดือน ปี เกิด :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" name="birthday_father_Joker" id="birthday_father_Joker" value="<?php echo $dateTime->date_eng2thai($fatherData[0]->birthDay,543,'L','L')?>" class="form-control datethai" style="margin-right:10px;" />
            <input type="hidden" name="birthday_father" id="birthday_father" value="<?php echo $fatherData[0]->birthDay; ?>" />
        </label>
        <label class="col-sm-2 control-label right"><?php echo 'ความสัมพันธ์ :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="fatherrelation" id="fatherrelation" value="บิดา" readonly>
        </label>
        </div>

        <?php #@modify by wised 04/08/2015 เพิ่มการเลือกสถานะการมีชีวติของบิดา?>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'สถานะการมีชีวิต :'; ?></label>
        <label class="col-sm-2 control-label left" style="width:12%; padding-right:0px;">
            <input type="radio" name="fatheraliveStatus" value="1" <?php echo ($fatherData[0]->aliveStatus=='1'||$fatherData[0]->aliveStatus==''?' checked="checked" ':'') ?>>
            <?php echo '     มีชีวิตอยู่'; ?>
        </label>
        <label class="col-sm-2 control-label left" style="padding-left:0px;">
            <input type="radio" name="fatheraliveStatus" value="2" <?php echo ($fatherData[0]->aliveStatus=='2'?' checked="checked" ':'') ?>>
            <?php echo '     ถึงแก่กรรม'; ?>
        </label>
        </div>
        <?php //@end ?>
        <?php #@modify by wised 04/08/2015 เพิ่มตัวเลือก มีสิทธิ เบิกจากข้าราชการบำนาญ< ?>
        <div class="form-group title"><?php echo 'สิทธิการเบิกค่ารักษาพยาบาล'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากที่อื่น :'; ?></label>
        <label class="col-sm-3 control-label">
            <select class="form-control" name="fatherEme" id="fatherEme">
                <?php foreach($person_eme as $key => $value){?>
                <option value="<?php echo $key; ?>" <?php echo ($fatherData[0]->fatherEme == $key)?'selected':''; ?>><?php echo $value; ?></option>
                <?php } ?>
            </select>
        </label>
        </div>
        <?php //@end ?>
        <div class="form-group" style="padding-left:15px; color:#474747;">
        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;"><strong><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากองค์การสุรา'; ?></strong></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo ' ค่ารักษา :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" value="กรมบัญชีกลาง" name="fatheremgoMedicalExpenses" id="fatheremgoMedicalExpenses" value="<?php echo ($fatherData[0]->emgoMedicalExpenses == '')?'กรมบัญชีกลาง':$fatherData[0]->emgoMedicalExpenses; ?>">
        </label>
        <label class="col-sm-2 control-label right"><?php echo 'ค่าห้องพัก :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="fatheremgoHospitalRoom" id="fatheremgoHospitalRoom" value="<?php echo $fatherData[0]->emgoHospitalRoom; ?>">
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ค่าอวัยวะเทียมและอุปกรณ์ในการบำบัดรักษา :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" value="กรมบัญชีกลาง" name="fartheremPrivateProsthesis" id="fatheremPrivateProsthesis" value="<?php echo ($fatherData[0]->emgoMedicalExpenses == '')?'กรมบัญชีกลาง':$fatherData[0]->emPrivateProsthesis; ?>">
        </label>
        <label class="col-sm-2 control-label right"><?php echo 'ประเภทอื่นๆ :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="fatheremPrivateOther" id="fatheremPrivateOther" value="<?php echo $fatherData[0]->emPrivateOther; ?>">
        </label>
        </div>
    </div>

    <?php ################################################################################################### ?>

    <div role="tabpanel" class="tab-pane" id="mother">
        <?php $mother= $data_mother['HRMedicalBenefitParentVal'];?>
        <div class="form-group title"><?php echo 'ข้อมูลส่วนตัว'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'เลขประจำตัวประชาชน :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="motherId" id="motherId" value="<?php echo $motherData[0]->parentId; ?>" maxlength="13">
        </label>
        <?php #@modify by wised 04/08/2015 เพิ่มกรอกคำนำหน้าชื่อ?>
        <label class="col-md-2 control-label right"><?php echo 'ชื่อ - สกุล :'; ?></label>
        <label class="col-md-4 control-label">
            <input type="text" class="form-control" name="motherPrename" id="motherPrename" value="<?php echo $motherData[0]->preName; ?>" style="width:20%; float:left; padding:5px;">
            <input type="text" class="form-control" style="width:30%; margin-left:10px; float:left;" name="motherfirstName" id="motherfirstName" value="<?php echo $motherData[0]->firstName; ?>">
            <input type="text" class="form-control" style="width:43%; margin-left:10px; float:left;" name="motherlastName" id="motherlastName" value="<?php echo $motherData[0]->lastName; ?>">
        </label>
        <?php #@end ?>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'วัน เดือน ปี เกิด :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" name="birthday_mother_Joker" id="birthday_mother_Joker" value="<?php echo $dateTime->date_eng2thai($motherData[0]->birthDay,543,'L','L')?>" class="form-control datethai" style="margin-right:10px;" />
            <input type="hidden" name="birthday_mother" id="birthday_mother" value="<?php echo $motherData[0]->birthDay; ?>" />
        </label>
        <label class="col-sm-2 control-label right"><?php echo 'ความสัมพันธ์ :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="motherrelation" id="motherrelation" value="มารดา" readonly>
        </label>
        </div>
        <?php #@modify by wised 04/08/2015 เพิ่มการเลือกสถานะการมีชีวติของมารดา?>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'สถานะการมีชีวิต :'; ?></label>
        <label class="col-sm-2 control-label left" style="width:12%; padding-right:0px;">
            <input type="radio" name="motheraliveStatus" value="1" <?php echo ($motherData[0]->aliveStatus=='1'||$motherData[0]->aliveStatus==''?' checked="checked" ':'') ?>>
            <?php echo '     มีชีวิตอยู่'; ?>
        </label>
        <label class="col-sm-2 control-label left" style="padding-left:0px;">
            <input type="radio" name="motheraliveStatus" value="2" <?php echo ($motherData[0]->aliveStatus=='2'?' checked="checked" ':'') ?>>
            <?php echo '     ถึงแก่กรรม'; ?>
        </label>
        </div>
        <?php //@end ?>
        <?php #@modify by wised 04/08/2015 เพิ่มตัวเลือก มีสิทธิ เบิกจากข้าราชการบำนาญ< ?>
        <div class="form-group title"><?php echo 'สิทธิการเบิกค่ารักษาพยาบาล'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากที่อื่น :'; ?></label>
        <label class="col-sm-3 control-label">
            <select class="form-control" name="motherEme">
                <?php foreach($person_eme as $key => $value){?>
                <option value="<?php echo $key; ?>" <?php echo ($motherData[0]->motherEme == $key)?'selected':''; ?>><?php echo $value; ?></option>
                <?php } ?>
            </select>
        </label>
        </div>
        <?php //@end ?>
        <div class="form-group" style="padding-left:15px; color:#474747;">
        -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;"><strong><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากองค์การสุรา'; ?></strong></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo ' ค่ารักษา :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" value="กรมบัญชีกลาง" name="motheremgoMedicalExpenses" id="motheremgoMedicalExpenses" value="<?php echo ($motherData[0]->emgoMedicalExpenses == '')?'กรมบัญชีกลาง':$motherData[0]->emgoMedicalExpenses; ?>">
        </label>
        <label class="col-sm-2 control-label right"><?php echo 'ค่าห้องพัก :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="motheremgoHospitalRoom" id="motheremgoHospitalRoom" value="<?php echo $motherData[0]->emgoHospitalRoom; ?>">
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ค่าอวัยวะเทียมและอุปกรณ์ในการบำบัดรักษา :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" value="กรมบัญชีกลาง" name="motheremPrivateProsthesis" id="mothermotheremPrivateProsthesis" value="<?php echo ($motherData[0]->emgoMedicalExpenses == '')?'กรมบัญชีกลาง':$motherData[0]->emPrivateProsthesis; ?>">
        </label>
        <label class="col-sm-2 control-label right"><?php echo 'ประเภทอื่นๆ :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" name="motheremPrivateOther" id="motheremPrivateOther" value="<?php echo $motherData[0]->emPrivateOther; ?>">
        </label>
        </div>
    </div>

    <?php ################################################################################################### ?>

    <div role="tabpanel" class="tab-pane" id="child">
        สามารถเพิ่มข้อมูลหลักจากบันทึกข้อมูล "ประวัติส่วนตัว" "คู่สมรส" "บิดา" "มารดา" เสร็จ
    </div>
</div>
</div>
</div>
</div>
</form>
