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
$person = array();
$person[0]['personalId'] = '3149900251095';
$person[0]['preName'] = 'นาย';
$person[0]['firstName'] = 'กรมน';
$person[0]['lastName'] = 'ใหม่เอี่ยม';
$person[0]['birthDay'] = '1990-01-01';
$person[0]['marryStatus'] = $marry_status[0];
$person[0]['partyId'] = '56';
$person[0]['position'] = 'นักการตลาด 4';
$person[0]['department'] = 'แผนกการตลาดและลูกค้าสัมพันธ์';
$person[0]['division'] = 'กองการตลาดและจำหน่าย';
$person[0]['party'] = 'ฝ่ายบริหาร';
$person[0]['workStatus'] = $work_status[0];
$person[0]['employeeStatus'] = $employee_status[0];
$person[0]['personEme'] = $person_eme[0];
$person[0]['emgoMedicalExpenses'] = '10000';
$person[0]['emgoHospitalRoom'] = '2000';
$person[0]['emPrivateProsthesis'] = '50000';
$person[0]['emPrivateOther'] = '3000';
$personData = json_encode($person);
$personData = json_decode($personData);
$mate=array();
$mate[0]['spouseId'] = '9485093894875';
$mate[0]['preName'] = 'นาง';
$mate[0]['firstName'] = 'กลมร';
$mate[0]['lastName'] = 'ใหม่เอี่ยม';
$mate[0]['birthDay'] = '1991-03-03';
$mate[0]['relation'] = 'ภรรยา';
$mate[0]['spousePosition'] = 'เจ้าหน้าที่ธุรการ';
$mate[0]['spouseBelongTo'] = 'ธุรการ';
$mate[0]['spouseEmployeeStatus'] = $employee_status[1];
$mate[0]['spouseEme'] = $person_eme[1];
$mate[0]['emgoMedicalExpenses'] = '5000';
$mate[0]['emgoHospitalRoom'] = '2000';
$mate[0]['emPrivateProsthesis'] = '30000';
$mate[0]['emPrivateOther'] = '1000';
$mateData = json_encode($mate);
$mateData = json_decode($mateData);
$father=array();
$father[0]['parentId'] = '8495764837874';
$father[0]['preName'] = 'นาย';
$father[0]['firstName'] = 'สมปอง';
$father[0]['lastName'] = 'ใหม่เอี่ยม';
$father[0]['birthDay'] = '1960-05-06';
$father[0]['fatherEme'] = $person_eme[0];
$father[0]['emgoMedicalExpenses'] = '6000';
$father[0]['emgoHospitalRoom'] = '1000';
$father[0]['emPrivateProsthesis'] = '60000';
$father[0]['emPrivateOther'] = '2000';
$fatherData = json_encode($father);
$fatherData = json_decode($fatherData);
$mother=array();
$mother[0]['parentId'] = '8495764837874';
$mother[0]['preName'] = 'นาง';
$mother[0]['firstName'] = 'สมจิต';
$mother[0]['lastName'] = 'ใหม่เอี่ยม';
$mother[0]['birthDay'] = '1960-05-06';
$mother[0]['motherEme'] = $person_eme[1];
$mother[0]['emgoMedicalExpenses'] = '6000';
$mother[0]['emgoHospitalRoom'] = '1000';
$mother[0]['emPrivateProsthesis'] = '60000';
$mother[0]['emPrivateOther'] = '2000';
$motherData = json_encode($mother);
$motherData = json_decode($motherData);
$child=array();
$child[0]['childNo'] = '1';
$child[0]['replaceChildNo'] = '2';
$child[0]['childId'] = '5909489580697';
$child[0]['preName'] = 'เด็กชาย';
$child[0]['firstName'] = 'สมใจ';
$child[0]['lastName'] = 'ใหม่เอี่ยม';
$child[0]['birthDay'] = '2014-04-09';
$child[0]['childEme'] = $person_eme[0];
$child[0]['inregionChild'] = '1';
$child[0]['patronizeChild'] = '1';
$child[0]['disabledChild'] = '1';
$child[0]['deathChild'] = '1';
$childData = json_encode($child);
$childData = json_decode($childData);
if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($childData);
	echo '</pre>';
}

include("views/personal/general.php");
?>