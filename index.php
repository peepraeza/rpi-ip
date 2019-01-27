<!DOCTYPE html>
<html>
<head>
    <title>Raspberry pi's ip</title>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		.mydiv {
		 display: inline-block;
	    position: fixed;
	    top: 0;
	    bottom: 0;
	    left: 0;
	    right: 0;
	    width: 50%;
	    height: 50%;
	    margin: auto;
		}
	</style>
</head>
<body>

<div class="mydiv">
	<form class="form-horizontal" action="update_ip.php" method="POST">
	<div class="form-group" align="center">
		<p class="h1" align="center">Raspberry Pi's IP</p>
		<br>
		<div style="width:70%">
			<input type="text" class="form-control" name="ip" placeholder="Ex. 192.168.x.xxx" style="text-align: center; font-size:18px">
		</div>
		<br>
		<div align="center">
			<button style="width: 100px; font-size:18px" type="submit" class="btn btn-info">Submit</button>
		</div>
	</div>
	</form>
</div>
</body>
</html>