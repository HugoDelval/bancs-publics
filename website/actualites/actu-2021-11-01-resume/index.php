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
      Le maire de Sète a décidé d’éventrer la place <a href="https://goo.gl/maps/4gu21s6s6EBiqWTt8" title="Google Maps Place Aristide Briand" class="link">Aristide Briand</a>, appelée aussi Place du kiosque ou l’Esplanade,  située en bordure de la zone piétonne, pour y construire, en plein centre-ville, un troisième parking souterrain payant de 300 places sur 2 étages (profondeur de sept mètres) dont les travaux titanesques, dus notamment aux problèmes d’étanchéité liés à la présence de l’eau à six mètres de profondeur, prendront officiellement trois ans.    
    </p>
    <p>
      Ce projet s’inscrit dans le cadre d’un programme de construction de trois parkings souterrains dont le premier tout juste terminé se situe devant le théâtre, à moins de 500 mètres de l’Esplanade. Leur nécessité s’avère d’autant plus infondée que les relevés quotidiens menés par le Collectif Bancs Publics depuis plus d’un mois montrent que les parkings déjà existants en plein centre-ville, sont <b>aux trois-quarts vides</b> 10 mois sur 12 (chiffres à l’appui), soit près de mille places disponibles.
    </p>
    <p>
      Ce projet implique la destruction totale de ce lieu <b>centenaire</b>, constamment <b>animé</b>, véritable agora de Sète avec en son centre un kiosque offert à la ville en 1892 par le négociant mélomane Johan Franke, et sur toute la place un <b>alignement remarquable</b> d’arbres composé de soixante-treize tilleuls argentés, d’un magnolia et d’un acacia, mais également d’aire de jeux pour enfants.
    </p>
    <p>
      Des milliers de Sétoises et de Sétois sont en lutte contre ce projet de construction inutile et calamiteux
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
