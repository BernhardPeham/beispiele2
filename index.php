<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Meine Startseite</title>
	<link rel="stylesheet" href="myCss.css">
</head>
<body class="Startseite">
	<?php include "navigation.php"; ?>

	<H1>Das ist meine Seite !</H1>

	<?php
		echo "<div id=\"test\"><p>Bilder</p></div>\n";
		$bilder=["a.jpg", "b.jpg", "c.jpg", "d.jpg", "e.jpg", "f.jpg", "g.jpg", "h.jpg", "i.jpg", "j.jpg"];
		$zufall=rand(0, count($bilder)-1);

		echo "<img src='bilder/$bilder[$zufall]' alt='Bildchen'/>\n";
		include "copyright.php";
		// phpinfo();
	?>
</body>
