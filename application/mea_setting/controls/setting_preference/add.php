<?
/**
* @comment controller สำหรับหน้าเพิ่ม/แก้ไข ข้อมูลผู้ละเมิด
* @projectCode PS58MKT
* @tor 1.2.1
* @package core
* @author Wannapa Thongtawee
* @access public
* @created 18/04/2016
*/
$salutation = array('นาย','นาง','นางสาว');

$data = array();
if($_GET['id']=='1'){
	$data['add_Name'] = 'มงคล';
	$data['add_lastnames'] = 'ศรีสุข';
	$data['add_idCard'] = '1509900461573';
	$data['add_address'] = '90/2 หมู่ 3 ตำบลสันทรายน้อย อำเภอสันทราย จังหวัดเชียงใหม่ 50210';
	$data['add_telephoneNumber'] = '0867543986';
	$data['add_email'] = 'mongkon@gmail.com';	
}
include("../../common/global/class/datepickerthai.php");
include("views/setting_preference/add.php");
?>