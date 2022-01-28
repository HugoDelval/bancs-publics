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
      <b>Notre action a empêché le démarrage des travaux. C'est une première victoire !</b>
      Les Sétois et Sétoises peuvent le constater tous les jours.
    </p>
    <p>
      C'est le résultat de notre mobilisation, mais que ce n'est pas fini.
    </p>
    <p>
      En effet, le danger reste très présent. La Mairie veut absolument réaliser ce projet aberrant. Elle cherche aujourd'hui des moyens de droit pour essayer d'échapper au droit et c'est objectivement difficile pour elle.  De fait, elle est obligée de modifier sa stratégie. Peut-être en évitant de respecter l'obligation du Permis de Démolir ? Peut-être en modifiant le Permis de Construire en cours d'instruction en y incluant la construction de la nouvelle place ? À tout moment, une "autorisation d'urbanisme" peut sortir.
    </p>
    <p>
      Notre vigilance doit rester intacte.
    </p>
    <p>
      Il faut saluer tous ceux, toutes celles, qui tous les jours assurent cette veille sur la place. Regardons tous les jours si un quelconque document administratif est affiché sur la place. Quel que soit ce document, il sera inévitablement contraire au droit et devra être attaqué.
    </p>
    <p>
      Les travaux de démontage de la place qui devaient démarrer le 10 janvier dernier sont suspendus. C'est le résultat de notre mobilisation impressionnante et de notre action en justice.
    </p>
  </section>

  <div class="has-text-centered mt-6">
    <img src="<?= $metadata['image'] ?>" alt="">
  </div>
</div>

<?php include '../../includes/footer.php'; ?>
