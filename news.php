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
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v19.0&appId=241198149375405" 
nonce="G00mRelC"></script>
        <div class="fb-page" data-href="https://www.facebook.com/Bagaddenantes/" data-tabs="timeline"
        data-width="800" data-height="2000" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Bagaddenantes/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Bagaddenantes/">Bagad de Nantes</a></blockquote></div>
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
