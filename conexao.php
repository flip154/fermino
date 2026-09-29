<?php 

$host = "localhost";
$banco = "felipef315";
$usuario = "felipef315";
$senha = "315!@#";

// pdo =  
// PDO = PHP Data Objects - É uma ferramenta do PHP para conversar com banco de dados.

try{
    $pdo = new PDO ("mysql: host = $host; dbname=$banco; charset=utf8mb4", $usuario, $senha);
} 

catch (){

}
?>