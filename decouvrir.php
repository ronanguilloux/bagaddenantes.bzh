<?php
	require_once('parts/default_metas.php');

	$meta['title'] = "Bagad de Nantes - Découvrir ce qu'est un bagad";
	//$meta['description'] = "";

	require_once('parts/head.html.php');
	require_once('parts/navbar.html.php');
?>
	<div class="container">
		<div class="row row-cols-1 row-cols-md-2 pt-5">

			<div class="col-md-8">
				<h1 class="mt-0">Un peu de vocabulaire</h1>
				<hr/>
				<p>
					Un <b>bagad</b> est un ensemble musical breton, un orchestre inspiré à l'origine du pipe band écossais.
				</p>
				<p>
					<b>Bagadoù</b>, en breton, c'est simplement le pluriel de <i>bagad</i>.
					Un bagad interprète des airs le plus souvent issus du répertoire traditionnel breton.
				</p>
				<p>
					Les <b>activités musicales</b> d'un bagad sont
					<ul>
						<li>
							la participation annuelle au Championnat National des Bagadoù
							organisé chaque année par <a href="https://sonerion.bzh">Sonerion</a>,
						</li>
						<li>des concerts de musique bretonne et tous styles musicaux,</li>
						<li>ainsi que l'accompagnement de groupes de danses bretonnes ou de fest-noz.</li>
					</ul>
				</p>
				<p>
					Un bagad est aussi une <b>école de musique</b>, avec son <a href="/le-bagadig"><i>bagadig</i></a> (<i>petit bagad</i> en breton) :
					<br>l'Association forme ainsi elle-même bénévolement ses futurs membres.
				</p>
				<img class="img-fluid shadow-sm p-2 mb-1 bg-body rounded" src="/assets/images/albums/2021/11-26-celtomania/IMG_7047.webp" alt="Le Bagad de Nantes - Celtomania 2021">
        <div class="credits-light">Celtomania 2021 / Kristell Mimoun</div>
				<h2>Composition</h2>
				<p>
					Le Bagad de Nantes est composé de quatre pupitres :
					<ul>
						<li>Bombardes
						<li>Cornemuses
							<ul>
								<li>Cornemuse écossaise ou <i>binioù braz</i></li>
								<li><i>binioù kozh</i></li>
								<li>veuze, cornemuse du Pays Nantais</li>
							</ul>
						<li>Caisses écossaises</li>
						<li>Percussions</li>
					</ul>
				</p>
				<h2>Direction</h2>
				<p>
					Le bagad est dirigé par un <i>penn-soner</i>
					– littéralement « sonneur en chef » en breton.
				</p>
				<p>
					Les différents pupitres sont dirigés par
					<ul>
						<li>un <i>penn-talabarder</i> pour les bombardes,</li>
						<li>un <i>penn-biniaouer</i>, appelé aussi 'penn-cornemuse', pour les cornemuses</li>
						<li>et un <i>penn-tabouliner</i> appelé aussi 'penn-caisses', pour les pupitres rythmiques</li>
					</ul>
					De même, le Bagadig est dirigé par un <i>penn-bagadid</i>.
				</p>
				<hr/>
			</div>

			<?php require_once('parts/sidebar.html.php'); ?>

		</div><!-- /row -->
	</div><!-- /container -->

	<?php require_once('parts/cards.html.php'); ?>

	<?php require_once('parts/footer.html.php'); ?>

	<?php require_once('parts/scripts.html.php'); ?>

</body>
</html>
