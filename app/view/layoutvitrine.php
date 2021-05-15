<html>

<head>
  <title><?= $title ?></title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="/ressources/css/vitrine.css" />
</head>

<body>
  <?php require(WEBROOT. '/includes/vitrine/header.php'); ?>

  <?= $content ?>

  <?php require(WEBROOT. '/includes/vitrine/footer.php'); ?>

</body>

</html>