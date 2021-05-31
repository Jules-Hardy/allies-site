<?php $title = 'Utilisateurs'; ?>

<?php ob_start(); ?>


<section>

  <content>
    <form action="/admin/user/search" METHOD="POST">

    <h1>Gérer les membres</h1>
    <h2>Tous les utilisateurs</h2>
    <fieldset>
      <legend>Rechercher un membre avec plusieurs critères</legend>
      <label>
        Nom ou prénom
        <input type="text" name="name">
      </label>
      <label>
        Rôle
        <input type="text" name="role">
      </label>
      <label style="margin-right:20px">
        Email
        <input type="text" name="email">
      </label>
      <button id="foC" class="btn-link"><i class="material-icons" style="color:black;">send</i></button>
    </fieldset>
    </form>
    <table>
      <thead>
        <tr>
          <th scope="col">Prénom Nom</th>
          <th scope="col">Rôle</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach($vars[1] as $user){
        ?>
        <tr>
          <th scope="row"><?= $user['lastname']?> <?= $user['firstname']?></th>
          <td><?= $user['role']?></td>
          <td><?= $user['email']?></td>
          <td>
            <a href="/admin/user/edit/<?= $user['id']?>"><button type="button" class="button button--small info">
                Voir le membre
              </button>
          </td>
        </tr>
        <?php } ?>
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



  <?php $content = ob_get_clean(); ?>
  <?php require(ROOT.'/app/view/layoutadmin.php'); ?>