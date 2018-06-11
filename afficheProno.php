<?php
if(isset($_POST['idMatch'])){

    $idMatch=$_POST['idMatch'];

try
{
$bdd = new PDO('mysql:host=pronosticCDM;dbname=Pronostic;charset=utf8', 'root', '');
}
catch(Exception $e)
{
       die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('SELECT utilisateur, commentaire FROM pronostics WHERE idMatch = :idMatch');
$req->execute(array('idMatch' => $idMatch));

echo '<ul>';
while ($donnees = $req->fetch())
{
 echo '<li>' . $donnees['utilisateur'] . ' à pronostiqué ' . $donnees['commentaire'] . ' </li>';
}
echo '</ul>';

$req->closeCursor();

}

?>
