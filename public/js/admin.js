$(document).ready(function() {
  $('.summernote').summernote({
      height: 700
  });
});

function deleteItem(path, confirmMsg, updateId) {
    if (confirm(confirmMsg)) {
        $.post(path, function(data) {
            $(updateId).html(data);
        });
    }
}