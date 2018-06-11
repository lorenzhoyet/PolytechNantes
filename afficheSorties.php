<?php

try
{
$bdd = new PDO('mysql:host=pronosticCDM;dbname=Pronostic;charset=utf8', 'root', '');
}
catch(Exception $e)
{
       die('Erreur : '.$e->getMessage());
}

$req = $bdd->query('SELECT auteur, proposition, dateSortie FROM propositionSorties');



while ($donnees = $req->fetch())
{
  echo '<section class="proposition">';
 echo '<h3><span class="auteurSortie">' . $donnees['auteur'] . '</span> a proposé une sortie ('. $donnees['dateSortie'] .')</h3><p>' . $donnees['proposition'] . ' </p>';
 echo '</section>';
}


$req->closeCursor();

?>
