<table class="table table-striped" id="data">
<thead>
    <tr>
        <th>#</th>
        <th>Lang</th>
        <th>Title</th>
        <th><a href="/admin/page-edit/<?php echo $page_type ?>" role="button" class="btn btn-primary pull-right">Добавить</a></th>
    </tr>
</thead>
<tbody>
<?php foreach($pages as $page) { ?>
    <tr>
        <td><?php echo $page->id ?></td>
        <td><?php echo $page->lang ?></td>
        <td><?php echo $page->title ?></td>
        <td>
            <div class="btn-group pull-right">
            <a href="<?php echo action('AdminController@getPageEdit', array($page_type, $page->id)) ?>" role="button" class="btn btn-primary">Изменить</a>
            <a href="" role="button" class="btn btn-danger" onclick="deleteItem('/admin/page-delete/<?php echo $page->id ?>','Удалить: <?php echo $page->title ?>?','#data')">Удалить</a>
            </div>
        </td>
    </tr>
<?php } ?>
</tbody>
</table>