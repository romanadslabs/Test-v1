<?php
// Minimal mail sender for lead submissions

// Load config
$configFile = __DIR__ . '/config.php';
if (!file_exists($configFile)) {
    http_response_code(500);
    echo 'Config not found';
    exit;
}
require $configFile;

// Basic sanitization helper
function get_post($key) {
    return isset($_POST[$key]) ? trim((string)$_POST[$key]) : '';
}

$firstname   = get_post('firstname');
$lastname    = get_post('lastname');
$email       = get_post('email');
$phone       = get_post('fullphone');
$phoneCode   = get_post('phone-code');
$country     = get_post('country');
$ip          = get_post('ip');
$clickId     = get_post('click_id');
$description = get_post('description');

// Basic validation: phone is required (already validated on FE), at least one of name/email set
if ($phone === '' || strlen($phone) < 6) {
    http_response_code(400);
    echo 'Invalid phone';
    exit;
}

// Compose email
$to = $LEAD_RECIPIENT ?? '';
if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
    http_response_code(500);
    echo 'Recipient email not configured';
    exit;
}

$subject = 'New Lead Submission';
$body = "New lead received:\n\n"
    . "First name: $firstname\n"
    . "Last name: $lastname\n"
    . "Email: $email\n"
    . "Phone: $phone\n"
    . "Phone code: +$phoneCode\n"
    . "Country: $country\n"
    . "IP: $ip\n"
    . "Click ID: $clickId\n"
    . "Description: $description\n"
    . "Time: " . date('c') . "\n";

$headers = [];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $headers[] = 'Reply-To: ' . $email;
}
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

// Try to send; also log to file
$logDir = __DIR__ . '/logs';
if (!is_dir($logDir)) @mkdir($logDir, 0775, true);
$logFile = $logDir . '/leads.log';
@file_put_contents($logFile, "\n---\n" . $body, FILE_APPEND);

$sent = @mail($to, $subject, $body, implode("\r\n", $headers));

if ($sent) {
    header('Location: /success_files/style.css'); // Temporary success ping; replace with success page if needed
    exit;
}

http_response_code(500);
echo 'Failed to send';