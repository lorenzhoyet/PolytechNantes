<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="icon" href="images/cdm.ico" />
        <link rel="stylesheet" href="./css/style.css" />
        <title>Prono CDM 2018</title>
        <script src="js/jquery.js"></script>
        <script src="js/proposer.js" defer></script>
    </head>

    <body>
        <div id="container">
            <?php include('entete.php')?>

			<h1>Phase de poules</h1>
			<section class="matchDay">
				<h2>Jeudi 14 Juin</h2>

				<article class="match">
          <table>
  					<tbody>
  						<td class="group">Groupe A <br/> Moscou   </td>
  						<td class="equipe1"> Russie </td>
  						<td class="drapeau1"><img src="images/drapeaux/russie.jpg" class="drapeau"/></td>
  						<td class="score"> 0-0 </td>
  						<td class="drapeau2"><img src="images/drapeaux/arabie.png" class="drapeau"/></td>
  						<td class="equipe2"> Arabie Saoudite </td>
  						<td class="diffusion">17h sur TF1 et BeIN </td>
  					</tbody>
    			</table>
          <form action="addPronostic.php" method="post" class="pronoMatch">
            <p>
              <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
            <input type="submit" value="Envoyer" /> <br />
</p>
          </form>
        </article>
			</section>

			<section class="matchDay">
				<h2>Vendredi 15 Juin</h2>
				<article class="match">
            <table>
					<tbody>
						<td class="group">Groupe A <br/> Iekaterinbourg</td>
						<td class="equipe1">Egypte</td>
						<td class="drapeau1"><img src="images/drapeaux/egypte.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/uruguay.png" class="drapeau"/></td>
						<td class="equipe2">Uruguay</td>
						<td class="diffusion">14h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>

      </article>

				<article class="match">

          <table>
					<tbody>
						<td class="group">Groupe B <br/> Saint-Pétersbourg</td>
						<td class="equipe1">Maroc</td>
						<td class="drapeau1"><img src="images/drapeaux/maroc.jpg" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/iran.png" class="drapeau"/></td>
						<td class="equipe2">Iran</td>
						<td class="diffusion">17h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe B <br/> Sotchi</td>
						<td class="equipe1">Portugal</td>
						<td class="drapeau1"><img src="images/drapeaux/portugal.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/espagne.png" class="drapeau"/></td>
						<td class="equipe2">Espagne</td>
						<td class="diffusion">20h sur TF1 et BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>
			</section>

			<section class="matchDay">
				<h2>Samedi 16 Juin</h2>
				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe C <br/> Kazan</td>
						<td class="equipe1">France</td>
						<td class="drapeau1"><img src="images/drapeaux/france.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/australie.png" class="drapeau"/></td>
						<td class="equipe2">Australie</td>
						<td class="diffusion">12h sur TF1 et BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe D <br/> Moscou</td>
						<td class="equipe1">Argentine</td>
						<td class="drapeau1"><img src="images/drapeaux/argentine.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/islande.png" class="drapeau"/></td>
						<td class="equipe2">Islande</td>
						<td class="diffusion">15h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe C <br/> Saransk</td>
						<td class="equipe1">Pérou</td>
						<td class="drapeau1"><img src="images/drapeaux/perou.jpg" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/danemark.png" class="drapeau"/></td>
						<td class="equipe2">Danemark</td>
						<td class="diffusion">18h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe D <br/> Kaliningrad</td>
						<td class="equipe1">Croatie</td>
						<td class="drapeau1"><img src="images/drapeaux/croatie.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/nigeria.png" class="drapeau"/></td>
						<td class="equipe2">Nigeria</td>
						<td class="diffusion">21h sur TF1 et BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>
			</section>

			<section class="matchDay">
				<h2>Dimanche 17 Juin</h2>
				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe E <br/> Samara</td>
						<td class="equipe1">Costa Rica</td>
						<td class="drapeau1"><img src="images/drapeaux/costaRica.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/serbie.png" class="drapeau"/></td>
						<td class="equipe2">Serbie</td>
						<td class="diffusion">14h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
