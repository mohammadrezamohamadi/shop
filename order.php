<?php
session_start();
//if(!isset($_SESSION['users']))
//header('Location: login.php?id=user');
include('master.php');
include('conection.php');
_header();?>

<?php
if(isset($_GET['id']))
$pro_code=$_GET['id'];
$sql="select * from products where pro_code='$pro_code'";
$result=mysqli_query($connect,$sql);
if($row=mysqli_fetch_array($result)){
?>

<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/form.css">
<div class="wrapper">
<form class="login" id="data" method="post" enctype="multipart/form-data"
action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
<p class="title">سبد خرید</p>
	
<p>
<img src="<?php echo $row['pro_image'];?>" width="150" height="150" >
</p>

<p>
<input type="hidden" class="login-text" id="pro_code"
name="pro_code" value="<?php echo $row['pro_code'];?>">
<i class="ion-android-textsms"></i>
</p>
	
<p>
<input type="text" class="login-text" id="pro_name"
name="pro_name" value="<?php echo $row['pro_name'];?>" readonly>
<i class="ion-android-textsms"></i>
</p>
	
<p>
<input type="text" value="<?php echo $row['pro_qty'];?>" class="login-text"
name="pro_qty" id="pro_qty">
<i class="ion-code"></i>
</p>
	
<p>
<input type="text" value="<?php echo $row['pro_price'];?>" class="login-text"
name="pro_price" id="pro_price" readonly>
<i class="ion-pricetags"></i>
</p>
	
<p>
<input type="text" class="login-text" name="qty" id="qty"
placeholder="تعداد خرید" onKeyUp="fun();">
<i class="ion-pricetags"></i>
</p>

<p>
<input type="text" class="login-text" name="total" id="total"
placeholder="0.0" readonly>
<i class="ion-pricetags"></i>
</p>
	
<input type="submit" class="checkform" value="ثبت" onClick="return validataForm()">
</form>
<script type="text/javascript">
function validataForm(){
var x=document.forms["data"]["qty"].value;
if (x==null || x=="") {
alert("تعداد را وارد کنید");
return false;
}}
	
function fun() {
var pro_qty=document.getElementById('pro_qty').value;
var qty=document.getElementById('qty').value;
var price=document.getElementById('pro_price').value;
if(( parseInt (qty)<=parseInt( pro_qty))||(qty==''))
document.getElementById('total').value=qty*price;
else if(parseInt (qty)>parseInt(pro_qty)) {
document.getElementById('qty').value='';
document.getElementById('total').value='0.0';
}}
	
</script>
<script src="js/jquery-3.2.0.min.js"></script>
<script>
$("form#data").submit(function(){
var formData = new FormData($(this)[0]);
$.ajax ({
URL: "basket.php",
type: 'POST',
data: FormData,
async: false,
success: function (data) {
alert('محصولات به سبد خرید اضافه شد');
window.location.href = "index.php";
},
cache: false,
contentType: false,
processData: false,
});
return false;
});
</script>
</div>

<?php
}
else
header('Location: index.php');
?>