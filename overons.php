<?php
require_once "header.php";
?>
<h1>Over Ons</h1>
<h2>Levelup Hardware</h2>
<div class="text2">
    <div class="beschrijving">
        <?php
    echo nl2br(file_get_contents('data/overons.txt'));
    ?>

</div>
    <img class="placeholder-daan" src="img/daan.jpg" alt="Daan">
</div>
<?php
require_once "footer.php";
?>