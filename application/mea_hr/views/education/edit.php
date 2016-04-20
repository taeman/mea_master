<?php
/**
* @comment view สำหรับหน้า dashboard ของ education
* @projectCode 		57LIQ01
* @tor 				3.2.4.2.2.1
* @package 			core
* @author 			Pinya Thanagorntiraporn
* @access 			public
* @created 			18/01/2016
*/
?>
<div class="block" style="width:99%; margin:0.5%;">
<div class="form-group title">ประวัติการศึกษา</div>
<div class="block">ชื่อ - นามสกุล   :   <?php echo $personData->prename_th.' '.$personData->name_th.'&nbsp;&nbsp;'.$personData->surname_th?></div>
<table class="table" id="table_data">
<thead>
	<tr>
        <th>ลำดับ</th>
    	<th>สถานศึกษา</th>
        <th>ตั้งแต่ - ถึง</th>
        <th>วุฒิที่ได้รับ</th>
        <th>สาขาวิชาเอก</th>
        <th>จัดการ</th>
    </tr>
</thead>
 <tbody id="listItems"></tbody>
<tfoot>
    <tr>
            <td colspan="5">
            <button type="button" class="btn btn-primary" onclick="addItem()"><?php echo 'เพิ่ม'; ?></button>
        </td>
    </tr>
    <tfoot>
</table>
</div>
<script type="text/javascript">
function sendItem(){
    for(var key in listTmp) if(listTmp[key][4]==false) saveItem(key);
	var url = '';
	$.post(url, {list: listTmp} ,function(data){
		if(data == 'SUCCESS'){
			
		}else{
			alert('<?php echo 'ไม่สามารถบันทึกข้อมูลได้'; ?>');
		}
	});
}
$(function() {
	$("body").click(function(e) {
			count = 0;//console.log(listTmp);
			for(var key in listTmp) if(listTmp[key][4]==false) count = count+1;//alert(count);
			if(count > 0){
				if(($('.fancybox-skin').parents('.fancybox-close').prevObject.length>0)
				||($(e.target).parents('#table_data').size()>0)
				||($(e.target).parents('.fancybox-overlay').size()>0)
				||($(e.target).parents('.tdTools').size()>0)){
					//console.log("Inside div");
				}else{
					//console.log("Outside div");
					save = -1;
					for(var key in listTmp) if(listTmp[key][4]==false) save = key;
					if(save > -1) saveItem(parseInt(save));

				}
			}

	});
});

