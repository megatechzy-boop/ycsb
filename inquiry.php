<?php
// Handles the home page inquiry form. TODO: switch to PHPMailer (SMTP) + MySQL storage with the admin panel.
require_once __DIR__ . '/includes/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /');
    exit;
}

// Return to the page the form was sent from (local paths only)
$path = $_POST['back'] ?? '/';
if (!preg_match('#^/(?!/)[a-z0-9/-]*$#', $path)) {
    $path = '/';
}
$back = $path . '?sent=%s#contact';

// Honeypot: bots fill hidden fields
if (!empty($_POST['website'])) {
    header('Location: ' . sprintf($back, '1'));
    exit;
}

$name = trim(strip_tags($_POST['name'] ?? ''));
$phone = preg_replace('/\D/', '', $_POST['phone'] ?? '');
$interest = in_array($_POST['interest'] ?? '', ['hall', 'hostel', 'library', 'history-library', 'guidance', 'vadhu-var', 'visit', 'other'], true) ? $_POST['interest'] : 'other';
$message = trim(strip_tags($_POST['message'] ?? ''));

if ($name === '' || mb_strlen($name) > 80 || strlen($phone) !== 10 || mb_strlen($message) > 1000) {
    header('Location: ' . sprintf($back, '0'));
    exit;
}

$body = "Name: $name\nPhone: $phone\nInterest: $interest\n\nMessage:\n$message\n";
$headers = "From: no-reply@" . ($_SERVER['HTTP_HOST'] ?? 'localhost') . "\r\nContent-Type: text/plain; charset=UTF-8";
$sent = mail(EMAIL, '=?UTF-8?B?' . base64_encode('नवीन चौकशी - ' . $name) . '?=', $body, $headers);

header('Location: ' . sprintf($back, $sent ? '1' : '0'));
exit;
