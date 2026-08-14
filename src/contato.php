<?php
require __DIR__ . '/partials/base.php';
$currentPage = 'contato';
$pageTitle = 'Contato - Appareça Comunicação Estratégica';
$pageDescription = 'Fale com a Appareça, conte sobre sua empresa e receba uma proposta de comunicação estratégica.';
include __DIR__ . '/handlers/contato.php';
include __DIR__ . '/partials/header.php';
?>
  <section class="page-hero">
    <img src="<?= $baseUrl ?>/images/conversation.jpg" alt="" class="page-hero-bg" loading="lazy" style="object-position:center 40%">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-content">
      <div class="section-tag reveal">Contato</div>
      <h1 class="reveal">Pronto para profissionalizar a <span>comunicação da sua marca</span>?</h1>
      <p class="section-sub reveal r1">Conte um pouco sobre sua empresa e seus objetivos. A equipe da Appareça entrará em contato para entender se podemos ajudar.</p>
    </div>
  </section>

  <section class="section-white">
    <div class="container">
      <div class="contact-layout">
        <div class="contact-info reveal">
          <div class="section-tag">Fale com a Appareça</div>
          <h2>Uma conversa pode mudar a direção da sua comunicação</h2>
          <p>Prefere falar direto? Use um dos canais abaixo.</p>
          <div class="contact-methods">
            <div class="contact-method">
              <strong>WhatsApp</strong>
              <a href="https://wa.me/5512991687097" target="_blank" rel="noopener">(12) 99168-7097</a>
            </div>
            <div class="contact-method">
              <strong>Email</strong>
              <a href="mailto:apparecacomunicacao@gmail.com">apparecacomunicacao@gmail.com</a>
            </div>
            <div class="contact-method">
              <strong>Instagram</strong>
              <a href="https://www.instagram.com/apparecacomunicacao/" target="_blank" rel="noopener">@apparecacomunicacao</a>
            </div>
          </div>
          <div class="contact-extra reveal">
            <div class="contact-extra-line">Marketing Digital • Comunicação Estratégica • Conteúdo</div>
          </div>
        </div>
        <div class="contact-card reveal r1">
          <?php if ($contactError): ?>
            <div class="form-error" role="alert">
              Preencha os campos obrigatórios (nome, WhatsApp e mensagem) e tente novamente.
            </div>
          <?php endif; ?>
          <form action="<?= $baseUrl ?>/contato" method="POST" class="contact-form">
              <div class="form-row">
                <div class="form-field">
                  <label for="nome">Nome *</label>
                  <input type="text" id="nome" name="nome" placeholder="Seu nome" required autocomplete="name" value="<?= htmlspecialchars($_POST['nome'] ?? '') ?>">
                </div>
                <div class="form-field">
                  <label for="empresa">Empresa</label>
                  <input type="text" id="empresa" name="empresa" placeholder="Nome da empresa" autocomplete="organization" value="<?= htmlspecialchars($_POST['empresa'] ?? '') ?>">
                </div>
              </div>
              <div class="form-row">
                <div class="form-field">
                  <label for="cargo">Cargo</label>
                  <input type="text" id="cargo" name="cargo" placeholder="Seu cargo" value="<?= htmlspecialchars($_POST['cargo'] ?? '') ?>">
                </div>
                <div class="form-field">
                  <label for="whatsapp">WhatsApp *</label>
                  <input type="tel" id="whatsapp" name="whatsapp" placeholder="(00) 00000-0000" required value="<?= htmlspecialchars($_POST['whatsapp'] ?? '') ?>">
                </div>
              </div>
              <div class="form-field">
                <label for="contato_online">Instagram / site da empresa</label>
                <input type="text" id="contato_online" name="contato_online" placeholder="@empresa ou site.com.br" value="<?= htmlspecialchars($_POST['contato_online'] ?? '') ?>">
              </div>
              <div class="form-field">
                <label for="servico">Qual serviço você procura? *</label>
                <select id="servico" name="servico" required>
                  <option value="" disabled <?= ($_POST['servico'] ?? '') === '' ? 'selected' : '' ?>>Selecione uma opção</option>
                  <?php foreach ($servicoOpcoes as $opcao): ?>
                    <option value="<?= htmlspecialchars($opcao) ?>" <?= ($_POST['servico'] ?? '') === $opcao ? 'selected' : '' ?>><?= htmlspecialchars($opcao) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-field">
                <label for="objetivo">Qual é o principal objetivo? *</label>
                <select id="objetivo" name="objetivo" required>
                  <option value="" disabled <?= ($_POST['objetivo'] ?? '') === '' ? 'selected' : '' ?>>Selecione uma opção</option>
                  <?php foreach ($objetivoOpcoes as $opcao): ?>
                    <option value="<?= htmlspecialchars($opcao) ?>" <?= ($_POST['objetivo'] ?? '') === $opcao ? 'selected' : '' ?>><?= htmlspecialchars($opcao) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-field">
                <label for="mensagem">Conte brevemente o que sua empresa precisa *</label>
                <textarea id="mensagem" name="mensagem" placeholder="Fale sobre o momento da sua empresa, desafios e objetivos" required rows="5"><?= htmlspecialchars($_POST['mensagem'] ?? '') ?></textarea>
              </div>
              <button type="submit" class="btn btn-pink">Quero conversar com a Appareça</button>
              <p class="form-note">Ao enviar, o WhatsApp abrirá com seus dados preenchidos para você confirmar a mensagem. Consulte nossa <a href="#politica">Política de Privacidade</a>.</p>
            </form>
        </div>
      </div>
    </div>
  </section>

  <section id="politica" class="section-white" style="background:var(--gray-50);border-top:1px solid var(--gray-100)">
    <div class="container" style="max-width:760px">
      <div class="section-header">
        <div class="section-tag reveal">Política de Privacidade</div>
        <h2 class="reveal">Como tratamos seus dados</h2>
        <p class="section-sub reveal r1">Transparência é parte da nossa comunicação.</p>
      </div>
      <div class="policy-text reveal r2">
        <p>As informações enviadas pelo formulário (nome, empresa, cargo, contatos e mensagem) são utilizadas exclusivamente para retornar seu contato, entender as necessidades da sua empresa e preparar uma proposta de comunicação estratégica. Seus dados não são vendidos, compartilhados ou utilizados para outras finalidades.</p>
        <p>Você pode solicitar a exclusão ou atualização dos seus dados a qualquer momento pelo e-mail <a href="mailto:apparecacomunicacao@gmail.com">apparecacomunicacao@gmail.com</a>.</p>
      </div>
    </div>
  </section>
<?php include __DIR__ . '/partials/footer.php'; ?>
