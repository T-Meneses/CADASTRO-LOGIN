<?php
$host = 'localhost';
$dbname = 'sistema';
$username = 'root';
$password = '';

//CODIGO DE COMUNICAÇÃO COM O BANCO DE DADOS

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_EXEPTION);    
}
catch(PDOExeption $e){
    die("Erro na conexao: " . $e->getMessage());
}
?>