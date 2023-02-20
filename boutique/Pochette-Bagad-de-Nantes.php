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
      <h1 class="mt-0 d-print-none"><a href="/boutique">La Boutique du Bagad</a></h1>
      <hr class="d-print-none"/>
      <img class="rounded float-end img-fluid img-thumbnail rounded mx-auto d-block w-25 d-none d-print-block" 
          src="/boutique/assets/qr-code-boutique.png" />
      <h2>Pochette à fermeture éclair Bagad de Nantes <span id="price" class="badge rounded-pill bg-light text-dark">26,00 €</span></h2>
      <p><i>Prix unitaire maximum - varie en fonction du nombre d'unités commandées</i></p>
      <?php require_once('parts/order.html.php'); ?>
      <img class="rounded float-start img-fluid img-thumbnail rounded mx-auto d-block" 
          src="/boutique/assets/packshots/Pochette-Bagad-de-Nantes.jpeg" />
      <p>Pochette à fermeture éclair officielle du Bagad de Nantes</p>
      <ul>
        <li>Polyester résistant</li>
        <li>Fermeture éclair intégrée</li>
      </ul>
      <p><b>Couleur</b> : Noir</p>
      <p><b>Marquage</b> : Impression couleur</p>
      <p><b>Format</b> : 31 x 21 cm.</p>
      <h3>Un rangement unique en son genre</h3>
      <p>Ce petit sac en polyester résistant et à fermeture éclair peut servir de trousse à accessoires, à maquillage,
        de trousse de voyage, ou de rangement pour votre papeterie ou les objets essentiels à votre quotidien.
        Pourquoi ne pas les offrir à un anniversaire ou à Noël ?</p>
    </div>
    <?php require_once('../parts/sidebar.html.php'); ?>

  </div><!-- /row -->
</div><!-- /container -->

<?php require_once('../parts/cards.html.php'); ?>

<?php require_once('../parts/footer.html.php'); ?>

<?php require_once('../parts/scripts.html.php'); ?>

</body>
</html>
