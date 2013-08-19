<?php
session_start();
include_once("header.php");
include_once("connect.php");
$username = $_POST["username"];            //Definierung der Felder
$passwort = $_POST["pw"];

$abfrage = "SELECT username,password FROM users WHERE username LIKE '$username' LIMIT 1";  //Abfrage ob die Daten übereinstimmen
$ergebnis = mysql_query($abfrage) or die(mysql_error());
if(mysql_num_rows($ergebnis) > 0) {
    $row = mysql_fetch_object($ergebnis);
    if($row->password == $passwort) //Übereinstimmung des Passwortes
     	{   
        $_SESSION["username"] = $username;   //Übereinstimmung des Users
        echo "<div class='container' style='margin-top:50px;'>Login erfolgreich. Herzlich Willkommen ".$_SESSION["username"]." <br> <a href=\"index.php\">Zur&uuml;ck zur Startseite </a></div>";
        }
    else
        {
        echo "<div class='container' style='margin-top:50px;'>Benutzername und/oder Passwort waren falsch. <a href=\"login.php\">Login</a></div>";
        }
    }
else
        {
        echo "<div class='container' style='margin-top:50px;'>Benutzername und/oder Passwort waren falsch. <a href=\"login.php\">Login</a></div>";
        }
mysql_close($verbindung);  
?>