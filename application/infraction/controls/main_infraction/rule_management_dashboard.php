<?php
/**
* @comment controller หน้า dashboard จัดการเอกสารระเบียบข้อกำหนดหรือกฏหมายที่เกี่ยวข้อง
* @projectCode 
* @tor 
* @package core
* @author Pinya
* @access public
* @created 18/04/2016
*/
# เรียกใช้ views dashboard
$arrData=array();
$arrData[0]['ruleName'] = 'ข้อบังคับว่าด้วยการใช้ไฟฟ้าของผู้อื่น';
$arrData[0]['ruleDetail'] = 'การละเมิดการใช้ไฟฟ้าของผู้อื่นมีโทษปรับไม่เกิน 20,000 บาท หรือ จำคุกไม่เกิน 2 ปี หรือทั้งจำทั้งปรับ';
$arrData[0]['uploadFile']['0'] = 'rule1.pdf';
$arrData[0]['uploadFile']['1'] = 'rule2.pdf';
$json = json_encode($arrData);
$tdList = json_decode($json);
include("views/main_infraction/rule_management_dashboard.php");
?>