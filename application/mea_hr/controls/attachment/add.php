<?php
/**
* @comment controller สำหรับหน้า dashboard ของระบบ แนบไฟล์เอกสารหลักฐาน
* @projectCode 57LIQ01
* @tor 3.2.4.2.1.2
* @package core
* @author Amata Kongsaingern
* @access public
* @created 21/01/2016
*/

# $main มาจากหน้า index.php class models/class.main.php
$personData = '{"id_card":"3149900251095",
	"prename_th":"นาย",
	"name_th":"กรมน",
	"surname_th":"ใหม่เอี่ยม"}';
	
$personData = json_decode($personData);

$commentFileFile="";
$fileName="";

if($_GET['type']==1){
	if($_GET['runid']==1){
		$fileIdcardData = '{"id":"1",
			"id_card":"3149900251095",
			"date_upload":"2016-01-21",
			"type_upload":"1",
			"comment":"เนื่องจากเปลี่ยนนามสกุลและได้ทำบัตรประจำตัวประชาชนใหม่",
			"file_name":"3149900251095_idcard_21012559_0.pdf"}';
	}else if($_GET['runid']==2){
		$fileIdcardData = '{"id":"2",
			"id_card":"3149900251095",
			"date_upload":"2015-03-15",
			"type_upload":"1",
			"comment":"เอกสารสำเนาบัตรประจำตัวประชาชนที่ใช้ในการสมัครงาน",
			"file_name":"3149900251095_idcard_15032558_0.pdf"}';
	}
	if($_GET['runid']!=""){
		$fileIdcardData = json_decode($fileIdcardData);
		$commentFile=$fileIdcardData->comment;
		$fileName=$fileIdcardData->file_name;
	}
}else if($_GET['type']==2){
	if($_GET['runid']==3){
		$fileHomeData = '{"id":"3",
			"id_card":"3149900251095",
			"date_upload":"2015-03-15",
			"type_upload":"2",
			"comment":"เอกสารสำเนาทะเบียนบ้านที่ใช้ในการสมัครงาน",
			"file_name":"3149900251095_home_15032558_0.pdf"}';
	}
	if($_GET['runid']!=''){
		$fileHomeData = json_decode($fileHomeData);
		$commentFile=$fileHomeData->comment;
		$fileName=$fileHomeData->file_name;
	}
}else if($_GET['type']==3){
	if($_GET['runid']==4){
		$fileEducationData = '{"id":"4",
			"id_card":"3149900251095",
			"date_upload":"2016-05-18",
			"type_upload":"3",
			"comment":"เอกสารสำเนาวุฒิการศึกษาระดับปริญญาโทที่ใช้ในการเลือนระดับ",
			"file_name":"3149900251095_education_18052559_3.pdf"}';
	}else if($_GET['runid']==5){
		$fileEducationData = '{"id":"5",
			"id_card":"3149900251095",
			"date_upload":"2015-03-15",
			"type_upload":"3",
			"comment":"เอกสารสำเนาวุฒิการศึกษาระดับปริญญาตรีที่ใช้ในการสมัครงาน",
			"file_name":"3149900251095_education_15032558_2.pdf"}';
	}else if($_GET['runid']==6){
		$fileEducationData = '{"id":"6",
			"id_card":"3149900251095",
			"date_upload":"2015-03-15",
			"type_upload":"3",
			"comment":"เอกสารสำเนาวุฒิการศึกษาระดับมัถยมศึกษาตอนปลายที่ใช้ในการสมัครงาน",
			"file_name":"3149900251095_education_15032558_1.pdf"}';
	}else if($_GET['runid']==7){
		$fileEducationData = '{"id":"7",
			"id_card":"3149900251095",
			"date_upload":"2015-03-15",
			"type_upload":"3",
			"comment":"เอกสารสำเนาวุฒิการศึกษาระดับมัถยมศึกษาตอนต้นที่ใช้ในการสมัครงาน",
			"file_name":"3149900251095_education_15032558_0.pdf"}';
	}
	
	if($_GET['runid']!=''){
		$fileEducationData = json_decode($fileEducationData);
		$commentFile=$fileEducationData->comment;
		$fileName=$fileEducationData->file_name;
	}
}else if($_GET['type']==4){
	if($_GET['runid']==8){
		$fileRegisterData = '{"id":"8",
			"id_card":"3149900251095",
			"date_upload":"2015-03-15",
			"type_upload":"4",
			"comment":"เอกสารใบสมัครที่ใช้ในการสมัครงาน",
			"file_name":"3149900251095_register_15032558_0.pdf"}';
	}
	
	if($_GET['runid']!=''){
		$fileRegisterData = json_decode($fileRegisterData);
		$commentFile=$fileRegisterData->comment;
		$fileName=$fileRegisterData->file_name;
	}
}else if($_GET['type']==5){
	if($_GET['runid']==9){
		$fileResultsData = '{"id":"9",
			"id_card":"3149900251095",
			"date_upload":"2015-03-15",
			"type_upload":"5",
			"comment":"เอกสารผลการตรวจพิสูจน์ลายนิ้วมือที่ใช้ในการสมัครงาน",
			"file_name":"3149900251095_results_15032558_0.pdf"}';
	}
	
	if($_GET['runid']!=''){
		$fileResultsData = json_decode($fileResultsData);
		$commentFile=$fileResultsData->comment;
		$fileName=$fileResultsData->file_name;
	}
}else if($_GET['type']==6){
	if($_GET['runid']==10){
		$fileOrderData = '{"id":"10",
			"id_card":"3149900251095",
			"date_upload":"2015-03-15",
			"type_upload":"6",
			"comment":"เอกสารคำสั่งที่ใช้ในการเลื่อนระดับ",
			"file_name":"3149900251095_order_15032558_0.pdf"}';
	}else if($_GET['runid']==11){
		$fileOrderData = '{"id":"11",
			"id_card":"3149900251095",
			"date_upload":"2015-08-01",
			"type_upload":"6",
			"comment":"เอกสารคำสั่งที่ใช้ในการบรรจุเป็นพนักงานประจำ",
			"file_name":"3149900251095_order_01082558_0.pdf"}';
	}
	
	if($_GET['runid']!=''){
		$fileOrderData = json_decode($fileOrderData);
		$commentFile=$fileOrderData->comment;
		$fileName=$fileOrderData->file_name;
	}
}else if($_GET['type']==7){
	if($_GET['runid']==12){
		$fileContractData = '{"id":"12",
			"id_card":"3149900251095",
			"date_upload":"2015-08-01",
			"type_upload":"7",
			"comment":"เอกสารสัญญาจ้างที่ใช้ในการสมัครเป็นพนักงานประจำ",
			"file_name":"3149900251095_contract_01082558_0.pdf"}';
	}else if($_GET['runid']==13){
		$fileContractData = '{"id":"13",
			"id_card":"3149900251095",
			"date_upload":"2015-03-15",
			"type_upload":"7",
			"comment":"เอกสารสัญญาจ้างที่ใช้ในการสมัครงาน",
			"file_name":"3149900251095_contract_15032558_0.pdf"}';
	}
	
	if($_GET['runid']!=''){
		$fileContractData = json_decode($fileContractData);
		$commentFile=$fileContractData->comment;
		$fileName=$fileContractData->file_name;
	}
}else if($_GET['type']==8){
	if($_GET['runid']==14){
		$fileOtherData = '{"id":"14",
			"id_card":"3149900251095",
			"date_upload":"2016-01-21",
			"type_upload":"8",
			"comment":"เอกสารใบสำคัญเปลี่ยนชื่อเนื่องจากมีการเปลี่ยนชื่อสกุล",
			"file_name":"3149900251095_other_21012559_0.pdf"}';
	}else if($_GET['runid']==15){
		$fileOtherData = '{"id":"15",
			"id_card":"3149900251095",
			"date_upload":"2015-03-15",
			"type_upload":"8",
			"comment":"เอกสารใบ ส.ด.๘ ที่ใช้ในการสมัครงาน",
			"file_name":"3149900251095_other_15032558_2.pdf"}';
	}else if($_GET['runid']==16){
		$fileOtherData = '{"id":"16",
			"id_card":"3149900251095",
			"date_upload":"2015-03-15",
			"type_upload":"8",
			"comment":"เอกสารใบสำคัญเปลี่ยนชื่อที่ใช้ในการสมัครงาน",
			"file_name":"3149900251095_other_15032558_1.pdf"}';
	}else if($_GET['runid']==17){
		$fileOtherData = '{"id":"17",
			"id_card":"3149900251095",
			"date_upload":"2015-03-15",
			"type_upload":"8",
			"comment":"เอกสารใบสำคัญเปลี่ยนชื่อสกุลที่ใช้ในการสมัครงาน",
			"file_name":"3149900251095_other_15032558_0.pdf"}';
	}
	
	if($_GET['runid']!=''){
		$fileOtherData = json_decode($fileOtherData);
		$commentFile=$fileOtherData->comment;
		$fileName=$fileOtherData->file_name;
	}
}

