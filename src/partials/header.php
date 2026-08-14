<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
  <meta name="author" content="<?= htmlspecialchars($siteName) ?>">
  <meta name="robots" content="index, follow, max-image-preview:large">
  <meta name="theme-color" content="#e32a89">
  <link rel="canonical" href="<?= htmlspecialchars($pageUrl) ?>">

  <!-- Favicon -->
  <link rel="icon" href="<?= $baseUrl ?>/images/favicon.ico" sizes="48x48" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $baseUrl ?>/images/favicon-16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $baseUrl ?>/images/favicon-32.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= $baseUrl ?>/images/apple-touch-icon.png">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= htmlspecialchars($siteName) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($pageUrl) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($siteImage) ?>">
  <meta property="og:image:alt" content="Logo <?= htmlspecialchars($siteName) ?>">
  <meta property="og:locale" content="pt_BR">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription) ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($siteImage) ?>">

  <!-- Structured data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Appareça Comunicação Estratégica",
    "url": "<?= $siteUrl ?>/",
    "logo": "<?= $siteImage ?>",
    "description": "Agência estratégica de comunicação digital. Estratégia, conteúdo e comunicação para fortalecer sua presença digital.",
    "email": "apparecacomunicacao@gmail.com",
    "sameAs": [
      "https://www.instagram.com/apparecacomunicacao/"
    ],
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+55-12-99168-7097",
      "contactType": "customer service",
      "areaServed": "BR",
      "availableLanguage": "Portuguese"
    }
  }
  </script>

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
      <a href="<?= $baseUrl ?>/contato" class="btn btn-pink nav-cta-mobile">Fale conosco</a>
      <button class="menu-toggle" id="menuToggle" aria-label="Abrir menu" aria-controls="mobileMenu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>

  <div class="nav-backdrop" id="navBackdrop" aria-hidden="true"></div>

  <div class="mobile-menu" id="mobileMenu" aria-hidden="true">
    <div class="mobile-menu-top">
      <a href="<?= $baseUrl ?>/" class="logo">
        <img src="<?= $baseUrl ?>/images/logo.png" alt="Appareça Comunicação Estratégica">
      </a>
      <button class="mobile-close" data-menu-close aria-label="Fechar menu">
        <span></span><span></span>
      </button>
    </div>
    <nav class="mobile-links" aria-label="Menu principal">
      <a href="<?= $baseUrl ?>/" class="mobile-link <?= $currentPage === 'home' ? 'active' : '' ?>">
        <span class="mobile-link-index">01</span>
        <span class="mobile-link-label">Início</span>
        <svg class="mobile-link-arrow" viewBox="0 0 18 14" width="18" height="14" fill="none" aria-hidden="true"><path d="M1 7h15M11 1l6 6-6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="<?= $baseUrl ?>/solucoes" class="mobile-link <?= $currentPage === 'solucoes' ? 'active' : '' ?>">
        <span class="mobile-link-index">02</span>
        <span class="mobile-link-label">Soluções</span>
        <svg class="mobile-link-arrow" viewBox="0 0 18 14" width="18" height="14" fill="none" aria-hidden="true"><path d="M1 7h15M11 1l6 6-6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="<?= $baseUrl ?>/cases" class="mobile-link <?= $currentPage === 'cases' ? 'active' : '' ?>">
        <span class="mobile-link-index">03</span>
        <span class="mobile-link-label">Cases</span>
        <svg class="mobile-link-arrow" viewBox="0 0 18 14" width="18" height="14" fill="none" aria-hidden="true"><path d="M1 7h15M11 1l6 6-6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="<?= $baseUrl ?>/appareca" class="mobile-link <?= $currentPage === 'appareca' ? 'active' : '' ?>">
        <span class="mobile-link-index">04</span>
        <span class="mobile-link-label">A Appareça</span>
        <svg class="mobile-link-arrow" viewBox="0 0 18 14" width="18" height="14" fill="none" aria-hidden="true"><path d="M1 7h15M11 1l6 6-6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="<?= $baseUrl ?>/contato" class="mobile-link <?= $currentPage === 'contato' ? 'active' : '' ?>">
        <span class="mobile-link-index">05</span>
        <span class="mobile-link-label">Contato</span>
        <svg class="mobile-link-arrow" viewBox="0 0 18 14" width="18" height="14" fill="none" aria-hidden="true"><path d="M1 7h15M11 1l6 6-6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
    </nav>
    <div class="mobile-menu-foot">
      <a href="<?= $baseUrl ?>/contato" class="btn btn-pink mobile-cta">Fale com a Appareça</a>
      <div class="mobile-contact">
        <div class="mobile-contact-label">Entre em contato</div>
        <a href="mailto:apparecacomunicacao@gmail.com">apparecacomunicacao@gmail.com</a>
        <a href="https://www.instagram.com/apparecacomunicacao/" target="_blank" rel="noopener">@apparecacomunicacao</a>
      </div>
    </div>
  </div>
