<?php
	session_start();
	include_once("header.php");
?>
<body>
<div class="container" style="margin-top:50px;"
<h1>Sie wurden erfolgreich ausgeloggt</h1>
<?php
unset($_SESSION['username']);
session_destroy();
?>
<a href="index.php">Zurück</a>
</body>
</html>