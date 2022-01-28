<?php
include dirname(__FILE__) . '/metadata.php';
?>

<div class="card actu-card">
  <a href="<?= $metadata['url'] ?>">
    <div class="actu-image">
      <img src="<?= $metadata['image'] ?>" alt="">
    </div>
    <div class="actu-content">
      <p class="date has-text-grey-light"><i class="fa fa-calendar-alt mr-2"></i><?= $metadata['date'] ?></p>
      <h3 class="has-text-weight-bold"><?= $metadata['titre'] ?></h3>
      <?php 
      /************* /!\ TODO  Éditer le résume ****************/
      ?>
      <p class="actu-summary">Arts et Ecologie se rejoignent dans ce nouvel épisode !</p>
      <button class="button is-light">Lire l'article →</button>
    </div>      
  </a>
</div>
