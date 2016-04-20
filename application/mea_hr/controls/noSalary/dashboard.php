<?php
/**
* @comment controller สำหรับหน้า dashboard วันที่ไม่ได้รับเงินเดือนหรือได้รับเงินเดือนไม่เต็มขั้น ในเขตที่ได้มีการประกาศใช้กฎอัยการศึก
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Bussarawadee Manorach
* @access 			public
* @created 			19/01/2016
*/

# เรียกใช้ models seminar
include("models/seminar.php");
$seminar = new Seminar();

# $main มาจากหน้า index.php class models/class.main.php
$personData = $main->getPersonData($_SESSION['idcard']);
$personData = json_decode($personData);
if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($personData);
	echo '</pre>';
}

# เรียกใช้ views noSalary Dashboard
include("views/noSalary/dashboard.php");
?>