<?php

session_start();

if (!empty($_POST) && isset($_POST['login']) && isset($_POST['password'])){
    require_once 'config/pdo.php';
    
    ['login' => $login, 'password' => $pass] = $_POST;
    
    // --- Requête préparée ---
    // Prépare la requête
    $stmt = $pdo->prepare("SELECT * FROM users WHERE login = :pseudo AND pass = :mdp");
    // Exécute la requête
    $stmt->execute([
        'pseudo' => $login,
        'mdp' => $pass
    ]);
    
    $user = $stmt->fetch();
    
    if ($user === false) {
        $connexionStatus = '<span class="text-danger m-3">Utilisateur ou mot de passe invalide</span>';
    } else {
        $connexionStatus = '<span class="text-success m-3">Authentification réussie</span>';
        $_SESSION['user'] = $user['login'];
        header("refresh:2;url=index.php");  // Renvoie à l'index au bout de 2 secondes
    }
}
require_once 'layout/header.php';
?>

<h1 class="m-3">Connexion</h1>
<form method="post" class="m-3">
    <input type="text" name="login" placeholder="Identifiant">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="submit" value="Connexion">
</form>
<?php 
    echo $connexionStatus ?? '';
?>

<?php

require_once 'layout/footer.php';