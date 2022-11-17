<?php



$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'site';


$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

$mysql = new mysqli('localhost', 'root', '', 'site');
$mysql->set_charset('utf8');

if ($conexao->connect_errno || $mysql == FALSE) {
    echo "Erro";
}


    // if ($mysql == FALSE){
    //     echo "Erro na conexão";
    // }
