<?php
/**
* @comment controller บันทึกข้อมูลความผิดทางวินัย (from_keyin)
* @projectCode 57LIQ01
* @tor 3.2.4.2.2.1
* @package core
* @author Wannapa Thongtawee (wannapa@sapphire.co.th)
* @access public
* @created 19/01/2016
*/

# เรียกใช้ models seminar
include("models/seminar.php");
$seminar = new Seminar();

# $main มาจากหน้า index.php class models/class.main.php
$personData = $main->getPersonData($_SESSION['idcard']);
$personData = json_decode($personData);
?>
<script src="../../common/mea_hr/js/seminar.js"></script>
<?php
if($_GET['debug'] == 'on'){
	echo '<pre>';
	echo 'Person Data :<br>';
	print_r($personData);
	echo '</pre>';
}
$sql_ation = ($_GET['runid'] == '') ? "INSERT INTO" : "UPDATE";
if($_GET['runid'] == ''){
	$runno = $seminar->getMaxRunno($_SESSION['idcard']);
	$runno = json_decode($runno);
}else{
	$data = $seminar->getForm_keyData($_GET['runid']);
	$data = json_decode($data);
	$runno->runno = $data[0]->runno;
}
$id = $_GET['id'];
$data[0] = array(
                'id' => '0',
                'year' => '2556',
                'sick' => '10',
                'mission' => '20',
                'vacation' => '60',
                'late' => '30',
                'absent' => '40',
                'study' => '50'
		 );
$data[1] = array(
                'id' => '1',
                'year' => '2555',
                'sick' => '11',
                'mission' => '22',
                'vacation' => '33',
                'late' => '44',
                'absent' => '55',
                'study' => '66'
		 );
$detail = json_encode($data);
$detail = json_decode($detail);
# เรียกใช้ views prohibit
include("views/absent/form_keyin.php");
include("../../common/global/class/datepickerthai.php");
?>