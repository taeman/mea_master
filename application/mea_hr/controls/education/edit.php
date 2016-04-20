<?php
/**
* @comment controller สำหรับหน้า dashboard ของ education
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Pinya Thanagorntiraporn
* @access 			public
* @created 			18/01/2016
*/

# เรียกใช้ models seminar
include("models/seminar.php");
$seminar = new Seminar();

# $main มาจากหน้า index.php class models/class.main.php
$personData = $main->getPersonData($_SESSION['idcard']);
$personData = json_decode($personData);

$data[0] = array(
			'school' => 'โรงเรียนบ้านโนนตาล',
			'dateLableStart' => '2530',
			'degree' => 'ประถมศึกษาปีที่ 6',
			'major' => ' ',
                        'id' => '1',
                        'number' => '1',
                        'dateLableEnd' => '2535'
		   );
$data[1] = array(
			'school' => 'โรงเรียนสตรีศึกษา จ.ร้อยเอ็ด',
			'dateLableStart' => '2530',
			'degree' => 'มัธยมศึกษาตอนปลาย',
			'major' => ' ',
                        'id' => '2',
                        'number' => '2',
                        'dateLableEnd' => '2535'
		   );
$data[2] = array(
			'school' => 'มหาวิทยาลัยราชภัฎนครราชสีมา',
			'dateLableStart' => '2542',
			'degree' => 'ครุศาสตรบัณฑิต (ค.บ.)',
			'major' => 'การศึกษาปฐมวัย',
                        'id' => '3',
                        'number' => '3',
                        'dateLableEnd' => '2535'
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);
if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($personData);
	echo '</pre>';
}

# เรียกใช้ views education
include("views/education/edit.php");
?>