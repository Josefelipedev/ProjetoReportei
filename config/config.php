<?php  //127.0.0.1
define('HOST', 'main_users.mysql.dbaas.com.br');
define('USER', 'main_users');
define('PASS', 'Ze94750286@');
define('DB', 'main_users');

try{
    $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DB, USER, PASS);
    // Defina o modo de erro PDO para exceção
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Não foi possível conectar." . $e->getMessage());
}