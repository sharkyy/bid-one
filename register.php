<?php
	include("header.php");
?>
	<div class="register-form">
		<form action="reg.php" method="post">
        	Username:
            <input type="text" name="username" />
            <br>
            Passwort:
            <input type="password" name="pw1" />
            <br>
            Passwort wiederholen:
            <input type="password" name="pw2" />
            <br>
            Vorname:
            <input type="text" name="firstname" />
            <br>
            Nachname:
            <input type="text" name="lastname" />
            <br>
            Straße, Hausnummer:
            <input type="text" name="street" />
            <br>
            Postleitzahl:
            <input type="text" maxlength="5" name="zip" />
            <br>
            Ort:
            <input type="text" name="vorname" />
            <br>
            <input type="submit" value="Registrieren" />
        </form>
	</div>
	</body>
</html>