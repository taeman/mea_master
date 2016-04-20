<?php
/**
* @comment controller บันทึกข้อมูลเครื่องราชอิสริยาภรณ์
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Wannapa Thongtawee (wannapa@sapphire.co.th)
* @access public
* @created 18/01/2016
*/

# เรียกใช้ models seminar
include("models/seminar.php");
$seminar = new Seminar();

# $main มาจากหน้า index.php class models/class.main.php
$personData = $main->getPersonData($_SESSION['idcard']);
$personData = json_decode($personData);
?>
<script src="../../common/mea_hr/js/seminar.js"></script>
<?
if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($personData);
	echo '</pre>';
}

# เรียกใช้ views royal
include("views/royal/form_keyin.php");
include("../../common/global/class/datepickerthai.php");
?>