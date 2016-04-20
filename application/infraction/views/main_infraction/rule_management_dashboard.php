<?php
/**
* @comment view หน้า dashboard จัดการเอกสารระเบียบข้อกำหนดหรือกฏหมายที่เกี่ยวข้อง
* @projectCode 
* @tor 
* @package core
* @author Pinya
* @access public
* @created 18/04/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">จัดการเอกสารระเบียบข้อกำหนดหรือกฏหมายที่เกี่ยวข้อง[ทั้งหมด : <?php echo count($tdList); ?> รายการ]</div>
<table class="table">
<thead>
	<tr>
    	<th>ลำดับ</th>
        <th>ชื่อระเบียบหรือกฏหมายการกระทำละเมิด</th>
        <th>รายละเอียด ข้อกำหนดหรือกฏหมาย</th>
        <th>เอกสารที่เกี่ยวข้อง</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($tdList as $id => $detail){ ?>
	<tr class="tr-link" onclick="document.location = '?controller=main_infraction&fn=add_rule&id=1'">
    	<td class="text-center"><?php echo $i; ?></td>
        <td class="text-center"><?php echo $detail->ruleName; ?></td>
        <td class="text-center"><?php echo $detail->ruleDetail; ?></td>
		<td class="text-center"><?php foreach($detail->uploadFile as $key => $value){ ?>
			<a href=""><?php echo $value; ?></a><br>
		<?php } ?></td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
<div class="text-center">
<img src="../../images/mea_hr/icon-prev.png" class="btn-img" onclick="" title="ก่อนหน้า"/>
<img src="../../images/mea_hr/icon-next.png" class="btn-img" onclick="" title="ถัดไป"/>
</div>
</div>
<div style="display:none;">
  <a href='#export_gis' class='fancy-request' id='link_export'></a>
  <div id="export_gis">
    <div class="form-group title">ค้นหา</div>
    <div class="form-group">
      <div class="col-md-12">
        <div class="col-md-5 text-right">รายละเอียดข้อกำหนดหรือกฏหมาย : </div>
        <div class="col-md-6"><input type="text" id="fullName" class="form-control" name="fullName" value=""></div>
      </div>
    </div>
	<div class="form-group">
        <div class="col-md-12 text-center"><input type="button" value="ค้นหา">&nbsp;&nbsp;&nbsp;<input type="button" value="ยกเลิก"></div>
    </div>
  </div>
</div>
<script>
$(".fancy-request").fancybox({
    'width': '700px',
    'height': '350px',
    'autoScale': true,
    'autoSize': false,
    'transitionIn': 'none',
    'transitionOut': 'none',
    'type': 'inline'
});
</script>