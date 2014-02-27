<form role="form" method="post" action="<?php echo action('AdminController@postPageEdit', $page->id) ?>">
    <div class="form-group">
        <?php echo Form::languageDropDown($page->lang) ?>
    </div>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">Title</span>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $page->title ?>">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">H1</span>
            <input type="text" class="form-control" id="h1" name="h1" placeholder="H1" value="<?php echo $page->h1 ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <div class="input-group">
                <span class="input-group-addon">Ширина</span>
                <input type="text" id="width" name="width" class="form-control" value="<?php echo $page->type == PageType::SHOES ? 190 : 267 ?>">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="input-group">
                <span class="input-group-addon">Высота</span>
                <input type="text" id="height" name="height" class="form-control" value="<?php echo $page->type == PageType::SHOES ? 140 : 200 ?>">
            </div>
        </div>
        <div class="col-sm-6 checkbox">
            <label for="create_thumbnail" class="checkbox-inline">
                <input type="checkbox" id="create_thumbnail" name="create_thumbnail" value="1" checked> Уменьшать картинки (при загрузке новых)
            </label>
        </div>
    </div>
    <div class="form-group">
        <label>Краткое описание</label>
        <label for="show_on_cover" class="checkbox-inline">
          <input type="checkbox" id="show_on_cover" name="show_on_cover" value="1" <?php echo $page->show_on_cover ? 'checked' : '' ?>> Показать на главной странице
        </label>
        <textarea class="summernote-description" name="description"><?php echo $page->description ?></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
    <div class="form-group">
        <textarea class="summernote" name="content"><?php echo $page->content ?></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
    <input type="hidden" name="id" value="<?php echo $page->id; ?>">
    <input type="hidden" name="type" value="<?php echo $page->type ?>">
</form>