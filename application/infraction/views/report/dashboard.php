<?php
/**
* @comment view สำหรับหน้าจอรายงานสารสนเทศ (dashboard)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.3
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
* @access 			public
* @created 			21/01/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">รายงานสารสนเทศ</div>
<table class="table" align="center" style="width:60%"><br /><br />
			<thead>
				<tr>
            <th>ลำดับ</th>
            <th>ชื่อรายงาน</th>
        </tr>
    	</thead >
        <tr class="tr-link" onclick="document.location='?controller=reportEducate&fn=dashboard'">
            <td align="center">1</td>
            <td>รายงานการกระทำละเมิด ตามรายงานเหตุการณ์ที่สำคัญประจำวัน</td>
        </tr>
        <tr class="tr-link" onclick="document.location='?controller=reportNotSendDetailsfordamage&fn=dashboard'">
            <td align="center">2</td>
            <td>รายงานการกระทำละเมิดที่การไฟฟ้าเขตยังไม่ส่งรายละเอียดค่าเสียหายให้กับ ฝบก.</td>
        </tr>
        <tr class="tr-link" onclick="document.location='?controller=reportNotSendResultsOfOperations&fn=dashboard'">
            <td align="center">3</td>
            <td>รายงานการกระทำละเมิดที่ฝ่ายกฎหมายยังไม่แจ้งผลการดำเนินการ</td>
        </tr>
        <tr class="tr-link" onclick="document.location='?controller=reportTrafficAccident&fn=dashboard'">
            <td align="center">4</td>
            <td>รายงานจราจร อุบัติเหตุรายเดือน</td>
        </tr>
        <tr class="tr-link" onclick="document.location='?controller=reportOverAnnounce&fn=dashboard'">
            <td align="center">5</td>
            <td>รายงานสรุปการกระทำละเมิดที่การไฟฟ้าเขตไม่ส่งรายละเอียดให้ฝบก. เกินระยะเวลา 30, 60, 90 และ 120 วัน</td>
        </tr>
        <tr class="tr-link" onclick="document.location='?controller=reportTypeItem&fn=dashboard'">
            <td align="center">6</td>
            <td>รายงานการกระทำละเมิด ตามเงื่อนไขที่ระบุได้ เช่น ประเภทอุปกรณ์ เสาโคมไฟฟ้าสาธารณะ และสาเหตุการละเมิด</td>
        </tr>
        <tr class="tr-link" onclick="document.location='?controller=reportSendDoccument&fn=dashboard'">
            <td align="center">7</td>
            <td>รายงานการส่งหนังสือและเอกสารสำคัญแจ้งหน่วยงานภายนอกที่เกี่ยวข้อง</td>
        </tr>
        <tr class="tr-link" onclick="document.location='?controller=reportFinance&fn=dashboard'">
            <td align="center">8</td>
            <td>รายงานการกระทำละเมิดที่ผู้ละเมิดชำระเงิน/ค้างชำระเงิน</td>
        </tr>
</table>
</div>
