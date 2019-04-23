<?php

$x = array(10,12,3,44,50,"hello");

echo'array x ruang ke 0 berisi:' . $x[0]. '<br />';
echo'array x ruang ke 0 berisi:' . $x[5]. '<br />';
echo'<br />';

$y = array{
	0=10;
	1=12;
	2=3;
	3=44;
	4=50;
	5=" Hello word"};

echo'array x ruang ke 0 berisi:' . $x[1]. '<br />';
echo'array x ruang ke 0 berisi:' . $x[4]. '<br />';
echo'<br />';

//for ($1 =0;$i<count($x);$i++)
for ($1=0; $1 <=5; $i++)
{
	echo"Nilai ruang ke ".$i."dari array x=".$x[$i]."<br/>";
}
?>