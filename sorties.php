<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="icon" href="images/cdm.ico" />
        <link rel="stylesheet" href="./css/style.css" />
        <title>Prono CDM 2018</title>
        <script src="js/jquery.js"></script>
        <script src="js/sorties.js" defer></script>
    </head>

    <body>
        <div id="container">
            <?php include('entete.php')?>

			<h1>Proposition sorties pour voir les matchs</h1>
      <section id="proposerS">
        <form action="addSorties.php" method="post">
            <label for="sortie">Votre proposition : </label> <textarea name="sortie" rows="10" cols="50"></textarea>
          <input type="submit" value="Envoyer" /> <br />
        </form>
      </section>
    </div>
  </body>
</html>
