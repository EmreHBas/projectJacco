<?php
// stats.php

// Pad naar je tracking.log (in dezelfde map als stats.php)
$logFile = __DIR__ . '/tracking.log';
$pageviews = 0;

// Controleer of de URL ?reset=true bevat
if (isset($_GET['reset']) && $_GET['reset'] === 'true') {
    // Leeg het logbestand
    file_put_contents($logFile, '');
    // Na het legen van het bestand redirecten we weer naar stats.php (zonder ?reset)
    header('Location: stats.php');
    exit;
}

// Lees het logbestand om de pageviews te tellen
if (file_exists($logFile)) {
    $lines = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
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
      .reset-button {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 15px;
        background-color: #ff6666;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
      }
      .reset-button:hover {
        background-color: #ff4444;
      }
    </style>
</head>
<body>
    <div class="stat-container">
        <h1>Website Statistieken</h1>
        <p>Totaal aantal pageviews: <strong><?php echo $pageviews; ?></strong></p>

        <!-- De “Reset” link: gaat naar ?reset=true -->
        <a class="reset-button" href="?reset=true">Reset statistieken</a>
    </div>
</body>
</html>
