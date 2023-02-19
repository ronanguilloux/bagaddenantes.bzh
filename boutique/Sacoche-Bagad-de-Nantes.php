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
      <h2>Sacoche Bagad de Nantes <span id="price" class="badge rounded-pill bg-light text-dark">39,00 €</span></h2>
      <p><i>Prix unitaire maximum - varie en fonction du nombre d'unités commandées</i></p>
      <?php require_once('parts/order.html.php'); ?>
      <img class="rounded float-start img-fluid img-thumbnail rounded mx-auto d-block" 
          src="/boutique/assets/packshots/Sacoche-Bagad-de-Nantes.jpeg" />
      <p>La Sacoche officielle du Bagad de Nantes</p>
      <p>Cette sacoche Omaha de Bullet™ est brodée au logo du Bagad de Nantes.</p>
      <ul>
        <li>Polyester 600D résistant à un usage quotidien</li>
        <li>Dimensions : 25 cm H x 34 cm l x 8 cm L</li>
        <li>Bandoulière ajustable et boucle de fermeture</li>
      </ul>
      <p><b>Couleur</b> : Noir</p>
      <p><b>Marquage</b> : Broderie couleur</p>
      <p><b>Poids</b> : 205 g</p>
      <h3>À vélo jusqu'au local du Bagad</h3>
      <p>Les sonneurs-euse cyclistes ne pourront bientôt plus se passer de la sacoche Omaha 
        pour leurs trajets vers leur lieu de répétition préféré.
        Grâce à sa bandoulière et son format compact, cette sacoche vous permet de transporter
        facilement vos partitions, votre practice.</p>
    </div>
    <?php require_once('../parts/sidebar.html.php'); ?>

  </div><!-- /row -->
</div><!-- /container -->

<?php require_once('../parts/cards.html.php'); ?>

<?php require_once('../parts/footer.html.php'); ?>

<?php require_once('../parts/scripts.html.php'); ?>

</body>
</html>
