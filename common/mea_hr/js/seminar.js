// JavaScript Document
function checkForm_keyin(){
	var text = '';
	if(!$('.stype').is(":checked")){
		text = '- กรุณาเลือกประเภท\n';
	}
	if($.trim($('#place').val()) == ''){
		text += '- กรุณาระบุสถานที่ฝึกอบรมและดูงาน\n';
	}
	if($.trim($('#datestart').val()) == ''){
		text += '- กรุณาระบุตั้งแต่วันที่\n';
	}
	
	if(text != ''){
		alert(text);	
	}else{
		saveForm_keyin();
	}
}

function saveForm_keyin(){
	var jsonData = {"action" : $('#sql_ation').val(), "data": [], "where" :[]}
	
	jsonData.data = {
		"id" : $('#id').val(),
		"runno" : $('#runno').val(),
		"stype" : $('input[class=stype]:checked').val(),
		"startdate" : $('#datestart').val(),
		"enddate" : $('#dateend').val(),
		"subject" : $('#subject').val(),
		"place" : $('#place').val(),
		"kp7_active" : '1',
		"updatetime" : 'NOW()'
	}
	
	if($('#runid').val() != ''){
		jsonData.where = {
		"runid" : $('#runid').val()
		}
	}
	
	var fieldData = JSON.stringify(jsonData);
	$.ajax({
		type: "POST",
		url: "../../common/mea_hr/ajax/ajax_save_seminar.php",
		data: {data:fieldData},
		success: function(msg){
			var text = msg.split('||');
			if($.trim(text[0]) == 'true'){
				window.location = '?controller=seminar&fn=dashboard';
			}else{
				alert('บันทึกข้อมูลไม่สำเร็จ');
			}
		}
	});
}

function deleteData(runid){
	if(confirm('ท่าต้องการลบข้อมูลใช่หรือไม่')){
		var jsonData = {"where" :[]}
		jsonData.where = {
		"runid" : runid
		}
		var fieldData = JSON.stringify(jsonData);
		$.ajax({
			type: "POST",
			url: "../../common/mea_hr/ajax/ajax_delete_seminar.php",
			data: {data:fieldData},
			success: function(msg){
				var text = msg.split('||');
				if($.trim(text[0]) == 'true'){
					window.location = '?controller=seminar&fn=dashboard';
				}else{
					alert('ลบข้อมูลไม่สำเร็จ');
					console.log(msg);
				}
			}
		});
	}
}