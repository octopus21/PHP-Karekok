<?php
/*
      Programın Amacı Belirtilen Sayı aralığındaki sayıların kaç tanesinin karekökü tam sayı ediyor bunu bulmak
      Ayrıca bulunan sayılardan kaç tane olduğu, bulunan sayının kaçıncı bulunduğu, bulunan sayının karekökünü ekrana yazıyor.
      En son olarak da toplam kaç tane olduğunu ekrana yazıyor
*/
$j = 0;  
$min = 0;
$max = 100;
for ($i=$min; $i <= $max; $i++) { 
	$sqrt1 = sqrt($i);
	if(fmod($sqrt1, 1) !== 0.00) {
	} else {
		$j++;
		echo "[".$j.".Sayı"."]".$i." KareKökü"." >> ".$sqrt1; echo "<br>";
	}
}
echo "//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////"; echo "<br>";
echo $min." dan ".$max." kadar olan sayılardan karekökleri tam sayı olanların toplam sayısı:".$j;
?>

