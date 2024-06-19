<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercico1.php" method="get">
Digite um numero:<input type="text" name="num" id="">
<input type="submit" value="enviar">


</form>
</body>
</html>



<?php

$num = $_GET['num'];


for ($i = $num; $i >= 0; $i++) {
    echo "$i ";
}
?>
