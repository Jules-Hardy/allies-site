<?php $title = 'Ticket ??'; ?>

<?php ob_start(); ?>

<div id="page">


  <h6>Ticket</h6>


  <h2> Faites votre choix</h2>
  <div class="box">
    <div class="elements">
      <h4> Ajouter un <br /> ticket</h4>

      <button onclick="window.location.href = '/support/nouveau';">Cliquez Ici</button>

    </div>

    <div class="elements">
      <h4> Accéder au <br /> ticket</h4>

      <button onclick="window.location.href = 'voir_ticket.html';">Cliquez Ici</button>

    </div>
  </div>


  <?php $content = ob_get_clean(); ?>

  <?php require(ROOT.'/app/view/layoutvitrine.php'); ?>