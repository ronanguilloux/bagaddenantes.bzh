<?php
	require_once('parts/default_metas.php');

	//$meta['title'] = "";
	//$meta['description'] = "";

	require_once('parts/head.html.php');
	require_once('parts/navbar.html.php');
?>
	<div class="container">
		<div class="row row-cols-1 row-cols-md-2 pt-5">

			<div class="col-md-8">
				<h1 class="mt-0">Nous contacter</h1>
        <img class="img-fluid shadow-sm p-2 mb-1 bg-body rounded"
        src="/assets/images/bg_header.webp" alt="Celtomania 2021 / Kristell Mimoun" />
        <div class="credits-light mb-3">Celtomania 2021 / Kristell Mimoun</div>
				<address class="widget-body">
					<p class="lh-lg">
						<!--<i class="fas fa-phone"></i> <a href="tel:06...">06 ...</a>-->
						<br><i class="fas fa-at"></i> <a href="mailto:bagaddenantes@gmail.com">bagaddenantes@gmail.com</a>
						<br><i class="fas fa-map-marker-alt"></i> <a href="https://www.google.com/maps/place/1+Rue+Jules+Brechoir,+44000+Nantes/" target="_blank">1 rue Jules Bréchoir à Nantes</a>
						<br><i class="fas fa-subway"></i> Tram ligne 1 arrêt Boulevard de Doulon
					</p>
				</address>
				<p>
					Tous les vendredis,
					<br>le Bagad se retrouve pour une répétition de 20h à 22h, le Bagadig de 19h à 20h.
          La porte d'entrée de l'école de musique fonctionne avec un code,
         merci de nous appeler, quelqu'un viendra vous ouvrir !
				</p>
				<!--
				<form action="/nous-contacter" method="post">
					<div class="row">
						<div class="col-sm-3 m-1">
							<input class="form-control" type="text" placeholder="Prénom Nom">
						</div>
						<div class="col-sm-3 m-1">
							<input class="form-control" type="email" placeholder="E-mail">
						</div>
						<div class="col-sm-3 m-1">
							<input class="form-control" type="tel" placeholder="Téléphone">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 m-1">
							<textarea placeholder="Bonjour !..." class="form-control" rows="9"></textarea>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm text-end">
							<input class="btn btn-success" type="submit" value="Envoyer">
							<label class="checkbox"><input type="checkbox"> M'abonner à la newsletter</label>
						</div>
					</div>
				</form>
			-->
		</div>

		<?php require_once('parts/sidebar.html.php'); ?>

	</div><!-- /row -->
</div><!-- /container -->

	<?php require_once('parts/cards.html.php'); ?>

	<?php require_once('parts/footer.html.php'); ?>

	<?php require_once('parts/scripts.html.php'); ?>

</body>
</html>
