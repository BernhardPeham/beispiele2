<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Impressum</title>
	<link rel="stylesheet" href="myCss.css">
</head>
<body class="Datenbank">
	<?php include "navigation.php"; ?>
	<?php include "startDB.php"; ?>
	<H1>DB Anwendung</H1>

	<?php
		echo "<ul><li>Datenbank</li></ul>\n";
		// echo "<pre>";
		echo "<table border='2'>\n";
		$ergebnis = $mysqli->query("select * from personal;");
		if (!$ergebnis) {
			echo "<br>Fehler: " . $mysqli->error
				. "<br><strong>Fehlernummer: " . $mysqli->errno . "</strong>";
		}
		echo "<br> Anzahl Sätze:" . $ergebnis->num_rows  . "<br>"
			. "Anzahl Felder: " . $ergebnis->field_count . "<br>"
			. "Anzahl Betroffen: " . $ergebnis->affected_rows . "<br>"
			. "<br>";
		while ($zeile = $ergebnis->fetch_array()) {
			//print_r($zeile);
			echo "<tr>" 
				. "<td>" . $zeile["name"] . "</td>"
				. "<td>" . htmlspecialchars($zeile["vorname"]) . "</td>"
				. "<td>" . $zeile["geburtsdatum"] . "</td>" 
				. "</tr>\n"; 
		}
		//echo "</pre>";
		echo "</table>\n";

		// Test für Insert
		$ergebnis = $mysqli->query("INSERT INTO `personal` (name, vorname, geburtsdatum) VALUES ('Peham','Bernhard','1962-11-03'),('Peham','Julia','1998-08-23'),('Peham','Johanna','1999-08-25'),('Bieler-Peham','Juiia','1963-06-20');");

		// $ergebnis->close();
		$mysqli->close();

	?>
</body>
