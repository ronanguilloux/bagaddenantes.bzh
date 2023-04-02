<?php
require_once('parts/default_metas.php');

//$meta['title'] = "";
//$meta['description'] = "";

require_once('parts/head.html.php');
require_once('parts/navbar.html.php');
?>
<div class="container">
  <div class="row row-cols-1 row-cols-md-2 pt-5">

    <div class="col-md-8">
      <h1 class="mt-0">Nos Partenaires</h1>
      <hr/>
      <p class="lead">
        En 2022, le Bagad de Nantes ouvre son programme de Partenariats.
      </p>
      <h2 class="mt-5">Nos Partenaires</h2>

      <img class="img-fluid shadow-sm p-1 my-5 bg-body rounded"
      src="/assets/images/logos/logo-ville-de-nantes.webp" alt="Mairie de Nantes" />
      <p>La <a href="">Mairie de Nantes</a>, dont le Bagad porte le nom, nous accorde une subvention annuelle de 2.000 EUR.</p>

      <hr class="mt-5"/>

      <img class="img-fluid shadow-sm my-5 p-1 bg-body rounded"
      src="/assets/images/logos/logo-ccoc2.png" alt="Cercle Celtique Olivier de Clisson" />
      <p>
        Depuis plusieurs années, le <a href="http://www.cercledeclisson.fr" target="_blank">
          Cercle Celtique Olivier de Clisson</a> accompagne le Bagad de Nantes lors de sorties ou de prestations communes.
      </p>
      
        <hr class="mt-5"/>
      
      <img class="img-fluid shadow-sm w-50 my-5 p-1 bg-body rounded"
      src="/assets/images/logos/logo-lab.png" alt="Little Attlantique Brewery" />
      <p>
        La brasserie <a href="https://little-atlantique-brewery.fr" target="_blank">Little Atlantique Brewery</a>
         accueille le Bagad de Nantes pour ses répétitions publiques annuelles, ainsi que pour des prestations publiques.  
      </p>

      <hr class="mt-5"/>
    </div>

    <?php require_once('parts/sidebar.html.php'); ?>

  </div><!-- /row -->
</div><!-- /container -->

<?php require_once('parts/cards.html.php'); ?>

<?php require_once('parts/footer.html.php'); ?>

<?php require_once('parts/scripts.html.php'); ?>

</body>
</html>
