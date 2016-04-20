<?php
/**
* @comment เมนูด้านซ้าย
* @projectCode PS58MKT
* @tor 1.2.1
* @package core
* @author Wannapa Thongtawee
* @access public
* @created 18/04/2016
*/
	$menu = $main->showMenu();
	$menu = json_decode($menu);
	foreach($menu as $index => $button){
		echo '<li><a href="'.$button->menu_url.''.$button->param.'">&bull; '.$button->menu_name.'</a></li>';	
	}
?>