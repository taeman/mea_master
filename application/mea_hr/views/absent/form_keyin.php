<?php
/**
* @comment view บันทึกข้อมูลความผิดทางวินัย (from_keyin)
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Wannapa Thongtawee (wannapa@sapphire.co.th)
* @access public
* @created 19/01/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">จำนวนวันลาหยุดราชการ ขาดราชการ มาสาย -> เพิ่ม/ลบ/แก้ไข ข้อมูล</div>
<div class="block" style="width:100%">ชื่อ / นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div><br /><br />
<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right"> พ.ศ. : </label>
                <div  class="col-md-3">
                    <select id="year" name="year" class="form-control selectpicker">
                        <?php $id_now=date('Y')+543; for($i=$id_now;$i>($id_now-80);$i--){ ?>
                        <option value="<?php echo $i; ?>" <?php echo ($detail[$id]->year==$i)?'selected':''; ?>><?php echo $i; ?></option>  
                                <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
                <div class="col-md-12">
                        <label class="col-md-4 control-label text-right"> ลากิจ : </label>
                        <div  class="col-md-4">
                            <input type="number" class="form-control" name="mission" id="mission" value="<?php echo $detail[$id]->mission; ?>">
                        </div>
                        <label class="col-md-1 control-label"> วัน</label>
                </div>
        </div>
        
        <div class="form-group">
                <div class="col-md-12">
                        <label class="col-md-4 control-label text-right"> มาสาย : </label>
                        <div  class="col-md-4">
                            <input type="number" class="form-control" name="late" id="late" value="<?php echo $detail[$id]->late; ?>">
                        </div>
                        <label class="col-md-1 control-label">วัน</label>
                </div>
        </div>
        <div class="form-group">
                <div class="col-md-12">
                        <label class="col-md-4 control-label text-right"> ลาศึกษาต่อ : </label>
                        <div  class="col-md-4">
                            <input type="number" class="form-control" name="study" id="study" value="<?php echo $detail[$id]->study; ?>">
                        </div>
                        <label class="col-md-1 control-label">วัน</label>
                </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
                <div class="col-md-12">
                        <label class="col-md-4 control-label text-right">&nbsp;</label>
                </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right"> ลาป่วย : </label>
                <div  class="col-md-4">
                    <input type="number" class="form-control" name="sick" id="sick" value="<?php echo $detail[$id]->sick; ?>">
                </div>
                <label class="col-md-1 control-label"> วัน</label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label class="col-md-4 control-label text-right"> ลาพักผ่อน : </label>
                <div  class="col-md-4">
                    <input type="number" class="form-control" name="vacation" id="vacation" value="<?php echo $detail[$id]->vacation; ?>">
                </div>
                <label class="col-md-1 control-label">วัน</label>
            </div>
        </div>
        <div class="form-group">
                <div class="col-md-12">
                        <label class="col-md-4 control-label text-right"> ขาดราชการ : </label>
                        <div  class="col-md-4">
                            <input type="number" class="form-control" name="absent" id="absent" value="<?php echo $detail[$id]->absent; ?>">
                        </div>
                        <label class="col-md-1 control-label">วัน</label>
                </div>
        </div>
    </div>
</div>
</div>