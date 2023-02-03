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
				<h1 class="mt-0">Mentions légales</h1>
				<hr/>
				<ul class="list-unstyled">
					<li>Edition et réalisation du site : Bagad de Nantes (association Loi 1901)</li>
					<li>Domicilié :  1 rue Jules Bréchoir, 44000 Nantes</a></li>
					<li>Directeur de la publication : Grégoire Pilon, Président</li>
					<li>E-mail : bagaddenantes@gmail.com</li>
				</ul>

				<h2>Hébergement</h2>
				<ul class="list-unstyled">
					<li>OVH SAS</li>
					<li>RCS Lille Métropole 424 761 419 00045</li>
					<li>Code APE 2620Z</li>
					<li>Siège social : 2 rue Kellermann - 59100 Roubaix - France</li>
				</ul>

				<h2>Copyright</h2>
				<p>L’utilisation de ce site exprime votre consentement sur les conditions d’utilisation. Si vous n’acceptez pas ces conditions, veuillez-vous abstenir d’utiliser ce site. Le contenu de ce site (notamment données, informations, illustrations, etc. …) est protégé par droit d’auteur et autres droits de propriété intellectuelle. Toute reproduction ou représentation totale ou partielle de ce site par quelque procédé que ce soit, sans autorisation expresse, est interdite et constituerait une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle.
					Toute reproduction totale ou partielle des logos, images, scripts, code HTML, balises meta effectuée à partir des éléments du site sans notre autorisation expresse est prohibée au sens de l’article L.713-2 du Code de la propriété intellectuelle.
					Toute copie, reproduction, diffusion, intégrale ou partielle, du contenu du site par quelque procédé que ce soit est illicite à l’exception d’une unique copie sur un seul ordinateur et réservée à l’usage exclusivement privé du copiste.
					Les éléments présentés dans ce site sont susceptibles de modification sans préavis et sont mis à disposition sans aucune garantie, expresse ou implicite, d’aucune sorte et ne peuvent donner lieu à un quelconque droit à dédommagement.
					Il appartient à l’utilisateur de ce site de prendre toutes les mesures appropriées de façon à protéger ses propres données et/ou logiciels de la contamination par des éventuels virus circulant sur le réseau Internet.
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
