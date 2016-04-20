<?php
/**
* @comment controller สำหรับหน้าจอรายงานจำนวนพนักงานจำแนกตามช่วงอายุและวุฒิการศึกษา
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.3.2
* @package 			core
* @author 			Bussarawadee Manorach
* @access 			public
* @created 			22/01/2016
*/
?>
<script language="javascript" src="../../common/global/js/highcharts.js"></script>
<?php

// ข้อมูลจำลองของตาราง Summary คุณวุฒิการศึกษาที่มีจำนวนพนักงานได้รับมากที่สุด
$data[0] = array(
			'educate' => 'ส่งแล้ว',
			'numberEmp' => '100'
		   );
$data[1] = array(
			'educate' => 'ยังไม่ได้ส่ง',
			'numberEmp' => '20'
		   );
$data[2] = array(
			'educate' => 'รวม',
			'numberEmp' => '120'
			 );
$summaryList = json_encode($data);
$summaryList = json_decode($summaryList);
//print_r($summaryList);
// ข้อมูลจำลองของตาราง Information คุณวุฒิการศึกษาที่มีจำนวนพนักงานได้รับมากที่สุด
$arrData=array();
$arrData[0][infraction_date] = '11 กุมภาพันธ์ุ 2559';
$arrData[0][infraction_name] = 'นายมงคล ศรีสุข';
$arrData[0][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[0][infraction_place] = 'จังหวัดกรุงเทพมหานคร';
$arrData[0][infraction_institution] = 'การไฟฟ้านครหลวง';
$arrData[0][infraction_status] = 'กำลังตรวจสอบ';
$arrData[0][infraction_notification] = 'วันละครั้ง';
$arrData[0][departmentSend] = 'บริษัท';
$arrData[0][sendStatus] = 'ส่งแล้ว';

$arrData[1][infraction_date] = '15 กุมภาพันธ์ุ 2559';
$arrData[1][infraction_name] = 'นายสมจิต สมใจ';
$arrData[1][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[1][infraction_place] = 'จังหวัดเชียงใหม่';
$arrData[1][infraction_institution] = 'การไฟฟ้าส่วนภูมิภาค เขต 1';
$arrData[1][infraction_status] = 'กำลังตรวจสอบ';
$arrData[1][infraction_notification] = 'วันละครั้ง';
$arrData[1][departmentSend] = 'กระทรวง';
$arrData[1][sendStatus] = 'ยังส่งแล้ว';

$arrData[2][infraction_date] = '13 กุมภาพันธ์ุ 2559';
$arrData[2][infraction_name] = 'นายกิตติกร แซ่โหว';
$arrData[2][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[2][infraction_place] = 'จังหวัดนครปฐม';
$arrData[2][infraction_institution] = 'การไฟฟ้าส่วนภูมิภาค เขต 2';
$arrData[2][infraction_status] = 'กำลังตรวจสอบ';
$arrData[2][infraction_notification] = 'วันละครั้ง';
$arrData[2][departmentSend] = 'กรม';
$arrData[2][sendStatus] = 'ส่งแล้ว';

$arrData[3][infraction_date] = '18 มีนาคม 2559';
$arrData[3][infraction_name] = 'นางอรทัย หงษ์แก้ว';
$arrData[3][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[3][infraction_place] = 'จังหวัดยะลา';
$arrData[3][infraction_institution] = 'การไฟฟ้าส่วนภูมิภาค เขต 3';
$arrData[3][infraction_status] = 'กำลังตรวจสอบ';
$arrData[3][infraction_notification] = 'วันละครั้ง';
$arrData[3][departmentSend] = 'บริษัท';
$arrData[3][sendStatus] = 'ส่งแล้ว';

$arrData[4][infraction_date] = '18 มีนาคม 2559';
$arrData[4][infraction_name] = 'นางอิ่มใจ สุขเอม';
$arrData[4][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[4][infraction_place] = 'จังหวัดกรุงเทพมหานคร';
$arrData[4][infraction_institution] = 'การไฟฟ้านครหลวง';
$arrData[4][infraction_status] = 'กำลังตรวจสอบ';
$arrData[4][infraction_notification] = 'วันละครั้ง';
$arrData[4][departmentSend] = 'กระทรวง';
$arrData[4][sendStatus] = 'ยังส่งแล้ว';
$json = json_encode($arrData);
$tdList = json_decode($json);

$classTitle = ($_GET['printPdf'] == 'true') ? 'titlePDF' : 'title';
$classTable = ($_GET['printPdf'] == 'true') ? 'tablePDF' : 'table';
$categories = "";
$data_val = "";
$i=1;
foreach($summaryList as $key => $value){
	if($key!=2){
    if($i==1){
     $categories .= "'".$value->educate."'";
     $data_val .= $value->numberEmp;
    }else{
     $categories .= ",'".$value->educate."'";
     $data_val .= ",".$value->numberEmp;
    }
	}
        $i++;
}
$highChartType = 'column';
$titleHighChart = '';
$text = 'เหตุการณ์ที่มีการละเมิดมากที่สุด 5 อันดับ';
$valueSuffix = 'คน';
$data_charts = "{
                        color: '#00CC33',
                        name: 'จำนวน (รายการ)',
                        data: [".$data_val."]
                }";
# เรียกใช้ views reportEmpEducate
include("views/reportSendDoccument/dashboard.php");
?>
<script>
$(function () {
	$('#highchart').highcharts({
		chart: {
			backgroundColor: {
				linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
				stops: [
					[0, '#ffffff'],
					[1, '#f1f1f1']
				]
			},
			type: 'column',
			marginRight: 10,
			marginBottom: 25
		},
		title: {
			text: '',
			style: {color: "#FFF"}
		},
		subtitle: {
			//text: 'Source: WorldClimate.com',
			//x: -20
		},
		xAxis: {
			categories: [<?php echo $categories; ?>],
			labels: {
				rotation : 0,

				style: { color: "#050000"}
			}
		},
		yAxis: {
			title: {
				text: '<?php echo $text; ?>',
				style: { color: "#050000"}
			},
			plotLines: [{
				value: 0,
				width: 1,
				color: '#464646'
			}],
			gridLineColor: '#d7d7d7',
			lineWidth: 2,
			lineColor: '#464646',
			labels: {
				style: { color: "#050000"}
			}
		},
		tooltip: {
			valueSuffix: '<?php echo $valueSuffix; ?>'
		},
		legend: {
			itemStyle: {color: "#050000"},
			itemHoverStyle: {color: '#050000'},
			itemHiddenStyle: {color: '#050000'},
			layout: 'vertical',
			align: 'right',
			verticalAlign: 'top',
			x: -10,
			y: 0,
			borderWidth: 0
		},
		series: [<?php echo $data_charts; ?>]
	});
});
</script>
