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
        </tbody>
      </table>
      <a href=""><button type="button" class="button-align-right button button--border">
                  Voir tout
                </button></a>
      <h2>Les derniers tickets fermés</h2>
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
            <td class="closed">Fermé</td>
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
              <a href=""><button type="button" class="button button--small success">
                  Répondre
                </button></a>
                <a href=""><button type="button" class="button button--small alert">
                  Supprimer
                </button></a>
                </td>
          </tr>
        </tfoot>
      </table>
      </content>

      <?php include 'includes/footer.php';?>
    </section>
  </body>
</html>
