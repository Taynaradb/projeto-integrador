<?php 
$server = "localhost"; 
$dbname = "cadastro"; // nome do banco
$dbuser = "root"; // -u 
$dbpassword = ""; // -p
$conn = mysqli_connect($server, $dbuser, $dbpassword, $dbname);
if (!$conn){
    die("Conexão falhou: " . mysqli_connect_error());
}
?>