<?
/**
* @comment controller สำหรับหน้า dashboard แก้ไขรูปภาพ
* @projectCode 57LIQ01
* @tor 3.2.4.1.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 13/01/2016
*/

//$personData = $main->getPersonData($_SESSION['idcard']);
//$personData = json_decode($personData);
$personData = '{"id_card":"3149900251095",
	"prename_th":"นาย",
	"name_th":"กรมน",
	"surname_th":"ใหม่เอี่ยม"}';
	
$personData = json_decode($personData);

$picData = '[{"id":"1",
	"id_card":"3149900251095",
	"id_kp7":"1",
	"pic_path":"",
	"pic_year":"2548",
	"status_kp7":"1"},{"id":"2",
	"id_card":"3149900251095",
	"id_kp7":"2",
	"pic_path":"",
	"pic_year":"2559",
	"status_kp7":"0"}]';
	
$picData = json_decode($picData);

if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($personData);	
	echo '<br>Pic Data :<br>';
	print_r($picData);
	echo '</pre>';
}

include("views/picHistory/dashboard.php");
?>