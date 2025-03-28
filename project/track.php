<?php
// track.php

header('Content-Type: application/json');

// Ontvang de JSON-data vanuit de request body
$data = json_decode(file_get_contents('php://input'), true);

// Pad naar het logbestand (in dezelfde map als track.php)
$logFile = __DIR__ . '/tracking.log';

if ($data) {
    // Maak een logregel met de huidige datum/tijd en de ontvangen data
    $log = date('Y-m-d H:i:s') . " " . json_encode($data) . PHP_EOL;
    // Schrijf de logregel naar tracking.log
    file_put_contents($logFile, $log, FILE_APPEND);
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'no data received']);
}
?>
