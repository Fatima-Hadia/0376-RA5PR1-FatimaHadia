<!DOCTYPE html>
<html>
<body>
<table>
<?php
	$numero = 7;
    for ($i = 1; $i <= 10; $i++) {
        $resultat = $i * $numero;
        echo "<tr>";
        echo "  <td>$i x  $numero</td>";
        echo "  <td>= $resultat</td>";
        echo "</tr>";
    }
?>
</table>
</body>
</html>