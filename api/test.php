<?php
header('Content-Type: application/json');

// Test 1: PHP works
echo json_encode([
    'php_ok' => true,
    'php_version' => phpversion(),
    'test' => 'If you see this, PHP is working!'
]);
?>
