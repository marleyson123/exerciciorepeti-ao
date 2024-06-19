<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio3.php" method="">
        <input type="text" name="num" id="">
        <input type="submit" value="Enviar">


    </form>
    
</body>
</html>





<?php

$num = $_GET['num'];

for ($i = 0; $i < $num; $i++) {
    $impar = 2 * $i + 1;
    echo $impar ;
}
