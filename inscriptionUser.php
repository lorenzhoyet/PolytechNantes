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
              if(isset($_POST['pseudo']) AND isset($_POST['mdp']) AND isset($_POST['mdpConf']) AND isset($_POST['email']))
              {
                // Hachage du mot de passe
                $pseudo = $_POST['pseudo'];
                $mdp = $_POST['mdp'];
                $mdpConf = $_POST['mdpConf'];
                $email = $_POST['email'];
                if($mdp == $mdpConf)
                {
                  $pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
                  // Insertion
                  $req = $bdd->prepare('INSERT INTO Utilisateurs(pseudo, mdp, email, date_inscription) VALUES(:pseudo, :mdp, :email, CURDATE())');
                  $req->execute(array(
                      'pseudo' => $pseudo,
                      'mdp' => $pass_hache,
                      'email' => $email));

                  echo "L'utilisateur s'est bien inscrit.";
                }
                else
                {

                    echo "Les mots de passes ne correspondent pas.";

                  //header('Location: inscription.php');
                }
              }
              else
              {
                echo "Un champ n'est pas renseigné.";
              }
              ?>
            </section>
        </div>
    </body>

</html>
