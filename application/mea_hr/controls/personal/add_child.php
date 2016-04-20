<?php
/**
* @comment controller สำหรับหน้า general
* @projectCode 57LIQ01
* @tor 3.2.4.2
* @package core
* @author Kiatisak Chansawang
* @access public
* @created 05/01/2016
*/

//$personData = $main->getPersonData($_SESSION['idcard']);
//$personData = json_decode($personData);
$marry_status=array('โสด','สมรส','หย่าร้าง','แยกกันอยู่','ม่าย');
$work_status=array('ปฏิบัติงาน','ลาออก','ให้ออก','เกษียณอายุ','เสียชีวิต');
$employee_status=array('เป็นพนักงานหรือลูกจ้างในรัฐวิสาหกิจ','เป็นข้าราชการหรือลูกจ้างปรระจำ','เป็นพนักงานในหน่วยงานราชการหรือราชการส่วนท้องถิ่น','ไม่ได้เป็นพนักงานรัฐวิสาหกิจ หรือหน่วยงานของทางราชการ');
$person_eme=array('ไม่มีสิทธิ','มีสิทธิ แต่ได้รับสิทธิที่ต่ำกว่า','เป็นผู้ใช้สิทธิเบิกค่ารักษาพยาบาลสำหรับบุตรแต่เพียงอย่างเดียว');
$child=array();
$child[0]['childNo'] = '1';
$child[0]['replaceChildNo'] = '2';
$child[0]['childId'] = '5909489580697';
$child[0]['preName'] = 'เด็กชาย';
$child[0]['firstName'] = 'สมใจ';
$child[0]['lastName'] = 'ใหม่เอี่ยม';
$child[0]['birthDay'] = '2014-04-09';
$child[0]['childEme'] = '2';
$child[0]['emeOption'] = '1';
$child[0]['inregionChild'] = '1';
$child[0]['patronizeChild'] = '1';
$child[0]['disabledChild'] = '1';
$child[0]['deathChild'] = '1';
$child[0]['emeComment'] = 'เป็นผู้ใช้สิทธิเบิกค่ารักษาพยาบาลสำหรับบุตรแต่เพียงอย่างเดียว';
$child[0]['emgoMedicalExpenses'] = '6000';
$child[0]['emgoHospitalRoom'] = '1000';
$child[0]['emPrivateProsthesis'] = '60000';
$child[0]['emPrivateOther'] = '2000';
$childData = json_encode($child);
$childData = json_decode($childData);
if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($childData);
	echo '</pre>';
}
include("../../common/global/class/datepickerthai.php");
include("views/personal/add_child.php");
?>
<script>
    $( document ).ready(function() {
        $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
        });
        $('#myTab a[href="#child"]').tab('show');
    });
    function checkDeathDate(){
        if($('#deathChild').is(':checked')){
            $('#death_calendar').css('display','');
        }else{
            $('#death_calendar').css('display','none');
            $('#death_date').val('');
            $('#hidden_death_date').val('');
        }
    }

    function checkEmeOption(value){
        if(value=='3'){
            $('#emeComment').prop('disabled','');
        }else{
            $('#emeComment').prop('disabled','disabled');
        }
    }

    function openOption(value){
        if(value != '0'){
            $(".emeOption").prop("disabled","");
            if( $('input[name=emeOption]:checked').val() == '3'){
                $("#emeComment").prop("disabled","");
            }else{
                $("#emeComment").prop("disabled","disabled");
            }
        }else{
            $(".emeOption").prop("disabled","disabled");
            $("#emeComment").prop("disabled","disabled");
        }
    }
</script>