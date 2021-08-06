// JavaScript Document
$(document).ready(function() {
$('#err-close').click(function() {
$('#err-box').slideUp(); } );
$('.checkform').click(function () {
if($('#id').val()=='') {
$('#err-box').slideDown();
$('#err-msg').text('کد محصول را وارد نمایید');
return false;
}
if($('#name').val()=='') {
$('#err-box').slideDown();
$('#err-msg').text('نام محصول را وارد نمایید');
return false;
}
if($('#qty').val()=='') {
$('#err-box').slideDown();
$('#err-msg').text('تعداد محصول را وارد نمایید');
return false;
}
if($('#price').val()=='') {
$('#err-box').slideDown();
$('#err-msg').text('قیمت محصول را وارد نمایید');
return false;
}
if($('#detail').val()=='') {
$('#err-box').slideDown();
$('#err-msg').text('توضیحات محصول را وارد نمایید');
return false;
}
if($('#image').val()=='') {
$('#err-box').slideDown();
$('#err-msg').text('تصویر را وارد نمایید');
return false;
}
});
$('#image').bind('change', function() {
var ext = $('#image').val().split('.').pop().toLowerCase();
if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
$('#err-box').slideDown();
$('#err-msg').text('فایل تصویری انتخاب نمایید');
return false;
}
if(this.files[0].size>100000) {
$('#err-box').slideDown();
$('#err-msg').text('فایل تصویری کوچکتر از 100 کیلوبایت انتخاب نمایید');
return false;
}
});
});