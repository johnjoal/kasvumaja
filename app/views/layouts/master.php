<?php
    function get_nav_active($compare) {
        if (Request::is($compare))
            return 'class="active"';
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasvumaja</title>

    <!-- Bootstrap -->
    <?php echo HTML::style('css/bootstrap.min.css'); ?>
    <?php echo HTML::style('css/bootstrap-theme.min.css'); ?>
    <?php echo HTML::style('css/style.css'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
      <?php echo HTML::image('img/kasvumaja_logo.gif', 'Kasvumaja', array('id' => 'logo')) ?>
      <?php echo HTML::image('img/tomat.jpg', 'Kasvumaja', array('class' => 'pull-right')) ?>
  </div>

    <!-- Fixed navbar -->
    <div class="navbar-custom navbar-static-top" role="navigation">
        <ul class="nav navbar-nav">
            <li <?php echo get_nav_active('/') ?>><a href="/">ДАЧНЫЕ ТЕПЛИЦЫ</a></li>
            <li <?php echo get_nav_active('page/shoes') ?>><a href="/page/shoes">ОБУВЬ</a></li>
            <li <?php echo get_nav_active('page/other') ?>><a href="/page/other">ПРОЧИЕ ТОВАРЫ</a></li>
            <li <?php echo get_nav_active('page/promo') ?>><a href="/page/promo">АКЦИИ</a></li>
            <li <?php echo get_nav_active('page/contact') ?>><a href="/page/contact">КОНТАКТ</a></li>
        </ul>
    </div>
    
    <div class="container">
        <?php echo $content; ?>
    </div>

    <div id="footer">
      <div class="container">
        <div class="col-xs-4 col-sm-3">
            <address>
            <strong>Prime Line OÜ</strong><br>
            Reg nr. 12430378
            </address>
        </div>
        <div class="col-xs-4 col-sm-3">
            <address>
            <strong>КОНТАКТ</strong><br>
            (+372) 5915 1801 <?php echo HTML::image('img/flag_et.jpg')?><br>
            (+372) 5688 1406 <?php echo HTML::image('img/flag_ru.jpg')?><br>
            (+372) 5191 3832 <?php echo HTML::image('img/flag_et.jpg')?> <?php echo HTML::image('img/flag_ru.jpg')?>
            </address>
        </div>
        <div class="col-xs-4 col-sm-3 text-center">
            <strong>ISO</strong><br>
            <?php echo HTML::image('img/iso.png')?>
        </div>
        <div class="col-xs-4 col-sm-3 text-center">
            <strong>SERTIFIKAADID</strong>
            <?php echo HTML::image('img/sertifikat.gif')?>
        </div>
      </div>
    </div>
    
    <?php echo HTML::script('js/jquery_1.11.0.min.js'); ?>
    <?php echo HTML::script('js/bootstrap.min.js'); ?>
  </body>
</html>