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

					<dt class="col-sm-2">27 mars 2022</dt>
					<dd class="col-sm-10">
						<div class="alert alert-success" role="alert">
							<a href="https://sonerion.bzh/category/infos-concours/" target="_blank"><b>Concours de Printemps de 2nde catégorie</b></a>
							– Première manche du Championnat National des Bagadoù, à Saint Brieuc (22).
							<br><i class="far fa-file-pdf"></i> <a
							href="https://sonerion.bzh/wp-content/uploads/2021/11/Ordre-de-passage-2022.pdf" target="_blank">Consultez les ordres de passage</a>.
						</div>
					</dd>

					<dt class="col-sm-2">9 avril 2022</dt>
					<dd class="col-sm-10"><a href="https://carnavalnantes.wixsite.com/carnaval-de-nantes"
						target="_blank"><b>Carnaval de Nantes</b></a>, défilé de nuit
					</dd>
					-->
					<dt class="col-sm-2">17 septembre 2022</dt>
					<dd class="col-sm-10">
						<div class="alert alert-success" role="alert"><b>70 ans de la Kevenn Alre 🦉</b> - Auray (56)<br/>
							<a href="https://www.youtube.com/watch?v=moNWts3rQUc" target="_blank">Vidéo du triomphe des sonneurs et du spectacle</a>
							<br>(crédits : Disglavier)
						</div>
					</dd>

					<dt class="col-sm-2">31 octobre 2022</dt>
					<dd class="col-sm-10">
						<div class="alert alert-success" role="alert"><b>Gala de clôture</b> du Festival
							<a href="https://www.presquilebreizh.bzh/" target="_blank">Presqu'île Breizh à Quiberon</a> avec le
							<a href="http://www.cercledeclisson.fr/" target="_blank">Cercle Celtique Olivier de Clisson</a>
							</div>
					</dd>

					<dt class="col-sm-2">26 mars 2023</dt>
					<dd class="col-sm-10">
						<div class="alert alert-warning" role="alert">
							<a href="https://www.festival-interceltique.bzh" target="_blank"><b>1ère manche du Championnat National des Bagadoù</b></a>,
							2nde catégorie : <a href="https://sonerion.bzh/event/bagadou-2eme-categorie-2/" target="_blank">Concours de Saint-Brieuc</a>,
							 organisé par la fédération <a href="https://sonerion.bzh/" target="_blank">Sonerion</a>
							</div>
					</dd>


					<dt class="col-sm-2">Juillet 2023</dt>
					<dd class="col-sm-10">
						<div class="alert alert-info" role="alert"><b>Ouverture des
							<a href="https://jeuxdebretagne.bzh" target="_blank">Jeux de Bretagne</a></b> à Nantes : Programme à venir !
							</div>
					</dd>

					<dt class="col-sm-2">6 août 2023 </dt>
					<dd class="col-sm-10">
						<div class="alert alert-warning" role="alert">
							<a href="https://www.festival-interceltique.bzh" target="_blank"><b>2ème manche du Championnat National des Bagadoù</b></a>,
							2nde catégorie, durant le festival Interceltique de Lorient (56)</a>	– billetterie en ligne à partir du 7 février 2023
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
