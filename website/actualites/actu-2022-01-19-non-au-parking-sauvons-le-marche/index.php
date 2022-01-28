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
      Comme déjà la semaine dernière, nous marcherons à côté des commerçants ce mercredi 19 janvier aux alentours de 13h15 depuis la place Aristide Briand jusqu'à la Mairie, CONTRE le parking, mais POUR le marché ! Venez nombreux.ses !
    </p>
    <p>
      Le collectif Bancs Publics soutient depuis le début de son action les commerçants sédentaires et non sédentaires de l'Esplanade. Nous sommes convaincus que comme d'autres villes et métropoles européennes pionnières en matière de mobilité urbaine, Sète peut accroître le développement économique de son centre-ville sans y amener plus de voitures, mais en pensant mieux comment y amener les personnes. 
    </p>
    <p>
      Nous sommes également convaincus qu'à l'inverse, deux à trois années de travaux sur la place mettront en danger de nombreux commerçants, à commencer par ceux du marché du mercredi.
    </p>
    <p>
      C'est pourquoi nous soutenons les commerçants sédentaires ou non sédentaires. Les travaux de destruction de la place et de construction du parking, avec sa noria de camions (40 000 m3 de terre à retirer, soit 25 camions de 20 m3 tous les jours de mai, juin et septembre 2022), les bétonnières se succédant sans fin, le bruit, la poussière compromettant le marché alimentaire et les activités de restauration, etc. Quel scénario d’enfer se prépare pour tous.
    </p>
    <p>
      Nous voulons une place embellie et sécurisée, avec les rues du 11 novembre et du 8 mai piétonnes, sans problème pour les livraisons le matin comme les rues Gambetta et Alsace Lorraine. C’est l’objectif, avec des parkings de délestages extérieur au centre ville, des navettes gratuites. C’est ce que font de plus en plus de villes grandes et moyennes.
    </p>
    <p>
      Pour les commerces, la cherté des places de parking serait dissuasive pour beaucoup, les embouteillages, inévitables, inciteraient à faire ses achats ailleurs, dans les zones commerciales. 
    </p>
    <p>
      L’expérience montre que dans toutes les villes ayant piétonnisé leur centre, sans parking central, l’activité commerciale s’est développée, la fréquentation s’est accrue, l’augmentation des chiffres d’affaires et l’implantation de nouveaux commerces serait alors favorisée. Une ville apaisée avec moins de circulation est essentielle pour la vitalité économique de notre ville.
    </p>
  </section>

  <div class="has-text-centered mt-6">
    <img src="/static/images/photos/articles/rassemblement marché 1.jpg" alt="">
    <img src="/static/images/photos/articles/rassemblement marché 2 .jpg" alt="" class="mt-4">
    <img src="/static/images/photos/articles/rassemblement marché 3.jpg" alt="" class="mt-4">
  </div>
</div>

<?php include '../../includes/footer.php'; ?>
