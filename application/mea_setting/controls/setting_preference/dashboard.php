<?php
/**
* @comment controller หน้า dashboard จัดการข้อมูลผู้ละเมิดทรัพย์สิน
* @projectCode PS58MKT
* @tor 1.2.1 
* @package core
* @author Wannapa Thongtawee
* @access public
* @created 18/04/2016
*/
# เรียกใช้ views dashboard
$arrData=array();
$arrData[0][setting_name] = 'นายมงคล ศรีสุข';
$arrData[0][setting_idCard] = '1509900461573';
$arrData[0][setting_address] = '90/2 หมู่ 3 ตำบลสันทรายน้อย อำเภอสันทราย จังหวัดเชียงใหม่ 50210';
$arrData[0][setting_telephoneNumber] = '0867543986';
$arrData[0][setting_email] = 'mongkon@gmail.com';
$arrData[0][setting_Tool] = '';

$arrData[1][setting_name] = 'นายสมบัติ ธนะวัฒน์';
$arrData[1][setting_idCard] = '3508967415096';
$arrData[1][setting_address] = '35 ถนนเพชรบุรี แขวงทุ่งพญาไท เขตราชเทวี กรุงเทพมหานคร 10400';
$arrData[1][setting_telephoneNumber] = '022151515';
$arrData[1][setting_email] = 'bat@gmail.com';
$arrData[1][setting_Tool] = '';

$arrData[2][setting_name] = 'นางสาวรุ่งทิพย์ ดวงคำสร้อย';
$arrData[2][setting_idCard] = '1509900461573';
$arrData[2][setting_address] = '78/14 หมู่ 9 ถนนพัทยาสาย 2 ตำบลหนองปรือ อำเภอบางละมุง จังหวัดชลบุรี 20150';
$arrData[2][setting_telephoneNumber] = '0288788023';
$arrData[2][setting_email] = 'rung@hotmail.com';
$arrData[2][setting_Tool] = '';
$json = json_encode($arrData);
$tdList = json_decode($json);
include("views/setting_preference/dashboard.php");
?>