<table>
					<tbody>
						<td class="group">Groupe F <br/> Kaliningrad</td>
						<td class="equipe1">Allemagne</td>
						<td class="drapeau1"><img src="images/drapeaux/allemagne.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/mexique.png" class="drapeau"/></td>
						<td class="equipe2">Mexique</td>
						<td class="diffusion">17h sur TF1 et BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe E <br/> Rostov-sur-le-Don</td>
						<td class="equipe1">Brésil</td>
						<td class="drapeau1"><img src="images/drapeaux/bresil.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/suisse.png" class="drapeau"/></td>
						<td class="equipe2">Suisse</td>
						<td class="diffusion">20h sur TF1 et BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>
			</section>

			<section class="matchDay">
				<h2>Lundi 18 Juin</h2>
				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe F <br/> Nijni Novgorod</td>
						<td class="equipe1">Suède</td>
						<td class="drapeau1"><img src="images/drapeaux/suede.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/coree.png" class="drapeau"/></td>
						<td class="equipe2">Corée du Sud</td>
						<td class="diffusion">14h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe G <br/> Sotchi</td>
						<td class="equipe1">Belgique</td>
						<td class="drapeau1"><img src="images/drapeaux/belgique.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/panama.png" class="drapeau"/></td>
						<td class="equipe2">Panama</td>
						<td class="diffusion">17h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe G <br/> Volgograd</td>
						<td class="equipe1">Tunisie</td>
						<td class="drapeau1"><img src="images/drapeaux/tunisie.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/angleterre.png" class="drapeau"/></td>
						<td class="equipe2">Angleterre</td>
						<td class="diffusion">20h sur TF1 et BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>
			</section>

			<section class="matchDay">
				<h2>Mardi 19 Juin</h2>
				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe H <br/> Saransk</td>
						<td class="equipe1">Colombie</td>
						<td class="drapeau1"><img src="images/drapeaux/colombie.jpg" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/japon.png" class="drapeau"/></td>
						<td class="equipe2">Japon</td>
						<td class="diffusion">14h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe H <br/> Moscou</td>
						<td class="equipe1">Pologne</td>
						<td class="drapeau1"><img src="images/drapeaux/pologne.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/senegal.png" class="drapeau"/></td>
						<td class="equipe2">Sénégal</td>
						<td class="diffusion">17h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe A <br/> Saint-Pétersbourg</td>
						<td class="equipe1">Russie</td>
						<td class="drapeau1"><img src="images/drapeaux/russie.jpg" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/egypte.png" class="drapeau"/></td>
						<td class="equipe2">Egypte</td>
						<td class="diffusion">20h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>
			</section>

			<section class="matchDay">
				<h2>Mercredi 20 Juin</h2>
				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe B <br/> Moscou</td>
						<td class="equipe1">Portugal</td>
						<td class="drapeau1"><img src="images/drapeaux/portugal.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/maroc.jpg" class="drapeau"/></td>
						<td class="equipe2">Maroc</td>
						<td class="diffusion">14h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe A <br/> Rostov-sur-le-Don</td>
						<td class="equipe1">Uruguay</td>
						<td class="drapeau1"><img src="images/drapeaux/uruguay.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/arabie.png" class="drapeau"/></td>
						<td class="equipe2">Arabie Saoudite</td>
						<td class="diffusion">17h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe B <br/> Kazan</td>
						<td class="equipe1">Iran</td>
						<td class="drapeau1"><img src="images/drapeaux/iran.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/espagne.png" class="drapeau"/></td>
						<td class="equipe2">Espagne</td>
						<td class="diffusion">20h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>
			</section>

			<section class="matchDay">
				<h2>Jeudi 21 Juin</h2>
				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe C <br/> Samara</td>
						<td class="equipe1">Danemark</td>
						<td class="drapeau1"><img src="images/drapeaux/danemark.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/australie.png" class="drapeau"/></td>
						<td class="equipe2">Australie</td>
						<td class="diffusion">14h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
        </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe C <br/> Iekaterinbourg</td>
						<td class="equipe1">France</td>
						<td class="drapeau1"><img src="images/drapeaux/france.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/perou.jpg" class="drapeau"/></td>
						<td class="equipe2">Pérou</td>
						<td class="diffusion">17h sur TF1 et BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe D <br/> Nijni Novgorod</td>
						<td class="equipe1">Argentine</td>
						<td class="drapeau1"><img src="images/drapeaux/argentine.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/croatie.png" class="drapeau"/></td>
						<td class="equipe2">Croatie</td>
						<td class="diffusion">20h sur TF1 et BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>
			</section>

			<section class="matchDay">
				<h2>Vendredi 22 Juin</h2>
				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe E <br/> Saint-Pétersbourg</td>
						<td class="equipe1">Brésil</td>
						<td class="drapeau1"><img src="images/drapeaux/bresil.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/costaRica.png" class="drapeau"/></td>
						<td class="equipe2">Costa Rica</td>
						<td class="diffusion">14h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe D <br/> Volgograd</td>
						<td class="equipe1">Nigeria</td>
						<td class="drapeau1"><img src="images/drapeaux/nigeria.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/islande.png" class="drapeau"/></td>
						<td class="equipe2">Islande</td>
						<td class="diffusion">17h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe E <br/> Kaliningrad</td>
						<td class="equipe1">Serbie</td>
						<td class="drapeau1"><img src="images/drapeaux/serbie.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/Suisse.png" class="drapeau"/></td>
						<td class="equipe2">Suisse</td>
						<td class="diffusion">20h sur BeIN</td>
					</tbody>
				</table>
                <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
