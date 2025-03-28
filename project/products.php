<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Producten - Sportslabel</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <header>
    <div class="header-container">
      <!-- Klikbaar logo dat naar index.php verwijst -->
      <div class="logo">
        <a href="index.php">
          <img src="assets/images/logo.png" alt="Sportslabel Logo">
        </a>
      </div>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">Over ons</a></li>
          <li><a href="products.php">Producten</a></li>
          <li><a href="contact.php">Contacten</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <h1>Onze Producten</h1>

    <?php
      // Lees het JSON-bestand in
      $jsonData = file_get_contents('data/products.json');
      $data = json_decode($jsonData, true);

      if($data) {
        // Sectie 1: Hockeysticks (boven)
        if(isset($data['hockey_sticks']) && is_array($data['hockey_sticks'])) {
          echo '<section class="product-section">';
          echo '<h2>Hockeysticks</h2>';
          echo '<div class="product-container">';
          foreach($data['hockey_sticks'] as $product) {
            echo '<div class="product-item">';
            echo '<img src="' . htmlspecialchars($product['image']) . '" alt="' . htmlspecialchars($product['name']) . '">';
            echo '<h3>' . htmlspecialchars($product['name']) . '</h3>';
            echo '<p>Prijs: €' . htmlspecialchars($product['price']) . '</p>';
            echo '</div>';
          }
          echo '</div>';
          echo '</section>';
        }

        // Sectie 2: Tech-producten (onder)
        if(isset($data['tech_products']) && is_array($data['tech_products'])) {
          echo '<section class="product-section">';
          echo '<h2>Tech Producten</h2>';
          echo '<div class="product-container">';
          foreach($data['tech_products'] as $product) {
            echo '<div class="product-item">';
            echo '<img src="' . htmlspecialchars($product['image']) . '" alt="' . htmlspecialchars($product['name']) . '">';
            echo '<h3>' . htmlspecialchars($product['name']) . '</h3>';
            echo '<p>Prijs: €' . htmlspecialchars($product['price']) . '</p>';
            echo '</div>';
          }
          echo '</div>';
          echo '</section>';
        }
      } else {
        echo '<p>Geen producten gevonden.</p>';
      }
    ?>

  </main>

  <script src="assets/js/analytics.js"></script>
</body>
</html>
