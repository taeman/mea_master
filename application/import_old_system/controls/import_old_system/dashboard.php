<?php
/**
* @comment controller หน้า dashboard บริหารจัดการข้อมูลการกระทำการละเมิด
* @projectCode 57LIQ01
* @tor 
* @package core
* @author Wannapa Thongtawee
* @access public
* @created 18/04/2016
*/
# เรียกใช้ views dashboard
$arrData=array();
$arrData[0][workId] = '0001';
$arrData[0][dateAccident] = '1 มกราคม 2559';
$arrData[0][detailAccident] = 'รถชน';
$arrData[0][licensePlate] = 'ทท1111';
$arrData[0][placeAccident] = 'สี่แยกห้วยขวาง';
$arrData[0][workOrder] = '';
$arrData[0][ruleId] = '';
$json = json_encode($arrData);
$tdList = json_decode($json);
include("views/import_old_system/dashboard.php");
?>