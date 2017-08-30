<?php

require_once __DIR__ . '/vendor/autoload.php';

$response = array('success' => true, 'message' => 'NÃ£o foi possÃ­vel enviar a mensagem. Tente novamente mais tarde.');

$data = $_REQUEST;

if (! isset($data['name']) || empty($data['name'])) {

    $response = array(
        'success' => false,
        'message' => 'Digite seu nome'
    );

} elseif  (! isset($data['email']) || empty($data['email'])) {

    $response = array(
        'success' => false,
        'message' => 'Digite seu e-mail'
    );

} elseif (! filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $response = array(
        'success' => false,
        'message' => 'EndereÃ§o de e-mail invÃ¡lido'
    );

} elseif (! isset($data['phone']) || empty($data['phone'])) {

    $response = array(
        'success' => false,
        'message' => 'Digite seu telefone'
    );

} elseif (! isset($data['message']) || empty($data['message'])) {
    $response = array(
        'success' => false,
        'message' => 'Digite a mensagem'
    );
}

if (! $response['success']) {
    header('Location: /');
    exit;
}

$response['success'] = true;

$transport = Swift_SmtpTransport::newInstance('mail.targetteleinformatica.com.br', 25)
    ->setUsername('adm@targetteleinformatica.com.br')
    ->setPassword('Adm@Target2017');

$mailer = Swift_Mailer::newInstance($transport);

$body = '<b>Nome:</b> ' . $data['name'] . '<br>';
$body .= '<b>E-mail:</b> ' . $data['email'] . '<br>';
$body .= '<b>Telefone:</b> ' . $data['phone'] . '<br>';
$body .= '<b>Mensagem:</b> ' . $data['message'] . '<br>';

$message = Swift_Message::newInstance('Target - Contato Website')
    ->setFrom(array($data['email'] => $data['name']))
    ->setSender(array('adm@targetteleinformatica.com.br' => 'Target Website'))
    ->setTo(array('adriano@targetteleinformatica.com.br' => 'Adriano'))
    ->setBody($body,  'text/html');

try {
    $response['success'] = (bool) $mailer->send($message);
} catch (Exception $e) {
    $response['success'] = false;
}

header('Location: /?success=true');
exit;