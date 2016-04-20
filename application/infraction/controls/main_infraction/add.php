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
	$data['fullName'] = 'นายมงคล ศรีสุข';
	$data['infraction'] = 'ละเมิดการใช้ไฟฟ้า';
	$data['place'] = 'เขตบางเขน';
	$data['photo']['0'] = 'infraction1.jpg';
	$data['photo']['1'] = 'infraction2.jpg';
	$data['uploadFile']['0'] = 'infraction1.pdf';
	$data['uploadFile']['1'] = 'infraction2.pdf';
	$data['infractionDate'] = '18 เมษายน 2559';
	$data['department'] = '0';
	$data['status'] = '0';
	$data['deviceType'] = '0';
	$data['latitude'] = '51.5 องศาเหนือ';
	$data['longitude'] = '47.45 องศาตะวันออก';
	$data['email'] = '1';
	$data['sms'] = '1';
	$data['notificationDate'] = '18 เมษายน 2559';
	$data['notificationDateTo'] = '19 เมษายน 2559';
	$data['frequency'] = '1';
}
include("../../common/global/class/datepickerthai.php");
include("views/main_infraction/add.php");
?>