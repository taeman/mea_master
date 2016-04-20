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
$arrData[0][user] = 'user01';
$arrData[0][gruop_user] = 'กฟน.';
$arrData[0][type_browser] = "Chrome";
$arrData[0][log_in] = "11 ก.พ. 59/10.00 น.";
$arrData[0][log_out] = "11 ก.พ. 59/16.00 น.";
$arrData[1][user] = 'user02';
$arrData[1][gruop_user] = 'กฟน.';
$arrData[1][type_browser] = "Chrome";
$arrData[1][log_in] = "11 ก.พ. 59/10.00 น.";
$arrData[1][log_out] = "11 ก.พ. 59/16.00 น.";
$json = json_encode($arrData);
$tdList = json_decode($json);

include("views/history/dashboard.php");
?>
