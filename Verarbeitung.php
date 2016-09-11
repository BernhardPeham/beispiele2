<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Verarbeitung</title>
	<link rel="stylesheet" href="myCss.css">
</head>
<body class="Verarbeitung">
Viele Dank
<!-- nicht mehr notwendig !!!!!!!!!! -->
<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";
echo htmlspecialchars($_GET["vorname"]);
echo " ";
echo $_GET["email"];

?>

</body>
</html>