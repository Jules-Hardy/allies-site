<html>

<head>
  <title><?= $title ?></title>
  <link rel="stylesheet" href="/ressources/css/reset.css" />
  <link rel="stylesheet" href="/ressources/css/admin.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta charset="utf-8" />
</head>

<body>

  <?php require(WEBROOT. '/includes/admin/nav.php'); ?>
  <section>
    <content>



      <?php 
      dump($message_template);
      if(isset($message_template) > 0){foreach($message_template as $message) {?>
      <div style="padding:5px; padding-left:20px; background-color:#C22E00; color:white; margin-bottom:10px">
        <i class="fa fa-info"> </i>
        <span> </span><?= $message; ?>
      </div>
      <?php }} ?>

      <?= $content; ?>

      <?php require(WEBROOT. '/includes/admin/footer.php'); ?>
  </section>

</body>

</html>