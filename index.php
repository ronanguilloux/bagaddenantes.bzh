<?php
	require_once('parts/default_metas.php');

	//$meta['title'] = "";
	//$meta['description'] = "";

	require_once('parts/head.html.php');
	require_once('parts/navbar.html.php');
?>
	<div class="container">
		<div class="col text-center">
			<img src="/assets/images/bandeau.webp" alt="Le Bagad de Nantes - Bagad Naoned"
				class="img-thumbnail shadow-sm p-2 my-3 bg-body rounded" />
		</div>
		<div class="col-lg-4 mx-auto text-center">
			<h1 class="thin mt-5">Bagad de Nantes<br><i>Bagad Naoned</i></h1>
			<p class="text-muted">
				Créé en 1968 – 50 musiciens - 4 pupitres – 30 élèves en formation.
					Le Bagad de Nantes évolue en 3ème catégorie au Championnat National des Bagadoù.
			</p>
		</div>
	</div>
	<!-- /Intro-->

	<div class="container">

		<div class="row justify-content-md-center">

			<div class="col-md-4 text-center align-middle">
				<p class="lead alert alert-info my-4" role="alert">
					<i class="fas fa-graduation-cap"></i>
					<b><a href="/formation">Inscriptions <?php echo sprintf('%s-%s', date('Y'), date('Y')+1) ?></a> :</b>
					Le Bagad accueille chaque année plus de 30 élèves en formation.
					Début des cours en octobre 2023
				</p>
			</div>

			<div class="col-md-4 text-center align-middle">
				<p class="lead alert alert-info my-4" role="alert">
					<i class="fas fa-tshirt"></i>
					<b><a href="https://market-factory.fr/bagad-naoned/" target="_blank">La boutique officielle :</a></b>
					T-shirt, Polo, vestes softshell et sweat-shirts brodés au logo du Bagad de Nantes, disponible à la commande en ligne.
				</p>
			</div>

		</div><!-- /row -->
		
		<div class="row justify-content-md-center">
			<div class="col-md-8 text-center align-middle">
				<a href="https://market-factory.fr/boutique/boutique/bagad-naoned.html"
					target="_blank"><img src="/assets/images/boutique.webp" 
					alt="Boutique du Bagad de Nantes" class="img-thumbnail shadow-sm p-2 bg-body rounded"></a>
			</div>
		</div><!-- /row -->	

		<div class="row row-cols-1 row-cols-md-2 pt-5">
			<div class="col-md-4">
				<h2 class="mt-0">Tradition et dynamisme</h2>
				<p>
					Association type loi 1901 à but non lucratif crée en 1968, le Bagad de Nantes compte une cinquantaine de musiciens confirmés et une trentaine d'élèves en formation.
					Ambitieux et convivial, à l’image de sa ville, le Bagad de Nantes évolue actuellement en seconde catégorie du concours national des bagadoù, reconnaissance de la qualité de ses prestations.
					La musique proposée par le Bagad de Nantes se démarque par sa modernité ancrée dans la tradition bretonne et son dynamisme : le plaisir de jouer ensemble et le partage avec le public nous tiennent à cœur !
				</p>
			</div>

			<div class="col-md-4 text-center align-middle">
				<img src="/assets/images/Bagad-de-Nantes-1.webp" alt="Celtomania 2021 / Kristell Mimoun" class="img-thumbnail shadow-sm p-2 bg-body rounded">
        <div class="credits-light">Celtomania 2021 / Kristell Mimoun</div>
			</div>

			<?php require_once('parts/sidebar.html.php'); ?>

		</div><!-- /row -->
	</div><!-- /container -->
  <div class="container">
		<div class="row text-center my-2">
      <div class="col-md-4 my-2">
        <a href="https://sonerion.bzh" title="Sonerion, la Fédération des Sonneurs et Bagadoù de Bretagne"
          target="_blank" rel="noopener"><img src="/assets/images/logos/Sonerion.webp"
          width="300px" alt="Fédération Bodadeg ar Sonerion" /></a>
      </div>
      <div class="col-md-4 my-2">
        <a href="https://sonotek.sonerion.bzh/en/interprete/bagad-naoned-nantes"
        title="Ecouter les enregistrements des Suites du Bagad Naoned au Championnat National des Bagadoù, 2006-2019"
          target="_blank" rel="noopener"><img src="/assets/images/logos/Sonotek.webp"
          width="300px" alt="Sonotek, by Sonerion" /></a>
      </div>
      <div class="col-md-4 my-2">
        <a href="/formation"
        title="Le Bagad de Nantes propose des formations éligible au Pass Culture"><img
        src="/assets/images/logos/pass_culture.webp" class="img-thumbnail"
          width="300px" alt="Pass Culture"/></a>
      </div>
    </div>
  </div>



<?php require_once('parts/cards.html.php'); ?>

<?php require_once('parts/carousel.html.php'); ?>

<?php require_once('parts/footer.html.php'); ?>

<?php require_once('parts/scripts.html.php'); ?>

</body>
</html>
