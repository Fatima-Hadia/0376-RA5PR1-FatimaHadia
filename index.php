<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tables</title>
</head>
</html>
<style>
    .fila-parell  { background-color: yellow; }
    .fila-senar { background-color: pink; }
</style>
</head>
<body>
<form action="index.php" method="post">
    <label>Introduce un número:</label>
    <input type="text" name="input">

    <button type="submit">Enviar</button>
</form>    
<?php
$numero = 7;
if ($numero < 1 || $numero > 12) {
    echo "error";
} else {
    echo "<table>";  
for ($i = 1; $i <= 10; $i++) {
    $resultat = $i * $numero;
    if ($i % 2 == 0) {
        $classe = "fila-parell";
    } else {
        $classe = "fila-senar";
    }
    echo "<tr class='$classe'>";
    echo "<td>$i x $numero</td>";
    echo "<td>= $resultat</td>";
    echo "</tr>";
}
    echo "</table>";
}
	
?>
<form action="index.php" method="post">
        <label>Introduce un número:</label>
        <input type="text" name="input">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>