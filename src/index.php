<?php
require __DIR__ . '/partials/base.php';
$currentPage = 'home';
$pageTitle = 'Appareça Comunicação Estratégica';
$pageDescription = 'Estratégia, conteúdo e comunicação para fortalecer sua presença digital, construir autoridade e atrair novas oportunidades.';
include __DIR__ . '/partials/header.php';
?>
  <section class="hero" id="inicio">
    <div class="hero-inner">
      <div class="hero-visual">
        <img src="<?= $baseUrl ?>/images/content-creation.jpg" alt="Produção de conteúdo Appareça" class="hero-visual-bg" loading="lazy">
        <div class="hero-visual-overlay"></div>
        <div class="hero-visual-content">
          <div class="hero-brand-top reveal">
            <img src="<?= $baseUrl ?>/images/logo-appareca.jpg" alt="">
            @apparecacomunicacao
          </div>
          <div class="hero-quote-big reveal r2">
            estratégia<br>conteúdo<br>comunicação
            <small>Marketing Digital • Comunicação Estratégica • Conteúdo</small>
          </div>
        </div>
      </div>
      <div class="hero-content">
        <div class="hero-tag reveal">Appareça Comunicação Estratégica</div>
        <h1 class="reveal r1">Sua marca não precisa apenas <span>aparecer</span>. Ela precisa ser <span>percebida</span>.</h1>
        <p class="reveal r2">A Appareça combina estratégia, conteúdo e comunicação para ajudar empresas a fortalecerem sua presença digital, construírem autoridade e atraírem novas oportunidades.</p>
        <div class="hero-ctas reveal r3">
          <a href="<?= $baseUrl ?>/contato" class="btn btn-pink">Quero falar com a Appareça</a>
          <a href="<?= $baseUrl ?>/solucoes" class="btn btn-outline">Conheça nossos serviços</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section-white pain-section" id="problemas" style="background:var(--gray-50)">
    <div class="container">
      <div class="section-header" style="text-align:center">
        <div class="section-tag reveal">Problemas que resolvemos</div>
        <h2 class="reveal">Sua empresa está presente no digital. Mas está sendo percebida?</h2>
        <p class="section-sub reveal r1" style="margin:1rem auto 0">Reconhece alguma dessas situações?</p>
      </div>
      <div class="pain-list">
        <div class="pain-item reveal r1">
          <div class="pain-icon">?</div>
          <p>Você publica, mas não sabe se o conteúdo está contribuindo para o negócio?</p>
        </div>
        <div class="pain-item reveal r2">
          <div class="pain-icon">?</div>
          <p>Sua marca tem qualidade, mas sua comunicação não transmite esse valor?</p>
        </div>
        <div class="pain-item reveal r3">
          <div class="pain-icon">?</div>
          <p>Você sabe que precisa estar nas redes, mas não tem tempo ou estratégia para fazer isso sozinho?</p>
        </div>
        <div class="pain-item reveal r4">
          <div class="pain-icon">?</div>
          <p>Investe em marketing, mas sente que as ações estão desconectadas?</p>
        </div>
      </div>
      <div class="pain-close reveal r2">
        <h3>É aqui que entra a Appareça.</h3>
        <p>Desenvolvemos estratégias de comunicação alinhadas aos objetivos da sua empresa, da definição do posicionamento à produção e distribuição do conteúdo.</p>
        <a href="<?= $baseUrl ?>/contato" class="btn btn-pink">Quero melhorar minha comunicação</a>
      </div>
    </div>
  </section>

  <section class="section-white" id="solucoes">
    <div class="container">
      <div class="section-header">
        <div class="section-tag reveal">Soluções</div>
        <h2 class="reveal">O que a Appareça faz</h2>
        <p class="section-sub reveal r1">Estratégia, conteúdo e redes sociais no centro. Produção audiovisual, design, performance e comunicação como soluções complementares.</p>
      </div>
      <div class="solutions-grid">
        <div class="solution-group featured reveal r1">
          <div class="solution-num">01</div>
          <h3>Estratégia & Planejamento</h3>
          <ul>
            <li>Diagnóstico de comunicação</li>
            <li>Estratégia digital</li>
            <li>Planejamento de conteúdo</li>
            <li>Calendário editorial</li>
            <li>Posicionamento</li>
          </ul>
        </div>
        <div class="solution-group featured reveal r2">
          <div class="solution-num">02</div>
          <h3>Redes Sociais</h3>
          <ul>
            <li>Gestão de Instagram</li>
            <li>TikTok</li>
            <li>LinkedIn</li>
            <li>Criação de conteúdo</li>
            <li>Copywriting</li>
            <li>Publicação e acompanhamento</li>
          </ul>
        </div>
        <div class="solution-group reveal r3">
          <div class="solution-num">03</div>
          <h3>Produção Audiovisual</h3>
          <ul>
            <li>Captação de fotos</li>
            <li>Captação de vídeos</li>
            <li>Reels</li>
            <li>Edição</li>
            <li>Cobertura de eventos</li>
          </ul>
        </div>
        <div class="solution-group reveal r1">
          <div class="solution-num">04</div>
          <h3>Design & Identidade</h3>
          <ul>
            <li>Identidade visual</li>
            <li>Apresentações</li>
            <li>Banners</li>
            <li>Materiais institucionais</li>
          </ul>
        </div>
        <div class="solution-group reveal r2">
          <div class="solution-num">05</div>
          <h3>Performance</h3>
          <ul>
            <li>Tráfego pago</li>
            <li>Meta Ads</li>
            <li>Google Ads</li>
            <li>Campanhas para geração de leads</li>
          </ul>
        </div>
        <div class="solution-group reveal r3">
          <div class="solution-num">06</div>
          <h3>Comunicação</h3>
          <ul>
            <li>Assessoria de imprensa</li>
            <li>Comunicação institucional</li>
            <li>Campanhas</li>
            <li>Relacionamento com veículos</li>
          </ul>
        </div>
      </div>
      <div class="section-cta reveal r2">
        <a href="<?= $baseUrl ?>/solucoes" class="btn btn-pink">Conhecer todas as soluções</a>
      </div>
    </div>
  </section>

  <section class="section-white" id="porque" style="border-top:1px solid var(--gray-100)">
    <div class="container">
      <div class="section-header" style="max-width:640px">
        <div class="section-tag reveal">Por que a Appareça?</div>
        <h2 class="reveal">Estratégia antes da execução.</h2>
        <p class="section-sub reveal r1">Você não recebe simplesmente um calendário de posts. Antes de produzir, entendemos seu negócio, público, mercado, objetivos e posicionamento, e transformamos essas informações em uma estratégia de comunicação.</p>
      </div>
      <div class="why-grid">
        <div class="why-card reveal r1">
          <div class="why-num">01</div>
          <h3>Pensamento estratégico</h3>
          <p>O conteúdo precisa ter propósito, não apenas preencher calendário.</p>
        </div>
        <div class="why-card reveal r2">
          <div class="why-num">02</div>
          <h3>Comunicação integrada</h3>
          <p>Estratégia, conteúdo, design, audiovisual e mídia podem trabalhar juntos.</p>
        </div>
        <div class="why-card reveal r3">
          <div class="why-num">03</div>
          <h3>Atendimento próximo</h3>
          <p>Contato direto com quem está envolvido na estratégia e execução do projeto.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-gradient" id="como-trabalhamos">
    <img src="<?= $baseUrl ?>/images/marketing-dash.jpg" alt="" class="section-gradient-bg" loading="lazy">
    <div class="section-gradient-overlay"></div>
    <div class="container section-gradient-content">
      <div style="text-align:center;max-width:600px;margin:0 auto 3.5rem">
        <div class="section-tag reveal">Como trabalhamos</div>
        <h2 class="reveal">Do diagnóstico à execução</h2>
        <p class="section-sub reveal r1" style="margin:1rem auto 0">Um processo claro, direto e orientado a resultados.</p>
      </div>
      <div class="steps-grid">
        <div class="step-card reveal r1">
          <div class="step-num">01</div>
          <h4>Conversa inicial</h4>
          <p>Entendemos o negócio, objetivos e principais desafios.</p>
        </div>
        <div class="step-card reveal r2">
          <div class="step-num">02</div>
          <h4>Diagnóstico</h4>
          <p>Analisamos a comunicação e identificamos oportunidades.</p>
        </div>
        <div class="step-card reveal r3">
          <div class="step-num">03</div>
          <h4>Estratégia</h4>
          <p>Definimos caminhos, prioridades e ações.</p>
        </div>
        <div class="step-card reveal r4">
          <div class="step-num">04</div>
          <h4>Execução</h4>
          <p>Produzimos e colocamos a estratégia em prática.</p>
        </div>
        <div class="step-card reveal r5">
          <div class="step-num">05</div>
          <h4>Acompanhamento</h4>
          <p>Analisamos o desempenho e ajustamos o que for necessário.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-white" style="padding:0 1.5rem 5rem">
    <div class="container">
      <div class="stats-bar reveal">
        <div><div class="stat-num">5+</div><div class="stat-label">anos de experiência</div></div>
        <div><div class="stat-num">20+</div><div class="stat-label">marcas atendidas</div></div>
        <div><div class="stat-num">20+</div><div class="stat-label">projetos desenvolvidos</div></div>
        <div><div class="stat-num">10+</div><div class="stat-label">segmentos de mercado</div></div>
      </div>
    </div>
  </section>

  <section class="section-blue">
    <img src="<?= $baseUrl ?>/images/conversation.jpg" alt="" class="section-blue-bg" loading="lazy" style="object-position:center 40%">
    <div class="section-blue-overlay"></div>
    <div class="container section-blue-content">
      <div class="reveal">
        <div class="section-tag">Captação de leads</div>
        <h2>Pronto para profissionalizar a comunicação da sua marca?</h2>
        <p>Conte um pouco sobre sua empresa e seus objetivos. A equipe da Appareça entrará em contato para entender se podemos ajudar.</p>
        <a href="<?= $baseUrl ?>/contato" class="btn btn-white">Quero conversar com a Appareça</a>
      </div>
    </div>
  </section>
<?php include __DIR__ . '/partials/footer.php'; ?>
