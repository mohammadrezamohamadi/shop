<?php
session_start();
if (!isset($_SESSION["admin"])) {
//header('Location: login.php?id=admin');
include('master.php');
include('conection.php');
_header();
?>
<style type="text/css">
@media screen and (max-width: 1000px) {
#box {
width: 100%;
height: 100%;
background-color: #fff;
border-radius: 5px;
box-shadow: 0 0 15px #777;
position: fixed;
text-align: center;
line-height: 90px;
font-size: 20px;
color: #000;
direction: rtl;
top: 10%;
left: 5%;
}
}
</style>
<div id="box">
<p class="fontS" style="padding-top:20px; font-size: 40px;">بخش مدیریت</p>
<div style="direction: rtl; padding-top: 20px; padding-right: 10px; padding-left: 30px;">
<nav id="navTop">
<ul>
<li class="font16" style="margin-left: 40px;">
<i class="fa fa-product-hunt"></i>
<a href="editpass.php">تغییر کلمه عبور</a>
</li>
<li class="font16" style="margin-left: 40px;">
<i class="fa fa-product-hunt"></i>
<a href="product.php">اضافه</a>
</li>
<li class="font16" style="margin-left: 40px;">
<i class="fa fa-edit"></i>
<a href="edit.php">ویرایش</a>
</li>
<li class="font16" style="margin-left: 40px;">
<i class="fa fa-remove"></i>
<a href="edit.php">حذف</a>
</li>
</ul>
</nav>
</div>
</div>
<?php
}
?>