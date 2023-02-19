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
      <h1 class="mt-0">Votre soutien au Bagad de Nantes</h1>
      <hr/>
      <p class="lead">Le Bagad de Nantes existe grâce à votre soutien !
      </p>
      <p>Le Bagad de Nantes est une association à but non lucratif, d'une soixantaine de membres actifs,
        et dont le budget annuel avoisine les 14.000 €.
        Nous bénéficions d'une subvention de 2.000 € de la part de la Mairie de Nantes.</p>
      <p>Comme beaucoup d'artistes et d'associations du monde de la culture,
        la crise sanitaire des années 2020-2021 a largement affecté nos activités et nos sorties, et par conséquent notre budget.
      Nous accueillons donc avec gratitude votre soutien et votre support à la musique et la culture bretonne à Nantes ❤️ !</p>

      <h2>Par chèque :</h2>
      <p>A l’ordre de : <i>Bagad de Nantes</i></p>
      <p>Courrier à adresser à :<br>Bagad de Nantes,<br>1 Rue Jules Brechoir, 44000 Nantes</p>

      <h2>Par virement :</h2>
      <p>Les virements sont à adresser à :
        <br>Bagad de Nantes
        <br>1 Rue Jules Brechoir, 44000 Nantes
        <br>Objet : Don Particulier
      </p>
      <code>
        IBAN: FR76 1027 8360 1700 0113 7370 108
        <br>BIC: CMCIFR2A
      </code>

      <h2>Une déduction fiscale de 66% de votre don</h2>
      <p>Les dons au Bagad de Nantes, association Loi 1901, ouvrent droit à une réduction d'impôt
        sur le revenu égale à 66 % du montant versé, dans la limite de 20 % du revenu imposable.
        <ul>
        <li>Un don de 50 € ouvre par exemple droit à une réduction d'impôt de 33 €,</li>
        <li>un don de 100 € à une réduction de 66 €, etc.</li>
      </ul>
      </p>
      <p>Pour obtenir votre reçu fiscal, merci d'indiquer la date et le montant de votre don à notre Trésorier :
        <a href="mailto:tresorier@bagaddenantes.bzh">tresorier@bagaddenantes.bzh</a></p>
      <h2>Votre soutien peut prendre de nombreuses formes</h2>
      <p>Votre don peut prendre l'une des formes suivantes :
        <ul>
          <li>En numéraire : don sous forme d'espèces, de chèques, de virement.</li>
          <li>En nature :
            <ul>
              <li>achat d'un instrument pour un élève, d'un costume pour un-e musicien-ne</li>
              <li>le don de photos ou de captations audio/video libres de droit pour le Bagad</li>
              <li>le don de créations graphiques ou de supports de communication</li>
              <li>aide pour l'achat et la maintenance des costumes et des instruments</li>
            </ul>
          <li>En compétences : les vôtres !</li>
        </ul>
      </p>
      <h2>Mécénat d'entreprise et déductions fiscales</h2>
      <p>Merci de nous <a href="mailto:tresorier@bagaddenantes.bzh">contacter</a></p>
    </div>

    <?php require_once('parts/sidebar.html.php'); ?>

  </div><!-- /row -->
</div><!-- /container -->

<?php require_once('parts/cards.html.php'); ?>

<?php require_once('parts/footer.html.php'); ?>

<?php require_once('parts/scripts.html.php'); ?>

</body>
</html>
