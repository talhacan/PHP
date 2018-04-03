<?php
	echo '<h2 style="text-align: center;"> Koşul Operatörü </h2>';
	echo "<h4>Karşılaştırma yapılırken kullanılan <code>if</code> kodunun daha hızlı ve kolay yazım özelliklerine sahip karşılaştırma operatörüdür.</h4>";

	echo "<br>";
	echo "<b>Yazım Şekli</b>";
	echo "<br>";
	echo '<div class="col-md-12"><code>ifade (koşul) ? (doğru ise) : (yanlış ise)</code></div>';

	echo "<br>";
	echo "<br>";
	echo "<b>Kullanımı</b>";
	echo '<div class="col-md-12"><code>$a = 5; <br>echo ( $a == 5 ) ? "Değişken değeri 5\'tir." : "Değişken değeri 5 değildir.";</code></div>';

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<b>Çıktı</b>" . "<br>";
	define("SABITDEGER", "SABİTDEĞERİ",true);
	echo '<div class="col-md-2"><pre>';
	$a = 5;
	echo ( $a == 5 ) ? "Değişken değeri 5'tir." : "Değişken değeri 5 değildir.";
	echo '</pre></div>';
?>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<div><br></div>
	<div><br></div>
	<div><br></div>
	

	<br><br><br><a onclick="history.back()" style="color:red;"> << Geri Dön</a>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
