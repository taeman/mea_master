<?php
/**
* @comment class สำหรับ seminar
* @projectCode 57LIQ01
* @tor 3.2.4.2
* @package core
* @author Kiatisak  Chansawang
* @access public
* @created 06/01/2016
*/
class Seminar{
	function getMaxRunno($idcard){
		$sql = "SELECT
		MAX(t1.runno)+1 AS runno
		FROM
		seminar AS t1
		WHERE id = '{$idcard}' ";
		$result = mysql_db_query(DB_HR,$sql);
		$arr = mysql_fetch_assoc($result);
		$json = json_encode($arr);
		return $json;
	}
	
	
	function getDashboardData($idcard){
		$sql = "SELECT
		t1.runid,
		t1.runno,
		IF(t1.stype = '0','อบรม',IF(t1.stype = '1','ดูงาน',IF(t1.stype = '2','สัมมนา',''))) AS stype,
		t1.startdate,
		t1.enddate,
		t1.`subject`,
		t1.place
		FROM
		seminar AS t1
		WHERE t1.id = '{$idcard}'
		ORDER BY t1.runno ASC ";
		$result = mysql_db_query(DB_HR,$sql);
		while($data = mysql_fetch_assoc($result)){
			$arrData[] =  $data;
		}
		$json = json_encode($arrData);
		return $json;
	}
	
	function getForm_keyData($runid){
		$sql = "SELECT
		t1.runid,
		t1.runno,
		t1.stype,
		t1.startdate,
		t1.enddate,
		t1.`subject`,
		t1.place
		FROM
		seminar AS t1
		WHERE t1.runid = '{$runid}'
		ORDER BY t1.runno ASC ";
		$result = mysql_db_query(DB_HR,$sql);
		while($data = mysql_fetch_assoc($result)){
			$arrData[] =  $data;
		}
		$json = json_encode($arrData);
		return $json;
	}
}

?>