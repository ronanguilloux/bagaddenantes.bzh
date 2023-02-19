<?php
	require_once('parts/default_metas.php');

	$meta['title'] = "Bagad de Nantes - Réseaux sociaux";
	//$meta['description'] = "";

	require_once('parts/head.html.php');
	require_once('parts/navbar.html.php');
?>
	<div class="container">
		<div class="row row-cols-1 row-cols-md-2 pt-5">

			<div class="col-md-8">
				<h1 class="mt-0">Nous suivre sur les réseaux sociaux</h1>
				<hr/>
        <img class="img-fluid shadow-sm p-2 mb-1 bg-body rounded"
        src="/assets/images/bg_header.webp" alt="Celtomania 2021 / Kristell Mimoun" />
        <div class="credits-light mb-3">Celtomania 2021 / Kristell Mimoun</div>
				<ul class="list-unstyled lh-lg">
					<li><i class="fs-4 fa fa-facebook"></i> / <a href="https://fr-fr.facebook.com/Bagaddenantes" target="_blank">Bagaddenantes</a></li>
					<li><i class="fs-4 fa fa-youtube"></i> <a href="https://www.youtube.com/@bagaddenantes" target="_blank">chaîne YT du Bagad de Nantes</a></li>
					<li><i class="fs-4 fa fa-instagram"></i> <a href="https://www.instagram.com/bagadnantes" target="_blank">@bagadnantes</a></li>
					<li><i class="fs-4 fa fa-twitter"></i> <a href="https://twitter.com/bagaddenantes" target="_blank">@bagaddenantes</a></li>
					<li><i class="fs-4 far fa-envelope"></i> <a href="mailto:contact@bagaddenantes.bzh">contact@bagaddenantes.bzh</a></li>
				</ul>
			</div>

			<?php require_once('parts/sidebar.html.php'); ?>

		</div><!-- /row -->
	</div><!-- /container -->

	<?php require_once('parts/cards.html.php'); ?>

	<?php require_once('parts/footer.html.php'); ?>

	<?php require_once('parts/scripts.html.php'); ?>

</body>
</html>
