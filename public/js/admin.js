$(document).ready(function() {
    $('.summernote').summernote({
        height: 700,
        onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0],editor,welEditable);
        }
    });
    $('.summernote-description').summernote({
        height: 260,
        onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0],editor,welEditable);
        }
    });
});

function sendFile(file,editor,welEditable,addDataSrcToAnchor) {
    var data = new FormData();
    data.append("file", file);
    data.append("width", $('#width').val());
    data.append("height", $('#height').val());
    data.append("create_thumbnail", $('#create_thumbnail').prop('checked'));
    $.ajax({
        data: data,
        type: "POST",
        url: "/admin/upload-image",
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            editor.insertImage(welEditable, data['url'], data['dataSrc']);
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