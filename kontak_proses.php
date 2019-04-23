<?php
include 'config.php';

$nama = $_POST ['nama'];
$email = $_POST ['email'];
$pertanyaan = $_POST ['pertanyaan'];
$created = date('Y-m-d h:i');

$sql =" INSERT INTO kontak (nama,email,pertanyaan,created)
		VALUES  ('$nama', '$email', '$pertanyaan', '$created');";

		if($conn->querry($sql) === TRUE );
		echo "Data berhasil disimpan";
  else{
		echo "ERROR dengan pesan :".$sql. "<br>".
		$conn->error;
	  }
	  	$conn->close();
?>


