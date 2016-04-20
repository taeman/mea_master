<?php
/**
* @comment controller สำหรับหน้า dashboard ของ general
* @projectCode 57LIQ01
* @tor 3.2.4.1
* @package core
* @author Pinya Thanagorntiraporn
* @access public
* @created 12/01/2016
*/
# เรียกใช้ views general
$arrData=array();
$arrData[0][id] = '56';
$arrData[0][idcard] = '3149900251095';
$arrData[0][fullname] = 'นายกชมน ใหม่เอี่ม';
$arrData[0][position] = 'นักการตลาด 4';
$arrData[0][department] = 'แผนกการตลาดและลูกค้าสัมพันธ์';
$arrData[0][division] = 'กองการตลาดและจำหน่าย';
$arrData[0][party] = 'ฝ่ายบริหาร';
$arrData[1][id] = '53';
$arrData[1][idcard] = '3140500166564';
$arrData[1][fullname] = 'นายกมล สาระกูล';
$arrData[1][position] = 'เจ้าหน้าที่ผลิต 4(หมักเชื้อส่า)';
$arrData[1][department] = 'แผนกการผลิต';
$arrData[1][division] = 'กองการผลิต';
$arrData[1][party] = 'ฝ่ายผลิต';
$json = json_encode($arrData);
$tdList = json_decode($json);
include("views/general/dashboard.php");
?>