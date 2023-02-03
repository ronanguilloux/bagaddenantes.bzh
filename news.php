<?php
require_once('parts/default_metas.php');

$meta['title'] = "Bagad de Nantes - Nos Actualités";
//$meta['description'] = "";

require_once('parts/head.html.php');
require_once('parts/navbar.html.php');
?>
<div class="container">
  <div class="row row-cols-1 row-cols-md-2 pt-5">

    <div class="col-md-8">
      <h1 class="mt-0">Actualités</h1>
      <hr/>

      <?php //require_once('parts/ouverture_inscriptions.html.php');
      ?>

      <div class="text-center">
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" nonce="RwYbtPIj"></script>
      <div class="fb-page text-center"
      data-tabs="timeline,events,messages"
      data-href="https://www.facebook.com/Bagaddenantes"
      data-width="500"
      data-height="1500"
      data-hide-cover="false"></div>
    </div>
    </div>
    <?php require_once('parts/sidebar.html.php'); ?>

  </div><!-- /row -->
</div><!-- /container -->

<?php require_once('parts/cards.html.php'); ?>

<?php require_once('parts/footer.html.php'); ?>

<?php require_once('parts/scripts.html.php'); ?>

</body>
</html>
