<!DOCTYPE html>
<html>
<head>
    <title>raspberry pi's ip</title>
</head>
<body>
<?php
echo "complete '" .$_POST["ip"]."'"; 

$myfile = fopen("ip.txt", "w") or die("Unable to open file!");
$txt = $_POST["ip"]; 
fwrite($myfile, $txt);
fclose($myfile);
?>
</html>
