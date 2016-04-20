<?php
/**
 * @comment 		เพิ่มข้อมูลบุคลากร
 * @projectCode	57LIQ01
 * @tor
 * @package			core
 * @author			Pinya Thanagorntiraporn
 * @created			16/01/2016
 * @access			public
 */
?>
<form method="post" name="add_child" id="add_child" action="">
<a href="#warning" id="popup1" style="display: none;">showWarning</a>
<div id="warning" style="display: none;">TEST</div>

<div role="tabpanel">
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#person" aria-controls="child" role="tab"
    data-toggle="tab">เพิ่มข้อมูลบุตร</a></li>
</ul>
<?php $data = $data_child['HRMedicalBenefitChildVal'];?>
<div class="tab-content" style="background:#FFF;">
    <div role="tabpanel" class="tab-pane active" id="child">
        <div class="form-group title"><?php echo 'ข้อมูลส่วนตัว'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'เลขประจำตัวประชาชน<font style="color:red; font-weight:bold;">*</font> :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" id="parentId" name="parentId" value="<?php echo $childData[0]->childId;?>">
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ชื่อ - สกุล<font style="color:red; font-weight:bold;">*</font> :'; ?></label>
        <label class="col-sm-8 control-label">
            <input type="text" class="form-control" style="width:20%; float:left;" id="childPrename" name="childPrename" value="<?php echo $childData[0]->preName; ?>">
            <input type="text" class="form-control" style="width:30%; margin-left:14px; float:left;" id="childFirstname" name="childFirstname" value="<?php echo $childData[0]->firstName; ?>">
            <input type="text" class="form-control" style="width:43%; margin-left:14px; float:left;" id="childLastname" name="childLastname" value="<?php echo $childData[0]->lastName; ?>">
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'เพศ :'; ?></label>
        <label class="col-sm-3 control-label">
            <select class="form-control" name="childGender" id="childGender" style="padding:0px; width:40%">
                <option value="M" <?php echo ($childData[0]->gender == 'M')?'selected':''; ?>>ชาย</option>
                <option value="F" <?php echo ($childData[0]->gender == 'F')?'selected':''; ?>>หญิง</option>
            </select>

        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'วัน เดือน ปี เกิด<font style="color:red; font-weight:bold;">*</font> :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" name="birthday_person_Joker" id="birthday_person_Joker" value="<?php echo $dateTime->date_eng2thai($childData[0]->birthDay,543,'L','L'); ?>" class="form-control datethai" style="margin-right:10px;" />
            <input type="hidden" name="birthday_person" id="birthday_person" value="<?php echo $childData[0]->birthDay; ?>" />
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'เป็นบุตรลำดับที่ :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" id="childNo" name="childNo" value="<?php echo $childData[0]->childNo; ?>">
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'แทนที่บุตรลำดับที่ :'; ?></label>
        <label class="col-sm-3 control-label">
            <input type="text" class="form-control" id="replaceChildNo" name="replaceChildNo" value="<?php echo $childData[0]->replaceChildNo; ?>">
        </label>
        </div>
        <div class="form-group title"><?php echo 'ข้อมูลสถานภาพ'; ?></div>
        <div class="form-group">
        <label class="col-sm-10 control-label" style="text-align: left;">
            <input type="checkbox" id="inregionChild" name="inregionChild" value="1" <?php echo ($childData[0]->inregionChild == '1')?'checked':''; ?>>
            เป็นบุตรที่อยู่ในความปกครองของข้าพเจ้า โดยการหย่าหรือมิได้สมรสตามกฏหมาย หรือคู่สมรสถึงแก่กรรมหรือไม่
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-10 control-label" style="text-align: left;">
            <input type="checkbox" id="patronizeChild" name="patronizeChild" value="1" <?php echo ($childData[0]->patronizeChild == '1')?'checked':''; ?>>
            บุตรอยู่ในความอุปการะเลี้ยงดูของข้าพเจ้า เนื่องจากแยกกันอยู่โดยมิได้หย่าตามกฏหมาย
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-10 control-label" style="text-align: left;">
            <input type="checkbox" id="disabledChild" name="disabledChild" value="1" <?php echo ($childData[0]->disabledChild == '1')?'checked':''; ?>>
            เป็นบุตรไร้ความสามารถ หรือเสมือนไร้ความสามารถหรือไม่
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-6 control-label" style="text-align: left;">
            <input type="checkbox" onclick="checkDeathDate();" id="deathChild" name="deathChild" value="1" <?php echo ($childData[0]->deathChild == '1')?'checked':''; ?>>
            ถึงแก่กรรมหรือไม่
        </label>
        </div>
        <div class="form-group" id="death_calendar" style="display:<?php echo ($childData[0]->deathDate != '')?'':'none'; ?>;">
            <label class="col-sm-6 control-label" style="text-align: left;">
            <?php echo 'วันที่ถึงแก่กรรม :'; ?>&nbsp;&nbsp;
            <input type="text" name="death_date_Joker" id="death_date_Joker" value="<?php echo $dateTime->date_eng2thai($childData[0]->deathDay,543,'L','L')?>" class="form-control datethai" style="margin-right:10px;" />
            <input type="hidden" name="death_date" id="death_date" value="<?php echo $childData[0]->deathDay; ?>" />
            </label>
        </div>
        <div class="form-group title"><?php echo 'สิทธิการเบิกค่ารักษาพยาบาล'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากที่อื่น :'; ?></label>
        <label class="col-sm-3 control-label">
             <select class="form-control" name="childEme" id="childEme" onchange="openOption(this.value)">
                <?php foreach($person_eme as $key => $value){?>
                <option value="<?php echo $key; ?>" <?php echo ($childData[0]->childEme == $key)?'selected':''; ?>><?php echo $value; ?></option>
                <?php } ?>
            </select>
        </label>
        </div>
        <?php
            $disabled = ' disabled="disabled" ';
            if( $childData[0]->childEme == '1' || $childData[0]->childEme == '2'){
                $disabled = '';
            }else{
                $disabled = ' disabled="disabled" ';
            }
         ?>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'โดยใช้สิทธิของ :'; ?></label>
        <label class="col-sm-2 control-label left" style="width:12%; padding-right:0px;">
            <input type="radio" class="emeOption" name="emeOption" value="1" <?php echo $disabled; ?> <?php echo ($childData[0]->emeOption=='1'?' checked="checked" ':'') ?> onclick="checkEmeOption(this.value)">
            <?php echo '     บิดา'; ?>
        </label>
        <label class="col-sm-2 control-label left" style="width:12%; padding-left:0px; padding-right:0px;">
            <input type="radio" class="emeOption" name="emeOption" value="2" <?php echo $disabled; ?> <?php echo ($childData[0]->emeOption=='2'?' checked="checked" ':'') ?> onclick="checkEmeOption(this.value)">
            <?php echo '     มารดา'; ?>
        </label>
        <label class="col-md-2 control-label left" style="padding-left:0px; padding-right:0px;">
            <input type="radio" class="emeOption" name="emeOption" value="3" <?php echo $disabled; ?> <?php echo ($childData[0]->emeOption=='3'?' checked="checked" ':'') ?> onclick="checkEmeOption(this.value)">
            <?php echo '     อื่นๆระบุ     '; ?>
        </label>
        <?php
            $disabledComment = "";
            if( $childData[0]->childEme == '1' || $childData[0]->childEme == '2'){
                if( $childData[0]->emeOption != '3' ){
                    $disabledComment = ' disabled="disabled" ';
                }
            }else{
                $disabledComment = ' disabled="disabled" ';
            }
         ?>
        <label class="col-md-10 control-label right" style="padding-left:5px; ">
            <input type="text" class="form-control" name="emeComment"  id="emeComment" value="<?php echo $childData[0]->emeComment; ?>" style="width:50%; padding:0px;" <?php echo $disabledComment;?> >
        </label>
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;">
        --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;"><strong><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากองค์การสุรา'; ?></strong></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo ' ค่ารักษา :'; ?></label>
        <label class="col-sm-3 control-label">
        <input type="text" class="form-control" name="childemgoMedicalExpenses" id="childemgoMedicalExpenses" value="<?php echo ($childData[0]->emgoMedicalExpenses == '')?'กรมบัญชีกลาง':$childData[0]->emgoMedicalExpenses; ?>">
        </label>
        <label class="col-sm-2 control-label right"><?php echo 'ค่าห้องพัก :'; ?></label>
        <label class="col-sm-3 control-label">
        <input type="text" class="form-control" name="childemgoHospitalRoom" id="childemgoHospitalRoom" value="<?php echo $childData[0]->emgoHospitalRoom; ?>">
        </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ค่าอวัยวะเทียมและอุปกรณ์ในการบำบัดรักษา :'; ?></label>
        <label class="col-sm-3 control-label">
        <input type="text" class="form-control" name="childemPrivateProsthesis" id="childemPrivateProsthesis" value="<?php echo ($childData[0]->emgoMedicalExpenses == '')?'กรมบัญชีกลาง':$childData[0]->emPrivateProsthesis; ?>">
        </label>

        <label class="col-sm-2 control-label right"><?php echo 'ประเภทอื่นๆ :'; ?></label>
        <label class="col-sm-3 control-label">
        <input type="text" class="form-control" name="childemPrivateOther" id="childemPrivateOther" value="<?php echo $childData[0]->emPrivateOther; ?>">
        </label>
        </div>
        <div class="form-group" style="padding-left: 45%; margin-top: 15px;">
            <input type="submit" name="submit" id="submit" value="บันทึก">&nbsp;&nbsp;
            <input type="reset" name="reset" id="reset" value="ยกเลิก">
        </div>
    </div>
</div>
</div>
</form>
