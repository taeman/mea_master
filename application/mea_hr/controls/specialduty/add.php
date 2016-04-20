<?php
/**
* @comment controller สำหรับหน้า dashboard ของระบบ การปฏิบัติราชการพิเศษ
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 19/01/2016
*/

# $main มาจากหน้า index.php class models/class.main.php
$personData = '{"id_card":"3149900251095",
	"prename_th":"นาย",
	"name_th":"กรมน",
	"surname_th":"ใหม่เอี่ยม"}';
	
$personData = json_decode($personData);

if($_GET['runid']=="1"){
$specialdutyData = '{"id":"1",
	"id_card":"3149900251095",
	"comment":"ระหว่างประกาศใช้กฎอัยการศึก",
	"date_start":"2011-03-30",
	"date_end":"2011-05-30",
	"sd_year":"2554",
	"type":"1",
	"sick":"3",
	"mission":"5"}';
}else if($_GET['runid']=="2"){
$specialdutyData = '{"id":"2",
	"id_card":"3149900251095",
	"comment":"ระหว่างประกาศใช้กฎอัยการศึก",
	"date_start":"2012-03-30",
	"date_end":"",
	"sd_year":"2555",
	"type":"1",
	"sick":"7",
	"mission":"2"}';
}else if($_GET['runid']=="3"){
$specialdutyData = '{"id":"3",
	"id_card":"3149900251095",
	"comment":"ระหว่างประกาศใช้กฎอัยการศึก",
	"date_start":"2013-05-30",
	"date_end":"2013-08-30",
	"sd_year":"2556",
	"type":"2",
	"sick":"1",
	"mission":""}';
}
$specialdutyData = json_decode($specialdutyData);

if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($personData);
	echo '<br>Salary Data :<br>';
	print_r($salaryData);
	echo '</pre>';
}

# เรียกใช้ views seminar
include("views/specialduty/add.php");
include("../../common/global/class/datepickerthai.php");
?>