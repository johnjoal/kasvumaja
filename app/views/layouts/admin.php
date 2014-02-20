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
    <title>Kasvumaja :: Admin</title>

    <!-- Bootstrap -->
    <?php echo HTML::style('css/bootstrap.min.css'); ?>
    <?php echo HTML::style('css/bootstrap-theme.min.css'); ?>
    <?php echo HTML::style('css/admin.css'); ?>
    <?php echo HTML::style('packages/font-awesome-4.0.3/css/font-awesome.min.css'); ?>
    <?php echo HTML::style('packages/summernote-0.5.0/summernote.css'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
      <?php //echo HTML::image('img/kasvumaja_logo.gif', 'Kasvumaja', array('id' => 'logo')) ?>
      <?php //echo HTML::image('img/tomat.jpg', 'Kasvumaja', array('class' => 'pull-right')) ?>
  </div>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php echo get_nav_active('admin') ?>><a href="/admin">ГЛАВНАЯ</a></li>
            <li <?php echo get_nav_active('admin/products') ?>><a href="/admin/products">ТЕПЛИЦЫ</a></li>
            <li <?php echo get_nav_active('admin/shoes') ?>><a href="/admin/shoes">ОБУВЬ</a></li>
            <li <?php echo get_nav_active('admin/other') ?>><a href="/admin/other">ПРОЧИЕ ТОВАРЫ</a></li>
            <li <?php echo get_nav_active('admin/promo') ?>><a href="/admin/promo">АКЦИИ</a></li>
            <li <?php echo get_nav_active('admin/contact') ?>><a href="/admin/contact">КОНТАКТ</a></li>
          </ul>
          <div style="padding:8px;">
            <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#logout-confirm-modal">Выйти</button>
            <!--<a href="/logout" role="button" class="btn btn-primary pull-right">Выйти</a>-->
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <div class="container">
        <?php if(Session::has('success')) { ?>
            <div class="alert alert-success fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo Session::get('success') ?>
            </div>
        <?php } ?>
        
        <?php if(Session::has('error')) { ?>
            <div class="alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo Session::get('error') ?>
            </div>
        <?php } ?>
        
        <?php echo $content; ?>
    </div>
    
    <div id="logout-confirm-modal" class="modal fade" role="dialog" aria-labelledby="delete" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Выйти из админки?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отменить</button>
                    <a id="linkDeleteConfirm" href="/logout" role="button" class="btn btn-primary">Выйти</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <?php echo HTML::script('js/jquery_1.11.0.min.js'); ?>
    <?php echo HTML::script('js/bootstrap.min.js'); ?>
    <?php echo HTML::script('packages/summernote-0.5.0/summernote.min.js'); ?>
    <?php echo HTML::script('js/admin.js'); ?>
  </body>
</html>