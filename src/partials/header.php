<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/style.css">
</head>
<body>
  <nav id="navbar">
    <div class="container">
      <a href="<?= $baseUrl ?>/" class="logo">
        <img src="<?= $baseUrl ?>/images/logo.png" alt="Appareça Comunicação Estratégica">
      </a>
      <div class="nav-links" id="navLinks">
        <a href="<?= $baseUrl ?>/" class="<?= $currentPage === 'home' ? 'active' : '' ?>">Início</a>
        <a href="<?= $baseUrl ?>/solucoes" class="<?= $currentPage === 'solucoes' ? 'active' : '' ?>">Soluções</a>
        <a href="<?= $baseUrl ?>/cases" class="<?= $currentPage === 'cases' ? 'active' : '' ?>">Cases</a>
        <a href="<?= $baseUrl ?>/appareca" class="<?= $currentPage === 'appareca' ? 'active' : '' ?>">A Appareça</a>
        <a href="<?= $baseUrl ?>/contato" class="btn btn-pink" style="padding:0.45rem 1.25rem">Fale com a Appareça</a>
      </div>
      <button class="menu-toggle" id="menuToggle" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>
