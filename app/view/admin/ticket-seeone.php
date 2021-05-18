<?php $title = 'Tickets support - Répondre au ticket'; ?>

<?php ob_start(); ?>

<section>

  <content>
    <h1>Détails du ticket</h1>

    <div class="messages-container">
      <div class="ticket-info">
        <h2>Ticket #45687 : J'ai un problème je suis nul</h2>
        <ul>
          <li>Auteur : Jules HARDY</li>
          <li>Date : 12/02/2020</li>
          <li>Status : Ouvert</li>
          <li><a class="closed" href="">Fermer le ticket</a></li>
        </ul>
      </div>

      <div class="message message--right">
        <div class="message-info">
          <ul>
            <li>Auteur : Admin</li>
            <li>le 12/02/2020</li>
          </ul>
        </div>
        <div class="message-content">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A officiis odit praesentium quaerat? Totam est
            quo sint exercitationem, libero architecto suscipit. Rem minus cumque eveniet id aliquid commodi inventore
            incidunt!</p>
        </div>
      </div>

      <div class="message message--left">
        <div class="message-info">
          <ul>
            <li>Auteur : Admin</li>
            <li>le 12/02/2020</li>
          </ul>
        </div>
        <div class="message-content">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A officiis odit praesentium quaerat? Totam est
            quo sint exercitationem, libero architecto suscipit. Rem minus cumque eveniet id aliquid commodi inventore
            incidunt!</p>
        </div>
      </div>

      <div class="message message--right">
        <div class="message-info">
          <ul>
            <li>Auteur : Admin</li>
            <li>le 12/02/2020</li>
          </ul>
        </div>
        <div class="message-content">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A officiis odit praesentium quaerat? Totam est
            quo sint exercitationem, libero architecto suscipit. Rem minus cumque eveniet id aliquid commodi inventore
            incidunt!</p>
        </div>
      </div>

      <div class="reponse">
        <textarea type="text" class="contenu-message" placeholder="Votre réponse"></textarea>
        <a href=""><i class="material-icons">send</i></a>
      </div>

    </div>

  </content>

  <?php $content = ob_get_clean(); ?>
  <?php require(ROOT.'/app/view/layoutadmin.php'); ?>