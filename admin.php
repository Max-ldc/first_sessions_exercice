<?php

session_start();
if (empty($_SESSION)) {
    header('Location: index.php');
}

require_once 'layout/header.php';
?>

<h1 style="background-color:bisque;display:inline" class="m-3 p-2">Oui oui c'est l'admin</h1>

<?php
require_once 'layout/footer.php';