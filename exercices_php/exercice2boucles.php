<!-- Exercice 2
Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers. -->

<?php
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 500)
{
    echo 'Je dois faire des sauvegardes régulières de mes fichiers.<br />';
    $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
}
?>