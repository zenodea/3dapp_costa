<?php
function sanitizeInput($input)
{
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function preventXSS($data)
{
    if (is_array($data)) {
        return array_map('preventXSS', $data);
    }
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

function generateCSRFToken()
{
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function validateCSRFToken($token)
{
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

function rateLimitCheck($identifier, $maxAttempts = 5, $timeWindow = 300)
{
    $attempts = $_SESSION['rate_limit'][$identifier] ?? [];
    $now = time();
    
    $attempts = array_filter($attempts, function($timestamp) use ($now, $timeWindow) {
        return ($now - $timestamp) < $timeWindow;
    });
    
    if (count($attempts) >= $maxAttempts) {
        return false;
    }
    
    $attempts[] = $now;
    $_SESSION['rate_limit'][$identifier] = $attempts;
    return true;
}
?>