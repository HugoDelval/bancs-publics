<?php
include '../../includes/header.php';
include './metadata.php';
require_once '../functions.php';
?>

<div class="container my-5 article">
  <h1 class="title is-3 mt-4"><?= $metadata['titre'] ?></h1>

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
      Des engagements forts et réfléchis pour les amoureux de Sète, Sétoises et Sétois, jeunes, moins jeunes, actifs, retraités, riverains pour beaucoup, anonymes et d'autres moins . Tous partagent le même objectif de protéger notre cœur de ville et sont opposés au projet du parking. Marrainer et parrainer cela veut dire s'en occuper, les sauvegarder de la destruction, leur déclarer leur amour. Tous les marraines et les parrains sont sur la <a href="/parrainages/">carte des parrainages</a>.
    </p>
    <p>
      Voici le lien vers la <b>carte interactive</b> des marraines et parrains des 76 tilleuls argentés de la place : 
      <a href="http://lodelo.art/bancs-publics/">http://lodelo.art/bancs-publics/</a>
    </p>
  </section>

  <div class="has-text-centered mt-6">
    <img src="/static/images/photos/articles/photos parrainages 9 1.jpg" alt="">
    <img src="/static/images/photos/articles/photos parrainages 9  3.jpg" alt="" class="mt-4">
    <img src="/static/images/photos/articles/photo parrainage 9 2.jpg" alt="" class="mt-4">
    <img src="/static/images/photos/articles/photo parrainage 9 4.jpg" alt="" class="mt-4">
    <img src="/static/images/photos/articles/photo parrainage 9 5.jpg" alt="" class="mt-4">
    <img src="/static/images/photos/articles/photo parrainage 9 6.jpg" alt="" class="mt-4">
  </div>
</div>

<?php include '../../includes/footer.php'; ?>
