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
            <form action="inscriptionUser.php" method="post">
              <p>
                <label for="pseudo">Pseudo : </label> <input type="text" name="pseudo" id="pseudo" /><br />
                <label for="mdp">Mot de passe : </label> <input type="password" name="mdp" id="mdp" /><br />
                <label for="mdpConf">Confirmation du mot de passe : </label><input type="password" name="mdpConf" id="mdpConf" /><br />
                <label for="email">E-mail : </label><input type="text" name="email" id="email" /><br />

                <input type="submit" value="Envoyer" />
	            </p>
            </form>

            </section>
        </div>
    </body>

</html>
