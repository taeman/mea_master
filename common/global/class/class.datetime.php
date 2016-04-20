<?php
/**
* @comment class หลักของระบบ mea_hr
* @projectCode 57LIQ01
* @tor 3.2.4.2
* @package core
* @author Kiatisak  Chansawang
* @access public
* @created 06/01/2016
*/
class dateAndTime{
	private $monthname = array( "","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน", "กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
	private $shortmonth = array( "","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.", "ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค."); 
	
	function date_eng2thai($date,$add=0,$dismonth="L"/*รูปแบบเดือน */,$disyear="L"){
		if($date!=""){
			$date=substr($date,0,10);
			list($year,$month,$day) = split('[/.-]', $date);  
			if($dismonth=="S"){
				$month=$this->shortmonth[$month*1] ; 
			}else{
				$month=$this->monthname[$month*1] ; 
			}
			
			$xyear=0;
			
			if($disyear=="S"){
				$xyear=substr(($year+$add),2,2);
			}else{
				$xyear=( $year+$add);
			}
			return   ($day*1) ." " . $month." " .($xyear) ;
		}else{
			return "";
		}
	}
}
?>