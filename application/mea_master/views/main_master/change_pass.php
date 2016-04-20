<?php
/**
* @comment login
* @projectCode
* @tor
* @package core
* @author Pinya
* @access public
* @created 19/04/2016
*/
?>
<div class="form-group title">เปลี่ยนรหัสผ่าน</div>
<br><br><br><br>
<div class="row">
    <div class="col-md-12">
	<center>
        <table border="0">
			<tr>
				<td align="right">ชื่อผู้ใช้ : </td>
				<td><input type="text" class="form-control" name="userName"></td>
			</tr>
			<tr>
				<td align="right">รหัสผ่านเดิม : </td>
				<td><input type="password" class="form-control" name="password"></td>
			</tr>
			<tr>
				<td align="right">รหัสผ่านใหม่ : </td>
				<td><input type="password" class="form-control" name="new_password"></td>
			</tr>
			<tr>
				<td align="right">ยืนยันรหัสผ่านใหม่ : </td>
				<td><input type="password" class="form-control" name="new_password2"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a href="">
				<iframe border="0" frameborder="0" name="a"src="controls/main_master/captcha.php?width=170&height=70&characters=6" alt="captcha" frameborder="0" width="180" height="80" scrolling="no"></iframe>
				<a href="controls/main_master/captcha.php?width=100&height=40&characters=6" target="a"><img src="../../images/global/gtk_refresh.png" width="20" height="20"  border="0" /></a>
				<br />
				พิมพ์อักขระ ตามที่คุณเห็นในภาพ  วิธีการนี้จะช่วยป้องกันการลงทะเบียนโดยอัตโนมัติ<br />
				<input name="secret_code" type="text" />
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="button" value="ยืนยัน">&nbsp;&nbsp;&nbsp;<input type="button" value="ย้อนกลับ"></td>
			</tr>
		</table>
	</center>
    </div>
</div>

