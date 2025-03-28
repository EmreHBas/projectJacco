<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Contacten - Mijn Website</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <header>
    <!-- Klikbaar logo dat naar de homepagina (index.php) verwijst -->
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
  </header>

  <main>
    <h1>Contacten</h1>
    <p>Neem contact met ons op via onderstaande gegevens:</p>
    <ul>
      <li>Email: sportslabel@klantenservice.eu</li>
      <li>Telefoon: 0180-239594</li>
      <li>Adres: Donk 7A, 2991 LE, Barendrecht</li>
    </ul>

    <h2>Contactformulier</h2>
    <form method="post" action="send_contact.php">
      <label for="name">Naam:</label>
      <input type="text" id="name" name="name" required>
      <br>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <br>
      
      <label for="message">Bericht:</label>
      <textarea id="message" name="message" required></textarea>
      <br>
      
      <button type="submit">Verstuur</button>
    </form>
  </main>

  <script src="assets/js/analytics.js"></script>
</body>
</html>
