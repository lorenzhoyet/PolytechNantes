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
            <form action="connexionUser.php" method="post">
              <p>
                <label for="pseudo">Pseudo : </label> <input type="text" name="pseudo" id="pseudo" /><br />
                <label for="mdp">Mot de passe : </label> <input type="password" name="mdp" id="mdp" /><br />
                <input type="submit" value="Envoyer" />
	            </p>
            </form>

            </section>
        </div>
    </body>

</html>
