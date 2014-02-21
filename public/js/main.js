$(document).ready(function() {
    $(".products img").addClass('img-thumbnail');
    $(".content-detail img").wrap(function() {
        return '<a href="'+ $(this).attr('data-src') +'" class="boxer img-thumbnail" data-gallery="gallery" />';
    });
	$(".boxer").boxer();
});