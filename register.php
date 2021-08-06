<?php
include('master.php');
include('conection.php');
_header();
?>
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/form.css">
<div class="wrapper">
<form class="login" id="data" method="post"
enctype="multipart/form-data" action="insert.php">
	
<p class="title">ثبت نام کاربر</p>
<p>
<input type="text" placeholder="نام" class="login-text" id="name" name="name">
<i class="ion-person"></i>
</p>
<p>
<input type="text" placeholder="نام خانوادگی" class="login-text" name="family" id="family"> 
<i class="ion-person"></i>
</p>
<p>
<input type="text" placeholder="نام کاربری" class="login-text" name="username" id="username">
<i class="ion-person"></i>
</p>
<p>
<input type="password" placeholder="رمز عبور" class="login-text" name="password" id="password">
<i class="ion-ios-locked"></i>
</p>
<p>
<input type="text" id="email" name="email" placeholder="ایمیل" class="login-text">
<i class="ion-email"></i>
</p>
<p>
<input type="text" placeholder="آدرس" class="login-text" name="address" id="address">
<i class="ion-android-home"></i>
</p>
<p> <input type="text" placeholder="تلفن" class="login-text" name="phone" id="phone">
<i class="ion-android-phone-portrait"></i>
</p>
<input type="submit" class="checkform" value="ثبت">
</form>
	
<script src="js/jquery.js"></script>
<script src="js/check.js"></script>
	
<div id="err-box">
<span id="err-close">X</span>
<p id="err-msg"></p>
</div>

</div>
<?php
_footer();
?>
