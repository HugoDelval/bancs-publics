<?php
include '../includes/header.php';
require_once './functions.php';
?>

<!-- Page content -->
<section class="section">
  <div class="container">
    <h1 class="title is-1">
      Les actualités du collectif
    </h1>
  </div>
</section>

<section class="container mt-4 mb-6">
  <?php

  foreach (getActualites() as $actu) {
    include "./{$actu}/card.php";
  }

  ?>
</section>


<?php include '../includes/footer.php'; ?>