$fileType = array();
$fileType[1]="สำเนาบัตรประจำตัวประชาชน";
$fileType[2]="สำเนาทะเบียนบ้าน";
$fileType[3]="สำเนาวุฒิการศึกษา";
$fileType[4]="ใบสมัคร";
$fileType[5]="ผลการตรวจพิสูจน์ลายนิ้วมือ";
$fileType[6]="คำสั่ง";
$fileType[7]="สัญญาจ้าง";
$fileType[8]="อื่น ๆ";

if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($personData);
	echo '<br>Salary Data :<br>';
	print_r($salaryData);
	echo '</pre>';
}

# เรียกใช้ views seminar
if($_GET['controller']!=""){
	include("views/attachment/add.php");
}else{
	include("../../views/attachment/add.php");
}
?>
<script type="text/javascript">
$(document).ready(function(e) {
	$('.myCheckbox').prop('checked', false);
	$("#file_ref").toggle(false);
	$("#H_name").text("ไฟล์ : ");
	$("#preview").toggle(false);
	
	$('#addfile').click(function () {
		$("#file_ref").toggle(this.checked);
		$("#F_name").toggle(!(this.checked));
		if(this.checked){
			$("#H_name").text("เลือกไฟล์เอกสารหลักฐาน : ");
		}else{
			$("#H_name").text("ไฟล์");
		}
	});
	
	if($("#file_ref_new").val()!=''||$("#file_ref").val()!=''){
		$("#preview").toggle(true);
	}else{
		$("#preview").toggle(false);
	}
});
</script>