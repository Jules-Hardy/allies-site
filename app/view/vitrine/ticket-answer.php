<?php $title = 'Ticket - Répondre'; ?>
<?php ob_start(); ?>

<div id="carte_FAQ">
  <div class="images">
    <img src="../ressources/images/Stylo.jpg" width="100%" height="200%" alt="photo de fond">

  </div>

  <div id="q_r">
    <!-- essai -->
    <h1 id="titre2"> Répondre au ticket #1</h1>
    <h2> Titre du ticket <span style="color:red"><small>Fermer le ticket</small></span></h2>
    <p class="question">
      <b>Administrateur</b> - le 12 mai 2021
      <br>
      <br>
      Contenu
    </p>
    <p class="reponse">

      <span class="test"><b>Vous</b></span><br>
      <br>
      Contenu
    </p>

  </div>
  <form action="" method="POST" id="fo">
    <div
      style="display: flex;width: 100%;height: auto;padding: 30px;background-color: white;border-top: solid 1px grey;">
      <textarea type="text" name="message"
        style="flex-grow: 10;order: 0;margin-right: 30px;padding: 15px;overflow: auto;border-radius: 6px;"
        placeholder="Votre réponse"></textarea>
      <button id="foC" class="btn-link"><i class="material-icons">send</i></button>
    </div>
  </form>

</div>
<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>