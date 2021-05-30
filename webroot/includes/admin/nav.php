<?php 

  $isGestionnaire = $vars[0]["role"] == 1;

?>
<nav>
  <a href="/"><img src="/ressources/images/logo.png" alt="logo" /></a>
  <div id="nav-info">
    <h2>Bonjour <?php echo $vars[0]["firstname"]; ?>,</h2>
    <ul>
      <li><b>Role</b> :  <?php echo($isGestionnaire ? "Gestionnaire": "Administrateur"); ?></li>
      <li><b>Date</b> :  <?php echo $vars[0]["create_time"]; ?></li>
    </ul>
  </div>

  <div id="menu">
    <ul>
      <li>
        <a href="/">
          <p id="return">Retour au site</p>
        </a>
      </li>
      <li>
        <a href="/admin/">
          <p <?php if($title == 'Accueil'){ ?>class="active" <?php } ?>>Accueil</p>
        </a>
      </li>
      <?php if(!$isGestionnaire){?>
      <li>
        <a href="/admin/sensor">
          <p <?php if($title == 'Gérer les capteurs'){ ?>class="active" <?php } ?>>Gérer les capteurs</p>
        </a>
      </li>
      <?php } ?>
      <li>
        <a href="/admin/user">
          <p <?php if($title == 'Gérer les membres'){ ?>class="active" <?php } ?>>Gérer les membres</p>
        </a>
      </li>
      <?php if(!$isGestionnaire){?>
      <li>
        <a href="/admin/faq">
          <p <?php if($title == 'Gérer la FAQ'){ ?>class="active" <?php } ?>>Gérer la FAQ</p>
        </a>
      </li>
      <?php } ?>
      <li>
        <a href="/admin/ticket">
          <p <?php if($title == 'Tickets Support'){ ?>class="active" <?php } ?>>Tickets Support</p>
        </a>
      </li>
      <li>
        <a href="/deconnexion">
          <p style="color: red;">Déconnexion</p>
        </a>
      </li>
    </ul>
  </div>
</nav>