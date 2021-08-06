<?php
session_start();
//if(!isset($_SESSION['users']))
//header( 'Location: login.php?id=user');
include('jdf.php');
include('conection.php');
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$pro_code=test_input($_POST["pro_code"]);
$pro_name=test_input($_POST["pro_name"]);
$pro_qty=test_input($_POST["pro_qty"]);
$pro_price=test_input($_POST["pro_price"]);
if(empty($_POST["pro_qty"])) {
echo "** تعداد خریدهای خود را وارد نمایید لطفا**";
}
	
else {
$pro_qty = test_input($_POST["pro_qty"]);
}
$total=test_input($_POST["total"]);
$username=$_SESSION["users"];
$characters='0123456789abcdefghijklmnopqrstuvwxyz';
$code='';
for($p=0;$p<8;$p++)
$code.=$characters[mt_rand(0,strlen($characters))];
$date=jdate("Y/m/d");
$sql="INSERT INTO basket VALUES
('$pro_code','$username','$pro_name','$pro_price','$pro_qty','$total','$date')";
if( mysqli_query($connect,$sql)===true ) {
$pro_qty-=$pro_qty;
$sql="update products set `pro_qty`='$pro_qty' where `pro_code`='$pro_code'";
mysqli_query($connect,$sql);
}}
else
header( 'Location:index.php' );
?>