<?php
include( 'conection.php' );
if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" )
{
$pro_code = $_POST[ "id" ];
$pro_name = $_POST[ "name" ];
$pro_qty = $_POST[ "qty" ];
$pro_price = $_POST[ "price" ];
$pro_detail = $_POST[ "detail" ];
$tmpName = $_FILES[ 'image' ][ 'tmp_name' ];
$fileName = $_FILES[ 'image' ][ 'name' ];
$filePath = 'img/' . $fileName;
$result = move_uploaded_file( $tmpName, $filePath );
$sql = "select * from products where pro_code='$pro_code'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($result);
if ( $row ) {
echo '<script type=text/javascript>alert("کد محصول تکراری است");
window.location.replace("product.php");</script>';
} else {
$sql = ( "INSERT INTO products VALUES
('$pro_code','$pro_name','$pro_price','$pro_qty','$pro_detail','$filePath')");
if ( mysqli_query($connect,$sql)===true ){
echo '<script type=text/javascript>alert("ثبت محصول با موفقیت انجام شد");
window.location.replace("index.php"); </script>';
}
}
} 
else header( 'Location: index.php' );
?>