<?php

// chargement de mes paramètres de configuration
$dbConfig = parse_ini_file('db.ini');

[
    'DB_HOST' => $host,
    'DB_PORT' => $port,
    'DB_NAME' => $dbName,
    'DB_CHARSET' => $dbCharset,
    'DB_USER' => $user,
    'DB_PASSWORD' => $password
] = $dbConfig;

$dsn = "mysql:host=$host;port=$port;dbname=$dbName;charset=$dbCharset";

// Options d'erreurs : on change le mode d'erreur de l'instance PDO. 
// ERRMODE_EXCEPTION = retourne une exception à chaque erreur
// ATTR_DEFAULT_FETCH_MODE => FETCH_ASSOC = la methode fetch renverra un tableau associatif sans préciser de paramètre
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die('Une erreur est survenue : ' . $e->getCode() . ' - ' . $e->getMessage());
}

// $statement = $pdo->query("SELECT * FROM products");

//fetchAll retourne un tableau de tous les éléments
// var_dump($statement->fetchAll(PDO::FETCH_ASSOC));

//fetch retourne un tableau associatif contenant la ligne suivante
// var_dump($statement->fetch(PDO::FETCH_ASSOC));

// Tant qu'il y a des lignes on reste dans le while et on echo le nom du produit. Quand il n'y a plus de ligne, fetch renvoie false, donc on sort de la boucle while
// while ($row = $statement->fetch()) {
//     echo $row['name'] . "<br/>";
// }