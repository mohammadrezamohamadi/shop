<?php
include('master.php');
include('conection.php');
_header();
?>
<style type="text/css">
.BoxProduct {
width: 100%;
background: #ffffff;
float: right;
border: 1px solid #cccccc;
margin: 12px 0;
padding-right: 0px;
padding-left: 0;
padding-top: 50px;
}
	
.ListPoruduct {
width: 20%;
border: 1px solid #cccccc;
box-shadow: 0 0 3px #ccc;
height: 300px;
float: right;
margin: 13px 13px 13px 52px;
position: relative;
}
	
.ListPoruduct img {
width: 95%;
height: 190px;
margin: 7px;
filter: blur(4px);
}
	
.ListPoruduct img:hover {
filter: blur(0);
transition: all .700s ease;
}
	
.BoxNew {
width: 100%;
margin: 7px;
background: #ffffff;
box-shadow: 0 0 3px 0 #ccc;
margin-top: 40px;
position: relative;
}
	
.titleNew {
width: 95%;
height: 40px;
background: rgba(0,0,0,.1);
position: absolute;
bottom: 0;
transition: all 0.800s ease;
overflow: hidden;
color: #2571ba;
}
	
.titleNew:hover {
height: 160px;
transition: all 0.800s ease;
color: #fff;
}
	
.titleNew p{
text-align: center;
line-height: 40px;
}
	
.ListPoruduct .producOther {
width: 100%;
height: 34px;
background: rgba(0,0,0,.1);
position: absolute;
bottom: 0;
}
	
.producOther .productPrice {
color: #2571ba;
margin: 4px 10px 0 0;
float: right;
}
	
.producOther .viewProduct {
float: left;
4px 0 0 8px;
color: #2571ba;
}
	
.producOther .viewProduct a{
color: #2571ba;
}
.producOther .commentProduct {
float: left;
margin: 4px 0 0 8px;
color: #2571ba;
}
	
</style>
<div class="BoxProduct">
<center>
<div class="fontS" style="margin-bottom:25">   لیست جدیدترین محصولات</div>
</center>
<?php
if(isset($_POST["search"])) {
$name=$_POST["search"];
$sql = "select * from products where pro_namelike '%$name%'";
}
if(empty( $_POST["search"])) {
$sql = "SELECT * FROM products ORDER BY pro_code DESC LIMIT 4";
}
$result=mysqli_query($connect, $sql);
while ( $rec=mysqli_fetch_array($result)){
?>
<div id="div_allProduct">
<article class="ListPoruduct">
<img src="<?php print($rec["pro_image"]); ?>" >
<div class="BoxNew">
<span class="titleNew">
<p class="font14">
<?php
print($rec["pro_name"]);
?>
</p>
<p class="font14">
<?php
print(substr($rec["pro_detail"],0,150));
?>
</p>
</span>
</div>
<div class="producOther font13">
<div class="productPrice">
<i class="fa fa-money"> :قیمت </i>
<?php
print($rec["pro_price"]);
?>
</div>
<?php
if($rec["pro_qty"] > 0) {
?>
<div class="viewProduct">
<i class="fa fa-shopping-cart"></i>
<a href="order.php?id=<?php echo $rec["pro_code"]; ?>">  خرید </a>
</div>
<?php
}
										  
?>
<div class="commentProduct">
<i class="fa fa-bars">   :موجودی </i>
<?php
print($rec["pro_qty"]);
?>
</div>
</div>
</article>
</div>
<?php
}
?>
</div>
<?php
_footer();
?>