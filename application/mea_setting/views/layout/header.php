<?php
/**
* @comment สร้าง header หน้า setting_preference
* @projectCode PS58MKT
* @tor 1.2.1
* @package core
* @author Wannapa Thongtawee
* @access public
* @created 18/04/2016
*/
?>
<div class="navbar-menu block" style="width:100%">
	<div class="block" style="padding:10px;">
	<img src="../../images/mea_hr/icon-mea.png" alt="Applications" class="btn-img" onclick="document.location='../mea_master/index.php'" title="Applications" width="40">
    </div>
	<div class="block" style="padding:10px;">
	<img src="../../images/mea_master/icon-hr.png" alt="Applications" class="btn-img" onclick="document.location='index.php'" title="Applications" width="40">
    </div>

<div id="navbar" class="collapse navbar-collapse">
	<ul class="nav navbar-nav navbar-right">
    <li>
        <a href="index.php?controller=setting_preference&fn=setting_preference" class="navbar-img" title="Preference">
            <div>
				<img src="../../images/global/icon-preferences.png" alt="Preference" title="Preference" class="opacity-5">            </div>
        </a>
    </li>
    <li>
        <a href="#" class="navbar-img" title="Notification">
            <div>
				<img src="../../images/global/icon-notification.png" alt="Notification" title="Notification" class="opacity-5">            </div>
        </a>
    </li>
    <li>
      <a class="form-profile" onclick="showProfile();">
        <div class="profile">
            <div class="profile-img">
                <div class="box-img">
                    <div class="screen-img">
                        <div class="img-middle">
                          <img src="../../images/global/profile-no-image-male.png" title="Profile Image" alt="Profile Image" class="img-rounded">                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-dropdown profile-button-dropdown"><div id="profile-button-dropdown" class="arrow-down"></div></div>
        </a>
        <div id="profile-dropdown" class="profile-dropdown">
          <div class="row">
            <div class="col-xs-6 left in-line">
              <div class="profile-time"><?php echo date('H:i')?></div>
              <div class="profile-date">
                <div><?php echo date('l')?></div>
                <div><?php echo date('F dd, Y')?></div>
              </div>
            </div>
            <div class="col-xs-6 right">
              <div class="profile-name">Mr. Name Test </div>
              <div class="profile-postion">Manager</div>
            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <div class="profile-menu-title">Font</div>
              <a href="#">
                <img src="../../images/global/profile-font.png" title="ChangeFont" alt="ChangeFont">
			  </a>
            </div>
            <div class="col-xs-4">
              <div class="profile-menu-title">Theme</div>
              <a href="#">
                <img src="../../images/global/profile-theme.png" title="ChangePic" alt="ChangePic">
			  </a>
            </div>
            <div class="col-xs-4">
              <div class="profile-menu-title">Present color</div>
              <a href="#">
                <img src="../../images/global/profile-color.png" title="ChangeFontColor" alt="ChangeFontColor">
			  </a>
            </div>
            <div class="col-xs-4">
              <div class="profile-menu-title">Password</div>
              <a href="#">
                <img src="../../images/global/profile-password.png" title="ChangePassword" alt="ChangePassword">
			  </a>
            </div>
            <div class="col-xs-4">
              <div class="profile-menu-title">Notification</div>
              <a href="#">
                <img src="../../images/global/profile-notification.png" title="Notification" alt="Notification">
			  </a>
            </div>
            <div class="col-xs-4">
              <div class="profile-menu-title">Sign out</div>
              <a href="#">
                <img src="../../images/global/profile-logout.png" title="LogOut" alt="LogOut">
			  </a>
            </div>
          </div>
        </div>

    </li>
</ul>
<script>
	function showProfile(){
		if($("#profile-dropdown").is(":visible")){
			$("#profile-dropdown").hide();
  		$("#profile-button-dropdown").attr('class','arrow-down');
		}else{
			$("#profile-dropdown").show();
  		$("#profile-button-dropdown").attr('class','arrow-up');
		}
	}
</script>
</div>
</div>
