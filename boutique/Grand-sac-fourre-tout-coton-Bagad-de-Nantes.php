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
      <h2>Le Sac Fourre-Tout en toile Bagad de Nantes <span id="price" class="badge rounded-pill bg-light text-dark">29,00 €</span></h2>
      <p><i>Prix unitaire maximum - varie en fonction du nombre d'unités commandées</i></p>
      <?php require_once('parts/order.html.php'); ?>
      <img class="rounded float-start img-fluid img-thumbnail rounded mx-auto d-block" 
          src="/boutique/assets/packshots/Grand-sac-fourre-tout-coton-Bagad-de-Nantes.jpeg" />
      <p>Le Sac Fourre-Tout officiel du Bagad de Nantes</p>
      <ul>
        <li>100 % toile de coton</li>
        <li>Compartiment principal ouvert avec accès facile</li>
        <li>Deux anses de transport</li>
      </ul>
      <p><b>Couleur</b> : Blanc et noir</p>
      <p><b>Marquage</b> : Impression couleur</p>
      <h3>Consignes d’entretien :</h3>
      <p>Pour préserver l’éclat de son logo, il est recommandé de laver votre sac à la main avec une éponge douce.</p>
      <h3>Un accessoire de mode</h3>
      <p>Le sac fourre-tout en coton deluxe revisite un accessoire intemporel dans un style moderne, avec plus d’espace de rangement et des anses plus épaisses.
        Léger et pratique, ce sac en toile personnalisé est idéal pour transporter vos affaires.</p>
      <h3>Une alternative durable au plastique</h3>
      <p>Avec son tissu en coton, ce sac personnalisé est plus résistant que ses homologues en plastique.
        Emportez-le pour aller à l'épicerie ou faire de petites courses, par exemple.</p>
    </div>
    <?php require_once('../parts/sidebar.html.php'); ?>

  </div><!-- /row -->
</div><!-- /container -->

<?php require_once('../parts/cards.html.php'); ?>

<?php require_once('../parts/footer.html.php'); ?>

<?php require_once('../parts/scripts.html.php'); ?>

</body>
</html>
