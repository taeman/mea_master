<?php
/**
* @comment controller สำหรับหน้า dashboard ของระบบ แนบไฟล์เอกสารหลักฐาน
* @projectCode 57LIQ01
* @tor 3.2.4.2.1.2
* @package core
* @author Amata Kongsaingern
* @access public
* @created 21/01/2016
*/

# $main มาจากหน้า index.php class models/class.main.php
$personData = '{"id_card":"3149900251095",
	"prename_th":"นาย",
	"name_th":"กรมน",
	"surname_th":"ใหม่เอี่ยม",
	"position":"นักการตลาด 4",
	"department":"แผนกการตลาด"}';
	
$personData = json_decode($personData);

$fileData = '[{"id":"1",
	"id_card":"3149900251095",
	"date_upload":"2016-01-21",
	"type_upload":"1",
	"comment":"เนื่องจากเปลี่ยนนามสกุลและได้ทำบัตรประจำตัวประชาชนใหม่",
	"file_name":"3149900251095_idcard_21012559_0.pdf"},{"id":"2",
	"id_card":"3149900251095",
	"date_upload":"2015-03-15",
	"type_upload":"1",
	"comment":"เอกสารสำเนาบัตรประจำตัวประชาชนที่ใช้ในการสมัครงาน",
	"file_name":"3149900251095_idcard_15032558_0.pdf"},{"id":"3",
	"id_card":"3149900251095",
	"date_upload":"2015-03-15",
	"type_upload":"2",
	"comment":"เอกสารสำเนาทะเบียนบ้านที่ใช้ในการสมัครงาน",
	"file_name":"3149900251095_home_15032558_0.pdf"},{"id":"4",
	"id_card":"3149900251095",
	"date_upload":"2016-05-18",
	"type_upload":"3",
	"comment":"เอกสารสำเนาวุฒิการศึกษาระดับปริญญาโทที่ใช้ในการเลือนระดับ",
	"file_name":"3149900251095_education_18052559_3.pdf"},{"id":"5",
	"id_card":"3149900251095",
	"date_upload":"2015-03-15",
	"type_upload":"3",
	"comment":"เอกสารสำเนาวุฒิการศึกษาระดับปริญญาตรีที่ใช้ในการสมัครงาน",
	"file_name":"3149900251095_education_15032558_2.pdf"},{"id":"6",
	"id_card":"3149900251095",
	"date_upload":"2015-03-15",
	"type_upload":"3",
	"comment":"เอกสารสำเนาวุฒิการศึกษาระดับมัถยมศึกษาตอนปลายที่ใช้ในการสมัครงาน",
	"file_name":"3149900251095_education_15032558_1.pdf"},{"id":"7",
	"id_card":"3149900251095",
	"date_upload":"2015-03-15",
	"type_upload":"3",
	"comment":"เอกสารสำเนาวุฒิการศึกษาระดับมัถยมศึกษาตอนต้นที่ใช้ในการสมัครงาน",
	"file_name":"3149900251095_education_15032558_0.pdf"},{"id":"8",
	"id_card":"3149900251095",
	"date_upload":"2015-03-15",
	"type_upload":"4",
	"comment":"เอกสารใบสมัครที่ใช้ในการสมัครงาน",
	"file_name":"3149900251095_register_15032558_0.pdf"},{"id":"9",
	"id_card":"3149900251095",
	"date_upload":"2015-03-15",
	"type_upload":"5",
	"comment":"เอกสารผลการตรวจพิสูจน์ลายนิ้วมือที่ใช้ในการสมัครงาน",
	"file_name":"3149900251095_results_15032558_0.pdf"},{"id":"10",
	"id_card":"3149900251095",
	"date_upload":"2015-03-15",
	"type_upload":"6",
	"comment":"เอกสารคำสั่งที่ใช้ในการเลื่อนระดับ",
	"file_name":"3149900251095_order_15032558_0.pdf"},{"id":"11",
	"id_card":"3149900251095",
	"date_upload":"2015-08-01",
	"type_upload":"6",
	"comment":"เอกสารคำสั่งที่ใช้ในการบรรจุเป็นพนักงานประจำ",
	"file_name":"3149900251095_order_01082558_0.pdf"},{"id":"12",
	"id_card":"3149900251095",
	"date_upload":"2015-08-01",
	"type_upload":"7",
	"comment":"เอกสารสัญญาจ้างที่ใช้ในการสมัครเป็นพนักงานประจำ",
	"file_name":"3149900251095_contract_01082558_0.pdf"},{"id":"13",
	"id_card":"3149900251095",
	"date_upload":"2015-03-15",
	"type_upload":"7",
	"comment":"เอกสารสัญญาจ้างที่ใช้ในการสมัครงาน",
	"file_name":"3149900251095_contract_15032558_0.pdf"},{"id":"14",
	"id_card":"3149900251095",
	"date_upload":"2016-01-21",
	"type_upload":"8",
	"comment":"เอกสารใบสำคัญเปลี่ยนชื่อเนื่องจากมีการเปลี่ยนชื่อสกุล",
	"file_name":"3149900251095_other_21012559_0.pdf"},{"id":"15",
	"id_card":"3149900251095",
	"date_upload":"2015-03-15",
	"type_upload":"8",
	"comment":"เอกสารใบ ส.ด.๘ ที่ใช้ในการสมัครงาน",
	"file_name":"3149900251095_other_15032558_2.pdf"},{"id":"16",
	"id_card":"3149900251095",
	"date_upload":"2015-03-15",
	"type_upload":"8",
	"comment":"เอกสารใบสำคัญเปลี่ยนชื่อที่ใช้ในการสมัครงาน",
	"file_name":"3149900251095_other_15032558_1.pdf"},{"id":"17",
	"id_card":"3149900251095",
	"date_upload":"2015-03-15",
	"type_upload":"8",
	"comment":"เอกสารใบสำคัญเปลี่ยนชื่อสกุลที่ใช้ในการสมัครงาน",
	"file_name":"3149900251095_other_15032558_0.pdf"}]';

$fileData = json_decode($fileData);

$amountFileData = '{"id_card":"3149900251095",
			"amount_file_idcard":"2",
			"amount_file_home":"1",
			"amount_file_education":"4",
			"amount_file_register":"1",
			"amount_file_results":"1",
			"amount_file_order":"2",
			"amount_file_contract":"2",
			"amount_file_other":"4",
			"amount_file_sum":"17"}';

$amountFileData = json_decode($amountFileData);

$fileType = array();
$fileType[1]="สำเนาบัตรประจำตัวประชาชน";
$fileType[2]="สำเนาทะเบียนบ้าน";
$fileType[3]="สำเนาวุฒิการศึกษา";
$fileType[4]="ใบสมัคร";
$fileType[5]="ผลการตรวจพิสูจน์ลายนิ้วมือ";
$fileType[6]="คำสั่ง";
$fileType[7]="สัญญาจ้าง";
$fileType[8]="อื่น ๆ";

if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($personData);
	echo '<br>Salary Data :<br>';
	print_r($salaryData);
	echo '</pre>';
}

# เรียกใช้ views seminar
include("views/attachment/dashboard.php");
?>