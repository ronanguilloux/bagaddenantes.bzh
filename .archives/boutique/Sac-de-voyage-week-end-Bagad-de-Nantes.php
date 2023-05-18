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
      <h2>Le Sac de voyage week-end Bagad de Nantes <span id="price" class="badge rounded-pill bg-light text-dark">25,00 €</span></h2>
      <p><i>Prix unitaire maximum - varie en fonction du nombre d'unités commandées</i></p>
      <?php require_once('parts/order.html.php'); ?>
      <img class="rounded float-start img-fluid img-thumbnail rounded mx-auto d-block" 
          src="/boutique/assets/packshots/Sac-de-voyage-week-end-Bagad-de-Nantes.jpeg" />
      <p>Le Sac de voyage week-end officiel du Bagad de Nantes</p>
      <ul>
        <li>Toile de coton 320 g/m²</li>
        <li>Poche zippée avec accès facile</li>
        <li>Bandoulière réglable</li>
      </ul>
      <p><b>Couleur</b> : Noir</p>
      <p><b>Marquage</b> : Impression couleur</p>
      <p><b>Largeur</b> : 45 cm (d’un côté à l’autre à l’endroit le plus large).</p>
      <p><b>Profondeur</b> : 27 cm (de l’avant extérieur à l’arrière du sac).</p>
      <p><b>Hauteur</b> : 27 cm (du fond du sac au point le plus haut du compartiment principal). </p>
      <p><b>Volume</b> : 30 litres (capacité de stockage)</p>
      <p><b>Poids</b> : Poids : 35 g (sac vide).</p>
      <h3>Consignes d’entretien :</h3>
      <p>Notre sac de voyage au logo du Bagad de Nantes, en toile de coton est doté d’une bandoulière pour un confort optimal.
        Conçu pour mettre votre Bagad préféré à l’honneur dans vos déplacements.</p>
      <h3>Voyager léger</h3>
      <p>Le sacs de voyage est un moyen économique de limiter le nombre de bagages.
        Polyvalent, il s’adapte aux concours, festivals, escapades d’un week-end comme aux déplacements professionnels d’une nuit.
        De plus, la bandoulière réglable permet de porter le sac sur une épaule ou en travers de la poitrine.</p>
      <h3>Simple mais pratique</h3>
      <p>Avec la poche zippée, gardez votre passeport ou vos cartes de visite à portée de main afin d’aller droit au but lorsque vous vous présentez au comptoir d’enregistrement ou à la porte d’embarquement.</p>
    </div>
    <?php require_once('../parts/sidebar.html.php'); ?>

  </div><!-- /row -->
</div><!-- /container -->

<?php require_once('../parts/cards.html.php'); ?>

<?php require_once('../parts/footer.html.php'); ?>

<?php require_once('../parts/scripts.html.php'); ?>

</body>
</html>
