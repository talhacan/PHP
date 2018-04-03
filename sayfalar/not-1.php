<?php
	$renk = "Mavi";
	$$renk = "Blue";

	echo "<b>Değişken Tanımlaması</b>";
	echo "<br>";
	echo '$renk = "Mavi";' . "<br>";
	echo '$$renk = "Blue";' . "<br>";
	echo "<br>";

	echo "<b>Çıktı</b>" . "<br>";
	echo '$renk : '. $renk . "<br>"; 
	echo '$$renk : '. $$renk . "<br>";
	echo '${$renk} : '. ${$renk} . "<br>";
	echo '$Mavi : '. $Mavi;
?>

<html>

	<br><br><br><a onclick="history.back()" style="color:red;"> << Geri Dön</a>

</html>
