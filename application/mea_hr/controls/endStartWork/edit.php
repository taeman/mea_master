<?php
/**
* @comment controller สำหรับหน้า dashboard ของระบบ ออกจากราชการและกลับเข้ารับราชการใหม่
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 18/01/2016
*/


# $main มาจากหน้า index.php class models/class.main.php
$personData = '{"id_card":"3149900251095",
	"prename_th":"นาย",
	"name_th":"กรมน",
	"surname_th":"ใหม่เอี่ยม"}';
	
$personData = json_decode($personData);

$salaryData = '[{"id":"1",
	"id_card":"3149900251095",
	"status_work":"0"},{"id":"2",
	"id_card":"3149900251095",
	"status_work":"0"},{"id":"3",
	"id_card":"3149900251095",
	"status_work":"1"},{"id":"4",
	"id_card":"3149900251095",
	"status_work":"2"}]';

$salaryData = json_decode($salaryData);

if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($personData);
	echo '<br>Salary Data :<br>';
	print_r($salaryData);
	echo '</pre>';
}
$status_work_check=0;
foreach($salaryData as $id => $detail){
	if($detail->id==$_GET['id']&&$detail->id_card==$_GET['idcard']){
		$status_work_check=$detail->status_work;
	}
}

# เรียกใช้ views
if($_GET['controller']!=""){
	include("views/endStartWork/edit.php");
}else{
	include("../../views/endStartWork/edit.php");
}
?>