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
# เรียกใช้ models seminar
include("models/seminar.php");
$seminar = new Seminar();

# $main มาจากหน้า index.php class models/class.main.php
$personData = $main->getPersonData($_SESSION['idcard']);
$personData = json_decode($personData);
if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($personData);
	echo '</pre>';
}
// ข้อมูลจำลองของตาราง Summary คุณวุฒิการศึกษาที่มีจำนวนพนักงานได้รับมากที่สุด
$data[0] = array(
			'educate' => 'วท.บ.',
			'numberEmp' => '80'
		   );
$data[1] = array(
			'educate' => 'วท.ม.',
			'numberEmp' => '30'
		   );
$data[2] = array(
			'educate' => 'ศศ.บ.',
			'numberEmp' => '20'
		   );
$data[3] = array(
			'educate' => 'วศ.บ.',
			'numberEmp' => '15'
		   );
$data[4] = array(
			'educate' => 'วศ.ม.',
			'numberEmp' => '10'
		   );
$summaryList = json_encode($data);
$summaryList = json_decode($summaryList);
//print_r($summaryList);
// ข้อมูลจำลองของตาราง Information คุณวุฒิการศึกษาที่มีจำนวนพนักงานได้รับมากที่สุด
$data2[0] = array(
			'idEmp' => '56',
			'fullname' => 'นายกชมน ใหม่เอี่ยม',
			'position' => 'นักการตลาด 4',
			'department' => 'การตลาด',
			'division' => 'กองการตลาด',
			'part' => 'ฝ่ายบริหาร',
			'education' => 'วท.ม.'
		   );
$data2[1] = array(
			'idEmp' => '53',
			'fullname' => 'นายกมล สาระกูล',
			'position' => 'เจ้าหน้าที่ผลิต',
			'department' => 'การผลิต',
			'division' => 'กองการผลิต',
			'part' => 'ฝ่ายผลิต',
			'education' => 'วท.บ.'
		   );
$inforList = json_encode($data2);
$inforList = json_decode($inforList);

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
$text = 'คุณวุฒิการศึกษาที่มีจำนวนพนักงานได้รับมากที่สุด 5 อันดับ';
$valueSuffix = 'คน';
$data_charts = "{
                        color: '#00CC33',
                        name: 'จำนวนพนักงาน (คน)',
                        data: [".$data_val."]
                }";
# เรียกใช้ views reportEmpEducate
include("views/reportEducate/dashboard.php");
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