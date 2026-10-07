<?php
require_once "header.php";
?>
<main class="nieuwsbrief">
    <h1>Nieuwsbrief</h1>

    <p>
        Meld je aan voor de nieuwsbrief en blijf op de hoogte van
        nieuwe producten, acties en nieuws van LevelUp Hardware.
    </p>

    <form class="nieuwsbrief-formulier">
        <label for="naam">Naam</label>
        <input type="text" id="naam" name="naam" required>

        <label for="email">E-mailadres</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Aanmelden</button>
    </form>
</main>


<?php
require_once "footer.php";
?>