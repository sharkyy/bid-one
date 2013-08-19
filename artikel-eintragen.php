<?php
	include("header.php");
	if($rolle == "admin"){
?>
<form action="eintragen.php" method="post">
<div class="row-fluid">
	<div class="span2">
    	Artikelname
    </div>
    <div class="span10">
    	<input type="text" name="artikelname" />
    </div>
</div>
<div class="row-fluid">
	<div class="span2">
    	Artikelbeschreibung
    </div>
    <div class="span10">
    	<textarea cols="20" rows="10" draggable="false" name="beschreibung">
        </textarea>
    </div>
</div>
<div class="row-fluid">
	<div class="span2">
    	Kategorie
    </div>
    <div class="span10">
    	<input type="text" name="kategorie" />
    </div>
</div>
<div class="row-fluid">
	<div class="span2">
    	Preis
    </div>
    <div class="span10">
    	<input type="number" name="preis">
    </div>
</div>
<input type="submit" class="btn btn-success" value="eintragen" />
</form>
<?php
	} else {
?>
	<div class="container">
    	<h1>Sie sind dazu nicht berechtigt.</h1>
    </div>
<?php
	die();
	}
?>
</body>
</html>