$(document).ready(function() {
$('#err-close').click(function() {
$('#err-box').slideUp(); });
$('.checkform').click(function() {
if($('#name').val()=='') {
$('#err-box').slideDown();
$('#err-msg').text('نام را وارد نمایید');
return false;	
}
if($('#family').val()=='') {
$('#err-box').slideDown();
$('#err-msg').text('نام خانوادگی را وارد نمایید');
return false;
}
if ($('#username').val()=='') {
$('#err-box').slideDown();
$('#err-msg').text('نام کاربری را وارد نمایید');
return false;
}
if($('#password').val()=='') {
$('#err-box').slideDown();
$('#err-msg').text('رمز عبور را وارد نمایید');
return false;
}
if ($('#email').val()=='') {
$('#err-box').slideDown();
$('#err-msg').text('ایمیل را وارد نمایید');
return false;
}
var regemail=/[a-z0-9]+\@+[a-z]+\.+[a-z]/;
var email=$('#email').val();
if(regemail.test(email)==false) {
$('#err-box').slideDown();
$('#err-msg').text('ایمیل را صحیح وارد نمایید');
return false;
}
if($('#address').val()=='') {
$('#err-box').slideDown();
$('#err-msg').text('آدرس را وارد نمایید');
return false;
}
if($('#phone').val()=='') {
$('#err-box').slideDown();
$('#err-msg').text('تلفن را وارد نمایید');
return false;
}
}); });