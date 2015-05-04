var current = 0,
        $preview = $('#preview'),
        $carouselEl = $('#carousel'),
        $carouselItems = $carouselEl.children(),
        carousel = $carouselEl.elastislide({
            orientation: 'vertical',
            current: current,
            minItems: 4,
            onClick: function (el, pos, evt) {
                changeImage(el, pos);
                evt.preventDefault();
            },
            onReady: function () {
                changeImage($carouselItems.eq(current), current);

            }
        });
function changeImage(el, pos) {
    $preview.attr('src', el.data('preview'));
    $carouselItems.removeClass('current-img');
    el.addClass('current-img');
    carousel.setCurrent(pos);
}
$(".sale_slider").owlCarousel({
//        autoPlay: 2000,
    navigation: true,
    items: 4,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [979, 3],
    navigationText: false
});

$(".accessories").owlCarousel({
//        autoPlay: 2000,
    navigation: true,
    items: 2,
    navigationText: false
});

$('.related').flexslider({
//        animation: "slide",
    controlNav: false,
    prevText: " ",
    nextText: " "
});

