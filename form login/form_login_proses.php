<?php
$username = $_POST['username'];
$password = $_POST['password'];

	if ($username =="admin" && $password == "qwerty") 
	{
		//echo "Login sukses";
		header('Location: http://localhost/fitri/form_login_dan_css.php?message_password=password yang diinput salah');
	}

	else
	{
		//echo "Login gagal";
		header('Location: http://localhost/fitri/form_login_dan_css.php?message=Username atau password yang diinput salah');
		die;
	}
?>