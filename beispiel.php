<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP Beispiel</title>
	<style>
		.besonders {color: blue;}
	</style>
	<!--
	<style type="text/css">
		body {background: <?php echo "yellow"; ?>}
	</style>
	-->
</head>
<body>
	<p<Erste WebSite!</p>
	<?php
		define("max", 5); //const max=5
		echo "<br>";
		echo M_PI;
		echo "<br>";
		echo __NAMESPACE__;
		echo "<br>";
		$name="Bernhard";
		$alter=55;
		echo "Hallo";
		echo "<p class=\"besonders\">Das ist ein Text</p>";
		$ausgabe = <<< DOC
		<table border="1">
				<tr>
					<td>Name</td>
					<td>Alter</td>
				</tr>
				<tr>
					<td>$name</td>
					<td>$alter</td>
				</tr>
			</table>
DOC;
		// $obst = array("Test", "zzz");
		$obst=["A", "b"];
		echo $obst[1];
		echo $ausgabe;
		$obst[]="Neu";
		echo "<br>$obst[2]";
		echo "<br>$obst[0]";
		echo "<pre>"; print_r($obst); echo "</pre>";
		echo "<ul>";
		foreach ($obst as $key) {
			echo "<li>$key</li>\n";
		}
		echo "</ul>";
		$bilder=["a.jpg", "b.jpg", "c.jpg", "d.jpg", "e.jpg", "f.jpg", "g.jpg", "h.jpg", "i.jpg", "j.jpg"];
		echo "<pre>"; print_r($bilder); echo "</pre>";
		// echo "<img src=bilder/
	?>
</body>
