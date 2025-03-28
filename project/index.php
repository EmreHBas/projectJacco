<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Sportslabel - De Ultieme Hockeywinkel</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- Header met klikbaar logo en navigatie -->
    <header>
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

    <!-- Foto tussen header en hero-sectie -->
    <div class="headphoto">
        <img src="assets/images/headphoto.jpeg" alt="Headphoto">
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welkom bij Sportslabel</h1>
            <p>De ultieme hockeywinkel voor spelers van alle niveaus. Ontdek onze collectie topmerken en deskundig advies!</p>
            <a href="products.php" class="btn">Bekijk onze collectie</a>
        </div>
    </section>

    <!-- Voordelen Section -->
    <section class="features">
        <h2>Waarom kiezen voor Sportslabel?</h2>
        <div class="feature-items">
            <div class="feature-item">
                <h3>Deskundig Advies</h3>
                <p>Advies op maat van voormalige professionals die weten wat nodig is op het veld.</p>
            </div>
            <div class="feature-item">
                <h3>Topmerken</h3>
                <p>Wij bieden alleen de beste merken voor optimale prestaties en kwaliteit.</p>
            </div>
            <div class="feature-item">
                <h3>Hockey Community</h3>
                <p>Word onderdeel van een hechte community die samen successen viert.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Sportslabel. Alle rechten voorbehouden.</p>
    </footer>

    <script src="assets/js/analytics.js"></script>
</body>
</html>
