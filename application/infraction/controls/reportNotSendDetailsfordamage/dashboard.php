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
			'educate' => 'ขโมยอุปกรณสายไฟชนิดทองแดง',
			'numberEmp' => '5'
			 );
$data[1] = array(
			'educate' => 'ละเมิดการใช้ไฟฟ้า',
			'numberEmp' => '3'
		   );
$data[2] = array(
			'educate' => 'ขโมยอุปกรณ์เสาไฟฟ้า',
			'numberEmp' => '2'
		   );
$data[3] = array(
			'educate' => 'ขโมยอุปกรณ์เสาโคมไฟฟ้า',
			'numberEmp' => '1'
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
$arrData[0][infraction_status] = 'ยังไม่ส่งรายละเอียดค่าเสียหาย';
$arrData[1][infraction_date] = '11 กุมภาพันธ์ุ 2559';
$arrData[1][infraction_name] = 'นายมงคล ศรีสุข';
$arrData[1][infraction_action] = 'ละเมิดการใช้ไฟฟ้า';
$arrData[1][infraction_place] = 'จังหวัดกรุงเทพมหานคร';
$arrData[1][infraction_institution] = 'การไฟฟ้านครหลวง';
$arrData[1][infraction_status] = 'ยังไม่ส่งรายละเอียดค่าเสียหาย';
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
$text = 'เหตุการณ์ที่มีการละเมิดมากที่สุด 5 อันดับ';
$valueSuffix = 'คน';
$data_charts = "{
                        color: '#00CC33',
                        name: 'จำนวนการละเมิด (รายการ)',
                        data: [".$data_val."]
                }";
# เรียกใช้ views reportEmpEducate
include("views/reportNotSendDetailsfordamage/dashboard.php");
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
