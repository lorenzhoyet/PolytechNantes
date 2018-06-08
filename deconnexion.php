<?php
session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

// Suppression des cookies de connexion automatique
//setcookie('login', '');
//setcookie('pass_hache', '');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./css/style.css" />
        <link rel="stylesheet" href="./css/styleInscription.css" />
        <title>Prono CDM 2018</title>
    </head>

    <body>
        <div id="container">7
          <?php include('entete.php'); ?>
          <section>
          Vous êtes bien déconnecté.<br />
        </section>
        </div>
    </body>
</html>
