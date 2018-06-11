<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./css/style.css" />
        <title>Prono CDM 2018</title>
    </head>

    <body>
        <div id="container">
            <?php include('entete.php')?>
            <section>
              <?php

              try
              {
              	$bdd = new PDO('mysql:host=pronosticCDM;dbname=Pronostic;charset=utf8', 'root', '');
              }
              catch(Exception $e)
              {
                      die('Erreur : '.$e->getMessage());
              }
              // Vérification de la validité des informations
              if(isset($_POST['sortie']))
              {

                $pseudo =  $_SESSION['pseudo'];
                $sortie = $_POST['sortie'];

                  // Insertion
                  $req = $bdd->prepare('INSERT INTO propositionSorties(auteur, proposition, dateSortie) VALUES(:pseudo, :sortie, CURDATE())');
                  $req->execute(array(
                      'pseudo' => $pseudo,
                      'sortie' => $sortie));

                  echo "La proposition est bien enregistrée.";
              }
              else
              {
                echo "Un champ n'est pas renseigné pour la proposition.";
              }
              ?>
            </section>
        </div>
    </body>

</html>
