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
      <h2>Sweat-shirt zippé à capuche Femme Bagad de Nantes <span id="price" class="badge rounded-pill bg-light text-dark">58,00 €</span></h2>
      <?php require_once('parts/order.html.php'); ?>
      <img class="rounded float-start img-fluid img-thumbnail rounded mx-auto d-block" 
          src="/boutique/assets/packshots/Sweat-shirt-zippe-a-capuche-Femme-Bagad-de-Nantes.jpeg" />
      <p>Le Sweat-shirt Femme officiel du Bagad de Nantes</p>
      <p>Ce sweat-shirt est brodé au logo du Bagad de Nantes.</p>
      <ul>
        <li>80% coton peigné filé et 20% polyester (tissu à 3 épaisseurs)</li>
        <li>Ourlet, poignets et emmanchures au point de recouvrement</li>
        <li>Fermeture éclair en métal YKK® (argent antique)</li>
        <li>Capuche doublée avec cordon de serrage</li>
        <li>Accès pour écouteurs MP3</li>
        <li>Coupe féminine</li>
        <li>Modèle également <a href="Sweat-shirt-zippe-a-capuche-Homme-Bagad-de-Nantes">disponible pour homme</a></li>
      </ul>
      <p><b>Couleur</b> : Noir</p>
      <p><b>Marquage</b> : Broderie couleur</p>
      <p><b>Manches</b> : Manches longues</p>
      <p><b>Tailles</b> : du S au XL - voir guide ci-dessous</li>
      <p><b>Type de poignets</b> : Élastique</p>
      <p><b>Caractéristiques de la coupe</b> : Coutures profilées</p>
      <h3>Conçu pour bouger.</h3>
      <p>Pour un look sportif, adoptez le sweat-shirt à capuche zippé Authentic de Russell™. Il est léger et tendance.</p>
      <h3>Guide des tailles</h3>
      <img class="rounded float-start img-fluid img-thumbnail mx-auto mb-3 d-block" 
        src='/boutique/assets/tailles/Sweat-shirt-zippe-a-capuche-Femme-Bagad-de-Nantes-tailles.png' />
      <p>Les dimensions indiquées dans ce tableau font référence à la taille du vêtement et non aux mensurations de la personne qui les porte.</p>
      <p>Longueur (A) : du point le plus haut à l’épaule au bas de l’ourlet arrière.</p>
      <p>Largeur (B) : d’un bord à l’autre, juste au-dessous des manches (lorsque le vêtement est à plat).</p>
      <table id="size-chart" class="table table-striped table-hover caption-top">
        <caption>Tailles Sweat-shirt à capuche Femme</caption>
          <thead class="table-light">
            <tr>
              <th scope="col">Taille</th>
              <th scope="col">Longueur (A) en cm</th>
              <th scope="col">Largeur (B) en cm</th>
            </tr>
          </thead>
        <tbody>
          <tr><th scope="row">XS</th><td>65</td><td>45</td></tr>
          <tr><th scope="row">S</th><td>66</td><td>46</td></tr>
          <tr><th scope="row">M</th><td>68</td><td>50</td></tr>
          <tr><th scope="row">L</th><td>70</td><td>55</td></tr>
          <tr><th scope="row">XL</th><td>72</td><td>57</td></tr>
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
