<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Serviceseite</title>
	<style>
		.fehler {
			color: red;
			font-weight: bold;
		}
	</style>
	<link rel="stylesheet" href="myCss.css">
</head>
<body class="Serviceseite">
	<?php include "navigation.php"; ?>
	<H1>Formular</H1>
	<?php
	if (!isset($_GET["vorname"])) {
	?>
		<form method="get" action="<?php echo($_SERVER["PHP_SELF"]);?>" >
		
		<label for "vorname">Vorname</label>
		<input type="text" name="vorname" id="vorname">
		<p class="fehler">
		<label for "nachname">Nachname</label>
		<input type="text" name="nachname" id="nachname">
		</p>
		<label for "Ort">Ort</label>
		<input type="text" name="Ort" id="Ort">
		</p>
		<p class="besonders">
		<!-- <label for "Radio">Radio</label> -->
		<label for="karte">Karte</label>
		<input name="karte" type="radio" id="mc" value="Mastercard" checked> Mastercard
		<input name="karte" type="radio" id="vi" value="Visa"> Visa
		<input name="karte" type="radio" id="sp" value="Sparkasse"> Sparkasse <br>
		</p>
		<label for "email">E-Mail</label>
		<input type="email" name="email" id="email"
		<p>
		<input type="submit" value="Abschließen">
		</p>
		Kommentar: <br>
		<textarea name="Kommentar" rows="3" cols="20"></textarea>
		<br>
		</form>
	<?php
	} else
	{
		echo "<pre>";
		print_r($_GET);
		echo "</pre>";
		echo htmlspecialchars($_GET["vorname"]);
		echo " ";
		echo $_GET["email"];
	}
	?>
</body>
