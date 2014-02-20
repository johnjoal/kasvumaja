<form role="form" method="post" action="<?php echo action('AdminController@postPageEdit', $page->id) ?>">
    <div class="form-group">
        <?php echo Form::languageDropDown($page->lang) ?>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $page->title ?>" />
    </div>
    <div class="form-group">
        <label>Краткое описание</label>
        <textarea class="summernote-description" name="description"><?php echo $page->description ?></textarea>
    </div>
    <div class="form-group">
        <textarea class="summernote" name="content"><?php echo $page->content ?></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
    <input type="hidden" name="id" value="<?php echo $page->id; ?>">
    <input type="hidden" name="type" value="<?php echo $page->type ?>">
    <!--<input type="hidden" name="_token" value="<?php //echo csrf_token(); ?>">-->
</form>