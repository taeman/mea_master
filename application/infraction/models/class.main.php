<?php
/**
* @comment class หลักของระบบ liq_hr
* @projectCode 57LIQ01
* @tor 3.2.4.2
* @package core
* @author Kiatisak  Chansawang
* @access public
* @created 06/01/2016
*/
class Main{
	function showMenu(){
		$sql = "SELECT
		training_menu_config.training_staff,
		training_menu_config.menu_id,
		training_menu.menu_id,
		training_menu.menu_name,
		training_menu.parent_id,
		training_menu.menu_url,
		training_menu.target,
		training_menu.param,
		training_menu.update_date,
		training_menu.create_date
		FROM
		training_menu_config
		Inner Join training_menu ON training_menu_config.menu_id = training_menu.menu_id  
		WHERE 
		training_menu.status_active='1'  and 
		training_menu.parent_id='0' 
		AND training_menu_config.training_staff='0' ";
		$xresult2 = mysql_db_query(DB_MASTER,$sql);
		while($data = mysql_fetch_assoc($xresult2)){
			$arrData[] =  $data;
		}
		$json = json_encode($arrData);
		return $json;
	}
	
	function getPersonData($idcard){
		$sql = "SELECT
		t1.CZ_ID,
		t1.prename_th,
		t1.name_th,
		t1.surname_th,
		t1.pid,
		t1.position_now,
		t1.level_id,
		t1.radub,
		t1.vitaya_id,
		t1.vitaya,
		t1.salary
		FROM
		view_general AS t1
		WHERE t1.CZ_ID = '{$idcard}' ";
		$result = mysql_db_query(DB_HR,$sql);
		$data = mysql_fetch_assoc($result);
		$json = json_encode($data);
		return $json;
	}
}

?>