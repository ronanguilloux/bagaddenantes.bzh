<?php
	require_once('parts/default_metas.php');

	$meta['title'] = "Bagad de Nantes - Vidéos";
	//$meta['description'] = "";

	require_once('parts/head.html.php');
	require_once('parts/navbar.html.php');
?>
	<div class="container">
		<div class="row row-cols-1 row-cols-md-2 pt-5">

			<div class="col-md-8">
				<h1 class="mt-0">Vidéos</h1>
				<hr/>

				<h2>Playlist - Championnats National des Bagadoù - Sonerion</h2>
				<div class="ratio ratio-16x9 mb-4 shadow">
					<iframe title="YouTube video player" frameborder="0" allowfullscreen
						src="https://www.youtube.com/embed/videoseries?list=PLW5zoGAWtCImkniuUFGQxx4nog7cfFhRg"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
				</div>
				<hr/>

				<!--
				<h2>Télé-Nantes, 2016: répétition publique</h2>
				<div class="ratio ratio-16x9 mb-4 shadow">
					<iframe src="//www.dailymotion.com/embed/video/x3xqhqy"
					allowfullscreen allow="autoplay; fullscreen; picture-in-picture"></iframe>
				</div>
				<p>Le Bagad de Nantes en répétition publique avant le Concours de Saint-Brieuc, première phase du Championnat national des Bagadoù.</p>
				<hr/>
				-->

				<h2>Playlist - Concerts et Sorties du Bagad de Nantes</h2>
				<div class="ratio ratio-16x9 mb-4 shadow">
					<iframe title="YouTube video player" frameborder="0" allowfullscreen
						src="https://www.youtube.com/embed/videoseries?list=PLW5zoGAWtCImqhAOlSXUnepeok6MUAgrA"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
				</div>
				<hr />

				<h2>Playlist - Histoire du Bagad de Nantes</h2>
				<div class="ratio ratio-16x9 mb-4 shadow">
					<iframe title="YouTube video player" frameborder="0" allowfullscreen
						src="https://www.youtube.com/embed/videoseries?list=PLW5zoGAWtCInsrnTBe5iQ9RmnxnONYT6h"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
				</div>
				<hr />

			</div>

			<?php require_once('parts/sidebar.html.php'); ?>

		</div><!-- /row -->
	</div><!-- /container -->

<?php require_once('parts/cards.html.php'); ?>

<?php require_once('parts/footer.html.php'); ?>

<?php require_once('parts/scripts.html.php'); ?>

</body>
</html>
