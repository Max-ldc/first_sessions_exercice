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
        $connexionStatus = '<span class="text-danger">Utilisateur ou mot de passe invalide</span>';
    } else {
        $connexionStatus = '<span class="text-success">Authentification réussie</span>';
        $_SESSION['user'] = $user['login'];
        header("refresh:3;url=index.php");  // Renvoie à l'index au bout de 3 secondes
    }
}
require_once 'layout/header.php';
?>

<h1>Connexion</h1>
<form method="post">
    <input type="text" name="login" placeholder="Identifiant">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="submit" value="Connexion">
</form>
<?php 
    $msg = $connexionStatus ?? '';
    echo $msg;
?>

<?php

require_once 'layout/footer.php';