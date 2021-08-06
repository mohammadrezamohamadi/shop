<?php
session_start();
include('master.php');
include('conection.php');
_header();
?>
<script src="js/login.js"></script>
<link rel="stylesheet" href="css/form-style.css">
<div class="form" style="margin-top:180px;">
<h1 style="margin: 10px 20px;">تغییر کلمه عبور</h1>
<div class="line"></div>
<form class="input-form" id="sign-in-form" method="post" action="#">
<span class="ie-placeholders">رمز عبور:</span>
<input class="input-form" type="password" id="ipt-password" name="password" placeholder="رمز عبور"/>
<span class="ie-placeholders">رمز عبور جدید:</span>
<input class="input-form" type="password" id="ipt-repassword" name="repassword" placeholder="رمز عبور جدید"/>
<br>
<input type="submit" class="btn-sign-in btn-orange" value="ثبت"/>
</form>
<div class="error-box red">
<span class="error-message"></span>
</div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_SESSION["admin"];
$repassword = $_POST["repassword"];
$sql = "update admin set `password`='$repassword' where `username` = '$username'";
if (mysqli_query($connect, $sql) === true) {
echo '<script type="text/javascript">
alert("ویرایش با موفقیت انجام شد");
window.location.replace("manage.php");
</script>';
}
}
?>
<?php
_footer();
?>