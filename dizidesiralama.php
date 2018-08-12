<?php 
	$sayilar = array(3,5,6,8,3,6,3,4,3,6,9,2,8);

	foreach ($sayilar as &$sayi) {
		echo $sayi.' ' ;	
	}
	echo '<br>';
	// küçükten büyüğe
	sort($sayilar);

	foreach ($sayilar as &$sayi) {
		echo $sayi.' ' ;	
	}
	echo '<br>';
	// büyükten küçüğe
	rsort($sayilar);

	foreach ($sayilar as &$sayi) {
		echo $sayi.' ' ;	
	}
	echo '<br>';
	//e sonra en büyük 
	echo 'en büyük eleman:'.max($sayilar);
	echo '<br>';
	//dizinin en küçüğü
	echo 'en küçük eleman:'.min($sayilar);





 ?>