<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kasvumaja :: Admin</title>
	<?php echo HTML::style('css/bootstrap.min.css'); ?>
</head>
<body>
    <div class="center-block" style="width:400px; margin-top:20%;">
        <?php if(Session::has('error')) { ?>
            <div class="alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo Session::get('error') ?>
            </div>
        <?php } ?>
        <form class="form-horizontal" role="form" method="post" action="/login">
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-8"><input type="email" class="form-control" id="email" name="email" placeholder="Email"></div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Пароль</label>
                <div class="col-sm-8">
                    <p><input type="password" class="form-control" id="password" name="password" placeholder="Пароль"></p>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php echo HTML::script('js/jquery_1.11.0.min.js'); ?>
    <?php echo HTML::script('js/bootstrap.min.js'); ?>
</body>
</head>