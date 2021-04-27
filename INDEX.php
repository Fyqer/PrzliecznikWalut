<!DOCTYPE HTML>
<html>
<?php
#deklaracje
$Imie = "Daniel"; 
$Nazwisko = "Gałeczka";
$Szkola =  "Wyższa Szkoła Technologii Informatycznych w Katowicach";
?>
<head>
<title> Przelicznik walut</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>


<body>
<div id = "main">
<h1 >Przelicznik walut</h1>
<div id = "TRESC">
</br>

</br>
</br>
</br>
</br>
<form action = "wynik.php" method="POST">
<select name="wybor">
<option value="GBP">GBP</option>
<option value="EUR">EUR</option>

<option value="USD">USD</option>

</select>
</br>
</br>
</br>
</br>
	<input type =number name= "PLN" placeholder="Kwota w PLN">
</br>
</br>

<input type = submit value = "Przelicz!" style = "font-size:40px" />
	
	</div>
	<div id = "STOPKA">
	<p> <?php echo " Wykonane przez $Imie $Nazwisko - $Szkola";?> </p>
	</div>
</div>
</form>
</body>
</html>
