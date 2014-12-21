<div id="userbox">
	<?php
		if(isset($_SESSION["login"])) { ?>
			<div>
				<span><?php echo($_SESSION["login"]); ?></span><br/>
				<a href="#">Mes histoires</a><br/>
				<a href="accounts/logout.php">Déconnexion</a>
			</div>
		<?php } else { ?>
			<form method="post" action="accounts/login.php">
				<input type="text" placeholder="Identifiant" name="login"/><br/>
				<input type="password" placeholder="Mot de passe" name="password"/><br/>
				<input type="submit" value="Connexion"/>
			</form>
			<a href="register.html">S'inscrire</a>
		<?php }
	?>
</div>