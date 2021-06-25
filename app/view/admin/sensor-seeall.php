<?php $title = 'Tous les capteurs'; ?>

<?php ob_start(); ?>

<section>

  <content>
    <h1>Gérer les capteurs</h1>
    <h2>Tous les capteurs</h2>
    <table>
      <thead>
        <tr>
          <th scope="col">Capteur</th>
          <th scope="col">#id</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($vars[1] as $sensor) {
        ?>
          <tr>
            <th scope="row"><?php echo $sensor["name"]; ?></th>
            <td><?php echo "#",$sensor["id"]; ?></td>
            <td><button type="button" class="button button--small alert"data-id="<?php echo $sensor["id"]; ?>" onclick="deleteSensor(this)">
                Supprimer
              </button></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <button class="addSensor" id="addSensor">Ajouter un capteur</button>
    <div class="pagination">
      <ul id="pagination-flickr">
        <li class="previous-off">« Précédent</li>
        <li class="active">1</li>
        <li><a href="/?page=2">2</a></li>
        <li><a href="/?page=3">3</a></li>
        <li><a href="/?page=4">4</a></li>
        <li><a href="/?page=5">5</a></li>
        <li><a href="/?page=6">6</a></li>
        <li><a href="/?page=7">7</a></li>
        <li class="next"><a href="/?page=2">Suivant »</a></li>
      </ul>
    </div>

  </content>

  <script>
  document.getElementById("addSensor").addEventListener("click", () => {
    document.getElementById("addSensorForm").style.display = "";
  });

  function deleteSensor(button){
    var id = button.getAttribute("data-id");
    window.location.href = "/admin/sensor/delete/" + id;
  }
  </script>

  <div id="addSensorForm" style="display: none;">
    <div class="form">
      <h1>Ajouter un capteur</h1>
      <p>Renseignez le nom du capteur</p>
      <form action="" method="POST">
        <input type="text" name="sensorName" placeholder="Nom du capteur" required>
        <input type="submit" name="add" value="Ajouter !" class="addSensor">
      </form>
    </div>
  </div>

  <?php $content = ob_get_clean(); ?>
  <?php require(ROOT . '/app/view/layoutadmin.php'); ?>