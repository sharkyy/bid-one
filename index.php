<?php
	include("header.php");
	include("connect.php");
?>
	<div class="container">
		<div class="artikel_heading">
        	<?php
				$sql = "SELECT * FROM artikel WHERE startzeit > NOW()";
				$db_erg = mysql_query( $sql );
				while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
				{
			?>
            	<div class="row-fluid" id="article">
                	<div class="span3">
                    	<h4>Image</h4>
                    	<?php
   							  echo "<h4>". $zeile['artikelname'] . "</h4>";
							  echo "<h5>Angebotsende: ".$zeile['endzeit']."</h5>";
							  echo "<h5>Preis: ".$zeile['preis']."€</h5>";
							  }
						?>
                    </div>
                </div>
        </div>
	</div>
</body>
</html>