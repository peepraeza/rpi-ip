<!DOCTYPE html>
<html>
<head>
    <title>raspberry pi's ip</title>
</head>
<body>
<?php
require 'connectdb.php';

$ip = $_POST["ip"];
if($ip != 0){
	$query = "UPDATE ip_table SET ip='$ip' WHERE id = 1";
	$result = mysqli_query($dbcon, $query);

	mysqli_close($dbcon);
	$txt = "update success ";
}else{
	$txt = "Sorry ";
	$ip = "no ip input";
}
echo $txt.$ip; 
?>
</html>
