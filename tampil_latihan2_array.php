<?php
	
	$barang_POST = $_POST["barang"];
	$jumlah_barang_POST = $_POST["jumlah"];

	$barang = array (1500, 5600, 4500, 30000, 7250, 6700
					, 8900, 7100, 6450, 5600);
	$ditemukan=false;


	for ($i=0; $i < count($barang); $i++) { 
		//echo "Nilai ruang ke ".$i." dari array angka = "
		//.$angka[$i]."<br/>";

		if ($i==$barang_POST) {
		echo "TOTAL BELANJA = ".$barang[$barang_POST]*$jumlah_barang_POST;
			 $ditemukan=true;
		}
	}

		if ($ditemukan==false) {
		echo "-> Barang tidak ditemukan";
		}