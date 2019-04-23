/* Ishad Anshar */

<?php
	$UrutanBarang = $_POST['Barang'];
	$JumlahBarang = $_POST['Jumlah'];
	$Urutan = array(0,1,2,3,4,5,6,7,8,9,10);
	$Harga = array(0,1500,5600,4500,30000,7250,6700,8900,7100,6450,5600);
	$Total;
	$Ditemukan = false;

	for ($i=1; $i<count($Urutan); $i++) 
	{ 
		if($UrutanBarang==$Urutan[$i])
		{
			$Ditemukan = true;
			$Total = $Harga[$i];
			$Total *= $JumlahBarang;
			echo "Total Belanja = $Total";
		}
	}

	if($Ditemukan==false)
	{
		echo "Barang Tidak Ditemukan";
	}
?>