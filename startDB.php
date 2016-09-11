<?php	
	$mysqli = new mysqli("localhost", "root", "aqweraa", "mydb");
	if ($mysqli->connect_error) {
		echo "Sorry: Fehler " . mysqli_connect_error();
		exit;
	}
	if (!$mysqli->set_charset("utf8")) {
		echo "Fehler beim Laden von UTF8" . $mysqli->error;
	}
	echo "Alles super!"; 
?>