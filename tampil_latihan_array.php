<?php

	$angka_POST=$_POST['angka'];
	$angka = array(273, 281, 384, 119, 392, 184, 105, 
						129, 204, 219, 274, 275, 263);
	$ditemukan=false;


	for ($i=0; $i < count($angka); $i++) { 
		//echo "Nilai ruang ke ".$i." dari array angka = "
		//.$angka[$i]."<br/>";

		if ($angka[$i]==$angka_POST) {
		echo "Angka ".$angka_POST." ditentukan <br/>
			 -> Pada urutan ".$i."<br/>";
			 $ditemukan=true;
		}
	}


		if ($ditemukan==false) {
		echo "-> Angka tidak ditemukan";
		}



