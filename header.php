<?php
	session_start();
?>
<!doctype html>
<html>
	<head>
    	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
		<meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />  
		<title>Bid-One</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
    <div class="head-nav">
    <?php
		//Wenn nicht eingeloggt:
		if(!isset($_SESSION['username'])){
	?>
    <div class="head-nav">
   		<a href="login.php">Login</a>
        <a href="register.php">Registrieren</a>
    </div>
    <?php
		//wenn eingeloggt, auf
		} else {
			$username = $_SESSION["username"];
			include("connect.php");
			$sql = "SELECT rolle FROM users WHERE username LIKE '$username' LIMIT 1";	 
			$db_erg = mysql_query( $sql );
			if ( ! $db_erg )
			{
			  die('Ungültige Abfrage: ' . mysql_error());
			}
			while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
			{
				$rolle = $zeile['rolle'];	
			}
			//Adminpanel in der navi anzeigen, auf
			if($rolle == admin){
	?>
				<a href='admin.php'>Adminpanel</a>
    <?php	
			//Adminpanel in der navi anzeigen, zu
			}
	?>
    <a href="index.php">Home</a>
	<a href="#">Mein Account</a>
    <a href="#">Bids kaufen</a>
    <a href="logout.php">Logout</a>
	</div>
    <?php
		//wenn eingeloggt, zu
		}
	?>