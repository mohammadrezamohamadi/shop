<?php
// include( 'conection.php');
if ( $_SERVER[ "REQUEST_METHOD" ] == "POST") {
$name = $_POST[ "name" ];
$family = $_POST[ "family" ];
$username = $_POST[ "username" ];
$password = $_POST["password" ];
$address = $_POST["address" ];
$phone = $_POST[ "phone" ];
$email = $_POST["email" ];
$sql = "select * from customers where username='$username'";
$result=mysqli_query($connect, $sql);
$row=mysqli_fetch_array($result);
if ( $row) {
echo '<script type=text/javascript>alert(" نام کاربری تکراری است");
window.location.replace("register.php");
</script>';
}
else {
$sql = ( "INSERT INTO customers VALUES('$name','$family', '$email','$phone', '$address','$username','$password')");
if (mysqli_query($connect,$sql)===true) {
echo '<script type=text/javascript>
alert("ثبت نام با موفقیت انجام شد ");
 window.location.replace("index.php");
</script>';
}
}
}
else 
	header('Location: index.php'); ?>