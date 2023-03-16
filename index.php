<?php

session_start();

require_once 'layout/header.php';
?>

<h1 class="m-3">
    <?php if (empty($_SESSION)) { ?>
    Salut, bel(le) inconnu(e) !</h1>
    <div class="m-3">
        <p class="fs-5">Si tu es admin, tu devrais te connecter pour profiter de ce merveilleux site !<br/>
        Sinon, tu ne sais pas ce que tu rates...</p>
        <a href="login.php"><input type="submit" value="Se connecter" class="btn btn-info"></a>
    </div>
    <?php } else {
    echo "Salut " . $_SESSION['user'] . " !";
    ?>
    </h1>
    <div class="m-3">
        <p class="fs-5">Tu as la chance d'être administrateur de ce super site. <br/>
        Que veux-tu faire ? Attention, tu as énormément de possibilités...</p>
        <a href="admin.php"><input type="submit" value="Accéder à l'admin" class="btn btn-info"></a>
        <a href="logout.php"><input type="submit" value="Se déconnecter" class="btn btn-info"></a>
    </div>

    <?php } ?>

<?php

require_once 'layout/footer.php';