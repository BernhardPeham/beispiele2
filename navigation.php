<?php
	$navigation = [
				"Kochbuch.php" => "Kochbuch",
				"index.php" => "Startseite",
				"service.php" =>"Serviceseite", 
				"datenbank.php" =>"Datenbank", 
				"impressum.php" => "Impressum"];
	//echo "<ul>\n";
	echo "<div id='menu'>\n";
	foreach ($navigation as $nav => $titel) {
		// echo "<li><a href='$nav' class='$titel'>$titel</a></li>\n";
		echo "<a href='$nav' class='$titel'>$titel</a>\n";
	}
	//echo "</ul>\n"
	echo "</div>\n";
	echo "MENÜ\n";
?>