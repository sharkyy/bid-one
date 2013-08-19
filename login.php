<?php
	include("header.php");
	if(!isset($_SESSION['username'])){
?>
	<div class="container">
        <div class="login">
            <form action="login2.php" method="post">
                Username:
                <br>
                <input type="text" name="username" />
                <br>
                Passwort:
                <br>
                <input type="password" name="pw" />
                <br>
                <input type="submit" value="Login" />
            </form>
        </div>
        <div class="register">
            Neu hier? Jetzt <a href="register.php">registrieren</a>
        </div>
    </div>
    <?php
		} else {
	?>
    	<div class="contaier">
        	Sie sind bereits eingeloggt.
        </div>
    <?php
		}
	?>
	</body>
</html>