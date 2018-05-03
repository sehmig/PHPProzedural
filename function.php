<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 
<body>
<h1>Eingabe</h1>

<?php
$name = "Klaus";

echo "Hallo, mein Name ist $name";
// Gültigkeit in der Funktion
function meineFunktion($neuer_name) {
   if(strlen($neuer_name) < 3) {
      echo "Neuer Name zu kurz";
   } else {
     $name = $neuer_name;
     echo "In der Funktion heißt du $name";
   }
}
meineFunktion("Petra");
echo "Der Wert von der Variable name ist: $name";
?>
<p>
<?php
$wochentag = "Sonntag";
// Übergabe an Funktion
function begruessung($name, $tag_in_der_woche) {
   echo "Hallo $name, ich wünsche dir einen schönen $tag_in_der_woche";
}

begruessung("John", $wochentag);
?>

</body>
</html>