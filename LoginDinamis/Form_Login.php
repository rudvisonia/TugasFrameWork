<!DOCTYPE html>
<html>
<head>
	<title> HTML Dan CSS </title>
	<link rel="stylesheet" type="text/css" href="Style.css" media="all">
</head>
<body>
	<div id="Kotak">
		<div id="Atas"> 
			Login Administrator
		</div>
		<div id="Bawah">
			<form method="POST" action="Form_Login_Proses.php">
				<input class="Masuk" type="text" name="User" placeholder="Username..."><br>
				<input class="Masuk" type="password" name="Pass" placeholder="Password..."><br><br><br>
				<input id="Tombol" type="submit" name="Proses" value="Login"><br>
			</form>
		</div>
	</div>
</body>
</html>