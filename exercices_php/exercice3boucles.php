<!-- Exercice 3
Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12}, le résultat doit être le suivant : -->


<?php
$nbre = 12;
echo "Table de multiplication totale de {1,...,12} par {1,...,12}. <br>";
echo "<table>";
for ($y = 0; $y <= $nbre + 1; $y++) {
    echo "<tr style=\"border:double\">";
    for ($x = 0; $x <= $nbre + 1; $x++) {
        if (($y == 0) && ($x == 0)) {
            echo "<td style=\"border:double\"> </td>";
        } else if (($y == 0) && ($x > 0)) {
            echo "<td style=\"border:double\"><b>" . ($x - 1) . "</b></td>";
        } else if (($y > 0) && ($x == 0)) {
            echo "<td style=\"border:double\"><b>" . ($y - 1) . "</b></td>";
        } else {
            echo "<td style=\"border:double\">" . ($x - 1) * ($y - 1) . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table><hr>";
?>
