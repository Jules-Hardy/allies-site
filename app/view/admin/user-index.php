<?php $title = 'Utilisateurs'; ?>

<?php ob_start(); ?>



<h1>Gérer les membres</h1>
<h2>Tous les utilisateurs</h2>
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
        foreach($vars as $user){
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