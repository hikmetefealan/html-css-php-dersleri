<?php
//değişken tanımlama

	$sayi1 = 124;
	$sayi2 = 50;

	function topla($a,$b) {

		$toplam = $a + $b;
		echo 'Toplam:'.$toplam.'<br>';
	}
	function cikar($a,$b){

		$kalan = $a - $b;
		echo 'Cıkarma:'.$kalan.'<br>' ;


	}
	function carpma($a,$b){

		$carpma = $a * $b;
		echo 'Carpma:'.$carpma.'<br>' ;


	}
	function bolme($a,$b){

		$bol = $a / $b;
		echo 'Bölme:'.$bol.'<br>' ;


	}
	topla($sayi1 , $sayi2);
	cikar($sayi1 , $sayi2);
	carpma($sayi1 , $sayi2);
	bolme($sayi1 , $sayi2);

	function ekranaYazdir()
	{
		echo 'parametresiz fonksiyon' ;
	}
	ekranaYazdir();

	echo '<br>' ;
	$sayi3 = 10;
	$sayi3 = $sayi3+ 5;//sayi3 e 5 ekler
	$sayi3 += 5 ;//sayi3 e 5 ekler
	echo $sayi3;// sayi3 ü gösterir
	$sayi3*=5;
	echo '<br>';
	echo $sayi3;
	$sayi4=16;
	echo '<br>';
	//karekök alma
	echo sqrt($sayi4) ;//karekök alma
	echo '<br>';
	//üs alma
	echo pow($sayi4, 2);
 	echo '<br>';
 	//dizi oluşturma
	$dizi = array('Hikmet', 1, 'Alan');
	//dizide dolaşmak için döngü
	foreach($dizi as &$eleman)
	{

		echo $eleman.'<br>';

	}
	$a = 5;
	//döngü
	while($a <= 10)
	{
		echo $a.'<br>' ;
	$a += 1;
	}
	echo '<br>';
	//döngü(i 1 den başlar 10 a kadar 1 artırır)
	for($i = 1; $i <= 10; $i++)
	{
		echo $i.'<br>';
	}
	$yenisayi = 35;
	//yeni sayı eğer 30 dan küçükse ekrana 30dan küçük yazar
	if($yenisayi < 30)
	{
		echo 'sayi 30dan küçük';
	}
	//değilse ekrana sayı 30dan küçük değil yazar
	else
	{
		echo 'sayi 30dan küçük değil.';
	}
	echo '<br>';
	$sayi5 = 6;
	//if else gibi 
	switch ($sayi5) 
	{
		case 4:
		echo 'sayı 4tür';
		break;

		case 5;
		echo 'sayı 5tir' ;
		break;

		case 6;
		echo 'sayı 6dır';
		break;
	}
	echo '<br>';
	//tek çift
	$sayi = 20;
		if($sayi%2 == 0){
			echo 'sayı çifttir';
		}
		else{
			echo 'sayı tektir';
		}
?>