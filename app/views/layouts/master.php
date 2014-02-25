<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Esitame uue kasvuhoone Treshka.Esimest korda oli kasutatud karkassi eriti koormatud piirkonnas lai võimendatud profiil, mis kannatab raskeid lumekoormaid kuni 180 kg/m2, mis on 50% kõrgem kui kasvuhoonel Suvila 2DUM. Представляем новую теплицу Дачная-Трёшка. Впервые в особо нагруженных местах каркаса был применен широкий усиленный профиль, который выдерживает большие снеговые нагрузки до 180кг/м2, что на 50% выше чем у теплицы ДАЧНАЯ-2ДУМ." />
    <meta name="keywords" content="kasvumaja,kasvuhoone,kasvuhoonete müük,suvila,aed,polükarbonaad,osta,теплица, парник, сад, огород, поликарбонат, дача, купить,установка теплиц, теплицы, парники, парников, теплицу" />
    <title>Kasvumaja</title>

    <!-- Bootstrap -->
    <?php echo HTML::style('css/bootstrap.min.css'); ?>
    <?php echo HTML::style('css/bootstrap-theme.min.css'); ?>
    <?php echo HTML::style('css/style.css'); ?>
    <?php echo HTML::style('packages/jquery.fs.boxer/jquery.fs.boxer.css'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="header" class="container">
      <a href="<?php echo get_nav_url($lang)?>"><?php echo HTML::image('img/kasvumaja_logo.gif', 'Kasvumaja', array('id' => 'logo')) ?></a>
      <?php //echo HTML::image('img/tomat.jpg', 'Kasvumaja', array('class' => 'pull-right')) ?>
  </div>

    <!-- Fixed navbar -->
    <div class="navbar-custom navbar-static-top" role="navigation">
        <ul class="nav navbar-nav">
            <li <?php echo get_nav_active($page_type,array(PageType::HOME, PageType::GREENHOUSE)) ?>><a href="<?php echo get_nav_url($lang) ?>"><?php echo trans('menu.greenhouses') ?></a></li>
            <li <?php echo get_nav_active($page_type,array(PageType::SHOES)) ?>><a href="<?php echo get_nav_url($lang,'/page/shoes') ?>"><?php echo trans('menu.shoes') ?></a></li>
            <li <?php echo get_nav_active($page_type,array(PageType::OTHER)) ?>><a href="<?php echo get_nav_url($lang,'/page/other') ?>"><?php echo trans('menu.other') ?></a></li>
            <li <?php echo get_nav_active($page_type,array(PageType::PROMO)) ?>><a href="<?php echo get_nav_url($lang,'/page/promo') ?>"><?php echo trans('menu.promo') ?></a></li>
            <li <?php echo get_nav_active($page_type,array(PageType::CONTACT)) ?>><a href="<?php echo get_nav_url($lang,'/page/contact') ?>"><?php echo trans('menu.contact') ?></a></li>
        </ul>
    </div>

    <div class="container">
        <ul class="pull-left list-inline">
            <li><a href="/et">Eesti <?php echo HTML::image('img/flag_et.jpg')?></a></li>
            <li><a href="/ru">Русский <?php echo HTML::image('img/flag_ru.jpg')?></a></li>
        </ul>
        <address class="pull-right text-right">
            (+372) 5915 1801 <?php echo HTML::image('img/flag_et.jpg')?><br>
            (+372) 5688 1406 <?php echo HTML::image('img/flag_ru.jpg')?><br>
            (+372) 5191 3832 <?php echo HTML::image('img/flag_et.jpg')?> <?php echo HTML::image('img/flag_ru.jpg')?><br>
            info@kasvumaja.ee
        </address>
    </div>
    
    <div class="container">
        <?php echo $content; ?>
    </div>

    <div id="footer">
      <div class="container">
        <div class="col-xs-4 col-sm-3">
            <address>
            <strong>Prime Line OÜ</strong><br>
            Reg nr. 12430378<br>
            KMKR nr. EE10169921<br>
            Katusepapi 14, 11412 Tallinn
            </address>
        </div>
        <div class="col-xs-4 col-sm-3">
            <address>
            <strong><?php echo trans('menu.contact') ?></strong><br>
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
            <strong><?php echo trans('strings.sert') ?></strong>
            <?php echo HTML::image('img/sertifikat.gif')?>
            <?php if (App::environment('production')) { ?>
                <!--LiveInternet counter--><script type="text/javascript"><!--
                document.write("<a href='http://www.liveinternet.ru/click' "+
                "target=_blank><img src='//counter.yadro.ru/hit?t24.4;r"+
                escape(document.referrer)+((typeof(screen)=="undefined")?"":
                ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                ";"+Math.random()+
                "' alt='' title='LiveInternet: показано число посетителей за"+
                " сегодня' "+
                "border='0' width='5' height='5'><\/a>")
                //--></script><!--/LiveInternet-->
            <?php } ?>
        </div>
      </div>
    </div>
    
    <?php echo HTML::script('js/jquery_1.11.0.min.js'); ?>
    <?php echo HTML::script('packages/jquery.fs.boxer/jquery.fs.boxer.min.js'); ?>
    <?php echo HTML::script('js/main.js'); ?>
    <?php //echo HTML::script('js/bootstrap.min.js'); ?>
  </body>
</html>

<?php
    function get_nav_active($page_type, $page_types) {
        if (in_array($page_type, $page_types))
            return 'class="active"';
    }
    function get_nav_url($lang, $path=null) {
        return '/' . $lang . $path;
    }
?>