<?php
$teks = "Hello Word";

for($a= 1;$a<=5;$a++)
{
	echo"<h".$a.">".$teks."</h".$a.">";
}
for($a= 1;$a<=10;$a++2)
{
	echo"<h".$a.">".$teks."</h".$a.">";
}
for($a= 10;$a>5;$a--)
{
	echo"<h".$a.">".$teks."</h".$a.">";
}
?>