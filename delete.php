<?php
include('conection.php');
if(isset($_GET["id"])) {
$pro_code=$_GET["id"];
$sql="select * from products where pro_code='$pro_code'";
$result=mysqli_query($connect,$sql);
$rec=mysqli_fetch_array($result);
unlink($rec["pro_image"]);
	
$sql="delete from products where pro_code='$pro_code'";
if (mysqli_query($connect,$sql)===true) {
echo
'<script type=text/javascript>
alert("حذف با موفقیت انجام شد");
window.location.replace("index.php");
</script>';
}
}
else{
header('Location:index.php');
}
?>