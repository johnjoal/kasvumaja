$(document).ready(function() {
  $('.summernote').summernote({
      height: 700
  });
});

function deleteItem(path, itemTitle, updateId) {
    $("#delete-confirm-modal #itemTitle").text(itemTitle);
    $("#delete-confirm-modal #linkDeleteConfirm").attr('onclick', 'return deleteItemConfirmed(\''+path+'\', \''+updateId+'\')');
    $('#delete-confirm-modal').modal();
    return false;
}

function deleteItemConfirmed(path, updateId) {
    $.post(path, function(data) {
        $(updateId).html(data);
    });
    $('#delete-confirm-modal').modal('hide')
    return false;
}