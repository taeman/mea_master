<?
/**
* @comment controller สำหรับหน้า main_hr
* @projectCode 57LIQ01
* @tor 3.2.4.1
* @package core
* @author Pinya Thanagorntiraporn
* @access public
* @created 12/01/2016
*/
$salutation = array('นาย','นาง','นางสาว');
$department = array('การไฟฟ้านครหลวง');
$status = array('ระหว่างการตรวจสอบ','ดำเนินการแจ้งปรับ','ส่งรายละเอียดค่าเสียหายให้ ฝบก.','ดำเนินการเสร็จสิ้น');
$deviceType = array('เสาโคมไฟฟ้า');

$data = array();
if($_GET['id']=='1'){
	$data['ruleName'] = 'ข้อบังคับว่าด้วยการใช้ไฟฟ้าของผู้อื่น';
	$data['ruleDetail'] = 'การละเมิดการใช้ไฟฟ้าของผู้อื่นมีโทษปรับไม่เกิน 20,000 บาท หรือ จำคุกไม่เกิน 2 ปี หรือทั้งจำทั้งปรับ';
	$data['uploadFile']['0'] = 'rule1.pdf';
	$data['uploadFile']['1'] = 'rule2.pdf';
}
include("views/main_infraction/add_rule.php");
?>