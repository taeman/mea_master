<?php
/**
* @comment controller สำหรับหน้า dashboard ของ salary
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 15/01/2016
*/

# เรียกใช้ models seminar
include("models/seminar.php");
$seminar = new Seminar();

# $main มาจากหน้า index.php class models/class.main.php
$personData = '{"id_card":"3149900251095",
	"prename_th":"นาย",
	"name_th":"กรมน",
	"surname_th":"ใหม่เอี่ยม"}';
	
$personData = json_decode($personData);

$salaryData = '[{"id":"1",
	"id_card":"3149900251095",
	"date_active":"2011-03-30",
	"position":"100203",
	"id_employee":"56",
	"salary":"15,000",
	"ref_doc":"เลื่อนขั้นเงินเดือนตามคำสั่งที่ 1678/2554",
	"down_on":"0",
	"down_on_other":"",
	"down_date_on":"1",
	"down_date":"",
	"comment":"-"},{"id":"2",
	"id_card":"3149900251095",
	"date_active":"2013-03-25",
	"position":"100204",
	"id_employee":"56",
	"salary":"18,000",
	"ref_doc":"เลื่อนขั้นเงินเดือนตามคำสั่งที่ 2413/2556 ",
	"down_on":"1",
	"down_on_other":"",
	"down_date_on":"2",
	"down_date":"2013-07-30",
	"comment":"-"}]';

$salaryData = json_decode($salaryData);

$positionData = array();
$positionData[100201]="นักการตลาด 1";
$positionData[100202]="นักการตลาด 2";
$positionData[100203]="นักการตลาด 3";
$positionData[100204]="นักการตลาด 4";
$positionData[100205]="นักการตลาด 5";

$downData = array();
$downData[0] = "ลว.";
$downData[1] = "สั่ง";
$downData[2] = "อื่นๆ";


if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($personData);
	echo '<br>Salary Data :<br>';
	print_r($salaryData);
	echo '</pre>';
}

# เรียกใช้ views seminar
include("views/salary/dashboard.php");
?>