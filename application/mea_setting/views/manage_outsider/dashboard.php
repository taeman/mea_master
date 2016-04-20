<?php
/**
* @comment view สำหรับหน้าจอรายงานข้อมูลหน่วยงานภายนอก (dashboard)
* @projectCode 		PS58MKT
* @tor 				1.2.1
* @package 			core
* @author 			Amata Kongsaingern 
* @access 			public
* @created 			18/04/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">จัดการข้อมูลหน่วยงานภายนอก [ ทั้งหมด :  รายการ ]</div>
<table class="table" align="center" style="width:100%">
			<thead>
				<tr>
					<th width="10%">ลำดับ</th>
					<th width="30%">ชื่อหน่วยงาน</th>
          <th width="30%">ที่ตั้ง</th>
          <th width="30%">เอกสารที่เกี่ยวข้อง</th>
        </tr>
    	</thead >
			<tbody>
        <tr class="tr-link" onclick="document.location='?controller=manage_outsider&fn=add_outsider&id=10010'">
            <td align="center">1</td>
						<td align="lert">บริษัท ฟ ฟ้า จำกัด</td>
						<td align="lert">เชียงใหม่</td>
            <td align="lert"></td>
        </tr>
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
        <div class="col-md-4 text-right">ชื่อหน่วยงาน : </div>
        <div class="col-md-6"><input type="text" id="fullName" class="form-control" name="fullName" value=""></div>
      </div>
    </div>
	<div class="form-group">
      <div class="col-md-12">
        <div class="col-md-4 text-right">ที่ตั้ง : </div>
        <div class="col-md-6"><input type="text" id="place" class="form-control" name="place" value=""></div>
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
