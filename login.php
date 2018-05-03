<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 
<body>
<h1>Eingeloggt</h1>

<?php
session_start(); //Nicht vergessen
$name = $_POST['name'];
 
if(!isset($name) OR empty($name)) {
   $name = "Gast";
}
 
//Session registrieren
$_SESSION['username'] = $name;
 
//Text ausgeben
echo "Hallo $name <br />
<a href=\"seite2.php\">Seite 2</a><br />
<a href=\"logout.php\">Logout</a>";
?>

</body>
</html>