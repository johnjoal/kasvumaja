$(document).ready(function() {
    $('.summernote').summernote({
        height: 700,
        onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0],editor,welEditable);
        }
    });
    $('.summernote-description').summernote({
        height: 200,
        onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0],editor,welEditable);
        }
    });
});

function sendFile(file,editor,welEditable) {
    var data = new FormData();
    data.append("file", file);
    $.ajax({
        data: data,
        type: "POST",
        url: "/ajax/saveimage",
        cache: false,
        contentType: false,
        processData: false,
        success: function(url) {
            editor.insertImage(welEditable, url);
        }
    });
}

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