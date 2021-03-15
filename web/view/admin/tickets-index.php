<html>
  <?php 
  $navPageName = 'Tickets Support';
  include 'includes/head.php';
  include 'includes/nav.php';?>

  <body>
    <section>
      <content>
        <h1>Tickets Support</h1>
        <h2>Les derniers tickets support</h2>
        <table>
        <thead>
          <tr>
            <th scope="col">Titre du ticket</th>
            <th scope="col">Etat</th>
            <th scope="col">Auteur</th>
            <th scope="col">Action</th>
          </tr>
        </thead>tcryvbuino
        <tbody>
          <tr>
            <th scope="row">Je désire être mis en relation avec un admin</th>
            <td>Ouvert</td>
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
            <th scope="row">The Clash</th>
            <td>1976</td>
            <td>6</td>
            <td>London Calling</td>
          </tr>

          <tr>
            <th scope="row">The Stranglers</th>
            <td>1974</td>
            <td>17</td>
            <td>No More Heroes</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th scope="row" colspan="2">Nombre total de tickets</th>
            <td colspan="2">77</td>
          </tr>
        </tfoot>
      </table>


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
            <td>Ouvert</td>
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
            <th scope="row">The Clash</th>
            <td>1976</td>
            <td>6</td>
            <td>London Calling</td>
          </tr>

          <tr>
            <th scope="row">The Stranglers</th>
            <td>1974</td>
            <td>17</td>
            <td>No More Heroes</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th scope="row" colspan="2">Nombre total de tickets</th>
            <td colspan="2">77</td>
          </tr>
        </tfoot>
      </table>
      </content>

      <?php include 'includes/footer.php';?>
    </section>
  </body>
</html>
