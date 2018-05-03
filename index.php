<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 


<body>
<h1>Herzlich Willkommen</h1>

<p>Dies ist eure erste PHP-Datei. Eine Scriptumgebung könnt ihr wie folgt starten: 
<?php
// Quelle
// https://www.php-einfach.de/php-tutorial/
echo "T Mittels echo können Daten ausgegeben werden";
?></p>

<p>Später könnt ihr in PHP dynamische Inhalte erzeugen. Ein einfaches Beispiel ist das aktuelle Datum auszugeben: 
<?php
$name = "Stefan";
echo "Mein Name ist $name";
echo date("d.m.Y H:i:s");
?></p>

</body>
</html>