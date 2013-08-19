<?php
	include("header.php");
	include("connect.php");

	$artikelname = $_POST['artikelname'];
	$beschreibung = $_POST['beschreibung'];
	$preis = $_POST['preis'];
	
	$insert = mysql_query("insert into artikel (artikelname, artikelbeschreibung, preis) values ('$artikelname', '$beschreibung', '$preis')");
?>
<h2>Artikel erfolgreich eingetragen.</h2>
Zurück zum <a href="admin.php">Adminbereich</a>
</body>
</html>