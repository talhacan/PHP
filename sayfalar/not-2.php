<?php
	$isim = "Can";
	echo '<h2 style="text-align: center;"> EOD Kullanımı </h2>';
	echo "<h4>Uzun ve içerisinde farklı karakterler bulunan metinlerin PHP içerisinde yazımı için kullanılır</h4>";

	echo "<br>";
	echo "<b>Yazım Şekli</b>";
	echo "<br>";
	echo '<div class="col-md-12"><code><<< EOD Merhaba, $isim <br> Bu metin cok sayıda satıra<br>bölünebilir özel bir yapıdır <br> Bu şekilde çok uzun metinler oluşturulabilir<br>EOD;</code> </div>';

	echo "<br>";
	echo "<br>";
	echo "<b>Çıktı</b>" . "<br>";
	echo '<div class="col-md-6"><pre>';
	echo<<<EOD
		Merhaba, $isim 
		Bu metin cok sayıda satıra
		bölünebilir özel bir yapıdır
		Bu şekilde çok uzun metinler oluşturulabilir.
EOD;
	echo "</pre></div><br>";
?>

<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<div><br></div>
	<div class="col-md-12">
		<blockquote class="blockquote">
		  <p class="mb-0"><code>EOD</code> başlangıcında ve sonunda hiçbir boşluk olmaması gerekiyor <h6>(Kaynak kodu inceleyiniz)</h6></p>
		  <footer class="blockquote-footer">Önemli Not</footer>
		</blockquote>
	</div>

	<br><br><br><a onclick="history.back()" style="color:red;"> << Geri Dön</a>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
