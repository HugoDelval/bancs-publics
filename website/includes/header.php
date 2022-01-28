<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Collectif Bancs Publics</title>

    <meta property="og:site_name" content="https://bancs-publics.org/">
    <meta name="description" content="Bancs Publics lutte contre la destruction de la place Aristide Briand à Sète. Le maire veut faire construire un parking et détruire ce lieu de vie cher aux sétois">
    <meta name="keywords" content="Bancs Publics, place Aristide Briand, Sète, Parking">
    <meta property="og:title" content="Collectif Bancs Publics">
    <meta property="og:description" content="Bancs Publics lutte contre la destruction de la place Aristide Briand à Sète. Le maire veut faire construire un parking et détruire ce lieu de vie cher aux sétois">
    <meta property="og:image" content="https://bancs-publics.org/static/images/photos/kiosque_nuit.jpg">
    <meta property="og:locale" content="fr_FR">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Collectif Bancs Publics">
    <meta name="twitter:description" content="Bancs Publics lutte contre la destruction de la place Aristide Briand à Sète. Le maire veut faire construire un parking et détruire ce lieu de vie cher aux sétois">
    <meta name="twitter:image" content="https://bancs-publics.org/static/images/photos/kiosque_nuit.jpg">

    <link rel="apple-touch-icon" sizes="180x180" href="/static/images/logos/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/static/images/logos/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/static/images/logos/favicon-16x16.png">
    <link rel="manifest" href="/static/images/logos/site.webmanifest">

    <link rel="stylesheet" href="/static/css/bulma.min.css">
    <link rel="stylesheet" href="/static/css/main.css">
    <link rel="stylesheet" href="/static/css/fontawesome/all.min.css">
    <link rel="stylesheet" href="/static/splide/css/splide.min.css">
  </head>
  <body>

  <!-- Menu -->
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <img class="logo-menu" src="/static/images/logos/logo_bp.png" width="50" height="50">
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item <?= str_contains($_SERVER['REQUEST_URI'], 'qui-sommes-nous') ? 'is-menu-active' : '' ?>" href="/qui-sommes-nous/">
          Qui sommes-nous ?
        </a>

        <a class="navbar-item <?= str_contains($_SERVER['REQUEST_URI'], 'actualites') ? 'is-menu-active' : '' ?>" href="/actualites/">
          Actualités
        </a>

        <a class="navbar-item <?= str_contains($_SERVER['REQUEST_URI'], 'parrainages') ? 'is-menu-active' : '' ?>" href="/parrainages/">
          Parrainages
        </a>

        <a class="navbar-item <?= str_contains($_SERVER['REQUEST_URI'], 'ressources') ? 'is-menu-active' : '' ?>" href="/ressources/">
          Ressources
        </a>

        <a class="navbar-item <?= str_contains($_SERVER['REQUEST_URI'], 'nous-soutenir') ? 'is-menu-active' : '' ?>" href="/nous-soutenir/">
          Nous soutenir
        </a>
      </div>

      <div class="navbar-end">
        <hr class="is-visible-touch mb-3">
        <div class="navbar-item is-flex is-justify-content-center">
          <a href="https://www.facebook.com/collectifbancspublics" class="mr-2" title="FaceBook Bancs Publics" target="_blank" rel="noopener">
            <i class="fab fa-2x fa-facebook"></i>
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End menu -->

  <div class="content-wrapper">
    <?php if ($_SERVER['REQUEST_URI'] !== '/') : ?>
    <div class="container mt-5 article">
      <a href="/" class="button"><span class="is-size-5 mr-2 is-align-self-flex-end is-flex">&laquo;</span> Revenir à l'accueil</a>
    </div>
    <?php endif; ?>
