<?php
	include("header.php");
	include("connect.php");
?>
<a href="artikel-eintragen.php"><button class="btn btn-info">Artikel eintragen</button></a>
<br><br>
<table class="table-bordered" border="1">
<colgroup>
    <col style="width:150px" span="6">
  </colgroup>
	<tr>
    	<td>Artikel</td>
        <td>Beschreibung</td>
        <td>Preis</td>
        <td>Höchstbietender</td>
        <td>Gebote</td>
        <td>Einnahmen</td>
    </tr>
<?php
	
	$sql = "SELECT * FROM artikel";
				$db_erg = mysql_query( $sql );
				while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
				{
					$gebote = $zeile['gebotsanzahl'];
					$einnahmen = $gebote * 0.5;
					echo"<tr>";
				  echo "<td>". $zeile['artikelname'] . "</td>";
				  echo "<td>". $zeile['artikelbeschreibung'] . "</td>";
				  echo "<td>". $zeile['preis'] . "</td>";
				  echo "<td>". $zeile['hoechstbietender'] . "</td>";
				  echo "<td>". $zeile['gebotsanzahl'] . "</td>";
				  echo "<td>". $einnahmen . "€</td>";
				  }
?>
</table>

</body>
</html>