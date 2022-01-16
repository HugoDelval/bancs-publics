<?php

include './includes/header.php';
require_once './actualites/functions.php';

?>
<section class="hero is-link py-5 is-block">
  <div class="container">
    <h1 class="title is-1">
      Collectif Bancs Publics
    </h1>
    <p class="subtitle mt-1">
      ✊ Lutte contre le projet de parking sous la <a href="https://goo.gl/maps/4gu21s6s6EBiqWTt8" title="Google Maps Place Aristide Briand" class="link">Place Aristide Briand</a> dans le centre historique de Sète
    </p>
  </div>
</section>

<section class="container my-6">
  <h2 class="title is-3">Les dernières actualités</h2>

  <?php

  foreach (array_slice(getActualites(), 0, 3) as $actu) {
    include "./actualites/{$actu}/card.php";
  }

  ?>

  <a class="button is-info mt-4" href="/actualites/">
    <i class="far fa-newspaper mr-2"></i>
    Voir toutes les actualités
  </a>
</section>

<?php include './includes/footer.php'; ?>
