<html>
<?php 
  $navPageName = 'Tickets Support';
  include '../../includes/head.php';
  include '../../includes/nav.php';?>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "website";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id FROM ticket";
$result = mysqli_query($conn, $sql);
$author=mysql_query($conn, "SELECT firstname, lastname FROM user WHERE userid = '$row["id_author']'")
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

<body>
  <section>
    <content>
      <h1>Tickets Support</h1>
      <h2>Tous les tickets</h2>
      <table>
        <thead>
          <tr>
            <th scope="col">Titre du ticket</th>
            <th scope="col">Etat</th>
            <th scope="col">Auteur</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Je désire être mis en relation avec un admin</th>
            <td class="open">Ouvert</td>
            <td>Jules HARDY</td>
            <td>
              <a href=""><button type="button" class="button button--small success">
                  Répondre
                </button></a>
              <a href=""><button type="button" class="button button--small alert">
                  Supprimer
                </button></a>
            </td>
          </tr>
          <tr>
            <th scope="row">Je désire être mis en relation avec un admin</th>
            <td class="answered">Répondu</td>
            <td>Jules HARDY</td>
            <td>
              <a href=""><button type="button" class="button button--small success">
                  Répondre
                </button></a>
              <a href=""><button type="button" class="button button--small alert">
                  Supprimer
                </button></a>
            </td>
          </tr>

          <tr>
            <th scope="row">Je désire être mis en relation avec un admin</th>
            <td class="answered">Répondu</td>
            <td>Jules HARDY</td>
            <td>
              <a href=""><button type="button" class="button button--small success">
                  Répondre
                </button></a>
              <a href=""><button type="button" class="button button--small alert">
                  Supprimer
                </button></a>
            </td>
          </tr>
          <tr>
            <th scope="row">Je désire être mis en relation avec un admin</th>
            <td class="closed">Fermé</td>
            <td>Jules HARDY</td>
            <td>
              <a href=""><button type="button" class="button button--small info">
                  Voir
                </button></a>
            </td>
          </tr>
          <tr>
            <th scope="row">Je désire être mis en relation avec un admin</th>
            <td class="open">Ouvert</td>
            <td>Jules HARDY</td>
            <td>
              <a href=""><button type="button" class="button button--small success">
                  Répondre
                </button></a>
              <a href=""><button type="button" class="button button--small alert">
                  Supprimer
                </button></a>
            </td>
          </tr>
          <tr>
            <th scope="row">Je désire être mis en relation avec un admin</th>
            <td class="answered">Répondu</td>
            <td>Jules HARDY</td>
            <td>
              <a href=""><button type="button" class="button button--small success">
                  Répondre
                </button></a>
              <a href=""><button type="button" class="button button--small alert">
                  Supprimer
                </button></a>
            </td>
          </tr>

          <tr>
            <th scope="row">Je désire être mis en relation avec un admin</th>
            <td class="answered">Répondu</td>
            <td>Jules HARDY</td>
            <td>
              <a href=""><button type="button" class="button button--small success">
                  Répondre
                </button></a>
              <a href=""><button type="button" class="button button--small alert">
                  Supprimer
                </button></a>
            </td>
          </tr>
          <tr>
            <th scope="row">Je désire être mis en relation avec un admin</th>
            <td class="closed">Fermé</td>
            <td>Jules HARDY</td>
            <td>
              <a href=""><button type="button" class="button button--small info">
                  Voir
                </button></a>
            </td>
          </tr>
        </tbody>
      </table>


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

    <?php include '../../includes/footer.php';?>
  </section>
</body>

</html>