<?php
/* Verbindung aufbauen, auswählen einer Datenbank */ 
 $link = mysql_connect("localhost", "root", "") 
    or die("Keine Verbindung möglich: " . mysql_error()); 
 mysql_select_db("bid-one") or die("Auswahl der Datenbank fehlgeschlagen"); 
?>