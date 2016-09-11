<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Kochbuch</title>
	<link rel="stylesheet" href="myCss.css">
</head>
<body class="Kochbuch">
	<?php include "navigation.php"; ?>
	<H1>Das ist meine Seite !</H1>

	<?php
		class Rezept {
			public $name;
			public $zutaten = array();
			public function hatzutat($zutat) {
				return in_array($zutat,$this->zutaten);
			}
		}
		$kuchen = new Rezept;
		$kuchen->name="Kuchen";
		$kuchen->zutaten=["Eier", "Mehl", "Wasser"];
		echo " $kuchen->name";
		if ($kuchen->hatzutat("Mehl")) {
			echo " mit Mehl<br>\n";
		}
		else {
			echo " ohne Mehl<br>\n";
		}
	?>
</body>
