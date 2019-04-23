<?php
$username =$_POST ['username'];
$password =$_POST ['password'];

if ($username =="admin" && $password == "qwerty")
{
	echo "Login sukses ";
}
else
{
	//echo "Login gagal ";
	header('location : http://localhost/sonia/css/form.login.proses.php?
	message=username atau paswword yang diinput salah');
	exit;
}
?>