<?php
header('Content-Type: application/json');

// Charge le fichier de configuration
$configFile = 'config.json';

if (!file_exists($configFile)) {
    http_response_code(404);
    echo json_encode(['error' => 'Fichier config.json non trouvé']);
    exit;
}

$config = json_decode(file_get_contents($configFile), true);

if (!$config) {
    http_response_code(400);
    echo json_encode(['error' => 'Format JSON invalide']);
    exit;
}

// Retourne la configuration
echo json_encode($config);
?>
