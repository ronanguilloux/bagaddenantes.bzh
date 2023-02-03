<?php
	require_once('parts/default_metas.php');

	$meta['title'] = "Bagad de Nantes - Sons";
	//$meta['description'] = "";

	require_once('parts/head.html.php');
	require_once('parts/navbar.html.php');
?>
	<div class="container">
		<div class="row row-cols-1 row-cols-md-2 pt-5">

			<div class="col-md-8">
				<h1 class="mt-0">Sons</h1>
				<hr/>
				<script type="text/javascript">
					document.addEventListener('click', function(evt) {
						if (evt.target.tagName.toLowerCase() == 'li') { play(evt.target); }
					}, false);
				</script>
				<audio id="audio"
				controls="controls"
				onerror="alert('Could not play MP3 audio file ' + this.src + '!');" onended="skip()">
				HTML5 MP3 audio required (Chrome, Safari, IE 9?)
			</audio>
			<h2><img src="/assets/mp3/2016-Perak-a-daol-trumm/pochette.webp" width="100px"
				class="img-thumbnail img-fluid float-start me-2"
				alt="Anche de practice chanter" title="Anche de practice chanter" />Perak a daol trumm (2016)</h2>
			<ul class="list-unstyled playlist" data-album="2016-Perak-a-daol-trumm">
				<li>1-De bon matin</li>
				<li>2-Moutchik plinn</li>
				<li>3-A lez vamm</li>
				<li>4-Perak a daol trumm</li>
				<li>5-Voilà la bonne année</li>
			</ul>
			<hr />
			<!--
			<h2><img src="/assets/mp3/1995-Clin-doeil/pochette.jpg" width="200px"
				class="img-thumbnail float-start me-2"
				alt="Anche de practice chanter" title="Anche de practice chanter" />Clin d'oeil (1995)</h2>
			<ul class="playlist" data-album="1995-Clin-doeil">
				<li>01-Brechoire</li>
				<li>02-Bright eyes</li>
				<li>03-Cannon</li>
				<li>04-Carillon</li>
				<li>05-Dispar</li>
				<li>06-Highland cathedral</li>
				<li>07-Bale An Ivern</li>
				<li>08-Suite de jigs</li>
				<li>09-Medley</li>
				<li>10-Le tribut de nominoe</li>
				<li>11-Noz Gwen</li>
				<li>12-Taol lagad</li>
			</ul>
			<hr />
		-->
			<h2>Sonetek, by Sonerion</h2>
			<p>Ecouter sur <a href="https://sonotek.sonerion.bzh/fr/interprete/bagad-naoned-nantes"
				target="_blank">Sonetek</a> les enregistrements des Suites du Bagad Naoned
				au Championnat National des Bagadoù, de 2006 à nos jours :
			</p>
				<iframe class="embed-responsive-item" src="https://sonotek.sonerion.bzh/fr/interprete/bagad-naoned-nantes"
				title="Sonetek, By Sonerion" width="100%" height="500px"
				allowfullscreen></iframe>
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
