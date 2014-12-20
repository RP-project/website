<div class="homeBoxContainer">
	<div class="homeBox block">
		<h2>Dernières news</h2>
		<div>À venir</div>
	</div>
	<div class="homeBox block">
		<h2>Derniers récits</h2>
		<div>
			<?php
				$datas=getLastStories();
				foreach($datas as $data) {
					echo('<a href="read_story_'.$data["id"].'.html">');
					echo($data['name']);
					echo('</a><br/>');
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