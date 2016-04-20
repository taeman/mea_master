<?php
/**
 * @comment 		datepickerthai
 * @projectCode	57LIQ01
 * @tor
 * @package			core
 * @author			Kiatisak Chansawang
 * @created			20/06/2015
 * @access			public
 */
?>
<script>
	function thaidate(){
		if($(".datethai")){
			$(".datethai").parent().addClass("parent-datethai");
			var dateBefore=null;
			$(".datethai").datepicker({
				dateFormat: 'dd-mm-yy',
				showOn: 'button',
				buttonImage: '../../images/global/icon-calendar.png',
				buttonImageOnly: true,
				dayNamesMin: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
				monthNamesShort: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
				changeMonth: true,
				changeYear: true ,
				beforeShow:function(){
					setTimeout(function(){
						$.each($(".ui-datepicker-year option"),function(j,k){
							var textYear=parseInt($(".ui-datepicker-year option").eq(j).val())+543;
							$(".ui-datepicker-year option").eq(j).text(textYear);
						});
					},50);

				},
				onChangeMonthYear: function(){
					setTimeout(function(){
						$.each($(".ui-datepicker-year option"),function(j,k){
							var textYear=parseInt($(".ui-datepicker-year option").eq(j).val())+543;
							$(".ui-datepicker-year option").eq(j).text(textYear);
						});
					},50);
				},
				onClose:function(){
					if($(this).val()!="" && $(this).val()==dateBefore){
						var arrayDate=dateBefore.split("-");
						var ChristianEra= arrayDate[2];
						arrayDate[2]=parseInt(arrayDate[2])+543;
						$(this).val(arrayDate[0]+"-"+arrayDate[1]+"-"+arrayDate[2]);
						var trueval = $(this).attr('name');
						trueval = trueval.substring(0, trueval.length - 6);
						$("input[name="+trueval+"]").val(ChristianEra+"-"+arrayDate[1]+"-"+arrayDate[0]);
					}
				},
				onSelect: function(dateText, inst){
					dateBefore=$(this).val();
					var monthNamesShort = ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
					var arrayDate=dateText.split("-");
					var ChristianEra= arrayDate[2];
					var trueval = $(this).attr('id');
					trueval = trueval.substring(0, trueval.length - 6);
					$("#"+trueval).val(ChristianEra+"-"+arrayDate[1]+"-"+arrayDate[0]);
					arrayDate[0]=parseInt(arrayDate[0]);
					arrayDate[1]=parseInt(arrayDate[1]);
					arrayDate[2]=parseInt(arrayDate[2])+543;
					$(this).val(arrayDate[0]+" "+monthNamesShort[arrayDate[1]-1]+" "+arrayDate[2]);
				}
			});
		}
		if($(".datethaiStart") && $(".datethaiEnd")){
			$(".datethaiStart").parent().addClass("parent-datethai");
			$(".datethaiEnd").parent().addClass("parent-datethai");
			var dateBefore=null;
			var monthNamesShort = ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
			$(".datethaiStart").datepicker({
				dateFormat: 'dd-mm-yy',
				showOn: 'button',
				buttonImage: '../../images/global/icon-calendar.png',
				buttonImageOnly: true,
				dayNamesMin: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
				monthNamesShort: monthNamesShort,
				changeMonth: true,
				changeYear: true ,
				beforeShow:function(){
					setTimeout(function(){
						$.each($(".ui-datepicker-year option"),function(j,k){
							var textYear=parseInt($(".ui-datepicker-year option").eq(j).val())+543;
							$(".ui-datepicker-year option").eq(j).text(textYear);
						});
					},50);

				},
				onChangeMonthYear: function(){
					setTimeout(function(){
						$.each($(".ui-datepicker-year option"),function(j,k){
							var textYear=parseInt($(".ui-datepicker-year option").eq(j).val())+543;
							$(".ui-datepicker-year option").eq(j).text(textYear);
						});
					},50);
				},
				onClose:function(){
					if($(this).val()!="" && $(this).val()==dateBefore){
						var arrayDate=dateBefore.split("-");
						var ChristianEra= arrayDate[2];
						arrayDate[2]=parseInt(arrayDate[2])+543;
						$(this).val(arrayDate[0]+"-"+arrayDate[1]+"-"+arrayDate[2]);
						var trueval = $(this).attr('name');
						trueval = trueval.substring(0, trueval.length - 6);
						$("input[name="+trueval+"]").val(ChristianEra+"-"+arrayDate[1]+"-"+arrayDate[0]);
					}
				},
				onSelect: function(dateText, inst){
					dateBefore=$(this).val();
					var arrayDate=dateText.split("-");
					var ChristianEra= arrayDate[2];
					var trueval = $(this).attr('id');
					trueval = trueval.substring(0, trueval.length - 6);
					$("#"+trueval).val(ChristianEra+"-"+arrayDate[1]+"-"+arrayDate[0]);
					arrayDate[0]=parseInt(arrayDate[0]);
					arrayDate[1]=parseInt(arrayDate[1]);
					arrayDate[2]=parseInt(arrayDate[2])+543;
					$(this).val(arrayDate[0]+" "+monthNamesShort[arrayDate[1]-1]+" "+arrayDate[2]);
					idEndDate = trueval.replace('start','end');
					console.log(idEndDate);
					tmpEndDate = $("#"+idEndDate+"_Joker").val();
					$("#"+idEndDate+"_Joker").datepicker("option", "minDate", dateText);
					$("#"+idEndDate+"_Joker").val(tmpEndDate);
				}
			});
			var dateBefore=null;
			$(".datethaiEnd").datepicker({
				dateFormat: 'dd-mm-yy',
				showOn: 'button',
				buttonImage: '../../images/global/icon-calendar.png',
				buttonImageOnly: true,
				dayNamesMin: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
				monthNamesShort: monthNamesShort,
				changeMonth: true,
				changeYear: true ,
				beforeShow:function(){
					setTimeout(function(){
						$.each($(".ui-datepicker-year option"),function(j,k){
							var textYear=parseInt($(".ui-datepicker-year option").eq(j).val())+543;
							$(".ui-datepicker-year option").eq(j).text(textYear);
						});
					},50);

				},
				onChangeMonthYear: function(){
					setTimeout(function(){
						$.each($(".ui-datepicker-year option"),function(j,k){
							var textYear=parseInt($(".ui-datepicker-year option").eq(j).val())+543;
							$(".ui-datepicker-year option").eq(j).text(textYear);
						});
					},50);
				},
				onClose:function(){
					if($(this).val()!="" && $(this).val()==dateBefore){
						var arrayDate=dateBefore.split("-");
						var ChristianEra= arrayDate[2];
						arrayDate[2]=parseInt(arrayDate[2])+543;
						$(this).val(arrayDate[0]+"-"+arrayDate[1]+"-"+arrayDate[2]);
						var trueval = $(this).attr('name');
						trueval = trueval.substring(0, trueval.length - 6);
						$("input[name="+trueval+"]").val(ChristianEra+"-"+arrayDate[1]+"-"+arrayDate[0]);
					}
				},
				onSelect: function(dateText, inst){
					dateBefore=$(this).val();
					var arrayDate=dateText.split("-");
					var ChristianEra= arrayDate[2];
					var trueval = $(this).attr('id');
					trueval = trueval.substring(0, trueval.length - 6);
					$("#"+trueval).val(ChristianEra+"-"+arrayDate[1]+"-"+arrayDate[0]);
					arrayDate[0]=parseInt(arrayDate[0]);
					arrayDate[1]=parseInt(arrayDate[1]);
					arrayDate[2]=parseInt(arrayDate[2])+543;
					$(this).val(arrayDate[0]+" "+monthNamesShort[arrayDate[1]-1]+" "+arrayDate[2]);
					idStartDate = trueval.replace('end','start');
					console.log(idStartDate);
					tmpStartDate = $("#"+idStartDate+"_Joker").val();
					$("#"+idStartDate+"_Joker").datepicker("option", "maxDate", dateText);
					$("#"+idStartDate+"_Joker").val(tmpStartDate);

				}
			});
		}
	}

	function thaidateformat(d){
		var gD = new Date(d);
		var thmonth = ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
		return gD.getDate()+' '+thmonth[gD.getMonth()]+' '+(gD.getFullYear()+543);
	}
	function thaidateformat_pattern(format, date){
		var myDate = new Date(date);
		return myDate.format(format);
	}

	(function() {
		Date.shortMonths = ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'];
		Date.longMonths = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
		Date.shortDays = ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'];
		Date.longDays = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];

		// defining patterns
		var replaceChars = {
			// Day
			d: function() { return (this.getDate() < 10 ? '0' : '') + this.getDate(); },
			D: function() { return Date.shortDays[this.getDay()]; },
			j: function() { return this.getDate(); },
			l: function() { return Date.longDays[this.getDay()]; },
			N: function() { return (this.getDay() == 0 ? 7 : this.getDay()); },
			S: function() { return (this.getDate() % 10 == 1 && this.getDate() != 11 ? 'st' : (this.getDate() % 10 == 2 && this.getDate() != 12 ? 'nd' : (this.getDate() % 10 == 3 && this.getDate() != 13 ? 'rd' : 'th'))); },
			w: function() { return this.getDay(); },
			z: function() { var d = new Date(this.getFullYear(),0,1); return Math.ceil((this - d) / 86400000); }, // Fixed now
			// Week
			W: function() {
				var target = new Date(this.valueOf());
				var dayNr = (this.getDay() + 6) % 7;
				target.setDate(target.getDate() - dayNr + 3);
				var firstThursday = target.valueOf();
				target.setMonth(0, 1);
				if (target.getDay() !== 4) {
					target.setMonth(0, 1 + ((4 - target.getDay()) + 7) % 7);
				}
				return 1 + Math.ceil((firstThursday - target) / 604800000);
			},
			// Month
			F: function() { return Date.longMonths[this.getMonth()]; },
			m: function() { return (this.getMonth() < 9 ? '0' : '') + (this.getMonth() + 1); },
			M: function() { return Date.shortMonths[this.getMonth()]; },
			n: function() { return this.getMonth() + 1; },
			t: function() {
				var year = this.getFullYear(), nextMonth = this.getMonth() + 1;
				if (nextMonth === 12) {
					year = year++;
					nextMonth = 0;
				}
				return new Date(year, nextMonth, 0).getDate();
			},
			// Year
			L: function() { var year = this.getFullYear(); return (year % 400 == 0 || (year % 100 != 0 && year % 4 == 0)); },   // Fixed now
			o: function() { var d  = new Date(this.valueOf());  d.setDate(d.getDate() - ((this.getDay() + 6) % 7) + 3); return d.getFullYear();}, //Fixed now
			y: function() { return this.getFullYear(); },
			Y: function() { return this.getFullYear()+543; },
			// Time
			a: function() { return this.getHours() < 12 ? 'am' : 'pm'; },
			A: function() { return this.getHours() < 12 ? 'AM' : 'PM'; },
			B: function() { return Math.floor((((this.getUTCHours() + 1) % 24) + this.getUTCMinutes() / 60 + this.getUTCSeconds() / 3600) * 1000 / 24); }, // Fixed now
			g: function() { return this.getHours() % 12 || 12; },
			G: function() { return this.getHours(); },
			h: function() { return ((this.getHours() % 12 || 12) < 10 ? '0' : '') + (this.getHours() % 12 || 12); },
			H: function() { return (this.getHours() < 10 ? '0' : '') + this.getHours(); },
			i: function() { return (this.getMinutes() < 10 ? '0' : '') + this.getMinutes(); },
			s: function() { return (this.getSeconds() < 10 ? '0' : '') + this.getSeconds(); },
			u: function() { var m = this.getMilliseconds(); return (m < 10 ? '00' : (m < 100 ?
		'0' : '')) + m; },
			// Timezone
			e: function() { return /\((.*)\)/.exec(new Date().toString())[1]; },
			I: function() {
				var DST = null;
					for (var i = 0; i < 12; ++i) {
							var d = new Date(this.getFullYear(), i, 1);
							var offset = d.getTimezoneOffset();

							if (DST === null) DST = offset;
							else if (offset < DST) { DST = offset; break; }                     else if (offset > DST) break;
					}
					return (this.getTimezoneOffset() == DST) | 0;
				},
			O: function() { return (-this.getTimezoneOffset() < 0 ? '-' : '+') + (Math.abs(this.getTimezoneOffset() / 60) < 10 ? '0' : '') + (Math.abs(this.getTimezoneOffset() / 60)) + '00'; },
			P: function() { return (-this.getTimezoneOffset() < 0 ? '-' : '+') + (Math.abs(this.getTimezoneOffset() / 60) < 10 ? '0' : '') + (Math.abs(this.getTimezoneOffset() / 60)) + ':00'; }, // Fixed now
			T: function() { return this.toTimeString().replace(/^.+ \(?([^\)]+)\)?$/, '$1'); },
			Z: function() { return -this.getTimezoneOffset() * 60; },
			// Full Date/Time
			c: function() { return this.format("Y-m-d\\TH:i:sP"); }, // Fixed now
			r: function() { return this.toString(); },
			U: function() { return this.getTime() / 1000; }
		};

		// Simulates PHP's date function
		Date.prototype.format = function(format) {
			var date = this;
			return format.replace(/(\\?)(.)/g, function(_, esc, chr) {
				return (esc === '' && replaceChars[chr]) ? replaceChars[chr].call(date) : chr;
			});
		};

	}).call(this);

	$(document).ready(function(){
		thaidate();
	});
</script>
