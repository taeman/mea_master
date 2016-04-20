<?php
/**
* @comment view เพิ่มข้อมูลการละเมิด
* @projectCode
* @tor
* @package core
* @author Pinya (pinya@sapphire.co.th)
* @access public
* @created 18/04/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">ประวัติการใช้งาน (Log) [ ทั้งหมด : 2 รายการ]</div>
<table class="table">
    <thead>
          <tr bgcolor="#eaeaea">
            <th>ลำดับ</th>
            <th>ชื่อผู้ใช้งาน</th>
            <th>กลุ่มผู้ใช้งาน</th>
            <th>ประเภทเว็บเบราว์เซอร์</th>
            <th>วันเวลาที่เช้าใช้งาน</th>
            <th>วันเวลาที่ออกจากระบบ</th>
          </tr>
    </thead>
    <tbody>
      <?php
      $i=1; foreach($tdList as $id => $detail){ ?>
        <!-- <tr class="tr-link" onclick="document.location = '?controller=personal&fn=general&runid=<?php echo $detail->runid?>'"> -->
       <tr class="tr-link">
         <td class="text-center"><?php echo $i; ?></td>
         <td class="text-center"><?php echo $detail->user; ?></td>
         <td class="text-center"><?php echo $detail->gruop_user; ?></td>
         <td class="text-center"><?php echo $detail->type_browser; ?></td>
         <td class="text-center"><?php echo $detail->log_in; ?></td>
         <td class="text-center"><?php echo $detail->log_out; ?></td>
       </tr>
      <?php $i++; } ?>
    </tbody>
  </table>
</div>
<div style="display:none;">
  <a href='#export_gis' class='fancy-request' id='link_export'></a>
  <div id="export_gis">
    <div class="form-group title">ส่งออกข้อมูลเชื่อมโยงกับ WMS</div>
    <div class="form-group">
      <div class="col-md-12">
        <div class="col-md-4 text-right">รูปแบบไฟล์ : </div>
        <div class="col-md-8"><input type="radio" id="KML" name="file_type" value="KML">&nbsp;&nbsp;KML</div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <div class="col-md-4 text-right">&nbsp;</div>
        <div class="col-md-8"><input type="radio" id="XML" name="file_type" value="XML">&nbsp;&nbsp;XML</div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <div class="col-md-4 text-right">&nbsp;</div>
        <div class="col-md-8"><input type="radio" id="gml" name="file_type" value="gml">&nbsp;&nbsp;gml</div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <div class="col-md-4 text-right">&nbsp;</div>
        <div class="col-md-8"><input type="radio" id="KMZ" name="file_type" value="KMZ">&nbsp;&nbsp;KMZ</div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <div class="col-md-4 text-right">เลือกที่เก็บไฟล์ : </div>
        <div class="col-md-8"><input type="file" id="file_path" name="file_path"></div>
      </div>
    </div>
    <br>
    <div class="form-group">
      <div class="col-md-12 text-center">
        <button class="btn btn-default">ส่งออก</button>
        <button class="btn btn-default" onclick="$.fancybox.close();">ยกเลิก</button>
      </div>
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
