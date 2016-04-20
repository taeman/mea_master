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
$arrData[0][infraction_name] = 'นายมงคล ศรีสุข';
$arrData[0][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[0][infraction_latitude] = "18 47' N";
$arrData[0][infraction_longitude] = "98 59' E";
$arrData[1][infraction_name] = 'นายมงคล ศรีสุข';
$arrData[1][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[1][infraction_latitude] = "18 47' N";
$arrData[1][infraction_longitude] = "98 59' E";
$arrData[2][infraction_name] = 'นายมงคล ศรีสุข';
$arrData[2][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[2][infraction_latitude] = "18 47' N";
$arrData[2][infraction_longitude] = "98 59' E";
$json = json_encode($arrData);
$tdList = json_decode($json);

include("views/exchange_data_gis/dashboard.php");
?>
