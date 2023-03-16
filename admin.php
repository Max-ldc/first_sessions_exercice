<?php

session_start();
if (empty($_SESSION)) {
    header('Location: index.php');
}

require_once 'layout/header.php';



require_once 'layout/footer.php';