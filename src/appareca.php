<?php
require __DIR__ . '/partials/base.php';
$currentPage = 'appareca';
$pageTitle = 'A Appareça - Appareça Comunicação Estratégica';
$pageDescription = 'Conheça a Leticia e a Appareça Comunicação Estratégica: marketing digital, comunicação estratégica e conteúdo.';
include __DIR__ . '/partials/header.php';
?>
  <section class="page-hero">
    <img src="<?= $baseUrl ?>/images/office-bg.jpg" alt="" class="page-hero-bg" loading="lazy">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-content">
      <div class="section-tag reveal">A Appareça</div>
      <h1 class="reveal">Uma agência estratégica, <span>especializada e próxima</span></h1>
      <p class="section-sub reveal r1">Liderada diretamente por quem pensa e acompanha cada projeto.</p>
    </div>
  </section>

  <section class="section-white">
    <div class="container">
      <div class="founder-layout">
        <div class="founder-photo reveal">
          <img src="<?= $baseUrl ?>/images/leticia.jpg" alt="Leticia, fundadora da Appareça Comunicação Estratégica" loading="lazy">
        </div>
        <div class="founder-text">
          <div class="section-tag reveal">Quem está por trás</div>
          <h2 class="reveal">Prazer, eu sou a Leticia.</h2>
          <p class="reveal r1"><strong>Fundadora da Appareça Comunicação Estratégica.</strong> Atuo na área de marketing e comunicação, desenvolvendo estratégias para empresas que querem construir uma presença digital mais profissional, relevante e estratégica.</p>
          <p class="reveal r2">A Appareça nasceu depois de anos trabalhando com diferentes marcas e percebendo que muitas empresas não precisam simplesmente de alguém para postar nas redes. Precisam de direção.</p>
          <p class="reveal r3">A comunicação precisa responder: o que comunicar? Para quem? Por quê? Em qual canal? E como transformar comunicação em oportunidade?</p>
          <div class="founder-actions reveal r3">
            <a href="https://www.instagram.com/apparecacomunicacao/" class="btn btn-pink" target="_blank" rel="noopener">Seguir no Instagram</a>
          </div>
          <div class="support-line reveal r4">Marketing Digital • Comunicação Estratégica • Conteúdo</div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-white" style="padding-top:0">
    <div class="container">
      <div class="stats-bar reveal">
        <div><div class="stat-num">5+</div><div class="stat-label">anos de experiência</div></div>
        <div><div class="stat-num">20+</div><div class="stat-label">marcas atendidas</div></div>
        <div><div class="stat-num">20+</div><div class="stat-label">projetos desenvolvidos</div></div>
        <div><div class="stat-num">10+</div><div class="stat-label">segmentos de mercado</div></div>
      </div>
    </div>
  </section>

  <section class="section-gradient" id="para-quem">
    <img src="<?= $baseUrl ?>/images/social-bg.jpg" alt="" class="section-gradient-bg" loading="lazy">
    <div class="section-gradient-overlay"></div>
    <div class="container section-gradient-content">
      <div style="text-align:center;max-width:620px;margin:0 auto 3rem">
        <div class="section-tag reveal">Para quem é a Appareça?</div>
        <h2 class="reveal">Comunicação estratégica para empresas que querem crescer</h2>
        <p class="section-sub reveal r1" style="margin:1rem auto 0">A Appareça atende empresas, marcas e profissionais que entendem que uma presença digital estratégica é parte importante do crescimento do negócio.</p>
      </div>
      <div class="audience-grid">
        <div class="audience-card reveal r1">
          <h3>Empresas e negócios</h3>
          <p>Marcas que precisam fortalecer presença, autoridade e geração de oportunidades.</p>
        </div>
        <div class="audience-card reveal r2">
          <h3>Profissionais e marcas pessoais</h3>
          <p>Especialistas que querem transformar conhecimento em posicionamento.</p>
        </div>
        <div class="audience-card reveal r3">
          <h3>Comércios e varejo</h3>
          <p>Negócios que precisam gerar relacionamento e aumentar sua visibilidade.</p>
        </div>
        <div class="audience-card reveal r1">
          <h3>Serviços</h3>
          <p>Empresas que precisam comunicar diferenciais e conquistar novos clientes.</p>
        </div>
        <div class="audience-card reveal r2">
          <h3>Instituições</h3>
          <p>Escolas, escritórios, clínicas, empresas e organizações que precisam de comunicação profissional e estratégica.</p>
        </div>
      </div>
      <div class="segments reveal r3">
        <div class="segments-label">Experiência por segmentos</div>
        <div class="segments-tags">
          <span class="segment-tag">Alimentação & Varejo</span>
          <span class="segment-tag">Saúde & Bem-estar</span>
          <span class="segment-tag">Educação</span>
          <span class="segment-tag">Serviços profissionais</span>
          <span class="segment-tag">Arquitetura & Design</span>
          <span class="segment-tag">Consultoria & B2B</span>
        </div>
      </div>
    </div>
  </section>

  <section class="section-blue">
    <img src="<?= $baseUrl ?>/images/conversation.jpg" alt="" class="section-blue-bg" loading="lazy" style="object-position:center 40%">
    <div class="section-blue-overlay"></div>
    <div class="container section-blue-content">
      <div class="reveal">
        <div class="section-tag">Próximo passo</div>
        <h2>Sua marca precisa de direção?</h2>
        <p>Conte um pouco sobre sua empresa e seus objetivos. Vamos avaliar como a Appareça pode ajudar.</p>
        <a href="<?= $baseUrl ?>/contato" class="btn btn-white">Fale com a Appareça</a>
      </div>
    </div>
  </section>
<?php include __DIR__ . '/partials/footer.php'; ?>
