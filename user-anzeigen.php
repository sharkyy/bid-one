<?php
	include("header.php");
	include("connect.php");
?>
<div class="container" id="user-table">
<table class="table-bordered font-white" border="1">
<colgroup>
    <col style="width:150px" span="8">
  </colgroup>
	<tr>
    	<td>Username</td>
        <td>Bids</td>
        <td>Rolle</td>
        <td>Vorname</td>
        <td>Nachname</td>
        <td>Strasse</td>
        <td>Plz</td>
        <td>Ort</td>
    </tr>
<?php
	$sql = "SELECT * FROM users";
				$db_erg = mysql_query( $sql );
				while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
				{
					echo"<tr>";
				  echo "<td>". $zeile['username'] . "</td>";
				  echo "<td>". $zeile['bids'] . "</td>";
				  echo "<td>". $zeile['rolle'] . "</td>";
				  echo "<td>". $zeile['vorname'] . "</td>";
				  echo "<td>". $zeile['nachname'] . "</td>";
				  echo "<td>". $zeile['strasse'] . "</td>";
				  echo "<td>". $zeile['plz'] . "</td>";
				  echo "<td>". $zeile['ort'] . "</td>";
				}
?>
</table>
</div>
</body>
</html>