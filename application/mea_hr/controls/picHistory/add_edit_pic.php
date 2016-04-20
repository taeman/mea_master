<?php
/**
* @comment controller สำหรับหน้าเพิ่ม แก้ไขรูปภาพ
* @projectCode 57LIQ01
* @tor 3.2.4.1
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

if($_GET['controller']!=""){
	include("views/picHistory/add_edit_pic.php");;
}else{
	include("../../views/picHistory/add_edit_pic.php");
}
?>