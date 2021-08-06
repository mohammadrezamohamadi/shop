<?php
session_start();
//if(!isset($_SESSION["sdmin"]))
//header('Location: login.php?id=admin');
include('master.php');
include('conection.php');
_header();
if ( isset( $_GET[ "id" ])) {
$pro_code = $_GET[ "id" ];
$sql = "select * from products where pro_code='$pro_code'";
$result=mysqli_query($connect,$sql);
$rec=mysqli_fetch_array($result); }
?>
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/form.css">
<div class="wrapper">
<form class="login" id="data" method="post"
enctype="multipart/form-data" action="<?php if(empty($rec['pro_code']))
echo ('save.php');
else echo('update.php'); ?>">
<p class="title">
	
<?php if(!empty($rec['pro_code'])) {
echo('ویرایش محصول'.'<br><br>'); 
?>
<img src="<?php print($rec["pro_image"]); ?>" style="width: 100px; height: 100px;">
<?php
} else
echo('ثبت محصول');
?>
</p>
<p>
<input type="text" placeholder="کد محصول" class="login-text"
name="id" id="id" data-required="true"  value="<?php if(!empty($rec['pro_code']))
echo($rec['pro_code']); ?>"
<?php if(!empty($rec['pro_code']))
echo('readonly'); ?>/>
<i class="ion-code"></i>
</p>
	
<p>
<input type="text" placeholder="نام محصول" class="login-text"
id="name" name="name"
value="<?php if(!empty($rec['pro_name']))
echo($rec['pro_name']); ?>">
<i class="ion-android-textsms"></i>
</p>
	
<p>
<input type="text" placeholder="تعداد محصول" class="login-text"
name="qty" id="qty"
value="<?php if(!empty($rec['pro_qty']))
echo($rec['pro_qty']); ?>">
<i class="ion-code"></i>
</p>
	
<p>
<input type="text" placeholder="قیمت محصول" class="login-text"
name="price" id="price"
value="<?php if(!empty($rec['pro_price']))
echo($rec['pro_price']); ?>">
<i class="ion-ios-pricetags"></i>
</p>
	
<p>
<input type="text" placeholder="توضیحات محصول" class="login-text"
name="detail" id="detail"
value="<?php if(!empty($rec['pro_detail']))
echo($rec['pro_detail']); ?>">
<i class="ion-android-document"></i>
</p>
	
<p class="file" title="">
<input type="file" name="image" id="image" onChange="this.parentNode.setAttribute('title', this.value.replace(/^.*[\\/]/, ''))">
</p>
<input type="submit" class="checkform" 
value="<?php if(!empty($rec['pro_code']))
echo('ثبت');
else
echo('ویرایش');?>"
name="submit">
	
</form>
<script src="js/jquery.js"></script>
<script src="js/product.js"></script>
<div id="err-box">
<span id="err-close">X</span>
<p id="err-msg"></p>
</div>
</div>
<?php
_footer();
?>