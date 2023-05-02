<?php
	require_once('parts/default_metas.php');

	$meta['title'] = "Agenda du Bagad de Nantes : sorties et évènements à venir";
	//$meta['description'] = "";

	require_once('parts/head.html.php');
	require_once('parts/navbar.html.php');
?>
	<div class="container">
		<div class="row row-cols-1 row-cols-md-2 pt-5">

			<div class="col-md-8">

				<h1 class="mt-0">Évènements à venir</h1>
				<hr/>

				<dl class="row">

					<!--<dt class="col-sm-2">26 mars 2022</dt>
					<dd class="col-sm-10"><b>Répétition générale du Bagad</b>, à Nantes (44), en vue du Concours de Printemps de 2nde catégorie,
          au Studio Saint Georges des Batignolles, <a
          href="https://www.google.com/maps/place/27+Av.+de+la+Gare+de+Saint-Joseph,+44300+Nantes,+France" target="_blank">27
          avenue de la Gare St Joseph, Nantes</a></dd>
					-->
					<dt class="col-sm-2">21 mai 2023</dt>
					<dd class="col-sm-10">
						<div class="alert alert-info" role="alert"><b>Audition publique du Bagadig</b> - Pornic (44)<br/>
							<a href="https://www.facebook.com/festAnnedeBretagne/" target="_blank">Festival Anne de Bretagne 2023</a>
						</div>
					</dd>

					<dt class="col-sm-2">21 juin 2023</dt>
					<dd class="col-sm-10">
						<div class="alert alert-info" role="alert"><b>Fête de la Musique 2023</b>
							<br>Le Bagad vous donne rendez-vous à 19h45 face à la Médiathèque de Nantes 
						</div>
					</dd>

					<dt class="col-sm-2">30 juin 2023</dt>
					<dd class="col-sm-10">
						<div class="alert alert-info" role="alert"><b>Ouverture des
							<a href="https://jeuxdebretagne.bzh" target="_blank">Jeux de Bretagne</a></b> à Nantes.
							<br>Rendez-vous à 19h30 à la Brasserie Little Atlantique Brewery
							</div>
					</dd>

					<dt class="col-sm-2">2 juillet 2023 </dt>
					<dd class="col-sm-10">
						<div class="alert alert-info" role="alert"><b>Participation du Bagad aux
							<a href="https://jeuxdebretagne.bzh" target="_blank">Jeux de Bretagne</a></b> à Nantes.
							<br>Programme à venir.
							</div>
					</dd>

					<dt class="col-sm-2">5 août 2023 </dt>
					<dd class="col-sm-10">
						<div class="alert alert-info" role="alert"><b>
							<a href="https://sonerion.bzh/event/bagadou-2eme-categorie-3/" target="_blank">Championnat national des bagadoù de deuxième catégorie</a></b>
							à Lorient dans le cadre du Festival Interceltique, organisé par la fédération <a href="https://sonerion.bzh/" target="_blank">Sonerion</a>
							</div>
					</dd>

				</dl>
        <!--
				<h2 class="mt-0">Agenda complet</h2>
				<div class="embed-responsive embed-responsive-1by1 mx-3">
					<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Europe%2FParis&mode=AGENDA&showPrint=0&showTabs=0&showCalendars=0&showTz=0&showDate=0&showNav=1&showTitle=0&src=NDNvMmRubnFidmJsODRvdWowOGE1bW5hNzhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23AD1457"
					class="embed-responsive-item" style="border:solid 1px #777" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
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
