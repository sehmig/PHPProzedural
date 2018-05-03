<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 
<body>
<h1>Eingabe</h1>

<?php
session_start(); //Ganz wichtig
 
if(!isset($_SESSION['username'])) {
   die("Bitte erst einloggen"); //Mit die beenden wir den weiteren Scriptablauf   
}
 
//In $name den Wert der Session speichern
$name = $_SESSION['username'];
 
//Text ausgeben
echo "Du heißt immer noch: $name
<a href=\"logout.php\">Logout</a>";
?>

</body>
</html>