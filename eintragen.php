<?php
	include("header.php");
	include("connect.php");
	if($rolle == "admin"){

	$artikelname = $_POST['artikelname'];
	$beschreibung = $_POST['beschreibung'];
	$kategorie = $_POST['kategorie'];
	$preis = $_POST['preis'];
	
	$insert = mysql_query("insert into artikel (artikelname, artikelbeschreibung, kategorie, preis) values ('$artikelname', '$beschreibung', '$kategorie', '$preis')");
?>
<h2>Artikel erfolgreich eingetragen.</h2>
Zurück zum <a href="admin.php">Adminbereich</a>
<?php
	} else {
?>
	<div class="container">
    	<h1>Sie sind dazu nicht berechtigt.</h1>
    </div>
<?php
	die();
	}
?>
</body>
</html>