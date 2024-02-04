<?php
	require_once('parts/default_metas.php');

	//$meta['title'] .= "";
	//$meta['description'] = "";

	require_once('parts/head.html.php');
	require_once('parts/navbar.html.php');
?>
	<div class="container">
		<div class="row row-cols-1 row-cols-md-2 pt-5">

			<div class="col-md-8">
				<h1 class="mt-0">Formation</h1>
				<hr/>
        <h2>Parcours de formation</h2>
        <p>
          Le Bagad de Nantes propose une formation musicale à une trentaine d'élèves environ chaque année :
          Les formateurs, professionnels salariés externes et bénévoles issus des rangs du bagad,
          vous accueillent en cours hebdomadaires, individuels ou collectifs.
        </p>
        <p>
          Les formateurs s'adaptent à votre niveau, conseillent les élèves sur <a href="/instruments">l'achat des instruments</a>,
          et suivent une méthode d'apprentissage proposée par Sonerion, la Fédération des bagadoù.
				</p>
				<p>
					Que vous soyez débutants ou peu aguerris, si l'aventure musicale et humaine vous tente,
					n'hésitez pas, vous serez les bienvenu(e)s.
					Le responsable formation reviendra vers vous avec les détails, et vous invitera à venir nous rencontrer.
        </p>

				<?php require_once('parts/ouverture_inscriptions.html.php'); ?>

        <h2>Le Bagadig, l'apprentissage de la musique d'ensemble</h2>
        <p>En plus des cours collectifs, <a href="/le-bagadig">le Bagadig</a> est une formation d'apprentissage préparatoire au Bagad.
          Il est proposé aux élèves en général à partir de la deuxième année, avec une répétition tous les vendredis à 19h.
          Chaque année, le Bagadig prépare le
					<a href="https://sonerion.bzh/2022/07/15/resultats-carhaix-2022-5eme-categorie/" target="_blank">Championnat de Bretagne des Bagadoù de 5ème Catégorie</a>.
        </p>


				<h2>Questions, informations</h2>
				<p>Que vous soyez débutant, faux-débutant ou confirmé,
					contactez-nous pour toute demande d'information
					à l'adresse <a href="mailto:formation@bagaddenantes.bzh">formation@bagaddenantes.bzh</a>.

				<h2>Lieux et horaires des cours collectifs</h2>
				<ul>
				  <li>Lundi soir : cornemuse, débutants et perfectionnement</li>
				  <li>Mercredi soir : cornemus perfectionnement et percussions bagadig</li>
				  <li>Jeudi soir : bombarde débutants et bombarde bagadig</li>
				  <li>Vendredi soir : cornemuse bagadig, caisse claire débutants et bagadig</li>
				</ul>
				<p>
				  Début des cours: <b>première semaine d'octobre.</b>
				</p>
				<p>
				  <i class="fas fa-map-marker-alt"></i> <a href="https://www.google.com/maps/place/1+Rue+Jules+Brechoir,+44000+Nantes/" target="_blank">1 rue Jules Bréchoir à Nantes</a>
				  <br><i class="fas fa-subway"></i> Tram ligne 1 arrêt Boulevard de Doulon
				</p>


				<h2>Coût de la  formation</h2>
        <p>Pour les élèves en formation :
          <ul>
            <li>les cours hebdomadaires sont proposés à 100€ par personne et par trimestre</li>
            <li>soit 300€ à l'année</li>
            <li>possibilité de régler en 3 fois</li>
          </ul>
        </p>
				<h3>Bon à savoir</h3>
        <ul>
          <li><a href="/inscription">Les inscriptions</a> sont ouvertes en ligne, de juin à octobre <?php echo '2023'//date('Y') ?>.</li>
          <li>Tout savoir sur l'achat ou la location d'<a href="/insruments">instruments pour les élèves en formation</a></li>
          <li><a href="mailto:formation@bagaddenantes.bzh">Contactez-nous</a> pour toute question</li>
        </ul>
				<h2 class="my-3">Le Bagad de Nantes, éligible au Pass Culture Jeunes!</h2>
				<p>
					<img src="/assets/images/formation/Pass_Culture.webp" class="float-start" />
            Le Bagad de Nantes propose des formations éligibles au Pass Culture.
            La démarche se fait au moment de l'inscription.
				</p>
				<p>Pour toute question sur l'éligibilité du Bagad de Nantes au Pass Culture Jeunes, <a href="/nous-contacter">contactez-nous !</a></p>
				<div>
					<?php /*
					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdKzXWXGsZtBQ-s5WIqjZ5SyiEU9ypL0hFkw1CZjU3RlheDLQ/viewform?embedded=true"
					height="1500px" width="100%" marginheight="0" marginwidth="0">Chargement…</iframe>
					*/ ?>
				</div>

        <h2 class="my-5">Stages et rencontres inter-bagadoù en cours d'année</h2>
        <p>
          Afin de conforter les jeunes musiciens dans leur progression,
          de leur permettre de se connaître entre eux et de donner à leur entourage l’occasion d’apprécier leur travail,
          la fédération départementale de Sonerion 44 organise
          <ul>
            <li>des rencontres musicales et des concours, comme un stage annuel sur le temps d'un week-end,
              rassemblant des élèves sonneurs des bagadoù de Nantes, Saint-Nazaire, etc.,
              autour d'un thème, avec des intervenants/enseignants venant de bagadoù d'autres départements bretons.
            </li>
            <li>des concours ou des auditions de bagadoù/bagadigoù par catégories de niveaux ou catégories d’âges.
              La participation régulière à ces rendez-vous est très stimulante,
              tant pour la progression musicale que pour l’affirmation musicale de chaque élève.
              C’est là que les jeunes peuvent recevoir les conseils des juges et des musiciens confirmés.
            </li>
          </ul>
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
