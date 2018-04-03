<?php
	echo '<h2 style="text-align: center;"> Sabitler </h2>';
	echo "<h4>Sabitler tanımlanırken <code>define</code> kodu kullanılır.</h4>";

	echo "<br>";
	echo "<b>Yazım Şekli</b>";
	echo "<br>";
	echo '<div class="col-md-12"><code>define("SABİTADI", "SABİTDEĞERİ");</code></div>';

	echo "<br>";
	echo "<br>";
	echo "<b>Kullanımı</b>";
	echo '<div class="col-md-12"><code>echo SABiTdEGeR;</code></div>';

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<b>Çıktı</b>" . "<br>";
	define("SABITDEGER", "SABİTDEĞERİ",true);
	echo '<div class="col-md-2"><pre>' . SABiTdEGeR . '</pre></div>';
?>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<div><br></div>
	<div><br></div>
	<div><br></div>
	<div class="col-md-12">
		<blockquote class="blockquote">
		  <p class="mb-0">define kullanırken 3. parametre olarak <code>true</code> değeri eklenirse sabit isminde büyük küçük harf duyarlılığı kalkmış olur. <h6>(Kaynak kodu inceleyiniz)</h6></p>
		  <footer class="blockquote-footer">Önemli Not</footer>
		</blockquote>
	</div>

	<br><br><br><a onclick="history.back()" style="color:red;"> << Geri Dön</a>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
