<?php
/**
* @comment ajax สำหรับบันทึกข้อมูลจาก controller : seminar/function : form_keyin
* @projectCode 57LIQ01
* @tor 3.2.4.2
* @package core
* @author Kiatisak Chansawang
* @access public
* @created 07/01/2016
*/
header('Content-Type: text/html; charset=utf-8');
include("../../../config/db_define.php"); # define ค่าฐานข้อมูล
include("../../../config/class.condb.php"); # เชื่อมต่อฐานข้อมูล
include("../../global/class/class.sql.php"); # class สำหรับ insert update delete
$db = new DBConnection();
$intoDB = new sqlDB();


$fieldData = json_decode($_POST['data']);
echo $intoDB->delete(DB_HR,'seminar',$fieldData);
?>