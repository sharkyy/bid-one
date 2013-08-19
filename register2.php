<?php
	session_start();
	include("header.php");
	if(!isset($_SESSION['username'])){
		//Eingaben auslesen und in Variablen speichern
		$username = $_POST["username"];
		$pw = $_POST["pw1"];
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$street = $_POST["street"];
		$zip = $_POST["zip"];
		$city = $_POST["city"];
		$rolle = user;
		$bids = 5;
		
		//Datenbank verbindung aufbauen
		include("connect.php");
		
		//user eintragen
		$insert = mysql_query("insert into users (username, password, vorname, nachname, strasse, plz, ort, rolle, bids) values ('$username', '$pw', '$firstname', '$lastname', '$street', '$zip', '$city', '$rolle', '$bids')");
?>
        <div class="container" style="margin-top:50px;">
            Ihre registration war erfolgreich. Zur&uuml;ck zur <a href="index.php">Startseite</a>
        </div>
<?php
	//Sessionvariable setzen
	$_SESSION["username"] = $username;
	} else {
?>
	<div class="container">
    	Sie sind bereits eingeloggt.
    </div>
<?php
	}
?>