<?php
// session_start();

require_once 'vendor/autoload.php'; // SwiftMailer via Composer
if (isset($_POST['submit'])) {
    // CONFIG
    $to_email = "info@hghmobilelabs.com";
    $from_email = "info@hghmobilelabs.com";
    $from_name  = "Info";
    $subject    = "New Message From Website";
    $host       = "hghmobilelabs.com";
    $port       = 465;
    $username   = "info@hghmobilelabs.com";
    $password   = "RALENBRTTMd7";
    
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $log_file = __DIR__ . '/ip_log.txt';
    
    // Honeypot
    if (!empty($_POST['website'])) {
        die("Bot detected.");
    }
    
    // Basic token check
    if ($_POST['form_token'] !== md5('secure123')) {
        die("Invalid submission.");
    }
    
    // IP Rate Limit Check (5 hours)
    $blocked = false;
    if (file_exists($log_file)) {
        $log_data = json_decode(file_get_contents($log_file), true) ?? [];
        if (isset($log_data[$ip_address])) {
            $last_time = $log_data[$ip_address];
            if (time() - $last_time < 5 * 3600) {
                $blocked = true;
            }
        }
    }
    if ($blocked) {
        $_SESSION['form_status'] = ['error', 'You’ve already sent a message recently. Please try again later.'];
        header("Location: contact.php");
        exit;
    }
    
    // Sanitize input
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));
    
    if (!$name || !$email || !$message) {
        $_SESSION['form_status'] = ['error', 'Please fill out all required fields.'];
        header("Location: contact.php");
        exit;
    }
    
    // SwiftMailer setup
    $transport = (new Swift_SmtpTransport($host, $port, 'ssl'))
        ->setUsername($username)
        ->setPassword($password);
    
    $mailer = new Swift_Mailer($transport);
    
    $body = "
        <h2>New Message Received</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
    ";
    
    $message = (new Swift_Message($subject))
        ->setFrom([$from_email => $from_name])
        ->setTo([$to_email])
        ->setBody($body, 'text/html');
    
    try {
        $result = $mailer->send($message);
    
        // Log IP after successful submission
        $log_data[$ip_address] = time();
        file_put_contents($log_file, json_encode($log_data));
    
        $_SESSION['form_status'] = ['success', 'Your message was sent successfully!'];
    } catch (Exception $e) {
        $_SESSION['form_status'] = ['error', 'Message failed to send. Please try again later.'];
    }
    
    header("Location: contact.php");
    exit;
}