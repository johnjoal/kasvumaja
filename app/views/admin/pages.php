<div id="data">
    <?php echo View::make('admin/partials/pages')->with('data', $data); ?>
</div>

<div id="delete-confirm-modal" class="modal fade" role="dialog" aria-labelledby="delete" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Запись будет удалена!</h4>
      </div>
      <div class="modal-body">
        <p>Удалить запись <strong><span id="itemTitle"></span></strong>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Отменить</button>
        <a id="linkDeleteConfirm" href="#" role="button" class="btn btn-danger">Удалить</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->