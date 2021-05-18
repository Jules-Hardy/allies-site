<html>

<head>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="/ressources/css/reset.css" />
  <link rel="stylesheet" href="/ressources/css/admin.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta charset="utf-8" />
</head>

<body>

  <?php require(WEBROOT. '/includes/admin/nav.php'); ?>

  <?= $content ?>

  <?php require(WEBROOT. '/includes/admin/footer.php'); ?>
  </section>

</body>

</html>