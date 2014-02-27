<form role="form" method="post" action="<?php echo action('AdminController@postInternal') ?>">
    <label>Eesti</label>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">Title</span>
            <input type="text" class="form-control" name="et-title" placeholder="Title" value="<?php echo $data['et']['title'] ?>">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">Description</span>
            <input type="text" class="form-control" name="et-description" placeholder="Description" value="<?php echo $data['et']['description'] ?>">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">Keywords</span>
            <input type="text" class="form-control" name="et-keywords" placeholder="Keywords" value="<?php echo $data['et']['keywords'] ?>">
        </div>
    </div>
    
    <label>Русский</label>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">Title</span>
            <input type="text" class="form-control" name="ru-title" placeholder="Title" value="<?php echo $data['ru']['title'] ?>">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">Description</span>
            <input type="text" class="form-control" name="ru-description" placeholder="Description" value="<?php echo $data['ru']['description'] ?>">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">Keywords</span>
            <input type="text" class="form-control" name="ru-keywords" placeholder="Keywords" value="<?php echo $data['ru']['keywords'] ?>">
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>