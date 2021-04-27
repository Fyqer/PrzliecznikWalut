<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<?php
#DEKLARACJE########
$PLN = $_POST['PLN'];
$Imie = "Daniel"; 
$Nazwisko = "Gałeczka";
$Szkola =  "Wyższa Szkoła Technologii Informatycznych w Katowicach";
$EUR = 0.22 *$_POST['PLN']; 
$USD = 0.26 *$_POST['PLN'];
$GBP = 0.19 *$_POST['PLN'];

$wybor = $_POST['wybor'];
?>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title> Kalkulator Walut</title>
</head>
<body>
<div id = "main">
<h2 >Przelicznik walut zadziałał!</h2>
<div id =  "TRESC">

<?php
#IFY I ELSY############
 switch ($wybor) { 
case "EUR" : 
echo 
"<h1>  $PLN to dokładnie $EUR  Euro!</h1>";
break;
 case "USD" :
 echo
"<h1>  $PLN to dokładnie $USD  USD!</h1>";
break;
 case "GBP" :
 echo
  "<h1>  $PLN to dokładnie $GBP GBP!</h1>";
break;
}?>
</br>
</br>
</br>
</br>

<input type =button value = "Spróbuj ponownie!" style = "font-size:30px "onclick= "history.back(-1)" />


</div>
<div id = "STOPKA">
	<p> <?php echo " Wykonane przez $Imie $Nazwisko - $Szkola";?> </p>
	</div>

</div>


</body>


</html>

