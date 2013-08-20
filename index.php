<?php
	include("header.php");
	include("connect.php");
?>
	<div class="container" id="article_content">
		<div class="artikel_heading">
        <?php
				$sql = "SELECT * FROM artikel WHERE startzeit < NOW()";
				$db_erg = mysql_query( $sql );
				while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
				{
			?>
            	<div class="row-fluid" id="article">
                <h2>Aktuelle Auktionen</h2>
                	<div class="span3">
                    	<h4>Image</h4>
                    	<?php
   							  echo "<h4>". $zeile['artikelname'] . "</h4>";
							  echo "<h5>Angebotsende: ".$zeile['endzeit']."</h5>";
							  echo "<h5>Preis: ".$zeile['preis']."€</h5>";
						echo"</div>";
                	echo"</div>";
							  }
						?>
        	<?php
				$sql = "SELECT * FROM artikel WHERE startzeit > NOW()";
				$db_erg = mysql_query( $sql );
				while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
				{
			?>
            	<div class="row-fluid" id="article">
                <h2>Zukünftige Auktionen</h2>
                	<div class="span3">
                    	<h4>Image</h4>
                    	<?php
   							  echo "<h4>". $zeile['artikelname'] . "</h4>";
							  echo "<h5>Angebotsende: ".$zeile['endzeit']."</h5>";
							  echo "<h5>Preis: ".$zeile['preis']."€</h5>";
					echo"</div>";
                echo"</div>";
							  }
						?>
        </div>
	</div>
</body>
</html>