<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Framework Pédagogique MVC6</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Poppins&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php echo $view->add_webpack_style('app'); ?>
  </head>
  <body>
  <?php // $view->dump($view->getFlash()) ?>
    <header id="masthead">
     <p> UBBProducts</p>
    </header>

    <div class="container">
        <?= $content; ?>
    </div>

    <footer id="colophon">
        <div class="wrap">
            <p>MVC 6 - Framework Pédagogique.</p>
        </div>
    </footer>
  <?php echo $view->add_webpack_script('app'); ?>
  </body>
</html>
