<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RubiLang</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
  <link rel="stylesheet" type="text/css" href="slider.css">
  <link rel="stylesheet" type="text/css" href="img.css">

  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/slider.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>



  <script type="text/javascript">
    $(window).on('load', function() {
      var $preloader = $('#p_prldr'),
        $svg_anm = $preloader.find('.fade2');
      $svg_anm.fadeOut();
      $preloader.delay(500).fadeOut('slow');
    });
  </script>
</head>

<body>
  <div id="p_prldr"><span class="fade1">RubiLang</span><span class="fade2 fade1">Пожалуйста, подождите</span></div>
  <header>
    <?php require_once('layouts/main_page/header.php'); ?>
  </header>
  <main>
    <?php require_once('layouts/main_page/menu.php'); ?>
    <?php require_once('layouts/main_page/content.php'); ?>
  </main>
  <footer>
    <?php require_once('layouts/main_page/footer.php') ?>
  </footer>
  <?php require_once('layouts/main_page/slider-script.php') ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
</html>