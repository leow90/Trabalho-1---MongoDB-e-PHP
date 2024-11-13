<?php
require 'vendor/autoload.php'; // Carrega o autoloader do Composer

// Conexão com o MongoDB (substitua pela sua string de conexão)
$uri = "mongodb+srv://<username>:<password>@cluster0.mongodb.net/myFirstDatabase?retryWrites=true&w=majority";
$client = new MongoDB\Client($uri);
$db = $client->clinca_veterinaria; // O banco de dados
?>
