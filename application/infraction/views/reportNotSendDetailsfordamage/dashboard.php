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
<div class="form-group <?php echo $classTitle ?>">รายงานการกระทำละเมิดที่การไฟฟ้าเขตยังไม่ส่งรายละเอียดค่าเสียหายให้กับ ฝบก.</div>
<table class="<?php echo $classTable?>" style="width:100%">
<tr>
	<td style="width:50%">
    	<table class="<?php echo $classTable?>">
        	<thead>
                <tr bgcolor="#eaeaea">
                    <th colspan="2">เหตุการณ์ที่มีการละเมิดมากที่สุด 5 อันดับ</th>
                </tr>
                <tr bgcolor="#eaeaea">
                    <th>การกระทำการละเมิด</th>
                    <th>จำนวนการละเมิด (รายการ)</th>
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
									<th>วันที่กระทำการละเมิด</th>
									<th>ชื่อ-สกุล ผู้กระทำการละเมิด</th>
									<th>การกระทำการละเมิด</th>
									<th>สถานที่ที่กระทำการละเมิด</th>
									<th>หน่วยงานที่รับผิดชอบ</th>
									<th>สถานะการดำเนินการของเจ้าหน้าที่</th>
                </tr>
			</thead>
            <tbody>
            <?php
 						$i=1; foreach($tdList as $id => $detail){ ?>
						 <tr class="tr-link" onclick="document.location = '?controller=personal&fn=general&runid=<?php echo $detail->runid?>'">
							 <td class="text-center"><?php echo $i; ?></td>
							 <td class="text-center"><?php echo $detail->infraction_date; ?></td>
							 <td class="text-center"><?php echo $detail->infraction_name; ?></td>
							 <td class="text-center"><?php echo $detail->infraction_action; ?></td>
							 <td class="text-center"><?php echo $detail->infraction_place; ?></td>
							 <td class="text-center"><?php echo $detail->infraction_institution; ?></td>
							 <td class="text-center"><?php echo $detail->infraction_status; ?></td>
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
