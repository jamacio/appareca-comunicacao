<?php
$servicoOpcoes = [
  'Gestão de redes sociais',
  'Estratégia de conteúdo',
  'Produção audiovisual',
  'Tráfego pago',
  'Identidade visual/design',
  'Comunicação/assessoria',
  'Ainda não sei',
];

$objetivoOpcoes = [
  'Atrair mais clientes',
  'Fortalecer a marca',
  'Melhorar as redes sociais',
  'Aumentar vendas',
  'Construir autoridade',
  'Outro',
];

$contactError = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = trim($_POST['nome'] ?? '');
  $empresa = trim($_POST['empresa'] ?? '');
  $cargo = trim($_POST['cargo'] ?? '');
  $whatsapp = trim($_POST['whatsapp'] ?? '');
  $contato_online = trim($_POST['contato_online'] ?? '');
  $servico = $_POST['servico'] ?? '';
  $mensagem = trim($_POST['mensagem'] ?? '');
  $objetivo = $_POST['objetivo'] ?? '';

  $camposObrigatorios = [$nome, $whatsapp, $mensagem];
  $validos = !in_array('', $camposObrigatorios, true)
    && in_array($servico, $servicoOpcoes, true)
    && in_array($objetivo, $objetivoOpcoes, true);

  if ($validos) {
    $texto = "*Novo contato pelo site - Appareça*\n\n"
      . "*Nome:* $nome\n"
      . ($empresa !== '' ? "*Empresa:* $empresa\n" : '')
      . ($cargo !== '' ? "*Cargo:* $cargo\n" : '')
      . "*WhatsApp:* $whatsapp\n"
      . ($contato_online !== '' ? "*Instagram/Site:* $contato_online\n" : '')
      . "*Serviço procurado:* $servico\n"
      . "*Objetivo:* $objetivo\n\n"
      . "*O que a empresa precisa:*\n$mensagem\n";

    $whatsappUrl = 'https://wa.me/5512991687097?text=' . rawurlencode($texto);
    header('Location: ' . $whatsappUrl);
    exit;
  }

  $contactError = true;
}
