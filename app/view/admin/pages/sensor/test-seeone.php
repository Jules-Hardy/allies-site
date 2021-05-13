<html>
<?php 
  $navPageName = 'Gérer les capteurs';
  include '../../includes/head.php';
  include '../../includes/nav.php';?>

<body>
  <section>
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

    <?php include '../../includes/footer.php';?>
  </section>
</body>

</html>