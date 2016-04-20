<?php
/**
* @comment controller หน้า เพิ่มและแก้ไขข้อมูล ของ salary
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 15/01/2016
*/

# เรียกใช้ models seminar
include("models/seminar.php");
$seminar = new Seminar();

# $main มาจากหน้า index.php class models/class.main.php
$personData = '{"id_card":"3149900251095",
	"prename_th":"นาย",
	"name_th":"กรมน",
	"surname_th":"ใหม่เอี่ยม"}';
	
$personData = json_decode($personData);

if($_GET['runid']=="1"){
$salaryData = '{"id":"1",
	"id_card":"3149900251095",
	"date_active":"2011-03-30",
	"position":"100203",
	"id_employee":"56",
	"salary":"15,000",
	"ref_doc":"เลื่อนขั้นเงินเดือนตามคำสั่งที่ 1678/2554",
	"down_on":"0",
	"down_on_other":"",
	"down_date_on":"1",
	"down_date":"2011-07-28",
	"comment":"-"}';
}else if($_GET['runid']=="2"){
	$salaryData = '{"id":"2",
	"id_card":"3149900251095",
	"date_active":"2013-03-25",
	"position":"100204",
	"id_employee":"56",
	"salary":"18,000",
	"ref_doc":"เลื่อนขั้นเงินเดือนตามคำสั่งที่ 2413/2556 ",
	"down_on":"1",
	"down_on_other":"",
	"down_date_on":"2",
	"down_date":"2013-07-30",
	"comment":"-"}';
}else{
	$salaryData = '{"id":"",
	"id_card":"",
	"date_active":"",
	"position":"",
	"id_employee":"",
	"salary":"",
	"ref_doc":"",
	"down_on":"",
	"down_on_other":"",
	"down_date_on":"",
	"down_date":"",
	"comment":""}';
}

$salaryData = json_decode($salaryData);
	
$positionData = '[{"po_id":"100201","po_name":"นักการตลาด 1"},
{"po_id":"100202","po_name":"นักการตลาด 2"},
{"po_id":"100203","po_name":"นักการตลาด 3"},
{"po_id":"100204","po_name":"นักการตลาด 4"},
{"po_id":"100205","po_name":"นักการตลาด 5"}]';

$positionData = json_decode($positionData);
	
if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($personData);
	echo '<br>Salary Data :<br>';
	print_r($salaryData);	
	echo '<br>Position Data :<br>';
	print_r($positionData);
	echo '</pre>';
}

# เรียกใช้ views seminar
include("views/salary/add.php");
include("../../common/global/class/datepickerthai.php");
?>
<script type="text/javascript">
$(document).ready(function(){
	$('#order3').click(function () {
		if($("#order3").is(":checked")){
			$("#order_other").prop('disabled', false);
		}
	});
	$('#order2').click(function () {
		if($("#order2").is(":checked")){
			$("#order_other").prop('disabled', true);
		}
	});	
	$('#order1').click(function () {
		if($("#order1").is(":checked")){
			$("#order_other").prop('disabled', true);
		}
	});	
	$('#date_order2').click(function () {
		if($("#date_order2").is(":checked")){
			$("#dateOrder_Joker").prop('disabled', false);
		}
	});
	$('#date_order1').click(function () {
		if($("#date_order1").is(":checked")){
			$("#dateOrder_Joker").prop('disabled', true);
		}
	});
});
</script>