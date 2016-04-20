<?php
/**
* @comment controller สำหรับหน้าจอรายงานคุณวุฒิการศึกษาและสถาบันการศึกษา (detail)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.3.3
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
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

$data_exsum[0] = array(
			'empSchool' =>'มหาวิทยาลัยจุฬาลงกรณ์ราชวิทยาลัย',
			'empQualification' =>'บธ.บ.',
			'empAmount' =>'80'
		   );
$data_exsum[1] = array(
			'empSchool' =>'มหาวิทยาลัยแม่โจ้',
			'empQualification' =>'บธ.บ.',
			'empAmount' =>'30'
		   );
$data_exsum[2] = array(
			'empSchool' =>'มหาวิทยาลัยเชียงใหม่',
			'empQualification' =>'วศ.บ.',
			'empAmount' =>'20'
		   );
$data_exsum[3] = array(
			'empSchool' =>'มหาวิทยาลัยธรรมศาสตร์',
			'empQualification' =>'วท.ม.',
			'empAmount' =>'15'
		   );
$data_exsum[4] = array(
			'empSchool' =>'มหาวิทยาลัยสุโขทัยธรรมาธิราช',
			'empQualification' =>'ศศ.บ.',
			'empAmount' =>'10'
		   );
$tdAmount = json_encode($data_exsum);
$tdAmount = json_decode($tdAmount);

$data[0] = array(
			'empId' => '500',
			'empName' => 'นางศิริพรรณ ขจรศักดิ์ศรี',
			'empDepartment' => 'การตลาดและลูกค้าสัมพันธ์',
			'empDivision' =>'การตลาดและจำหน่าย',
			'empCotton' =>'บริหาร',
			'empSchool' =>'มหาวิทยาลัยจุฬาลงกรณ์ราชวิทยาลัย',
			'empQualification' =>'บธ.บ.'
		   );
$data[1] = array(
			'empId' => '490',
			'empName' => 'นางสาวรุ่งทิพย์ วิเศษชัย',
			'empDepartment' => 'บัญชีและงบประมาณ',
			'empDivision' =>'คลัง',
			'empCotton' =>'บริหาร',
			'empSchool' =>'มหาวิทยาลัยแม่โจ้',
			'empQualification' =>'บธ.บ.'
		   );
$data[2] = array(
			'empId' => '500',
			'empName' => 'นายชาตรี ผลพอตน',
			'empDepartment' => 'การผลิต',
			'empDivision' =>'การผลิต',
			'empCotton' =>'ผลิต',
			'empSchool' =>'มหาวิทยาลัยเชียงใหม่',
			'empQualification' =>'วศ.บ.'
		   );
$data[3] = array(
			'empId' => '460',
			'empName' => 'นายธวัช ธรรมโชติ',
			'empDepartment' => 'การผลิต',
			'empDivision' =>'ควบคุมและพัฒนาคุณภาพ',
			'empCotton' =>'ผลิต',
			'empSchool' =>'มหาวิทยาลัยธรรมศาสตร์',
			'empQualification' =>'วท.ม.'
		   );
$data[4] = array(
			'empId' => '410',
			'empName' => 'นายอรรถพล สังขรักษา',
			'empDepartment' => 'การผลิต',
			'empDivision' =>'วิศวกรรมและเทคนิค',
			'empCotton' =>'ผลิต',
			'empSchool' =>'มหาวิทยาลัยสุโขทัยธรรมาธิราช',
			'empQualification' =>'ศศ.บ.'
		   );
$tdList = json_encode($data);
$tdList = json_decode($tdList);

$classTitle = ($_GET['printPdf'] == 'true') ? 'titlePDF' : 'title';
$classTable = ($_GET['printPdf'] == 'true') ? 'tablePDF' : 'table';
$categories = "";
$data_val = "";
$j=1;
foreach($tdAmount as $key => $value){
    if($j==1){
     $categories .= "'".$value->empQualification."'";
     $data_val .= $value->empAmount;
    }else{
     $categories .= ",'".$value->empQualification."'"; 
     $data_val .= ",".$value->empAmount;
    }
        $j++;
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
# เรียกใช้ views reportEmpSchool
include("views/reportEmpSchool/detail.php");
?>
<script>
$(function(){
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