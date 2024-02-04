<?php
	require_once('parts/default_metas.php');

	$meta['title'] = "Bagad de Nantes - Inscriptions " . sprintf('%d-%d', date('Y'), date('Y',strtotime('+1 year')));
	//$meta['description'] = "";

	require_once('parts/head.html.php');
	require_once('parts/navbar.html.php');
?>
	<div class="container">
		<div class="row row-cols-1 row-cols-md-2 pt-5">

			<div class="col-md-8">
				<h1 class="mt-0">Inscription</h1>
				<hr/>
        <img class="img-fluid shadow-sm p-2 mb-1 bg-body rounded"
        src="/assets/images/bg_header.webp" alt="Celtomania 2021 / Kristell Mimoun" />
        <div class="credits-light mb-3">Celtomania 2021 / Kristell Mimoun</div>
				
				<p class="lead alert alert-success my-4" role="alert">
  				<i class="fas fa-bullhorn"></i>
					<b><?php echo sprintf('%s - %s', date('Y'), date('Y')+1) ?> :
					Les inscriptions sont ouvertes de juin à septembre</b>
					<br />Formation musicale en bombarde, cornemuse et caisse</b>.
					Attention, les places en formation ne sont pas illimitées !
					Début des cours: début octobre <?php echo date('Y') ?>
				</p>

				<p>
          Que vous soyez débutants ou peu aguerris, si l'aventure musicale et humaine vous tente,
          n'hésitez pas, vous serez les bienvenu(e)s, écrivez-nous à <a href="mailto:formation@bagaddenantes.bzh?subject=Inscriptions Formation 2022">formation@bagaddenantes.bzh</a>
					en nous indiquant :
					<ul>
						<li>votre nom, age, et vos coordonnées</li>
						<li>un résumé de votre expérience musicale</li>
						<li>l'instrument choisi</li>
					</ul>
				</p>
		
				<p>
					Le Bagad demande à ses adhérents de répondre aux obligations sanitaires et légales en cours pour participer aux activités de l'association.
					Pour toute question, écrivez-nous à <a href="mailto:formation@bagaddenantes.bzh?subject=Inscription/Formation">formation@bagaddenantes.bzh</a>.
				</p>
				<h2 class="mt-0">Formation musicale</h2>
				<p> 
					<b>Cours d'instruments, horaires, lieux :</b>
					<a href="/formation">retrouvez toutes ces informations sur cette page</a>
				</p>
				<h2>Lieux et horaires des répétitions d'ensemble</h2>
				<p>
				  <ul>
				    <li>Vendredi soir 19h00 : Répétition d'ensemble du bagadig</li>
				    <li>Vendredi soir 20h30 : Répétition d'ensemble du bagad</li>
				  </ul>
				  <i class="fas fa-map-marker-alt"></i> <a href="https://www.google.com/maps/place/1+Rue+Jules+Brechoir,+44000+Nantes/" target="_blank">1 rue Jules Bréchoir à Nantes</a>
				  <br><i class="fas fa-subway"></i> Tram ligne 1 arrêt Boulevard de Doulon
				</p>

				<h2>Adhésion et cotisation</h2>
				<p>
					Pour tous les adhérents, élèves, sympathisants, musiciens du Bagad ou du Bagadig,
					la cotisation annuelle à l'association est de 30€ par personne, ou 25€ à partir de la 2ème personne de la même famille.
					<br> Le coût des cours d'instruments est détaillé sur la page <a href="/formation">formation</a>.
				</p>
				

			</div>

			<?php require_once('parts/sidebar.html.php'); ?>

		</div><!-- /row -->
	</div><!-- /container -->

	<?php require_once('parts/cards.html.php'); ?>

	<?php require_once('parts/footer.html.php'); ?>

	<?php require_once('parts/scripts.html.php'); ?>

</body>
</html>
