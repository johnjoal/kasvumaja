<form role="form" method="post" action="<?php echo action('AdminController@postInternal') ?>">
    <label>Eesti</label>
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

    <label>Soome</label>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">Description</span>
            <input type="text" class="form-control" name="fi-description" placeholder="Description" value="<?php echo $data['fi']['description'] ?>">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">Keywords</span>
            <input type="text" class="form-control" name="fi-keywords" placeholder="Keywords" value="<?php echo $data['fi']['keywords'] ?>">
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>