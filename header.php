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
    <?php
		//Wenn nicht eingeloggt:
		if(!isset($_SESSION['username'])){
	?>
    <div class="head-nav">
    <ul>
   		<li><a href="login.php">Login</a></li>
        <li><a href="register.php">Registrieren</a></li>
    </ul>
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
	?>
    <div class="container">
    	<div class="row-fluid">
        	<div class="span12">
    			<a href="index.php"><img src="img/logo.png" class="logo" alt="logo" /></a>
    		</div>
        </div>
    <div class="row-fluid">
    	<div class="span3">
    		<div class="logo_downline">
    		</div>
        </div>
        <div class="span6">
    		<?php //Header Menü ?>
          	<div id="menu">
            	<ul>
            <!--<?php
			//Adminpanel in der navi anzeigen, auf
					if($rolle == "admin"){
			?>
              <li class="topmenu">
                <a href="admin.php">Adminpanel</a>
              </li>
              <?php	
				//Adminpanel in der navi anzeigen, zu
				}
				?>
             -->
              <div class="row-fluid">
              	<div class="span3">
                  <li class="topmenu">
                    <a href="logout.php">Auktionen</a>
                    <ul class="submenu">
                      <li class="submenu"><a href="">Aktuelle</a></li>
                      <li class="submenu"><a href="">Zukünftige</a></li>
                      <li class="submenu"><a href="">Beendete</a></li>
                    </ul>
                  </li>
                </div>
                <div class="span3">
                  <li class="topmenu">
                    <a href="">Mein Account</a>
                  </li>
                </div>
                <div class="span3">
                  <li class="topmenu">
                    <a href="">Bids kaufen</a>
                  </li>
                </div>
                <div class="span3">
                  <li class="topmenu">
                    <a href="logout.php">Logout</a>
                  </li>
                </div>
            </ul>
          </div>
          </div>
          <div class="span3">
          <div class="logo_downline2">
          </div>
      </div>
    </div>
  </div>
</div>
    <br>
    <?php
		//wenn eingeloggt, zu
		}
	?>