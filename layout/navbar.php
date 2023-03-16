<?php 

?>

<nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Liens navbar en fonction de la connexion ou non -->
                <?php if (!empty($_SESSION)) { ?>
                <li class="nav-item">
                    <a href="admin.php" class="nav-link">Administration</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">Déconnexion</a>
                </li>
                <?php } else { ?>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Connexion</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>