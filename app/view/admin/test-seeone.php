<?php $title = 'Test - Voir un test'; ?>

<?php ob_start(); ?>
<content>
  <h1>Gérer les tests</h1>
  <h2>#1 : Test de Jules <span class="role alert">le 12/02/2021</span></h2>

  <div class="container-sensor">
    <h3>Capteur : Température</h3>
    <p>Heure : 15h32</p>
    <p>Valeur : 18°C</p>
  </div>

  <div class="container-sensor">
    <h3>Capteur : Rythme cardique</h3>
    <p>Heure : 15h34</p>
    <p>Valeur : 128 bpm</p>
  </div>

  <div class="container-sensor">
    <h3>Capteur : Sudation</h3>
    <p>Heure : 15h36</p>
    <p>Valeur : NaN</p>
  </div>

</content>

<?php $content = ob_get_clean(); ?>
<?php require(ROOT.'/app/view/layoutadmin.php'); ?>