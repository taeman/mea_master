<?php
/**
* @comment menu สำหรับหน้าจอรายงานจำนวนพนักงานที่คงอยู่ปฏิบัติงาน
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.3.1
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
* @access 			public
* @created 			21/01/2016
*/
$pdf = rawurlencode("http://".$_SERVER['HTTP_HOST']."/mea_hr_mvc/application/mea_hr/popup.php?controller=reportEmpEducate&fn=empEducate&printPdf=true");
$url1='http://'.$_SERVER['HTTP_HOST'].'/html2pdf_service_utf8/html2pdf_service_utf8/html2pdf.service.php?Format=A4&Orientation=L&HtmlFile='.$pdf;
?>
<div class="block" id="menu" style="width:99%; margin-right:0.5%; text-align:right;">
	<a href="<?php echo $url1; ?>" target="_blank"><img src="../../images/mea_hr/icon-print.png" class="btn-img" title="พิมพ์รายงาน" /></a>
    <img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="document.location='?controller=report&fn=dashboard'" title="กลับหน้าหลัก" />
</div>