<?php
session_start();
//if(!isset($_SESSION["admin"]))
//header('Location: login.php?id=admin');
include('master.php');
include('conection.php');
_header();
?>

<style type="text/css">
a {
cursor: pointer;
}
	
#abf {
font-size: 30;
margin: 10px;
color: red;
}
	
.img {
transition: all 0.9s;
}
	
.img:hover {
transform: scale(5);
}
	
table, th , td {
border: 1px solid blue;
border-radius: 5px;
width: 100%;
text-align: center;
padding: 10px 10px;
background: #fff;
}
	
th {
background-color: #4CAF50;
color: white;
}
	
</style>
<?php
include('conection.php');
$sql = "select *from products ORDER BY pro_code";
$result=mysqli_query($connect,$sql);
?>
<table style="margin-right: 330px; margin-top: 100; margin-bottom: 100;">
<tr>
<td colspan="8" class="fontS"> مدیریت محصولات</td>
</tr>
<tr>
<th>کد محصول</th>
<th>نام محصول</th>
<th>قیمت</th>
<th>تعداد</th>
<th>توضیحات</th>
<th>تصویر</th>
<th colspan="2">عملیات</th>
</tr>
	
<?php
while ( $rec=mysqli_fetch_array($result)) {
?>
<tr align="center">
<td>
<span><?php print($rec["pro_code"]); ?></span>
</td>
<td>
<span><?php print($rec["pro_name"]); ?></span>
</td>
<td>
<span><?php print($rec["pro_price"]); ?></span>
</td>
<td>
<span><?php print($rec["pro_qty"]); ?></span>
</td>
<td>
<span><?php print($rec["pro_detail"]); ?></span>
</td>
<td>
<span>
<div align="center">
<img src="<?php print($rec["pro_image"]); ?>" width="25" height="25" class="img">
</div>
</span>
</td>
<td>
<a title="ویرایش" href="product.php?id=<?php echo $rec["pro_code"]; ?>">
<i id="abf" class="fa fa-edit"></i>
</a>
</td>
<td>
<a title="حذف" href="delete.php?id=<?php echo $rec["pro_code"]; ?>">
<i id="abf" class="fa fa-remove"></i>
</a>
</td>
</tr>
<?php
										   
}
?>
</table>