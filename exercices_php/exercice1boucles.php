<!-- Exercice 1
Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7... -->

<?php
function impair($num)
{
 if($num % 2 != 0)
 {
  return true;
 }
 return false;
}
 
for($i= 0; $i <= 150; $i++)
{
 if(impair($i))
 {
  echo $i;
  echo"<br/>";
 }
}
?>