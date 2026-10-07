<?php
require_once "header.php";
?>


<h1>High-end Gaming Gear</h1>
<h2>In Breda</h2>
<div class="naast">
      <div class="beschrijving">
        <?php
		echo nl2br(file_get_contents('data/beschrijving.txt'));
		?>
        
    </div>
    <img class="placeholder-laptop" src="img/laptop.webp" alt="laptop">
</div>


<div class="text2">
    <img class="placeholder-storefront" src="img/storefront.png" alt="storefront">
<?php
    echo file_get_contents('data/list.txt');
    ?>
</div>
<a class="nieuwsbrief-knop" href="nieuwsbrief.php">
    Aanmelden nieuwsbrief
</a>
<section class="locatie">
    <div class="adres">
        <h2 class="paddingtop">Waar vind je ons?</h2>
        <p>
            LevelUp Hardware<br>
            Terheijdenseweg 350<br>
            4826 AA Breda
        </p>
    </div>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.2339398474164!2d4.777502598613233!3d51.606891071800256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c69f990d127d8b%3A0x1e825fb420ca913c!2sCurio%2C%20Terheijdenseweg%20350!5e0!3m2!1snl!2snl!4v1789550001607!5m2!1snl!2snl"
        referrerpolicy="strict-origin-when-cross-origin" width="600" height="450" style="border: 0;" allowfullscreen=""
        loading="lazy">
    </iframe>
</section>


<?php
require_once "footer.php";
?>