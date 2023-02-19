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
      <h2>T-Shirt Femme Bagad de Nantes <span id="price" class="badge rounded-pill bg-light text-dark">36,00 €</span></h2>
      <p><i>Prix unitaire maximum - varie en fonction du nombre d'unités commandées</i></p>
      <?php require_once('parts/order.html.php'); ?>
      <img class="rounded float-start img-fluid img-thumbnail rounded mx-auto d-block" 
        src="/boutique/assets/packshots/T-Shirt-Femme-Bagad-de-Nantes.jpeg" />
      <p>Le T-Shirt Femme officiel du Bagad de Nantes.</p>
      <ul>
        <li>100 % coton écologique et certifié équitable, 160 g/m²</li>
        <li>Manches courtes</li>
        <li>Bandes à l'encolure et aux épaules</li>
        <li>Coutures latérales</li>
        <li>Coupe moderne</li>
        <li>Modèle également <a href="/boutique/T-Shirt-Homme-Bagad-de-Nantes">disponible pour homme</a></li>
      </ul>
      <p><b>Couleur</b> : Noir</p>
      <p><b>Marquage</b> : Broderie</p>
      <p><b>Manches</b> : Manches courtes</p>
      <p><b>Col</b> : Col en V</p>
      <p><b>Tailles</b> : du XS au 2XL - voir guide ci-dessous</p>
      <h3>Doux et écolo, un choix éthique et durable</h3>
      <p>Fabriqué entièrement en coton biologique, le T-shirt femme col en V GOTS de CottoVer®, brodé aux couleurs du Bagad de Nantes,
        est bien plus qu'un simple T-shirt.
        Il bénéficie de nombreuses certifications internationales pour son mode de fabrication éthique et responsable :</p>
      <ul>
        <li>Certification <a href="https://global-standard.org/" target="_blank">GOTS</a></li>
        <li>Certification <a href="https://www.oeko-tex.com/" target="_blank">OEKO-TEX</a></li>
        <li>Certification <a href="https://www.nordic-ecolabel.org/" target="_blank">Nordic Swan Ecolabel</a></li>
        <li>Certification <a href="https://info.fairtrade.net/" target="_blank">FairTrade</a></li>
      </ul>
      <h3>Conseils d'entretien</h3>
        <ul>
          <li>Lavage en machine à 60° C</li>
          <li>Température de repassage max : 200° C</li>
          <li>Ne pas sécher en machine</li>
        </ul>
      <h3>Guide des tailles</h3>
      <img class="rounded float-none img-fluid img-thumbnail mx-auto mb-3 d-block" 
        src='/boutique/assets/tailles/T-Shirt-Femme-Bagad-de-Nantes-tailles.png' />
      <p>Les dimensions indiquées dans ce tableau font référence à la taille du vêtement et non aux mensurations de la personne qui les porte.</p>
      <p>Longueur (A) : du point le plus haut à l’épaule au bas de l’ourlet arrière.</p>
      <p>Largeur (B) : d’un bord à l’autre, juste au-dessous des manches (lorsque le vêtement est à plat).</p>
      <table id="size-chart" class="table table-striped table-hover caption-top">
        <caption>T-Shirt Femme Bagad de Nantes</caption>
          <thead class="table-light">
            <tr>
              <th scope="col">Taille</th>
              <th scope="col">Longueur (A) en cm</th>
              <th scope="col">Largeur (B) en cm</th>
            </tr>
          </thead>
        <tbody>
          <tr><th scope="row">XS</th><td>60</td><td>41</td></tr>
          <tr><th scope="row">S</th><td>62</td><td>44</td></tr>
          <tr><th scope="row">M</th><td>64</td><td>47</td></tr>
          <tr><th scope="row">L</th><td>66</td><td>50</td></tr>
          <tr><th scope="row">XL</th><td>68</td><td>53</td></tr>
          <tr><th scope="row">2XL</th><td>70</td><td>56</td></tr>
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
