<?php
require_once __DIR__ . '/../form_security.php';

// Handler de formulário - Música
$config = [
    'site_name'      => 'Música',
    'recipient'      => 'contato@soarinho.com',
    'subject_prefix' => '[Música]',
    'fields'         => ['name', 'email', 'subject', 'message'],
    'required'       => ['name', 'email', 'message'],
    'email_field'    => 'email',
    'phone_field'    => null,
    'name_field'     => 'name',
    'subject_field'  => 'subject',
];

$result  = form_security_process($config);
$status  = $result['success'] ? 'ok' : 'error';
$message = urlencode($result['message']);

$redirectUrl = 'index.html?status=' . $status . '&msg=' . $message;
header('Location: ' . $redirectUrl);
exit;

