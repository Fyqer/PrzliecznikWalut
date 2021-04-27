<?php
   include('session.php');
   
  $nazwa = $login_session;
  $state = 1;
?>
<html">
   
   <head>
      <title>TodoAPP </title>
   </head>
   <body>
   
      <h1 align = center>Witaj <?php echo $nazwa; ?></h1> 
	      <h2 align = left ><a href = "logout.php">Wyloguj </a></h2>
		  <?php
		  // wyswietlaanie zadań aktualnych
		  
		   
		   while($wiersz = $wynik->fetch_assoc()){
			   
			     echo "<p><b> | Zadanie </b> : " .$wiersz['tytul'];
		  
		   echo "</br> | <b> |Opis </b> : ".$wiersz['opis']."</p>";
		   }
		   
		   
		   //DODAWANIE REKORDU 
		   
		   


 if(!empty($_POST['tytul'])) // BLAD - PO odswiezeniu dodaje nowe zadanie 
		   {
		   $tytul = htmlentities('tytul', ENT_QUOTES, "UTF-8");
       $opis = htmlentities('opis', ENT_QUOTES, "UTF-8");
		   $nazwa = $login_session;
  $state = 1;
		   $tytul = mysqli_real_escape_string($db, $_POST['tytul']);
$opis = mysqli_real_escape_string($db, $_POST['opis']);

$sqladd = "INSERT INTO tasks (tytul, opis, state, login ) VALUES ('$tytul', '$opis', '$state', '$nazwa' )";
if(mysqli_query($db, $sqladd)){
    echo "Rekord pomylsnie dodany.";
} else{
   echo "ERROR";
}
 
 $tytul = "";
// Close connection
mysqli_close($db);
		   }
		   ?>
		
		   
	 </br>
		   
     <div align = center>
	 <p><b>Dodaj nowe zadanie <b></p> 
	 <form action="gra.php" method="post">
    <p>
        <label for="tytul">Tytuł :</label>
        <input type="text" name="tytul" id="tytul">
    </p>
    <p>
        <label for="opis">Opis:</label>
        <input type="text" name="opis" id="opis">
    </p>
    
    <input type="submit" name = "Dodaj" value = "Dodaj">
</form>
	 </div>
   </body>
   
</html>