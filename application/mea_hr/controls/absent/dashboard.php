<?php
/**
* @comment controller สำหรับหน้าจอความผิดทางวินัย (dashboard)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
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
$data[0] = array(
                'id' => '0',
                'year' => '2556',
                'sick' => '10',
                'mission' => '20',
                'vacation' => '60',
                'late' => '30',
                'absent' => '40',
                'study' => '50'
		 );
$data[1] = array(
                'id' => '1',
                'year' => '2555',
                'sick' => '11',
                'mission' => '22',
                'vacation' => '33',
                'late' => '44',
                'absent' => '55',
                'study' => '66'
		 );
$tdList = json_encode($data);
$tdList = json_decode($tdList);
# เรียกใช้ views prohibit
include("views/absent/dashboard.php");
?>