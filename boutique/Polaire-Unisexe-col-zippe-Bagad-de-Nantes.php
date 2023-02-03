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
      <h1 class="mt-0">Boutique</h1>
      <hr/>
      <h2>Polaire unisexe à col zippé Bagad de Nantes <span id="price" class="badge rounded-pill bg-dark">50,00 €</span></h2>
      <p>Une polaire Russell™ noire brodée au logo du Bagad de Nantes, confortable au quotidien. 
          Confectionnée en polyester anti-bouloche pour un aspect neuf plus durable</p>
      <?php require_once('parts/order.html.php'); ?>
      <img class="rounded float-start img-fluid img-thumbnail rounded mx-auto d-block" 
        src="/boutique/assets/packshots/Polaire-Unisexe-a-col-zippe-Russell.jpeg" />
      <p>La Polaire officielle du Bagad de Nantes.</p>
      <ul>
        <li>Micropolaire anti-bouloche 100 % polyester</li>
        <li>Deux poches avant</li>
        <li>Col zippé</li>
        <li>Cordon de serrage dans l'ourlet du bas</li>
        <li>Tailles S à 2XL</li>
      </ul>
      <p><b>Couleur</b> : Noir</p>
      <p><b>Marquage</b> : Broderie couleur</p>
      <p><b>Manches</b> : Manches longues</p>
      <p><b>Consignes d'entretien</b> : Laver en machine à 40 °C votre sur l’envers.
        Ne pas nettoyer à la javel ni à sec, ne pas sécher en machine.</p>
      <h3>Doux et confortable</h3>
      <p>Ce vêtement ultradoux se porte sur un T-shirt ou une chemise,
          et dispose de deux poches avant pour ranger votre téléphone et vos clés.
          Et pour plus de chaleur et de protection, le col montant zippé se ferme jusqu'en haut.</p>
      <h3>Tissu anti-bouloche</h3>
      <p>Le tissu micropolaire est fabriqué en polyester qui ne bouloche pas. 
          La polaire conserve sa forme même si vous la portez et la lavez fréquemment.</p>
          <h3>Guide des tailles</h3>
      <img class="rounded float-none img-fluid img-thumbnail mx-auto mb-3 d-block" 
        src='/boutique/assets/tailles/Polaire-Unisexe-col-zippe-Bagad-de-Nantes-tailles.png' />
      <p>Les dimensions indiquées dans ce tableau font référence à la taille du vêtement et non aux mensurations de la personne qui les porte.</p>
      <p>Longueur (A) : du point le plus haut à l’épaule au bas de l’ourlet arrière.</p>
      <p>Largeur (B) : d’un bord à l’autre, juste au-dessous des manches (lorsque le vêtement est à plat).</p>
      <table id="size-chart" class="table table-striped table-hover caption-top">
        <caption>Tailles Polaire unisexe à col zippé</caption>
          <thead class="table-light">
            <tr>
              <th scope="col">Taille</th>
              <th scope="col">Longueur (A) en cm</th>
              <th scope="col">Largeur (B) en cm</th>
            </tr>
          </thead>
        <tbody>
          <tr><th scope="row">S</th><td>67</td><td>105</td></tr>
          <tr><th scope="row">M</th><td>69,5</td><td>111</td></tr>
          <tr><th scope="row">L</th><td>72</td><td>117</td></tr>
          <tr><th scope="row">XL</th><td>74,5</td><td>123</td></tr>
          <tr><th scope="row">2XL</th><td>77</td><td>129</td></tr>
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
