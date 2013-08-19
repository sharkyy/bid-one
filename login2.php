<?php
	include("header.php");
	include("connect.php");
	$username = $_POST["username"];
	$pw = $_POST["pw"];
	echo($username." ".$pw);
?>
</body>
</html>