<form>
      </article>
			</section>

			<section class="matchDay">
				<h2>Samedi 23 Juin</h2>
				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe G <br/> Moscou</td>
						<td class="equipe1">Belgique</td>
						<td class="drapeau1"><img src="images/drapeaux/belgique.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/tunisie.png" class="drapeau"/></td>
						<td class="equipe2">Tunisie</td>
						<td class="diffusion">14h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe F <br/> Rostov-sur-le-Don</td>
						<td class="equipe1">Corée du Sud</td>
						<td class="drapeau1"><img src="images/drapeaux/coree.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/mexique.png" class="drapeau"/></td>
						<td class="equipe2">Mexique</td>
						<td class="diffusion">17h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe F <br/> Sotchi</td>
						<td class="equipe1">Allemagne</td>
						<td class="drapeau1"><img src="images/drapeaux/allemagne.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/suede.png" class="drapeau"/></td>
						<td class="equipe2">Suède</td>
						<td class="diffusion">20h sur TF1 et BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>
			</section>

			<section class="matchDay">
				<h2>Dimanche 24 Juin</h2>
				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe G <br/> Nijni Novgorod</td>
						<td class="equipe1">Angleterre</td>
						<td class="drapeau1"><img src="images/drapeaux/angleterre.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/panama.png" class="drapeau"/></td>
						<td class="equipe2">Panama</td>
						<td class="diffusion">14h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe H <br/> Iekaterinbourg</td>
						<td class="equipe1">Japon</td>
						<td class="drapeau1"><img src="images/drapeaux/japon.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/senegal.png" class="drapeau"/></td>
						<td class="equipe2">Sénégal</td>
						<td class="diffusion">17h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe H <br/> Kazan</td>
						<td class="equipe1">Pologne</td>
						<td class="drapeau1"><img src="images/drapeaux/pologne.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/colombie.jpg" class="drapeau"/></td>
						<td class="equipe2">Colombie</td>
						<td class="diffusion">20h sur TF1 et BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>
			</section>

			<section class="matchDay">
				<h2>Lundi 25 Juin</h2>
				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe A <br/> Samara</td>
						<td class="equipe1">Uruguay</td>
						<td class="drapeau1"><img src="images/drapeaux/uruguay.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/russie.jpg" class="drapeau"/></td>
						<td class="equipe2">Russie</td>
						<td class="diffusion">16h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe A <br/> Volgograd</td>
						<td class="equipe1">Arabie Saoudite</td>
						<td class="drapeau1"><img src="images/drapeaux/arabie.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/egypte.png" class="drapeau"/></td>
						<td class="equipe2">Egypte</td>
						<td class="diffusion">16h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe B <br/> Saransk</td>
						<td class="equipe1">Iran</td>
						<td class="drapeau1"><img src="images/drapeaux/iran.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/portugal.png" class="drapeau"/></td>
						<td class="equipe2">Portugal</td>
						<td class="diffusion">20h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe B <br/> Kaliningrad</td>
						<td class="equipe1">Espagne</td>
						<td class="drapeau1"><img src="images/drapeaux/espagne.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/maroc.jpg" class="drapeau"/></td>
						<td class="equipe2">Maroc</td>
						<td class="diffusion">20h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>
			</section>

			<section class="matchDay">
				<h2>Mardi 26 Juin</h2>
				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe C <br/> Moscou</td>
						<td class="equipe1">Danemark</td>
						<td class="drapeau1"><img src="images/drapeaux/danemark.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/france.png" class="drapeau"/></td>
						<td class="equipe2">France</td>
						<td class="diffusion">16h sur TF1 et BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe C <br/> Sotchi</td>
						<td class="equipe1">Australie</td>
						<td class="drapeau1"><img src="images/drapeaux/australie.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/perou.jpg" class="drapeau"/></td>
						<td class="equipe2">Pérou</td>
						<td class="diffusion">16h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe D <br/> Rostov-sur-le-Don</td>
						<td class="equipe1">Islande</td>
						<td class="drapeau1"><img src="images/drapeaux/islande.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/croatie.png" class="drapeau"/></td>
						<td class="equipe2">Croatie</td>
						<td class="diffusion">20h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe D <br/> Saint-Pétersbourg</td>
						<td class="equipe1">Nigeria</td>
						<td class="drapeau1"><img src="images/drapeaux/nigeria.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/argentine.png" class="drapeau"/></td>
						<td class="equipe2">Argentine</td>
						<td class="diffusion">20h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>
			</section>

			<section class="matchDay">
				<h2>Mercredi 27 Juin</h2>
				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe E <br/> Kazan</td>
						<td class="equipe1">Corée du Sud</td>
						<td class="drapeau1"><img src="images/drapeaux/coree.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/allemagne.png" class="drapeau"/></td>
						<td class="equipe2">Allemagne</td>
						<td class="diffusion">16h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe E <br/> Iekaterinbourg</td>
						<td class="equipe1">Mexique</td>
						<td class="drapeau1"><img src="images/drapeaux/mexique.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/suede.png" class="drapeau"/></td>
						<td class="equipe2">Suède</td>
						<td class="diffusion">16h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe F <br/> Moscou</td>
						<td class="equipe1">Serbie</td>
						<td class="drapeau1"><img src="images/drapeaux/serbie.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/bresil.png" class="drapeau"/></td>
						<td class="equipe2">Brésil</td>
						<td class="diffusion">20h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe F <br/> Nijni Novgorod</td>
						<td class="equipe1">Suisse</td>
						<td class="drapeau1"><img src="images/drapeaux/suisse.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/costaRica.png" class="drapeau"/></td>
						<td class="equipe2">Costa Rica</td>
						<td class="diffusion">20h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>
			</section>

			<section class="matchDay">
				<h2>Jeudi 28 Juin</h2>
				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe H <br/> Volgograd</td>
						<td class="equipe1">Japon</td>
						<td class="drapeau1"><img src="images/drapeaux/japon.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/pologne.png" class="drapeau"/></td>
						<td class="equipe2">Pologne</td>
						<td class="diffusion">16h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe H <br/> Samara</td>
						<td class="equipe1">Sénégal</td>
						<td class="drapeau1"><img src="images/drapeaux/senegal.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/colombie.jpg" class="drapeau"/></td>
						<td class="equipe2">Colombie</td>
						<td class="diffusion">16h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe G <br/> Saransk</td>
						<td class="equipe1">Panama</td>
						<td class="drapeau1"><img src="images/drapeaux/panama.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/tunisie.png" class="drapeau"/></td>
						<td class="equipe2">Tunisie</td>
						<td class="diffusion">20h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>

				<article class="match">
          <table>
					<tbody>
						<td class="group">Groupe G <br/> Kaliningrad</td>
						<td class="equipe1">Angleterre</td>
						<td class="drapeau1"><img src="images/drapeaux/angleterre.png" class="drapeau"/></td>
						<td class="score">0-0</td>
						<td class="drapeau2"><img src="images/drapeaux/belgique.png" class="drapeau"/></td>
						<td class="equipe2">Belgique</td>
						<td class="diffusion">20h sur BeIN</td>
					</tbody>
				</table>
        <form action="addPronostic.php" method="post" class="pronoMatch">
<p>
  <label for="pronostic">Votre pronostic : </label> <input type="text" name="pronostic" class="myProno" />
<input type="submit" value="Envoyer" /> <br />
</p>
</form>
      </article>
			</section>


        </div>
    </body>
</html>
