<?php
/**
 * @comment 		เพิ่มข้อมูลบุคลากร
 * @projectCode	57LIQ01
 * @tor
 * @package			core
 * @author			Pinya Thanagorntiraporn
 * @created			15/01/2016
 * @access			public
 */

?>
<script>
$('#myTab a').click(function (e) {
e.preventDefault()
$(this).tab('show')
});
$('#myTab a[href="#person"]').tab('show');
$('#myTab a[href="#mate"]').tab('show');
$('#myTab a[href="#father"]').tab('show');
$('#myTab a[href="#mother"]').tab('show');
</script>
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
            <table width="100%" border="0">
                <tr>
                    <td rowspan="4" class="col-sm-1"><img src="../../images/mea_hr/noimg.png" width="150" height="160" border="0" title=\"ยังไม่มีไฟล์รูปภาพ"></td>
                    <td class="col-sm-2 control-label right"><label class="control-label"><?php echo 'เลขประจำตัวประชาชน :'; ?></label></td>
                    <td class="col-sm-2 control-label"><label class="control-label"><?php echo $personData[0]->personalId; ?></label></td>
                    <td class="col-sm-2 control-label right"><label class="control-label"><?php echo 'ชื่อ - สกุล :'; ?></label></td>
                    <td class="col-sm-2 control-label"><label class="control-label"><?php echo $personData[0]->preName.$personData[0]->firstName.' '.$personData[0]->lastName ?></label></td>
                </tr>
                <tr>
                    <td class="col-sm-2 control-label right"><label class="control-label"><?php echo 'วัน เดือน ปี เกิด :'; ?></label></td>
                    <td class="col-sm-2 control-label"><label class="control-label"><?php echo $dateTime->date_eng2thai($personData[0]->birthDay,543,'L','L'); ?></label></td>
                    <td class="col-sm-2 control-label right"><label class="control-label"><?php echo 'สถานภาพ :'; ?></label></td>
                    <td class="col-sm-2 control-label"><label class="control-label"><?php echo $personData[0]->marryStatus; ?></label></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>
        <div class="form-group title"><?php echo 'ข้อมูลการทำงาน'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'รหัสพนักงาน :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $personData[0]->partyId; ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'ตำแหน่ง :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $personData[0]->position; ?></label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'แผนก :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $personData[0]->department; ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'กอง :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $personData[0]->division; ?></label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ฝ่าย :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $personData[0]->party; ?></label>

        <label class="col-sm-2 control-label right"><?php echo 'สถานะการทำงาน :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $personData[0]->workStatus; ?></label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ประเภทการทำงาน :'; ?></label>
        <label class="col-sm-3 control-label">
        <?php echo $personData[0]->employeeStatus; ?>
        </label>
        </div>
        <div class="form-group title"><?php echo 'สิทธิการเบิกค่ารักษาพยาบาล'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากที่อื่น :'; ?></label>
        <label class="col-sm-5 control-label">
        <?php echo $personData[0]->personEme; ?>
        </label>
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;">
        --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;"><strong><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากองค์การสุรา'; ?></strong></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo ' ค่ารักษา :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($personData[0]->emgoMedicalExpenses); ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'ค่าห้องพัก :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($personData[0]->emgoHospitalRoom); ?></label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ค่าอวัยวะเทียมและอุปกรณ์ในการบำบัดรักษา :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($personData[0]->emPrivateProsthesis); ?></label>

        <label class="col-sm-2 control-label right"><?php echo 'ประเภทอื่นๆ :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($personData[0]->emPrivateOther); ?></label>
        </div>
    </div>
    <?php ################################################################################################### ?>

    <div role="tabpanel" class="tab-pane" id="mate">
        <div class="form-group title"><?php echo 'ข้อมูลส่วนตัว'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'เลขประจำตัวประชาชน :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $mateData[0]->spouseId; ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'ชื่อ - สกุล :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $mateData[0]->preName.$mateData[0]->firstName.' '.$mateData[0]->lastName; ?> </label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'วัน เดือน ปี เกิด :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $dateTime->date_eng2thai($mateData[0]->birthDay,543,'L','L'); ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'ความสัมพันธ์ :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $mateData[0]->relation; ?></label>
        </div>
        <div class="form-group title"><?php echo 'ข้อมูลการทำงาน'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ตำแหน่ง :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $mateData[0]->spousePosition; ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'สังกัด :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $mateData[0]->spouseBelongTo; ?></label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ประเภทการทำงาน :'; ?></label>
        <label class="col-sm-3 control-label">
        <?php echo $mateData[0]->spouseEmployeeStatus; ?>
        </label>
        </div>
        <div class="form-group title"><?php echo 'สิทธิการเบิกค่ารักษาพยาบาล'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากที่อื่น :'; ?></label>
        <label class="col-sm-5 control-label">
         <?php echo $mateData[0]->spouseEme; ?>
        </label>
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;">
        --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;"><strong><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากองค์การสุรา'; ?></strong></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo ' ค่ารักษา :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($mateData[0]->emgoMedicalExpenses); ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'ค่าห้องพัก :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($mateData[0]->emgoHospitalRoom); ?></label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ค่าอวัยวะเทียมและอุปกรณ์ในการบำบัดรักษา :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($mateData[0]->emPrivateProsthesis); ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'ประเภทอื่นๆ :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($mateData[0]->emPrivateOther); ?></label>
        </div>
    </div>

    <?php ################################################################################################### ?>

    <div role="tabpanel" class="tab-pane" id="father">
        <div class="form-group title"><?php echo 'ข้อมูลส่วนตัว'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'เลขประจำตัวประชาชน :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $fatherData[0]->parentId; ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'ชื่อ - สกุล :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $fatherData[0]->preName.$fatherData[0]->firstName.' '.$fatherData[0]->lastName; ?></label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'วัน เดือน ปี เกิด :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $dateTime->date_eng2thai($fatherData[0]->birthDay,543,'L','L'); ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'ความสัมพันธ์ :'; ?></label>
        <label class="col-sm-3 control-label">บิดา</label>
        </div>
        <div class="form-group title"><?php echo 'สิทธิการเบิกค่ารักษาพยาบาล'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากที่อื่น :'; ?></label>
        <label class="col-sm-5 control-label">
        <?php  echo $fatherData[0]->fatherEme; ?>
        </label>
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;">
        --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;"><strong><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากองค์การสุรา'; ?></strong></div>
       <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo ' ค่ารักษา :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($fatherData[0]->emgoMedicalExpenses); ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'ค่าห้องพัก :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($fatherData[0]->emgoHospitalRoom); ?></label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ค่าอวัยวะเทียมและอุปกรณ์ในการบำบัดรักษา :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($fatherData[0]->emPrivateProsthesis); ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'ประเภทอื่นๆ :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($fatherData[0]->emPrivateOther); ?></label>
        </div>
    </div>

    <?php ################################################################################################### ?>

    <div role="tabpanel" class="tab-pane" id="mother">
        <div class="form-group title"><?php echo 'ข้อมูลส่วนตัว'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'เลขประจำตัวประชาชน :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $motherData[0]->parentId; ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'ชื่อ - สกุล :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $motherData[0]->preName.$motherData[0]->firstName.' '.$motherData[0]->lastName; ?></label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'วัน เดือน ปี เกิด :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo $dateTime->date_eng2thai($motherData[0]->birthDay,543,'L','L'); ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'ความสัมพันธ์ :'; ?></label>
        <label class="col-sm-3 control-label">มารดา</label>
        </div>
        <div class="form-group title"><?php echo 'สิทธิการเบิกค่ารักษาพยาบาล'; ?></div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากที่อื่น :'; ?></label>
        <label class="col-sm-5 control-label">
        <?php echo $motherData[0]->motherEme; ?>
        </label>
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;">
        --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        </div>
        <div class="form-group" style="padding-left:15px; color:#474747;"><strong><?php echo 'ได้รับสิทธิการเบิกค่ารักษาพยาบาลจากองค์การสุรา'; ?></strong></div>
       <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo ' ค่ารักษา :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($motherData[0]->emgoMedicalExpenses); ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'ค่าห้องพัก :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($motherData[0]->emgoHospitalRoom); ?></label>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label right"><?php echo 'ค่าอวัยวะเทียมและอุปกรณ์ในการบำบัดรักษา :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($motherData[0]->emPrivateProsthesis); ?></label>
        <label class="col-sm-2 control-label right"><?php echo 'ประเภทอื่นๆ :'; ?></label>
        <label class="col-sm-3 control-label"><?php echo number_format($motherData[0]->emPrivateOther); ?></label>
        </div>
    </div>

    <?php ################################################################################################### ?>

    <div role="tabpanel" class="tab-pane" id="child">
        <div style="float:left; width: 100%; height: auto; text-align: right; margin-bottom: 10px;">
            <a href="popup.php?controller=personal&fn=add_child"  class="popup" title="เพิ่มข้อมูลบุตร"><img src="../../images/mea_hr/icon-create.png" width="26" border="0"></a>
        </div>
        <table class="table" id="childTable">
        <thead>
            <tr>
                <th style="width:5%"><?php echo 'บุตรลำดับที่'; ?></th>
                <th style="width:5%"><?php echo 'แทนที่บุตรลำดับที่'; ?></th>
                <th class="col-md-1 text-center"><?php echo 'เลขประจำตัวประชาชน'; ?></th>
                <th class="col-md-2 text-center"><?php echo 'ชื่อ - สกุล'; ?></th>
                <th class="col-md-1 text-center"><?php echo 'วัน เดือน ปี เกิด'; ?></th>
                <th class="col-md-1 text-center"><?php echo 'สิทธิการเบิกค่ารักษาพยาบาลจากอื่น'; ?></th>
                <th class="col-md-2 text-center"><?php echo 'สถานภาพ'; ?></th>
                <th style="width: 3%"></th>
            </tr>
        </thead>
        <tbody>
        <?php if(count($childData) > 0){
        $cnt = 1;
        foreach($childData as $key => $value){
            $text_status = ($value->inregionChild == '1') ? 'Ⓧ เป็นบุตรจากการหย่า หรือคู่สมรสถึงแก่กรรม<br>' : '';
            $text_status .= ($value->patronizeChild == '1') ? 'Ⓧ เป็นบุตรจากการแยกกันอยู่โดยมิได้หย่า<br>' : '';
            $text_status .= ($value->disabledChild == '1') ? 'Ⓧ เป็นบุตรไร้ความสามารถ<br>' : '';
            $text_status .= ($value->deathChild == '1') ? 'Ⓧ เป็นบุตรที่ถึงแก่กรรม<br>' : '';
        ?>
            <tr id="row<?php echo $cnt?>" class="tr-link popup">
                <td align="center"><?php echo $value->childNo; ?></td>
                <td align="center"><?php echo $value->replaceChildNo; ?></td>
                <td align="center"><?php echo $value->childId; ?></td>
                <td><?php echo $value->preName.$value->firstName.' '.$value->lastName; ?></td>
                <td align="center"><?php echo $dateTime->date_eng2thai($value->birthDay,543,'L','L'); ?></td>
                <td align="center"><?php echo $value->childEme; ?></td>
                <td><?php echo $text_status; ?></td>
                <td align="center">
                    <img src="../../images/mea_hr/icon-delete.png" width="26" border="0" title="ลบข้อมูล" style="cursor:pointer;" onclick="">
                </td>
            </tr>
        <?php $cnt++;}} ?>
        </tbody>
        </table>
        <input type="hidden" id="cnt" value="<?php echo $cnt?>">
        <div class="popup"></div>
        <script type="text/javascript">
        $(document).ready(function() {
            $(".popup").fancybox({
                    'width': '80%',
                    'height': '80%',
                    'autoScale': false,
                    'autoSize': false,
                    'transitionIn': 'none',
                    'transitionOut': 'none',
                    'type': 'iframe',
                    'scrolling': 'no'
            });
        });
        </script>
    </div>
</div>
</div>
