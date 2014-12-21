<div id="body">
	<?php
		$story=getStoryById($_GET["id"]);
		$chapters=getChaptersByStory($_GET["id"]);
	?>
	<h2><?php
		echo(htmlentities($story["name"]));
	?></h2>
	<h3>Sommaire</h3>
	<ul>
		<?php
			foreach($chapters as $chapter) { ?>
				<li><a href="#"><?php echo($chapter["name"]); ?></a> <span class="summary"><?php echo($chapter["summary"]); ?></span></li>
			<?php }
		?>
	</ul>
</div>