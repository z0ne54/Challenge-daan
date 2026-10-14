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
<div class="margin">


</div>
<?php
require_once "footer.php";
?>