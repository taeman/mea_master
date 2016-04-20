<?php
/**
* @comment controller หน้า dashboard บริหารจัดการข้อมูลการกระทำการละเมิด
* @projectCode PS58MKT
* @tor 1.2.1
* @package core
* @author Wannapa Thongtawee
* @access public
* @created 18/04/2016
*/
# เรียกใช้ views dashboard
$arrData=array();
$arrData[0][infraction_date] = '11 กุมภาพันธ์ุ 2559';
$arrData[0][infraction_name] = 'นายมงคล ศรีสุข';
$arrData[0][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[0][infraction_place] = 'จังหวัดกรุงเทพมหานคร';
$arrData[0][infraction_institution] = 'การไฟฟ้านครหลวง';
$arrData[0][infraction_status] = 'กำลังตรวจสอบ';
$arrData[0][infraction_notification] = 'วันละครั้ง';

$arrData[1][infraction_date] = '15 กุมภาพันธ์ุ 2559';
$arrData[1][infraction_name] = 'นายสมจิต สมใจ';
$arrData[1][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[1][infraction_place] = 'จังหวัดเชียงใหม่';
$arrData[1][infraction_institution] = 'การไฟฟ้าส่วนภูมิภาค เขต 1';
$arrData[1][infraction_status] = 'กำลังตรวจสอบ';
$arrData[1][infraction_notification] = 'วันละครั้ง';

$arrData[2][infraction_date] = '13 กุมภาพันธ์ุ 2559';
$arrData[2][infraction_name] = 'นายกิตติกร แซ่โหว';
$arrData[2][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[2][infraction_place] = 'จังหวัดนครปฐม';
$arrData[2][infraction_institution] = 'การไฟฟ้าส่วนภูมิภาค เขต 2';
$arrData[2][infraction_status] = 'กำลังตรวจสอบ';
$arrData[2][infraction_notification] = 'วันละครั้ง';

$arrData[3][infraction_date] = '18 มีนาคม 2559';
$arrData[3][infraction_name] = 'นางอรทัย หงษ์แก้ว';
$arrData[3][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[3][infraction_place] = 'จังหวัดยะลา';
$arrData[3][infraction_institution] = 'การไฟฟ้าส่วนภูมิภาค เขต 3';
$arrData[3][infraction_status] = 'กำลังตรวจสอบ';
$arrData[3][infraction_notification] = 'วันละครั้ง';

$arrData[4][infraction_date] = '18 มีนาคม 2559';
$arrData[4][infraction_name] = 'นางอิ่มใจ สุขเอม';
$arrData[4][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[4][infraction_place] = 'จังหวัดกรุงเทพมหานคร';
$arrData[4][infraction_institution] = 'การไฟฟ้านครหลวง';
$arrData[4][infraction_status] = 'กำลังตรวจสอบ';
$arrData[4][infraction_notification] = 'วันละครั้ง';
$json = json_encode($arrData);
$tdList = json_decode($json);
$status = array('ระหว่างการตรวจสอบ','ดำเนินการแจ้งปรับ','ส่งรายละเอียดค่าเสียหายให้ ฝบก.','ดำเนินการเสร็จสิ้น');
include("../../common/global/class/datepickerthai.php");
include("views/main_infraction/dashboard.php");
?>