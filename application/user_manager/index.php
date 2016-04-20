<?php
/**
* @comment ไฟล์ถูกสร้างขึ้นมาสำหรับเป็น Controls ให้ระบบ
* @projectCode PS58MKT
* @tor 1.2.1
* @package core
* @author Amata Kongsaingern
* @access public
* @created 05/01/2016
*/
header('Content-Type: text/html; charset=utf-8');
//include("../../config/db_define.php"); # define ค่าฐานข้อมูล
//include("../../config/class.condb.php"); # class เชื่อมต่อฐานข้อมูล
//$db = new DBConnection();

//include("../../common/global/class/class.datetime.php"); # class เกี่ยวกับวันที่
//$dateTime = new dateAndTime();

//include("models/class.main.php");
//$main = new Main();

/* Test Data */
//$_SESSION[idcard] = 3110200234548;

$controller = ($_GET['controller'] == '') ? 'user_manager' : $_GET['controller'];
$function = ($_GET['fn'] == '') ? 'main' : $_GET['fn'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ระบบทะเบียนประวัติ</title>
</head>
<link rel="stylesheet" type="text/css" href="../../common/mea_hr/css/main.css" />
<!--<link rel="stylesheet" href="../../common/global/font/Thai_Sans_Neue_Regular.css">-->
<link rel="stylesheet" href="../../common/global/css/bootstrap.min.css">
<link rel="stylesheet" href="../../common/global/css/jquery-ui-1.7.2.custom.css">
<link rel="stylesheet" href="../../common/mea_hr/css/liq.css">
<link rel="stylesheet" href="../../common/global/css/jquery.fancybox.css">
<script src="../../common/global/js/jquery-1.10.2.js"></script>
<script src="../../common/global/js/jquery.fancybox.pack.js"></script>
<script src="../../common/global/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="../../common/global/js/jquery-ui.js"></script>
<script src="../../common/global/js/bootstrap.min.js"></script>
<script src="../../common/mea_hr/js/main.js"></script>
<body>
<div class="block" style="width:100%; height:auto;">
	<div class="block" id="header" style="width:100%; height:auto;"><?php include("views/layout/header.php");?></div>
    <div class="block" id="menu" style="width:100%; height:auto; background:#FFF;">
	<?php include("views/".$controller."/menu.php");?>
    </div>
    <div class="block" id="body" style="width:99%; height:auto !important; min-height:500px; margin:0.5%; background:#FFF">
		<?php echo $controller=="main_hr"?"<p style='margin-top:100px'>":""?>
        <?php  include("controls/".$controller."/".$function.".php"); ?>
		<?php echo $controller=="main_hr"?"</p>":""?>
    </div>
    <div class="block text-center" id="footer" style="width:100%; height:45px; background:#ededed;">
		<p style="margin-top:10px;"><font style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif; font-size:14px;">Copyright (c) 2016 Metropolitan Electricity Authority.</font></p>
    </div>
</div>
</body>
</html>
