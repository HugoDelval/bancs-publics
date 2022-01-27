<?php
include '../../includes/header.php';
include './metadata.php';
require_once '../functions.php';
?>

<div class="container my-5 article">
  <h1 class="title is-2 mt-4"><?= $metadata['titre'] ?></h1>

  <p class="date has-text-grey-light"><i class="fa fa-calendar-alt mr-2"></i><?= $metadata['date'] ?></p>

  <div class="share-buttons mt-4">
    <span class="has-text-grey has-text-weight-bold">Partager sur :</span>
    <!-- Telegram -->
    <a href="https://t.me/share/url?url=<?= urlencode($metadata['absolute_url']) ?>" target="_blank" rel="noopener noreferrer" class="telegram">
      <i class="fab fa-telegram-plane fa-2x"></i></a>
    <!-- Facebook -->
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($metadata['absolute_url']) ?>" target="_blank" rel="noopener noreferrer" class="facebook"><i class="fab fa-facebook fa-2x"></i></a>
    <!-- Twitter -->
    <a href="https://twitter.com/share?url=<?= urlencode($metadata['absolute_url']) ?>" target="_blank" rel="noopener noreferrer" class="twitter"><i class="fab fa-twitter fa-2x"></i></a>
    <!-- Mail -->
    <a href="mailto:?Subject=Article de Bancs Publics : <?= $metadata['titre'] ?>&Body=<?= $metadata['titre'] ?>%0A%0AArticle%20de%20Bancs%20Publics%20%3A%20<?= $metadata['titre'] ?>%0A%0ALire%20l'article%20sur%20:%20<?= urlencode($metadata['absolute_url']) ?>" target="_blank" rel="noopener noreferrer"><i class="far fa-envelope fa-2x"></i></a>
    <!-- Whatsapp -->
    <a href="https://web.whatsapp.com/send?text=<?= urlencode($metadata['absolute_url']) ?>" target="_blank" rel="noopener noreferrer" class="whatsapp"><i class="fab fa-whatsapp fa-2x"></i></a>
  </div>

  <section class="content my-4">
    <p>
      Ce matin, vendredi 14 janvier, à 8h30, et au lendemain d'une première intervention, nouvelle tentative de l'entreprise SOTRA NASA, elle-même mandatée par ENEDIS, elle-même mandatée par la mairie, pour effectuer des mesures, cette fois-ci rue du 11 novembre 1918.
    </p>
    <p>
      Un personnel des services techniques de la mairie présent sur place annonce pouvoir nous fournir un arrêté municipal pour ces travaux, qui ne concernent d'après lui pas que la place, mais donc la place quand-même. Par conséquent, nous occupons.
    </p>
    <hr>
    <p>
      Si vous souhaitez nous soutenir, vous pouvez :
      <ul>
        <li>Signer la pétition : <a href="https://www.mesopinions.com/petition/nature-environnement/projet-parking-souterrain-place-kiosque-sete/161546">https://www.mesopinions.com/petition/nature-environnement/projet-parking-souterrain-place-kiosque-sete/161546</a></li>
        <li>Donner à au collectif : <a href="https://www.helloasso.com/associations/association-bancs-publics/formulaires/1">https://www.helloasso.com/associations/association-bancs-publics/formulaires/1</a></li>
        <li>Adhérer au collectif et rejoindre notre lutte : <a href="/adherer/">Comment adhérer ?</a></li>
      </ul>
    </p>
    <p>
      N'hésitez pas également à consulter les <a href="/ressources">ressources mises à disposition</a> sur le site.
    </p>
  </section>

  <div class="has-text-centered mt-6">
    <img src="<?= $metadata['image'] ?>" alt="">
  </div>
</div>

<?php include '../../includes/footer.php'; ?>
