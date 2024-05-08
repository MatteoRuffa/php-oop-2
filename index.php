<?php

include __DIR__ . '/View/header.php';
include __DIR__ . '/Models/Food.php';
?>
<main>

<?php

    var_dump(Food::fetchFood());
?>

</main>  
<?php

include __DIR__ . '/View/footer.php';
?>
    
