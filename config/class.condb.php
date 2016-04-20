<?php
class DBConnection{
	function __construct() {
       $this->ConnectDB(HOST,USERNAME_HOST,PASSWORD_HOST);
	   $this->SelectDB(DB_HR,CHARSET);
   	}
	
	function ConnectDB($hostname,$user,$pass){
		mysql_connect($hostname,$user,$pass) or die("Could not connect: " . mysql_error());
	}
	
	function SelectDB($dbname,$charset){
		mysql_select_db($dbname) or die("Could not select database: " . mysql_error());
		mysql_set_charset($charset);
	}
}
?>