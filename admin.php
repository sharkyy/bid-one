<?php
	include_once("header.php");
	if($rolle == "admin"){
?>
	<div class="container" style="margin-top:50px; margin-left: 100px; width: 420px; float: left;">
    <h1>Neuen User eintragen</h1>	
        <form action="register3.php" method="post">
            Username:
            <br>
            <input type="text" name="username" />
            <br>
            Passwort:
            <br>
            <input type="password" name="pw" />
            <br>
            Vorname:
            <br>
            <input type="text" name="firstname" />
            <br>
            Nachname:
            <br>
            <input type="text" name="lastname" />
            <br>
            Straße:
            <br>
            <input type="text" name="street" />
            <br>
            Plz:
            <br>
            <input type="text" name="zip" />
            <br>
            Ort:
            <br>
            <input type="text" name="city" />
            <br>
            Bids:
            <br>
            <input type="number" name="bids" />
            <br>
            Rolle:
            <br>
            <select name="rolle">
                <option selected>admin</option>
                <option>user</option>
            </select>
            <br>
            <input type="submit" value="User eintragen" class="btn btn-success"/>
        </form>
        </div>
        <div class="user_verwalten" style="margin-top:50px; margin-right: 100px; width: 420px; float: right;">
    		<h1>User verwalten</h1>
            <a href="user-anzeigen.php"><button class="btn btn-info">User verwalten</button></a>
            </div>
   	<div class="container" style="margin-top:50px; margin-right: 100px; width: 420px; float: right;">
    	<h1>User l&ouml;schen</h1>
        <form action="loeschen.php" method="post">
        Username:
        <br>
        <select name="loeschen">
        	<?php
				$sql = "SELECT username FROM users";
				$db_erg = mysql_query( $sql );
				while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
				{
				  echo "<option>". $zeile['username'] . "</option>";
				}
			?>
        </select>
        <br>
        <input type="submit" value="l&ouml;schen" class="btn btn-danger" />
        </form>
    </div>
    <div class="container" style="margin-top:50px; margin-right: 100px; width: 420px; float: right;">
    <h1>Artikelliste</h1>
    <a href="artikel.php"><buton class="btn btn-info">Artikel anzeigen / bearbeiten</button></a>
<?php
	} else{
?>
<div class="container" style="margin-top:50px;">
	<h2>Sie sind kein Admin.</h2>
</div>
<?php
	}
?>
<body>
</body>
</html>