<div class="homeBoxContainer">
	<div class="homeBox block">
		<h2>Dernières news</h2>
		<div>À venir</div>
	</div>
	<div class="homeBox block">
		<h2>Derniers récits</h2>
		<div>
			<?php
				$req=$SQL_DB->req('SELECT * FROM '.SQL_TBL_PREFIX.'stories');
				$datas=$SQL_DB->fetchAll($req);
				foreach($datas as $data) {
					echo($data['name']);
					echo('<br/>');
				}
			?>
		</div>
	</div>
</div>
<div class="homeBoxContainer">
	<div class="homeBox block">
		<h2>Derniers topics</h2>
		<div>À venir</div>
	</div>
	<div class="homeBox block">
		<h2>Top artworks</h2>
		<div>À venir</div>
	</div>
</div>