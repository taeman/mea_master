<?php
/**
* @comment controller สำหรับหน้าจอรายงานสารสนเทศ (dashboard)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.3
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
* @access 			public
* @created 			21/01/2016
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

# เรียกใช้ views report
include("views/report/dashboard.php");
?>