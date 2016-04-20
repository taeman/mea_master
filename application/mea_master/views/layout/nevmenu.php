<?php
/**
* @comment เมนูด้านซ้าย
* @projectCode 57LIQ01
* @tor 3.2.4
* @package core
* @author Amata Kongsaingern
* @access public
* @created 20/01/2016
*/
	$menu = $main->showMenu();
	$menu = json_decode($menu);
	foreach($menu as $index => $button){
		echo '<li><a href="'.$button->menu_url.''.$button->param.'">&bull; '.$button->menu_name.'</a></li>';	
	}
?>