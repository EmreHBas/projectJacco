<?php
// stats.php

$logFile = __DIR__ . '/tracking.log';
$pageviews = 0;

if (file_exists($logFile)) {
    // Lees het logbestand regel voor regel
    $lines = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Zoek de JSON-data in de regel
        $pos = strpos($line, '{');
        if ($pos !== false) {
            $json = substr($line, $pos);
            $data = json_decode($json, true);
            // Tel alleen als het type 'pageview' is
            if (isset($data['type']) && $data['type'] === 'pageview') {
                $pageviews++;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Website Statistieken</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 20px;
      }
      .stat-container {
        background: #f5f5f5;
        padding: 20px;
        border-radius: 5px;
        max-width: 400px;
      }
    </style>
</head>
<body>
    <div class="stat-container">
        <h1>Website Statistieken</h1>
        <p>Totaal aantal pageviews: <strong><?php echo $pageviews; ?></strong></p>
    </div>
</body>
</html>
