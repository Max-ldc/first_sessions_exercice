<?php

session_start();

require_once 'layout/header.php';
?>

<h1 class="m-3">
    Salut, 
    <?php if (empty($_SESSION)) { ?>
    bel(le) inconnu(e) !
    <?php } else {
    echo $_SESSION['user'] . " !";
    } ?>
</h1>

<?php

require_once 'layout/footer.php';