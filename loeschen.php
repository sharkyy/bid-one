<?php
	include_once("header.php");
	$user_loeschen = $_POST[loeschen];
	$loesch = mysql_query("delete from users where Username = '$user_loeschen'");
?>
<div class="container" style="margin-top:50px;">
	<h1>User erfolgreich gel&ouml;scht.</h1>
    <a href="admin.php">Zur&uuml;ck</a>
</div>