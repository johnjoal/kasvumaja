$(document).ready(function() {
    $(".products img").addClass('img-thumbnail');
    $(".content-detail img").wrap(function() {
        var dataSrc = $(this).attr('data-src');
        if (typeof dataSrc !== 'undefined' && dataSrc !== false)
        	return '<a href="'+ dataSrc +'" class="boxer img-thumbnail" data-gallery="gallery" />';
        return '';
    });
	$(".boxer").boxer();
});