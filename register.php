<?php
	include("header.php");
?>
	<div class="register-form">
    	<h1>Registrierung</h1>
		<form action="register2.php" method="post">
        	<div class="row-fluid">
            	<div class="span2">
            		Username:
                </div>
                <div class="span10">
            		<input type="text" name="username" />
            	</div>
            </div>
            <div class="row-fluid">
            	<div class="span2">
            		Passwort:
                </div>
                <div class="span10">
            		<input type="password" name="pw1" />
            	</div>
            </div>
            <div class="row-fluid">
            	<div class="span2">
            		Passwort wiederholen:
                </div>
                <div class="span10">
            		<input type="password" name="pw2" />
                </div>
            </div>
            <div class="row-fluid">
            	<div class="span2">
            		Vorname:
                </div>
                <div class="span10">
            		<input type="text" name="firstname" />
            	</div>
            </div>
            <div class="row-fluid">
            	<div class="span2">
            		Nachname:
            	</div>
                <div class="span10">
            		<input type="text" name="lastname" />
            	</div>
            </div>
            <div class="row-fluid">
            	<div class="span2">
            		Straße, Hausnummer:
                </div>
                <div class="span10">
            		<input type="text" name="street" />
            	</div>
            </div>
            <div class="row-fluid">
            	<div class="span2">
            		Postleitzahl:
                </div>
                <div class="span10">
            		<input type="text" maxlength="5" name="zip" />
            	</div>
            </div>
            <div class="row-fluid">
            	<div class="span2">
            		Ort:
                </div>
                <div class="span10">
            		<input type="text" name="city" />
            	</div>
            </div>
            <input type="submit" value="Registrieren" />
        </form>
	</div>
	</body>
</html>