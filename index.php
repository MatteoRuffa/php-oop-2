<?php
include __DIR__ . '/View/header.php';
include __DIR__ . '/Models/Food.php';
include __DIR__ . '/Models/Toys.php';
include __DIR__ . '/Models/Accessories.php';
include __DIR__ . '/View/Card.php';
$foods= Food::fetchFood();
$toys= Toys::fetchToys();
$accessories= Accessories::fetchAccessories();
?>
<main class="container">
    <section>
        <h2> Cibo </h2>
        <div class="row">
        <?php
        
        foreach ($foods as $food) {
            createCard($food);
        }
        ?>
    </section>
    <section>
        <h2> Giochi </h2>
        <div class="row">
        <?php
        
        foreach ($toys as $toy){
            createCard($toy);
        }
        ?>
    </section>
    <section>
        <h2> Accessori </h2>
        <div class="row">
        <?php
        
        foreach ($accessories as $accessory){
            createCard($accessory);
        }
        ?>
    </section>
    


</main>  
<?php

include __DIR__ . '/View/footer.php';
?>
    
