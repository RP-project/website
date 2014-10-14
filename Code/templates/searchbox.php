<div id="searchBox">
	<form method="get" action="./">
		<input type="text" name="searching" placeholder="Rechercher" <?php if(isset($_GET["searching"])) echo('value="'.$_GET["searching"].'"'); ?>/><input type="submit" value="→"/>
	</form>
</div>