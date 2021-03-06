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
<div class="form-group <?php echo $classTitle ?>">รายงานการกระทำละเมิดที่ผู้ละเมิดชำระเงิน/ค้างชำระ</div>
<table class="<?php echo $classTable?>" style="width:100%">
<tr>
	<td style="width:50%">
    	<table class="<?php echo $classTable?>">
        	<thead>
                <tr bgcolor="#eaeaea">
                    <th>สถานะการชำระเงิน</th>
                    <th>จำนวน(รายการ)</th>
                    <th>จำนวนเงิน(บาท)</th>
                </tr>
			</thead>
            <tbody>
            <?php
             $i=1;
             foreach($summaryList as $id => $detail){ ?>
                <tr class>
                    <td style="width:20%" class="text-left"><?php echo $detail->status; ?></td>
                    <td style="width:10%" class="text-right"><?php echo $detail->number; ?></td>
					<td style="width:10%" class="text-right"><?php echo $detail->money; ?></td>
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
									<th>ค่าปรับ(บาท)</th>
									<th>สถานะการชำระเงิน</th>
                </tr>
			</thead>
            <tbody>
            <?php
 						$i=1; foreach($tdList as $id => $detail){ ?>
						 <tr class="tr-link" onclick="$('a.fancy-request').trigger('click');">
							 <td class="text-center"><?php echo $i; ?></td>
							 <td class="text-center"><?php echo $detail->infraction_date; ?></td>
							 <td class="text-center"><?php echo $detail->infraction_name; ?></td>
							 <td class="text-center"><?php echo $detail->infraction_action; ?></td>
							 <td class="text-center"><?php echo $detail->infraction_place; ?></td>
							 <td class="text-center"><?php echo $detail->infraction_institution; ?></td>
							 <td class="text-center"><?php echo $detail->infraction_money; ?></td>
							 <td class="text-center"><?php echo $detail->infraction_moneyStatus; ?></td>
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
<div style="display:none;">
  <a href='#export_gis' class='fancy-request' id='link_export'></a>
  <div id="export_gis">
    <div class="form-group title">ข้อมูลการละเมิด</div>
<form name="infraction_form" method="POST" action="" enctype="multipart/form-data">
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">ชื่อ - สกุล : </label>
				<div class="col-md-8"><?php echo $data['fullName']; ?></div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">การกระทำการละเมิด : </label>
                <div class="col-md-8"><?php echo $data['infraction']; ?></div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">สถานที่กระทำ : </label>
                <div class="col-md-8"><?php echo $data['place']; ?></div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">ภาพถ่ายที่เกี่ยวข้อง : </label>
                <div  class="col-md-8">
					<?php
					if(isset($data['photo'])){
					foreach($data['photo'] as $key => $value){ ?>
						<a href=""><?php echo $value."<br>"; ?></a>
					<?php }
					} ?>
                </div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">แนบเอกสารที่เกี่ยวข้อง : </label>
                <div  class="col-md-8">
					<?php 
					if(isset($data['uploadFile'])){
					foreach($data['uploadFile'] as $key => $value){ ?>
						<a href=""><?php echo $value."<br>"; ?></a>
					<?php }
					} ?>
                </div>
            </div>
        </div>
    </div>
	<div class="col-md-6">
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">วันที่กระทำ : </label>
                <div  class="col-md-8"><?php echo $data['infractionDate']; ?></div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">หน่วยงานที่รับผิดชอบ : </label>
                <div  class="col-md-8"><?php echo $data['department']; ?></div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">สถานะการกำเนินการของเจ้าหน้าที่ : </label>
                <div  class="col-md-8"><?php echo $data['status']; ?></div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">ประเภทอุปกรณ์ : </label>
                <div  class="col-md-8"><?php echo $data['deviceType']; ?></div>
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right">ตำแหน่งที่กระทำการละเมิด : </label>
                <div  class="col-md-4">ละติจูด <?php echo $data['latitude']; ?></div>
				<div  class="col-md-4">ลองจิจูด <?php echo $data['longitude']; ?></div>
            </div>
        </div>
	</div>
</div>
</form>
  </div>
</div>
<script>
$(".fancy-request").fancybox({
    'width': '900px',
    'height': '500px',
    'autoScale': true,
    'autoSize': false,
    'transitionIn': 'none',
    'transitionOut': 'none',
    'type': 'inline'
});
</script>
