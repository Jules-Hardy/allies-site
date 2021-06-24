<?php $title = 'Admin - Etat de la led'; ?>
<?php use \App\Utils\Roles; ?>
<?php ob_start(); ?>

<section>
  <content>
    <h1>Accueil</h1>
    <h2>Etat actuel de la led</h2>
    <small><a href="/data" style="color:grey;">Voir les données brutes</a></small>
    <div class="stat">

      <?php if($vars[1] == 2){
        ?>
      <a href="#">
        <div class="block-info success">
          <h3>Allumée</h3>
          <p>La led est allumée</p>
        </div>
      </a>
      <?php } ?>

      <?php  if($vars[1] == 1){
        ?>
      <a href="#">
        <div class="block-info alert">
          <h3>Eteinte</h3>
          <p>La led est éteinte</p>
        </div>
      </a>
      <?php } ?>

      <?php  if($vars[1] == 0){
        ?>
      <a href="#">
        <div class="block-info info">
          <h3>Erreur</h3>
          <p>Erreur</p>
        </div>
      </a>
      <?php } ?>
    </div>

    <div class="text-align-right">
      <a href="/admin/test" class="button success button--normal">Allumer la led</a>
      <a href="/admin/test" class="button alert button--normal">Eteindre la led</a>
    </div>
  </content>
  <?php $content = ob_get_clean(); ?>

  <?php require(ROOT.'/app/view/layoutadmin.php'); ?>