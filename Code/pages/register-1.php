<div id="body">
	<h2>Inscription</h2>
	<p>Inscription sur le site, en moins de 2 minutes</p>
	<form method="post" action="accounts/register.php">
		<table>
			<tr>
				<td>Identifiant</td>
				<td><input type="text" name="login"/></td>
			</tr>
			<tr>
				<td>Mot de passe</td>
				<td><input type="password" name="password"/></td>
			</tr>
			<tr>
				<td>Entrez le texte de l'image :<br/><img src="misc/captcha.php"/></td>
				<td><input type="text" name="captcha"/></td>
			</tr>
		</table>
		<input type="submit" value="S'inscrire"/>
	</form>
</div>