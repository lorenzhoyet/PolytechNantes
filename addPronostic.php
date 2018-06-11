<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./css/style.css" />
        <link rel="stylesheet" href="./css/styleInscription.css" />
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
              if(isset($_POST['pronostic']))
              {
                // Hachage du mot de passe
                $pseudo =  $_SESSION['pseudo'];
                $commentaire = $_POST['pronostic'];

                  // Insertion
                  $req = $bdd->prepare('INSERT INTO pronostics(utilisateur, commentaire) VALUES(:pseudo, :prono)');
                  $req->execute(array(
                      'pseudo' => $pseudo,
                      'prono' => $commentaire));

                  echo "Le pronostic est bien enregistré.";
              }
              else
              {
                echo "Un champ n'est pas renseigné pour le pronostic.";
              }
              ?>
            </section>
        </div>
    </body>

</html>
