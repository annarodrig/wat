<?php
$servername = "localhost"; 
$username = "root"; 
$password = "usbw"; 
$dbname = "mydb"; 

// Cria conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
//echo "Conexão bem sucedida";
?>
