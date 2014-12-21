<div class="homeBoxContainer">
	<div class="homeBox block">
		<h2>Dernières news</h2>
		<div>À venir</div>
	</div>
	<div class="homeBox block">
		<h2>Derniers récits</h2>
		<div>
			<?php
				$stories=getLastStories(5);
				foreach($stories as $story) {
					echo('<a href="read_story_'.$story["id"].'.html">'.$story['name'].'</a><br/>');
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