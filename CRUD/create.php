<?php
require('Producto.php');
require('conexion.php');

$nombre = $_GET['nombre'] ?? 'noname';
$codigodebarras = $_GET['codigodebarras'] ?? '0';
$precio = $_GET['precio'] ?? '0';

$pdoSt = $pdo->prepare('INSERT INTO Producto (nombre, codigodebarras, precio) VALUES (?, ?, ?)');


$pdoSt->bindParam(1, $nombre);
$pdoSt->bindParam(2, $codigodebarras);
$pdoSt->bindParam(3, $precio);


$pdoSt->execute();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
