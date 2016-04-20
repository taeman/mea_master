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
<table class="table" align="center" style="width:50%"><br /><br />
	<thead>
		<tr>
            <th>ลำดับ</th>
            <th>ชื่อรายงาน</th>
        </tr>
    </thead >
        <tr class="tr-link" onclick="document.location='?controller=reportEmployee&fn=detail'">
            <td align="center">1</td>
            <td>รายงานจำนวนพนักงานที่คงอยู่ปฏิบัติงาน</td>
        </tr>
        <tr class="tr-link" onclick="document.location='?controller=reportEducate&fn=dashboard'">
            <td align="center">2</td>
            <td>รายงานคุณวุฒิการศึกษาของพนักงาน</td>
        </tr>
        <tr class="tr-link" onclick="document.location='?controller=reportEmpSchool&fn=detail'">
            <td align="center">3</td>
            <td>รายงานคุณวุฒิการศึกษาและสถาบันการศึกษา</td>
        </tr>
        <tr>
            <td align="center">4</td>
            <td>รายงานพนักงานที่สำเร็จการศึกษา</td>
        </tr>
        <tr class="tr-link" onclick="document.location='?controller=reportEmpEducate&fn=empEducate'">
            <td align="center">5</td>
            <td>รายงานพนักงานตามคุณวุฒิการศึกษาและอายุ</td>
        </tr>
        <tr>
            <td align="center">6</td>
            <td>รายงานพนักงานที่สำเร็จการศึกษาระดับต่างๆ</td>
        </tr>
        <tr>
            <td align="center">7</td>
            <td>รายงานประวัติพนักงาน(รายบุคคล)</td>
        </tr>
        <tr class="tr-link" onclick="document.location='?controller=reportEmployeeType&fn=detail'">
            <td align="center">8</td>
            <td>รายงานจำนวนพนักงานจำแนกตามประเภทพนักงาน</td>
        </tr>
</table>
</div>