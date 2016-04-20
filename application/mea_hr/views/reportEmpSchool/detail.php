<?php
/**
* @comment view สำหรับหน้าจอรายงานคุณวุฒิการศึกษาและสถาบันการศึกษา (detail)
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.3.3
* @package 			core
* @author 			Wannapa thongtawee (wannapa@sapphire.co.th)
* @access 			public
* @created 			22/01/2016
*/

?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group <?php echo $classTitle ?>">รายงานจำนวนพนักงานจำแนกตามประเภทพนักงาน</div>
<!--สร้างตารางใหญ่รองรับตารางส่วนที่ 1 (ตารางสรุปคุณวุฒิฯ และกราฟคุณวุฒิ) และส่วนที่ 2 (ตารางข้อมูลพนักงานที่มีคุณวุฒิการศึกษาและสถาบันการศึกษา)-->
<table align="center" style="width:100%;"><br /><br />
	<!--สร้างตารางส่วนที่ 1 โดยการกำหนดค่าตารางครึ่งหนึ่งของหน้าจอ และใส่ค่าอาเรย์จำลองข้อมูลคุณวุฒิการศึกษาที่มีจำนวนพนักงานได้รับมากที่สุด 5 อันดับ-->
	<tr>
    	<td style="width:50%">
        	<table class="<?php echo $classTable?>" align="center">
                <thead>
                    <tr style="background:#eaeaea;">
                        <th colspan="3">คุณวุฒิการศึกษาที่มีจำนวนพนักงานได้รับมากที่สุด 5 อันดับ</td>
                    </tr>
                    <tr style="background:#eaeaea;">
                        <th style="width:20%">สถาบันฯ</th>
                        <th style="width:5%">คุณวุฒิ</th>
                        <th style="width:10%">จำนวนพนักงาน (คน)</th>    
                    </tr>
                </thead>
                <tbody>
                	<?php 
                	$i=1;
					foreach($tdAmount as $id => $detail){?>
                    <tr style="background-color:#FFF;">
                        <td class="text-left"><?php echo $detail->empSchool;?></td>
                        <td class="text-center"><?php echo $detail->empQualification;?></td>
                        <td class="text-right"><?php echo number_format($detail->empAmount); ?></td>
                    </tr>
                <?php $i++; } ?>
                </tbody>
            </table>
        </td>
        <!-- สำหรับใส่กราฟแสดงจำนวนคุณวุฒิการศึกษาที่มีจำนวนพนักงานได้รับมากที่สุด 5 อันดับ-->
        <td style="width:50%"><div style="height: 300px; margin: 0 auto" id='highchart'></div></td>
    </tr>

	<!--สร้างตารางส่วนที่ 2 โดยการผสานเซลล์ และใส่ค่าอาเรย์จำลองข้อมูลคุณวุฒิของพนักงานในองค์การ-->
    <tr style="width:100%">
    	<td colspan="2">
       		<table class="<?php echo $classTable?>" align="center">
            	 <thead>
                 	<tr style="background:#eaeaea;">
                    	<th style="width:5%">ลำดับ</th>
                        <th style="width:8%">รหัสพนักงาน</th>
                        <th style="width:20%">ชื่อ-นามสกุล</th>
                        <th style="width:20%">แผนก</th>
                        <th style="width:15%">กอง</th>
                        <th style="width:10%">ฝ่าย</th>
                        <th style="width:28%">สถาบันการศึกษา</th>
                        <th style="width:7%">คุณวุฒิ</th>
                    </tr>
                 </thead>
                 <tbody>
                 <?php $i=1; foreach($tdList as $id => $detail){ ?>
                    <tr style="background-color:#FFF;">
                            <td class="text-center"><?php echo $i; ?></td>
                            <td class="text-center"><?php echo $detail->empId;?></td>
                            <td class="text-left"><?php echo $detail->empName;?></td>
                            <td class="text-left"><?php echo $detail->empDepartment;?></td>
                            <td class="text-left"><?php echo $detail->empDivision;?></td>
                            <td class="text-left"><?php echo $detail->empCotton;?></td>
                            <td class="text-left"><?php echo $detail->empSchool;?></td>
                            <td class="text-center"><?php echo $detail->empQualification;?></td>
                    </tr>
                    <?php $i++; } ?>
                 </tbody>
            </table>
        </td>
    </tr>
</table>
<div class="text-center">
<?php
if($_GET['printPdf'] != 'true'){
?>
<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="ก่อนหน้า"/>
<img src="../../images/mea_hr/icon-next.png" class="btn-img" onclick="" title="ถัดไป"/>
<?php } ?>
</div>
</div>