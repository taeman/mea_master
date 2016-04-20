<?php
/**
* @comment view สำหรับหน้าจอรายงานจำนวนพนักงานจำแนกตามช่วงอายุและวุฒิการศึกษา
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.3.5
* @package 			core
* @author 			Bussarawadee Manorach
* @access 			public
* @created 			22/01/2016
*/


?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group <?php echo $classTitle ?>">รายงานคุณวุฒิการศึกษาของพนักงาน</div>
<table class="<?php echo $classTable?>" style="width:100%">
<tr>
	<td style="width:50%">
    	<table class="<?php echo $classTable?>">
        	<thead>
                <tr bgcolor="#eaeaea">
                    <th colspan="2">คุณวุฒิการศึกษาที่มีจำนวนพนักงานได้รับมากที่สุด 5 อันดับ</th>
                </tr>
                <tr bgcolor="#eaeaea">
                    <th>คุณวุฒิการศึกษา</th>
                    <th>จำนวนพนักงาน (คน)</th>
                </tr>
			</thead>
            <tbody>
            <?php 
             $i=1;
             foreach($summaryList as $id => $detail){ ?>
                <tr class>
                    <td style="width:20%" class="text-left"><?php echo $detail->educate; ?></td>
                    <td style="width:10%" class="text-right"><?php echo $detail->numberEmp; ?></td>
                </tr>
            <?php $i++; } ?>
            </tbody>
        </table>
    </td>
    <!-- เอาไว้ใส่กราฟ -->
    <td style="width:50%"><div style="height: 300px; margin: 0 auto" id='highchart'></div></td>
</tr>
<tr>
	<td colspan="2" style="width:100%">
    	<table class="<?php echo $classTable?>">
        	<thead>
                <tr bgcolor="#eaeaea">
                    <th>ลำดับ</th>
                    <th>รหัสพนักงาน</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ตำแหน่ง</th>
                    <th>แผนก</th>
                    <th>กอง</th>
                    <th>ฝ่าย</th>
                    <th>คุณวุฒิ</th>
                </tr>
			</thead>
            <tbody>
            <?php 
             $i=1;
             foreach($inforList as $id => $detail){ ?>
                <tr class>
                    <td class="text-center"><?php echo $i; ?></td>
                    <td class="text-center"><?php echo $detail->idEmp; ?></td>
                    <td class="text-left"><?php echo $detail->fullname; ?></td>
                    <td class="text-left"><?php echo $detail->position; ?></td>
                    <td class="text-left"><?php echo $detail->department; ?></td>
                    <td class="text-left"><?php echo $detail->division; ?></td>
                    <td class="text-left"><?php echo $detail->part; ?></td>
                    <td class="text-center"><?php echo $detail->education; ?></td>
                </tr>
            <?php $i++; } ?>
            </tbody>
        </table>
    </td>
</tr>
</table>
<div class="text-center">
<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="ก่อนหน้า"/>
<img src="../../images/mea_hr/icon-next.png" class="btn-img" onclick="" title="ถัดไป"/>
</div>
</div>