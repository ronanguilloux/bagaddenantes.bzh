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
      <h2>Veste Softshell Femme Bagad de Nantes <span id="price" class="badge rounded-pill bg-dark">50,00 €</span></h2>
      <?php require_once('parts/order.html.php'); ?>
      <img class="rounded float-start img-fluid img-thumbnail rounded mx-auto d-block" 
          src="/boutique/assets/packshots/Veste-Softshell-Femme-Bagad-de-Nantes.jpeg" />
      <p>La Veste Softshell Femme officielle du Bagad de Nantes</p>
      <p>Cette veste est brodée au logo du Bagad de Nantes.</p>
      <ul>
        <li>Mélange 90 % polyester et 10 % élasthanne pour la chaleur</li>
        <li>Capuche amovible avec cordons de serrage pour vous abriter de la pluie</li>
        <li>Poches avant zippées pour garder votre téléphone et votre portefeuille</li>
        <li>Poignets réglables avec fermetures autoagrippantes pour contrer le mauvais temps</li>
        <li>Modèle également <a href="/boutique/Veste-Softshell-Homme-Bagad-de-Nantes">disponible pour homme</a></li>
      </ul>
      <p><b>Couleur</b> : Noir</p>
      <p><b>Marquage</b> : Broderie couleur</p>
      <p><b>Manches</b> : Manches longues, fermetures de poignets réglables</p>
      <p><b>Tailles</b> : du S au 2XL - voir guide ci-dessous</li>
      <h3>Le favori de l'automne</h3>
      <p>Accueillez la nouvelle saison avec la veste Softshell Langley d'Elevate™.
        Ce coupe-vent léger est un excellent choix pour le jogging et la randonnée,
        car il ne vous ralentira pas.</p>
      <h3>Guide des tailles</h3>
      <img class="rounded float-start img-fluid img-thumbnail mx-auto mb-3 d-block" 
        src='/boutique/assets/tailles/Veste-Softshell-Femme-de-Nantes-tailles.png' />
      <p>Les dimensions indiquées dans ce tableau font référence à la taille du vêtement et non aux mensurations de la personne qui les porte.</p>
      <p>Longueur (A) : du point le plus haut à l’épaule au bas de l’ourlet arrière.</p>
      <p>Largeur (B) : d’un bord à l’autre, juste au-dessous des manches (lorsque le vêtement est à plat).</p>
      <table id="size-chart" class="table table-striped table-hover caption-top">
        <caption>Tailles Veste Softshell Femme</caption>
          <thead class="table-light">
            <tr>
              <th scope="col">Taille</th>
              <th scope="col">Longueur (A) en cm</th>
              <th scope="col">Largeur (B) en cm</th>
            </tr>
          </thead>
        <tbody>
          <tr><th scope="row">XS</th><td>58</td><td>46</td></tr>
          <tr><th scope="row">S</th><td>59</td><td>48</td></tr>
          <tr><th scope="row">M</th><td>60</td><td>50</td></tr>
          <tr><th scope="row">L</th><td>61</td><td>52</td></tr>
          <tr><th scope="row">XL</th><td>62</td><td>54</td></tr>
          <tr><th scope="row">2XL</th><td>63</td><td>58</td></tr>
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
