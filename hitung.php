<!DOCTYPE html>
<html>
<head>
    <title>Hasil - Hitung Nilai Rata-rata</title>
</head>
<body>
 <?php
    $nama = $_POST['nama'];
    $nilai_9 = $_POST['nilai_9'];
    $nilai_2 = $_POST['nilai_2'];
    $nilai_10 = $_POST['nilai_10'];
    $nilai_3 = $_POST['nilai_3'];
    $nilai_7 = $_POST['nilai_7'];
    $nilai_5 = $_POST['nilai_5'];
    $nilai_2 = $_POST['nilai_2'];
    $jumlah = $nilai_9+$nilai_2+$nilai_10+$nilai_3+$nilai_7+$nilai_5+$nilai_2;
    $nilai_ratarata  = $nilai_9*(70/100)+$nilai_2*(70/100)+$nilai_10*(70/100)+$nilai_3*(70/100)+$nilai_7*(70/100)+$nilai_5*(70/100)+$nilai_2*(70/100);
   
    if(($nilai_ratarata >=0) && ($nilai_ratarata<45)){
        $nilai_huruf="E";
    }elseif(($nilai_ratarata >=45) && ($nilai_ratarata<55)){
        $nilai_huruf="D";
    }elseif(($nilai_ratarata >=56) && ($nilai_ratarata<67)){
        $nilai_huruf="C";
    }elseif(($nilai_ratarata >=68) && ($nilai_ratarata<79)){
        $nilai_huruf="B";    
    }elseif(($nilai_ratarata >=80) && ($nilai_ratarata<=100)){
    $nilai_huruf="A";
    } else {
        $nilai_huruf="Nilai diluar jangkauan";
    }
        echo "Nama: $nama <br>";
        echo "Jumlah Nilai: $jumlah <br>";
        echo "Nilai rata-rata: $nilai_ratarata <br>
             Nilai Huruf: $nilai_huruf";
    ?>
</body>
</html>