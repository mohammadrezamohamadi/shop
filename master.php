<html>
<head>
<title>
فروشگاه الکترونیکی	</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="stylesheet" tyep="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
<script src="js/html5.js"></script>
</head>
<body>
<?php
function _header() {
?>
<header>
<div class="container">
<div class="headerRight">
<div class="logo">
<img src ="images/Logo.png"/>
<h1 class="fontS">   فروشگاه الکترونیکی</h1>
<h3 class="font18">  بزرگترین فروشگاه الکترونیکی ایران</h3>
</div>
</div>

<div class="headerLeft">
<nav id="navTop"><ul>	
<li class="font14">
<i class="fa fa-home"></i>
<a href="index.php">صفحه اصلی</a>
</li>
<li class="font14">		
<i class="fa fa-user"> </i>
<a href=" <?php if (!isset( $_SESSION['admin'] ) )
echo 'login.php?id=admin';
else echo 'manage.php';?>">	مدیریت </a >
</li>
<li class="font14">
<i class="fa fa-shopping-cart"></i>
<a href="order.php">سبد خرید</a>
</li>

<li class="font14">
<i class="fa fa-address-card"></i>
<a href="#"> تماس با ما</a>
</li>
</ul>
</nav>
</div>
</div>
</header>
	
<nav id="Menu">
<div class="container">
<div class="nav" >
<label for="toggle"> &#9776; </label>
<input type="checkbox" id="toggle">
<div class ="menu">
<a href="index.php" class="font16">صفحه اصلی</a>
<a href="register.php"  class="font16">عضویت</a>
<a href="login.php?id=user"  class="font16"> ورود کاربر </a>
<a href="order.php"  class="font16">سبد خرید</a>
<a href="#" class="font16"> تماس با ما</a>
<a href="#" class="font16"> درباره ما</a>
	
<?php
    $url = $_SERVER['PHP_SELF'];
    if(basename($url)=="index.php") {
      ?>
    <div class="searchbox">
      <form action="" method="post">
        <input class="font14  txtsearchbox" type="text" placeholder="جستجو" name="search">
        <input type="submit" class="btnSearchbox" value="">
      </form>
	<script src="js/jquery-3.2.0.min.js"></script>
		<script>
		var searchchbox = $( '.txtsearchbox' );
		searchchbox.click( function () {
		$( this ).animate( { 'width': '280' }, 500 ); } ); 
		searchchbox.mouseleave( function () {
		$( this ).animate( { 'width': '115' }, 300 ); } );
		</script>
      <?php
      }
      ?>
    </div>
  </div>
</div>
</nav>
</nav>
	
<?php
}
function _footer() {
?>
<footer>
<div class="container">
<div id="box-tmasbama">
<p class="font15 titlefooter"> راه های ارتیاطی با ما</p>
<span>تلفن : 09127594487 </span>
<span>آدرس ایمیل: mahdieh_shahidy@ gmail.com</span>
<span>اینستاگرام: @mahdieh_shahidy</span>
</div>
<div id="box-email">
<p class="font15 titlefooter">اشتراک خبری</p>
</div>
<div id="box-about">
<p class="font15 titlefooter">درباره ما</p>
<h5 class="txtabout">فروشگاه الکترونیکی</h5>	
</div>
</div>
<div class="cr font14"> هرگونه کپی برداری از مطالب این سایت شراعا حرام است</div>
</footer>
<?php
}
?>
</body>
</html>