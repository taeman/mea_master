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
			'educate' => 'รถชนเสาไฟฟ้า',
			'numberEmp' => '10'
		   );
$data[1] = array(
			'educate' => 'รถชนเสาโคมไฟ',
			'numberEmp' => '5'
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
$arrData[0][infraction_notification] = 'วันละครั้ง';

$arrData[1][infraction_date] = '15 กุมภาพันธ์ุ 2559';
$arrData[1][infraction_name] = 'นายสมจิต สมใจ';
$arrData[1][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[1][infraction_place] = 'จังหวัดเชียงใหม่';
$arrData[1][infraction_institution] = 'การไฟฟ้าส่วนภูมิภาค เขต 1';
$arrData[1][infraction_notification] = 'วันละครั้ง';

$arrData[2][infraction_date] = '13 กุมภาพันธ์ุ 2559';
$arrData[2][infraction_name] = 'นายกิตติกร แซ่โหว';
$arrData[2][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[2][infraction_place] = 'จังหวัดนครปฐม';
$arrData[2][infraction_institution] = 'การไฟฟ้าส่วนภูมิภาค เขต 2';
$arrData[2][infraction_notification] = 'วันละครั้ง';

$arrData[3][infraction_date] = '18 มีนาคม 2559';
$arrData[3][infraction_name] = 'นางอรทัย หงษ์แก้ว';
$arrData[3][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[3][infraction_place] = 'จังหวัดยะลา';
$arrData[3][infraction_institution] = 'การไฟฟ้าส่วนภูมิภาค เขต 3';
$arrData[3][infraction_notification] = 'วันละครั้ง';

$arrData[4][infraction_date] = '18 มีนาคม 2559';
$arrData[4][infraction_name] = 'นางอิ่มใจ สุขเอม';
$arrData[4][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[4][infraction_place] = 'จังหวัดกรุงเทพมหานคร';
$arrData[4][infraction_institution] = 'การไฟฟ้านครหลวง';
$arrData[4][infraction_notification] = 'วันละครั้ง';
$json = json_encode($arrData);
$tdList = json_decode($json);

$classTitle = ($_GET['printPdf'] == 'true') ? 'titlePDF' : 'title';
$classTable = ($_GET['printPdf'] == 'true') ? 'tablePDF' : 'table';
$categories = "";
$data_val = "";
$i=1;
foreach($summaryList as $key => $value){
    if($i==1){
     $categories .= "'".$value->educate."'";
     $data_val .= $value->numberEmp;
    }else{
     $categories .= ",'".$value->educate."'";
     $data_val .= ",".$value->numberEmp;
    }
        $i++;
}
$highChartType = 'column';
$titleHighChart = '';
$text = 'อุบัติเหตุการจราจรที่เกิดขึ้นมากที่สุด 5 อันดับ';
$valueSuffix = 'คน';
$data_charts = "{
                        color: '#00CC33',
                        name: 'จำนวน (รายการ)',
                        data: [".$data_val."]
                }";
# เรียกใช้ views reportEmpEducate
	$data['fullName'] = 'นายมงคล ศรีสุข';
	$data['infraction'] = 'ละเมิดการใช้ไฟฟ้า';
	$data['place'] = 'เขตบางเขน';
	$data['photo']['0'] = 'infraction1.jpg';
	$data['photo']['1'] = 'infraction2.jpg';
	$data['uploadFile']['0'] = 'infraction1.pdf';
	$data['uploadFile']['1'] = 'infraction2.pdf';
	$data['infractionDate'] = '18 เมษายน 2559';
	$data['department'] = 'การไฟฟ้านครหลวง';
	$data['status'] = 'ระหว่างการตรวจสอบ';
	$data['deviceType'] = 'เสาโคมไฟฟ้า';
	$data['latitude'] = '51.5 องศาเหนือ';
	$data['longitude'] = '47.45 องศาตะวันออก';
	$data['email'] = '1';
	$data['sms'] = '1';
	$data['notificationDate'] = '18 เมษายน 2559';
	$data['notificationDateTo'] = '19 เมษายน 2559';
	$data['frequency'] = '1';

$month_th = array('1' => 'มกราคม','2' => 'กุมภาพันธ์','3' => 'มีนาคม','4' => 'เมษายน','5' => 'พฤษภาคม',
	'6' => 'มิถุนายน','7' => 'กรกฎาคม','8' => 'สิงหาคม','9' => 'กันยายน','10' => 'ตุลาคม','11' => 'พฤศจิกายน','12' => 'ธันวาคน' );

include("views/reportTrafficAccident/dashboard.php");
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
