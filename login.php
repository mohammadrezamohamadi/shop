<?php
include('master.php');
// include('conection.php');
_header();
?>
<script src="js/login.js"></script>
<link rel="stylesheet" href="css/form-style.css">
<br><br><br>
<div class='form'>
<h1 style="margin: 10px 20px;" class="font19">ورود کاربر</h1>
<div class='line'></div>
<!--Span class ie-placeholder is there for IE browser.
IE doesn't support placeholder attribute -->
<form class='input-form' id='sign-in-form' method='post' action=''>
<span class='ie-placeholders'>نام کاربری</span>
<input type='text' id='ipt-login' name='login' placeholder='نام کاربری'/>
<span class='ie-placeholders'>رمز عبور</span>
<input type='password' id='ipt-password' name='password' placeholder='رمز عبور'/>
<a class='forgotten-password-link font15' href='#'>رمز عبور را فراموش کرده ام</a>
<input type='submit' class='btn-sign-in btn-orange' value='ورود'/>
</form>
<!--forgotten-password -->
<div class='forgotten-password-box'>
<form class='input-form' id='forgotten-password-form' action='#' method="post">
<span class='ie-placeholders'>ایمیل :</span>
<input type='text' id='ipt-fp-email' class='forgotten-password-email' placeholder='ایمیل' name="email"/>
<input type='submit' class='btn-orange' value='ارسال'/>
<br/>
<p class="font15" style="margin-right: 15px">رمز عبور به ایمیل شما ارسال خواهد شد.</p>
</form>
</div>
<!--ERROR STATE-->
<div class='error-box red'>
<span class='error-message'></span>
</div>
<div class="sign-link font19">
<span>ثبت نام نکرده اید ؟</span>
<a href='register.php' class="font19">ثبت نام</a>
</div>
</div>
<br><br><br><br><br>   
<?php
if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
	if ( isset( $_POST[ "login" ] ) && isset( $_POST[ "password" ] ) && isset( $_GET[ "id" ] )) {
$username = $_POST[ "login" ];
$password = $_POST[ "password" ];
$id = $_GET[ "id" ];
if ($id == "admin" ) {
$sql = "select * from admin where username='$username' and password='$password'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($result);
if ($row) {
$_SESSION["admin"]= $username;
header('Location: manage.php');
}
else {
echo( '<script>
$(".error-box").slideDown();
$(".error-message").text("نام کاربری یا رمز عبور را صحیح وارد نمایید");
</script>' );
}}
else if ($id == "user" ) {
$sql = "select * from customers where username='$username' and password='$password'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($result);
if ($row) {
$_SESSION["users"] = $username;
header('Location: index.php');
} 
else {
echo( '<script>
$(".error-box").slideDown();
$(".error-message").text("نام کاربری یا رمز عبور را صحیح وارد نمایید");
</script>' );
} } } 
if ( isset( $_POST[ "email" ])) {
$email = $_POST[ "email" ];
$id =$_GET[ "id" ];
if ( $id == "admin" ) {
$sql = "select * from admin where username='$email'";
}
else if ( $id == "user" ) {
$sql = "select * from customers where email='$email'";
}
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($result);
if ($row) {
$subject = "بازیابی رمز عبور";
$message = "رمز عبور شما" .$row["email"];
@mail( $email, $subject, $message );
}
else {
echo( '<script>
$(".error-box").slideDown();
$(".error-message").text("ایمیل وارد شده معتبر نمی باشد. ");
</script>' );
} } }
?>
<?php _footer(); ?>