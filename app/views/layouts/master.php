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
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="">ДАЧНЫЕ ТЕПЛИЦЫ</a></li>
            <li><a href="#shoes">ОБУВЬ</a></li>
            <li><a href="#other">ПРОЧИЕ ТОВАРЫ</a></li>
            <li><a href="#compains">АКЦИИ</a></li>
            <li><a href="#contact">КОНТАКТ</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <div class="container">
        <?php echo $content; ?>
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted"></p>
      </div>
    </div>
    
    <?php echo HTML::script('js/jquery_1.11.0.min.js'); ?>
    <?php echo HTML::script('js/bootstrap.min.js'); ?>
  </body>
</html>