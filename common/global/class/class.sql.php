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
class sqlDB{
	function __construct($charset = 'utf8'){
		@mysql_set_charset($charset);
	}
	
	function intoDB($action,$dbname,$tablename,$fieldData,$debug=''){
		/*
		$action = "INSERT INTO/REPLACE INTO/UPDATE
		$dbname = ชื่อฐานข้อมูล
		$tablename = ชื่อตาราง
		$fieldData = รายชื่อ field และข้อมูลที่ต้องการ save Ext. $fieldData = {"data" : {"idcard" : = 'xxxxxxxxxxxxx'}} (ส่งข้อมูลเป็น json เท่านั้น)
		$debug = on เปิดการ debug sql
		*/
		$sql = $action." ".$tablename." SET ";
		if(count($fieldData->data) > 0){
			foreach($fieldData->data as $field => $value){
				if($value != 'NOW()'){
					$sql .= $field." = '".$value."',";
				}else{
					$sql .= $field." = ".$value.",";
				}
			}
			$sql = substr($sql,0,strlen($sql)-1);
			
			if(count($fieldData->where) > 0){
				$sql .= " WHERE ";
				foreach($fieldData->where as $field => $value){
					$sql .= $field." = '".$value."' AND";
				}
				$sql = substr($sql,0,strlen($sql)-4);
			}
			if(mysql_db_query($dbname,$sql)){
				$status = "true||ดำเนินการสำเร็จ";
			}else{
				$status = "false||พบ sql ผิดพลาด ".$dbname." ";
			}
		}else{
			$status = "false||ไม่พบ Field ที่ต้องการนำเข้าฐานข้อมูล ";
		}
		$status .= ($debug == 'on') ? $sql : '';
		return $status;
	}
	
	function delete($dbname,$tablename,$fieldData,$debug=''){
		/*
		$dbname = ชื่อฐานข้อมูล
		$tablename = ชื่อตาราง
		$fieldData = รายชื่อ field และข้อมูลที่ต้องการ save Ext. $fieldData = {"where" : {"idcard" : = 'xxxxxxxxxxxxx'}} (ส่งข้อมูลเป็น json เท่านั้น)
		$debug = on เปิดการ debug sql
		*/
		$sql = "DELETE FROM ".$tablename;
		if(count($fieldData->where) > 0){
			$sql .= " WHERE ";
			foreach($fieldData->where as $field => $value){
				$sql .= $field." = '".$value."' AND";
			}
		}
		$sql = substr($sql,0,strlen($sql)-4);
		if(mysql_db_query($dbname,$sql)){
			$status = "true||ดำเนินการสำเร็จ";
		}else{
			$status = "false||พบ sql ผิดพลาด ".$dbname." ";
		}
		$status .= ($debug == 'on') ? $sql : '';
		return $status;
	}
}
?>