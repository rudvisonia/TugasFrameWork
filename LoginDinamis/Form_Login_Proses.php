<?php
	$Username = $_POST['User'];
	$Password = $_POST['Pass'];

	if($Username == "admin" && $Password == "qwerty" || $Username == "Anshar467" && $Password == "Anshar4675")
	{
		// echo "Login Berhasil Ya AKMJ :v";
	}

	else
	{
		// echo "Wadoh b00rhan, login gagal ya asw :v ";
		header('Location:http://localhost:8080/Anshar467/Contoh/Login Dinamis/LoginDinamis/Form_Login.php?message=Username atau Password yang diinputkan salah');
		die;
	}
?>