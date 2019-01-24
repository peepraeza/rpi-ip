<!DOCTYPE html>
<html>
<head>
    <title>raspberry pi's ip</title>
</head>
<body>
<?php
require 'connectdb.php';
$query = "SELECT ip FROM ip_table WHERE id = 1";
$result = mysqli_query($dbcon, $query);
$keep_data = "";
if($result){
	while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  		$keep_data = $data['ip'] ;
  		print_r($keep_data);
	}
}
mysqli_close($dbcon);
// print_r($keep_data);

?>
</html>
