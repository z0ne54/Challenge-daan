<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nieuwsbrief.css">
    <script src="js/script.js" defer></script>
    <title>LEVELUP Hardware</title>
</head>

<body>
    <header>
        <img class="img3" src="img/logo.png" alt="LEVELUP Hardware" />
        <button id="themeToggle">Light / Dark</button>
        <nav class="navsystem">
            <a href="index.php">Home</a>
            <a href="overons.php">Over ons</a>
            <a href="producten.php">Producten</a>
        </nav>
        <button class="nieuwsbrief-knop" type="button" id="open-newsletter">Nieuwsbrief inschrijven</button>
    </header>

    <dialog class="newsletter-dialog" id="newsletter-dialog" aria-labelledby="newsletter-title">
    <button class="dialog-close" type="button" id="close-newsletter" aria-label="Nieuwsbrief sluiten">&times;</button>
    <div class="newsletter-content">
        <p class="newsletter-eyebrow">LevelUp Hardware nieuws</p>
        <h2 id="newsletter-title">Blijf op de hoogte</h2>
        <p>Ontvang nieuws over nieuwe hardware, aanbiedingen en gamingsetups rechtstreeks in je inbox.</p>

        <form id="newsletter-form" action="bedankt.php" method="POST">
            <label for="newsletter-name">Naam</label>
            <input id="newsletter-name" name="name" type="text" autocomplete="name" placeholder="Jouw naam" required>

            <label for="newsletter-email">E-mailadres</label>
            <input id="newsletter-email" name="email" type="email" autocomplete="email" placeholder="jij@voorbeeld.nl"
                required>

            <button class="newsletter-submit" type="submit">Inschrijven</button>
            <p class="newsletter-status" id="newsletter-status" role="status" aria-live="polite"></p>
        </form>
    </div>
</dialog>