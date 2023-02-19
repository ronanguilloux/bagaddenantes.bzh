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
      <h2>Polo Homme Bagad de Nantes <span id="price" class="badge rounded-pill bg-light text-dark">53,00 €</span></h2>
      <p><i>Prix unitaire maximum - varie en fonction du nombre d'unités commandées</i></p>
      <?php require_once('parts/order.html.php'); ?>
      <img class="rounded float-start img-fluid img-thumbnail rounded mx-auto d-block" 
          src="/boutique/assets/packshots/Polo-Homme-Bagad-de-Nantes.jpeg" />
      <p>Le Polo Hommme officiel du Bagad de Nantes</p>
      <p>Ce polo en coton est brodé au logo du Bagad de Nantes.</p>
      <ul>
        <li>95 % coton peigné et filé et 5 % Lycra®, 200 g/m²</li>
        <li>Patte de boutonnage à 3 boutons</li>
        <li>Bande blanche classique au col et aux manches</li>
        <li>Tissu extensible confortable</li>
        <li>Délavé aux enzymes</li>
        <li>Coupe moderne</li>
        <li>Modèle également <a href="/boutique/Polo-Femme-Bagad-de-Nantes">disponible pour femme</a></li>
      </ul>
      <p><b>Couleur</b> : Noir</p>
      <p><b>Marquage</b> : Broderie couleur</p>
      <p><b>Manches</b> : Manches courtes</p>
      <p><b>Col</b> : Col standard</p>
      <p><b>Tailles</b> : du S au 2XL - voir guide ci-dessous</li>
      <h3>Conçu pour durer, avec style.</h3>
      <p>Conçu pour les environnements de travail au rythme soutenu, 
        le polo Modern Fit Greenville de Harvest est la tenue parfaite pour le 
        Bagad, en-dehors des prestations en costumes traditionnels. 
        Outre sa grande résistance, ce polo offre un grand confort et une coupe moderne impeccable. </p>
      <h3>Guide des tailles</h3>
      <img class="rounded float-start img-fluid img-thumbnail mx-auto mb-3 d-block" 
        src='/boutique/assets/tailles/Polo-Homme-Bagad-de-Nantes-tailles.png' />
      <p>Les dimensions indiquées dans ce tableau font référence à la taille du vêtement et non aux mensurations de la personne qui les porte.</p>
      <p>Longueur (A) : du point le plus haut à l’épaule au bas de l’ourlet arrière.</p>
      <p>Largeur (B) : d’un bord à l’autre, juste au-dessous des manches (lorsque le vêtement est à plat).</p>
      <table id="size-chart" class="table table-striped table-hover caption-top">
        <caption>Tailles Polo Homme</caption>
          <thead class="table-light">
            <tr>
              <th scope="col">Taille</th>
              <th scope="col">Longueur (A) en cm</th>
              <th scope="col">Largeur (B) en cm</th>
            </tr>
          </thead>
        <tbody>
          <tr><th scope="row">S</th><td>69</td><td>44</td></tr>
          <tr><th scope="row">M</th><td>70</td><td>47</td></tr>
          <tr><th scope="row">L</th><td>72</td><td>50</td></tr>
          <tr><th scope="row">XL</th><td>72</td><td>54</td></tr>
          <tr><th scope="row">2XL</th><td>74</td><td>58</td></tr>
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