var listTmp = [];
<?php
if(count($tdList)>0){
	foreach($tdList as $key => $value){
		echo 'listTmp.push(['
			.'\''.$value->school.'\','
			.'\''.$value->dateLableStart.'\','
			.'\''.$value->degree.'\','
			.'\''.$value->major.'\','
			.'true,'
                        .'\''.$value->id.'\','
                        .'\''.$value->number.'\','
                        .'\''.$value->dateLableEnd.'\','
		.']);';
	}
}
?>
$(document).ready(function(){
    refreshItems();
});
function addItem(){
	for(var key in listTmp) if(listTmp[key][4]==false) saveItem(key);//return false;
	rowIndex = listTmp.push(['', '', '', '', false, '', '', '']);
	refreshItems();
	//autoComp();
}
function delItem(index, unchk){
	if(unchk==true){
		listTmp.splice(index, 1);
	}else{
		if(confirm('<?php echo 'ต้องการลบข้อมูล?'; ?>')){
			if((listTmp[index][5] != undefined)&&(listTmp[index][5]!=null)&&(listTmp[index][5]!='')){
				var url = '';
				$.post(url, {id: '',list: listTmp[index]} ,function(data){
			//console.log(data);
                                    if(data == 'SUCCESS'){
						listTmp.splice(index, 1);refreshItems();
					}else{
						alert('<?php echo 'ไม่สามารถลบข้อมูลได้'; ?>');
					}
				});
			}else{
				listTmp.splice(index, 1);
			}
		}
	}
	refreshItems();
}
function editItem(index){
	for(var key in listTmp) if(listTmp[key][4]==false) saveItem(key);//return false;
	listTmp[index][4] = false;
	refreshItems();
}
function saveItem(index){
	if(($('#school').val()=='')||
		($('#degree').val()=='')
	){
		delItem(index, true);
		return false;
	}
	listTmp[index][0] = $('#school').val();
	listTmp[index][1] = $('#dateLableStart').val();
        listTmp[index][2] = $('#degree').val();
	listTmp[index][3] = $('#major').val();
	listTmp[index][4] = true;
        listTmp[index][6] = $('#number').val();
        listTmp[index][7] = $('#dateLableEnd').val();
        for(var i=0;i<parseInt(listTmp.length);i++){
            console.log(listTmp[i][6]+'-'+listTmp[index][6]);
            if(listTmp[i][6]==listTmp[index][6] && i!=index){
                console.log(listTmp[i][6]+'-'+listTmp[index][6]);
                listTmp[i][6]=(parseInt(index)+1);
            }
        }
        refreshItems();
}
function refreshItems(){
	$('#listItems').html('');
	for(var key in listTmp){
		if(listTmp[key][4]==true){
			$('#listItems').append(
				'<tr id="rowIndex_'+key+'">\n'
                                    +'<td class="center">'+listTmp[key][6]+'</td>\n'
                                    +'<td class="center">'+listTmp[key][0]+'</td>\n'
                                    +'<td class="center">'+listTmp[key][1]+'-'+listTmp[key][7]+'</td>\n'
                                    +'<td class="center">'+listTmp[key][2]+'</td>\n'
                                    +'<td class="center">'+listTmp[key][3]+'</td>\n'
                                    +'<td class="tdTools"><a onclick="editItem('+(key)+');">แก้ไข</a> <a onclick="delItem('+(key)+', false);">ลบ</a></td>'
				+'</tr>\n'
			);
		}else{
                        tmp_number = "";
			tmp_school = "";
			tmp_dateLableStart = "";
                        tmp_dateLableEnd = "";
                        tmp_degree = "";
			tmp_major = "";
			if(listTmp[key][4]==false){
                                tmp_number = listTmp[key][6];
				tmp_school = listTmp[key][0];
                                tmp_dateLableStart = listTmp[key][1];
                                tmp_dateLableEnd = listTmp[key][7];
                                tmp_degree = listTmp[key][2];
                                tmp_major = listTmp[key][3];
			}
    var d = new Date();
    var year_now = d.getFullYear();
    year_now = parseInt(year_now)+543;
    var listNumber = '<select class="form-control" id="number">';
                    for(var key2 in listTmp){
                        if((parseInt(key2)+1)==listTmp[key][6]){
                           var selected1 = 'selected';
                        }else{
                           var selected1 = ''; 
                        }
                      listNumber +='<option value="'+(parseInt(key2)+1)+'" '+selected1+'>'+(parseInt(key2)+1)+'</option>';  
                    }
        listNumber +='</select>';
    var listYearStart = '<select class="form-control" id="dateLableStart">';
                    for(i=year_now;i>=(parseInt(year_now)-80);i--){
                        if(i==tmp_dateLableStart){
                           var selected2 = 'selected';
                        }else{
                           var selected2 = ''; 
                        }
                      listYearStart +='<option value="'+i+'" '+selected2+'>'+i+'</option>';  
                    }
        listYearStart +='</select>';
    var listYearEnd = '<select class="form-control" id="dateLableEnd">';
                    for(i=year_now;i>=(parseInt(year_now)-80);i--){
                        if(i==tmp_dateLableEnd){
                           var selected3 = 'selected';
                        }else{
                           var selected3 = ''; 
                        }
                      listYearEnd +='<option value="'+i+'" '+selected3+'>'+i+'</option>';  
                    }
        listYearEnd +='</select>';
			$('#listItems').append(
				'<tr id="rowIndex_'+key+'">\n'
                	+'<td class="center">'+listNumber+'</td>\n'
                	+'<td class="school"><input type="text" id="school" value="'+tmp_school+'" class="form-control"></td>\n'
                        +'<td class="dateLable"><div class="form-group">'+listYearStart+'-'+listYearEnd+'</div></td>\n'
                        +'<td class="degree"><input type="text" id="degree" value="'+tmp_degree+'" class="form-control"></td>\n'
                        +'<td class="major"><input type="text" id="major" value="'+tmp_major+'" class="form-control"></td>\n'
                	+'<td class="tdTools"><a onclick="delItem('+(key)+', false);" style="cursor: pointer;">ลบ</a></td>'
				+'</tr>\n'
			);
		}
	}
}
</script>