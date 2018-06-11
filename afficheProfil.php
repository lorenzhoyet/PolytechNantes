<?php
  session_start();
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
  ?>
  <div id="affProfil" class="connexion">
    <h2>Bonjour <?php  echo $_SESSION['pseudo'];  ?> <br /></h2>

  <a href="deconnexion.php">Deconnexion</a>
</div>
  <?php
}
else {
  ?>
  <ul class="connexion">
  <li><a href="connexion.php">Connexion</a></li>
  <li><a href="inscription.php">Inscription</a></li>
  </ul>
  <?php
}
?>
