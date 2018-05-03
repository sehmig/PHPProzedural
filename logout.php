<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8" />
	<title>PHP-Script</title> 
</head>
 
<body>
<h1>Logout</h1>

<?php
session_start();
session_destroy();
echo "Logout erfolgreich";
?>

</body>
</html>