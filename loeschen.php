<?php
	include_once("header.php");
	if($rolle == "admin"){
	$user_loeschen = $_POST[loeschen];
	$loesch = mysql_query("delete from users where Username = '$user_loeschen'");
?>
<div class="container" style="margin-top:50px;">
	<h1>User erfolgreich gel&ouml;scht.</h1>
    <a href="admin.php">Zur&uuml;ck</a>
</div>
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