<?php 
dump($vars);
die;
  $logged = false;
  $type = gettype($vars[0]);
  if($type == "array"){
    $logged = sizeof($vars[0]) > 0;
  }else{
    $logged = strlen($vars[0]) > 0;
  }
?>
<div id="bloc_page">
  <header>
    <div id="titre_principal">
      <div id="logo_header">
        <img src="https://i.imgur.com/6CFLqM7.png/">
      </div>
      <!-- <h1> Infinite Measures </h1>-->
    </div>

    <nav>
      <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="/faq">FAQ</a></li>
        <li><a href="/apropos">À propos</a></li>
        <li><a href="/contact">Contact</a></li>
        <?php 
        if($logged){
        ?>
        <li><a href="/support">Support</a></li>
        <li><a href="/mon-profil">Mon Profil</a></li>
        <li><a href="/deconnexion">Deconnexion</a></li>
        <?php 
        }else {
        ?>
        <li><a href="/connexion">Connexion</a></li>
        <?php 
        }
        ?>
      </ul>
    </nav>
  </header>
</div>