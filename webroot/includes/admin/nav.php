<nav>
  <a href="/"><img src="../../ressources/images/logo.png" alt="logo" /></a>
  <div id="nav-info">
    <h2>Bonjour Jules,</h2>
    <ul>
      <li><b>Role</b> : Admin</li>
      <li><b>Date</b> : 13 juin 2021</li>
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
      <li>
        <a href="/admin/sensor">
          <p <?php if($title == 'Gérer les capteurs'){ ?>class="active" <?php } ?>>Gérer les capteurs</p>
        </a>
      </li>
      <li>
        <a href="/admin/user">
          <p <?php if($title == 'Gérer les membres'){ ?>class="active" <?php } ?>>Gérer les membres</p>
        </a>
      </li>
      <li>
        <a href="/admin/faq">
          <p <?php if($title == 'Gérer la FAQ'){ ?>class="active" <?php } ?>>Gérer la FAQ</p>
        </a>
      </li>
      <li>
        <a href="/admin/ticket">
          <p <?php if($title == 'Tickets Support'){ ?>class="active" <?php } ?>>Tickets Support</p>
        </a>
      </li>
    </ul>
  </div>
</nav>