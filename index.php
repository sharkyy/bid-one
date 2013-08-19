<?php
	include("header.php");
	include("connect.php");
?>
	<div class="container">
		<div class="artikel_heading">
        	<?php
				$sql = "SELECT * FROM artikel";
				$db_erg = mysql_query( $sql );
				while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
				{
			?>
            	<div class="row-fluid" id="article">
                	<div class="span3">
                    	<h1>Image</h1>
                    </div>
                    <div class="span9">
                    	<?php
   							  echo "<h1>". $zeile['artikelname'] . "</h1>";
							  echo "<div class='row-fluid'>";
							  echo "<div class='span9'>";
							  echo "<h2>Angebotsende: ".$zeile['endzeit']."</h2>";
							  echo "</div>";
							  echo "<div class='span3'>";
							  echo "<h2>Preis: ".$zeile['preis']."€</h2>";
							  echo"</div>";
							  echo"</div>";
							  echo "<br><br>".$zeile['artikelbeschreibung'];
							  }
						?>
                    </div>
                </div>
        </div>
	</div>
</body>
</html>