<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio2.php" method="get">
Digite um numero:<input type="text" name="num" id="">
<input type="submit" value="enviar">


</form>
</body>
</html>


<?php

$num = $_GET['$N'];


for ($i = $num; $i >= 0; $i--) {
    echo "$i ";
}
?>