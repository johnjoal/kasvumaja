$(document).ready(function() {
    $(".content-detail img").wrap(function() {
        return '<a href="'+ $(this).attr('data-src') +'" class="boxer" data-gallery="gallery" />';
    });
	$(".boxer").boxer();
});