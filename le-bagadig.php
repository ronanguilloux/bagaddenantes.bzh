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
				<h1 class="mt-0">Le Bagadig</h1>
				<hr/>
				<h2>L'école de musique du bagad</h2>
				<p>
					Le <i>Bagadig</i>, c'est l'école de musique du bagad.
				</p>
				<p>
					Créé en 2015, il permet aux élèves de se former à la musique d'ensemble, avant de pouvoir intégrer le Bagad.
				</p>
				<p>
					Constitué de musiciens en apprentissage, il réunit les mêmes pupitres que le Bagad :
					Cornemuses, bombardes, caisses claires, percussions.
				</p>

				<?php
					require_once('parts/ouverture_inscriptions.html.php');
				?>

				<img class="img-fluid shadow-sm p-2 mb-1 bg-body rounded"
				src="/assets/images/albums/2019/05-01-bagadig-la-turballe/IMG_9421.webp" alt="Le bagadig de Nantes - La Turballe 2019">
        <div class="credits-light mb-3">Festival Anne de Bretagne 2019, La Turballe / DR</div>

				<p>
					Le Bagadig de Nantes participe au Concours National des Bagadoù, en 5ème catégorie.
				</p>

				<h2>Questions, informations</h2>
				<p>Que vous soyez débutant, faux-débutant ou confirmé, 
					contactez-nous pour toute demande d'information
					à l'adresse <a href="mailto:formation@bagaddenantes.bzh">formation@bagaddenantes.bzh</a>.

				<h2>Cours du soir et Répétitions</h2>
				<p>
					Les élèves et les membres du Bagadig participent à la vie de l'association, dont ils sont membres.
				</p>
				<p>
					Les Bagadoù de Loire-Atlantique ne bénéficiant pas d’autant de moyens financiers que les autres départements bretons
					au niveau des formateurs Sonerion et des subventions, former de nouvelles recrues
					demande un effort important pour le Bagad de Nantes. Ainsi, des membres du bagad assurent
					la <a href="/formation">formation des débutants</a>, pour la plupart bénévolement, en soirée,
					à raison de 2h de cours par semaine environ.
				</p>
				<p>
					Un investissement important mais indispensable pour assurer la continuité de l’association.
				</p>
				<p>
					Le bagadig se retrouve tous les vendredis soir à partir de 19h15,
					à l'Ecole de Musique de Toutes Aides à Nantes, pour un moment de répétition en pupitre,
					puis une mise en commun, en ensemble.
				</p>
				<p>
					Comme au bagad, en plus des répétitions du vendredi soir,
					le Bagadig se réunit pour des répétitions le dimanche lors des périodes de préparation aux concours.
				</p>
				<div class="ratio ratio-16x9 mb-4">
					<iframe src="https://www.youtube.com/embed/mB-1phFEMns"
					title="YouTube video player" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>
				</div>
				<div class="credits-light mb-3">Audition des Bagadigou de Loire-Atlantique 2022 - Sucé-sur-Edre / OP, Bagad de Nantes</div>

				<h2>Stages de perfectionnement</h2>
				<p>
					Le bagadig participe également à un ou deux <b>stages</b> annuels, proposés le temps d'un week-end en pension complète,
					et réunissant les sonneurs d'autres bagadoù du département.
					Ces stages annuels sont organisés par la Fédération Sonerion 44 avec le soutien d'excellent formateurs,
          venant par exemple de bagadoù de 1ère catégorie.
					 Les stages sont l'occasion d'apprendre une danse, un terroir, une pièce en commun,
					 de se faire aider pour l'entretien de l'instrument, d'échanger de précieux conseils !
				</p>

				<h2>Lien et transition avec le bagad</h2>
				<p>
					Le seul objectif du bagadig, c'est de préparer les élèves à faire partie du bagad.
				</p>
				<p>
					La formation au sein du bagadig est assurée bénévolement par des membres du Bagad.
					Bien qu'ayant chacun leur répertoire, Bagad et Bagadig partagent également des airs en commun,
					afin de permettre aux membres en formation de se préparer aux futures sorties.
				</p>
				<p>
					Le passage du bagadig au bagad dépend de la maîtrise de l'instrument et de la musique d'ensemble :
					c'est une décision du chef de pupitre du bagad.
				</p>
				<h2>Venez rencontrer le bagadig !</h2>
				<p>
					Le bagadig se réunit tous les vendredis soir à partir de 19h15,
					à l'Ecole de Musique de Toutes Aides, 1 Rue Jules Brechoir 44000 Nantes.
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
