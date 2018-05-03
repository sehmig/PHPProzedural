<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 
<body>
<h1>Seite</h1>

<?php
$seite = $_GET["seite"];
 
if(empty($seite))
   {
   $seite="index";
   }
 
if($seite == "index")
   {
   echo "Indexseite";
   $i = 0;
for( ; ; ) { //Kein Startwert, Bedingung oder Schleifenschritt
  if($i >= 20) { //Unterbreche den Schleifendurchlauf, falls $i >= 20
     break;
  }

  echo "$i ,";
  $i++;
}
   }
 
if($seite == "start")
   {
   echo "Startseite";
 
$i = 0;
while($i < 10) {
   echo "$i, ";
   $i++;
}
   }
?>
<p>
<a href="multipage.php?seite=index">Indexseite</a>
<a href="multipage.php?seite=start">Startseite</a>

</body>
</html>

