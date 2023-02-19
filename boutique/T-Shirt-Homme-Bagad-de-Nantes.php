<?php
require_once('../parts/default_metas.php');

$meta['title'] = "Bagad de Nantes - Boutique";
//$meta['description'] = "";

require_once('../parts/head.html.php');
require_once('../parts/navbar.html.php');
?>
<div class="container">
  <div class="row row-cols-1 row-cols-md-2 pt-5">

    <div class="col-md-8">
      <h1 class="mt-0 d-print-none">Boutique</h1>
      <hr class="d-print-none"/>
      <img class="rounded float-end img-fluid img-thumbnail rounded mx-auto d-block w-25 d-none d-print-block" 
          src="/boutique/assets/qr-code-boutique.png" />
      <h2>T-Shirt Homme Bagad de Nantes <span id="price" class="badge rounded-pill bg-light text-dark">64,00 €</span></h2>
      <p><i>Prix unitaire maximum - varie en fonction du nombre d'unités commandées</i></p>
      <?php require_once('parts/order.html.php'); ?>
      <img class="rounded float-start img-fluid img-thumbnail rounded mx-auto d-block" 
        src="/boutique/assets/packshots/T-Shirt-Homme-Bagad-de-Nantes.jpeg" />
      <p>Le T-Shirt Homme officiel du Bagad de Nantes.</p>
      <ul>
        <li>100 % coton peigné et filé, 160 g/m²</li>
        <li>Manches courtes</li>
        <li>Col côtelé étroit avec élasthanne</li>
        <li>Bandes à l'encolure et aux épaules</li>
        <li>Coutures latérales</li>
        <li>Surpiqûre aux manches et à l'ourlet</li>
        <li>Coupe ajustée</li>
        <li>Modèle également <a href="/boutique/T-Shirt-Femme-Bagad-de-Nantes">disponible pour femme</a></li>
      </ul>
      <p><b>Couleur</b> : Noir</p>
      <p><b>Marquage</b> : Transfert de couleurs (devant)</p>
      <p><b>Manches</b> : Manches courtes</p>
      <p><b>Col</b> : Col rond</p>
      <h3>Doux et confortable</h3>
      <p>Pratique et confortable, le t-shirt homme en coton Luxury de Tee Jays® 
        est brodé aux couleurs du Bagad de Nantes.</p>
      <h3>Guide des tailles</h3>
      <img class="rounded float-none img-fluid img-thumbnail mx-auto mb-3 d-block" 
        src='/boutique/assets/tailles/T-Shirt-Homme-Bagad-de-Nantes-tailles.png' />
      <p>Les dimensions indiquées dans ce tableau font référence à la taille du vêtement et non aux mensurations de la personne qui les porte.</p>
      <p>Longueur (A) : du point le plus haut à l’épaule au bas de l’ourlet arrière.</p>
      <p>Largeur (B) : d’un bord à l’autre, juste au-dessous des manches (lorsque le vêtement est à plat).</p>
      <table id="size-chart" class="table table-striped table-hover caption-top">
        <caption>T-Shirt Homme Bagad de Nantes</caption>
          <thead class="table-light">
            <tr>
              <th scope="col">Taille</th>
              <th scope="col">Longueur (A) en cm</th>
              <th scope="col">Largeur (B) en cm</th>
            </tr>
          </thead>
        <tbody>
          <tr><th scope="row">S</th><td>173</td><td>94</td></tr>
          <tr><th scope="row">M</th><td>178</td><td>100</td></tr>
          <tr><th scope="row">L</th><td>183</td><td>106</td></tr>
          <tr><th scope="row">XL</th><td>188</td><td>112</td></tr>
          <tr><th scope="row">2XL</th><td>193</td><td>118</td></tr>
          <tr><th scope="row">3XL</th><td>194</td><td>124</td></tr>
        </tbody>
      </table>
    </div>
    <?php require_once('../parts/sidebar.html.php'); ?>

  </div><!-- /row -->
</div><!-- /container -->

<?php require_once('../parts/cards.html.php'); ?>

<?php require_once('../parts/footer.html.php'); ?>

<?php require_once('../parts/scripts.html.php'); ?>

</body>
</html>
