 <?php 
$connect=mysqli_connect("localhost","root","110","shop");
if(mysqli_connect_errno())
	exit(":خطایی با شرح زیر رخ داده است".mysqli_connect_errno());
mysqli_set_charset($connect,"utf8");
// ?>