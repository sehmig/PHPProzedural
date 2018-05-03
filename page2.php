<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 
<body>
<h1>Ausgabe</h1>

<?php
$vorname = $_POST["vorname"];
$nachname = $_POST["nachname"];
$wochentag = $_GET["wochentag"];

if($wochentag == "Sonntag") 
   {
   echo "Immer wieder sonntags";
   }
?>

echo "Hallo $vorname $nachname. Treffen wir uns am $wochentag?";
?>

</body>
</html>

