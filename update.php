<?php
include('conection.php');
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
$pro_code = $_POST[ "id" ];
$pro_name = $_POST[ "name" ];
$pro_qty = $_POST[ "qty" ];
$pro_price = $_POST[ "price" ];
$pro_detail = $_POST[ "detail" ];
$tmpName = $_FILES['image']	['tmp_name'];
$fileName =	$_FILES['image']['name'];
$filePath = 'img/' .$fileName;
$result = move_uploaded_file($tmpName,$filePath) ;
$sql = "update products set `pro_name` = '$pro_name',
`pro_qty` = '$pro_qty',
`pro_price` = '$pro_price',
`pro_detail` = '$pro_detail',
`pro_image` = '$filePath'
where `pro_code` = '$pro_code'";
if (mysqli_query($connect,$sql)===true) {
echo '<script type=text/javascript>alert("ویرایش با موفقیت انجام شد");
window.location.replace("index.php");
</script>';
} }
else
header('Location: index.php');
?>