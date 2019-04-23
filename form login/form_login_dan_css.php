<html>
	<head>
		<title>FORM LOGIN DAN CSS</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="all"/>

	</head>
	<body>
		<div id="kotak">
			<?php
			if ($_GET) 
			{
				if (isset($_GET['message'])) {

				echo '<div class="text-alert">';
				echo $_GET['message'];
				echo '</div>';
				}
			}
			?>

			<div id="atas">LOGIN ADMINISTRATOR</div>
			<div id="bawah">

				<form method="post" action="form_login_proses.php">
				<input class="masuk" type="text" placeholder="username" name="username"><br/>
				<input class="masuk" type="password" placeholder="password" name="password"><br/>
				<?php
			if ($_GET) 
			{
				if (isset($_GET['message_password'])) {

				echo '<div class="text-alert">';
				echo $_GET['message_password'];
				echo '</div>';
				}
			}
			?>
				<input id="tombol" type="submit" name="login" value="Login">
			</form>
		</div>
		</div>
	</body>
</html>