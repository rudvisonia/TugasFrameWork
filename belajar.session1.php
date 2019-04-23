<?php

session_start() : // mengaftikan SESSION
$bil1 = 10;
$bil2 = 15;
// menyimpan kedua bilangan ke dalam session
$_SESSION['bil1'] = $bil1;
$_SESSION['bil2'] = $bil2;

echo "Anda memasukkan bilangan ke-1 :".
		$bil1."<br />";
echo "Anda memasukkan bilangan ke-2 :".
		$bil2."<br />";
echo "<a href='belajar session2.php'>
		klik di sini </a>";
?>