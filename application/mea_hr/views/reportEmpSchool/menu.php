<?php
/**
* @comment menu สำหรับหน้าจอรายงานจำนวนพนักงานจำแนกตามประเภทพนักงาน
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.3.7
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
* @access 			public
* @created 			22/01/2016
*/

$pdf = rawurlencode("http://".$_SERVER['HTTP_HOST']."/mea_hr_mvc/application/mea_hr/popup.php?controller=reportEmpSchool&fn=detail&printPdf=true");
$url1='http://'.$_SERVER['HTTP_HOST'].'/html2pdf_service_utf8/html2pdf_service_utf8/html2pdf.service.php?Format=A4&Orientation=L&HtmlFile='.$pdf;
?>
<div class="block" id="menu" style="width:99%; margin-right:0.5%; text-align:right;">
	<a href="<?php echo $url1; ?>" target="_blank"><img src="../../images/mea_hr/icon-print.png" class="btn-img" title="พิมพ์รายงาน" /></a>
    <a href="popup.php?controller=reportEmpSchool&fn=search_dashboard&id=<?php echo $_GET['id']; ?>&name=<?php echo $_GET['name']; ?>&position=<?php echo $_GET['position']; ?>&department=<?php echo $_GET['department']; ?>&divition=<?php echo $_GET['divition']; ?>&party=<?php echo $_GET['party']; ?>&school=<?php echo $_GET['school']; ?>&education=<?php echo $_GET['education']; ?>" id="filter"><img src="../../images/mea_hr/icon-search.png" class="btn-img" title="พิมพ์รายงาน" /></a>
    <img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="document.location='?controller=report&fn=dashboard'" title="กลับหน้าหลัก" />
</div>
<script type="text/javascript">
$(document).ready(function(){
		$("#filter").fancybox({
			'width': '700px',
			'height': '400px',
			'autoScale': false,
			'autoSize': false,
			'transitionIn': 'none',
			'transitionOut': 'none',
			'type': 'iframe',
			'scrolling': 'no'
		});
});
</script>