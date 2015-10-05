$.each($('.ratings-result'), function () {
        var $this = $(this),
                parentWidth = $this.closest('.ratings').width(),
                rating = $(this).data('result'),
                newWidth = (parentWidth / 100) * rating;
        $(this).css('width', newWidth);
    });
    function toggleChevron(e) {
        $(e.target)
                .prev('.panel-heading')
                .find(".indicator")
                .toggleClass('plus minus');
    }
    $('#accordion').on('hidden.bs.collapse', toggleChevron);
    $('#accordion').on('shown.bs.collapse', toggleChevron);
    function toggleChevron(e) {
        $(e.target)
                .prev('.panel-heading')
                .find(".indicator")
                .toggleClass('down up');
    }
    $('#accordion_1').on('hidden.bs.collapse', toggleChevron);
    $('#accordion_1').on('shown.bs.collapse', toggleChevron);
    
    $('.tweet').flexslider({
//        animation: "slide",
        controlNav: false,
        prevText: " ",
        nextText: " "
    });

$(".spinner").spinner({
    spin: function (event, ui) {
        if (ui.value > 10) {
            $(this).spinner("value", -10);
            return false;
        }
        else if (ui.value < -10) {
            $(this).spinner("value", 10);
            return false;
        }
    }
});

$(".sale_slider").owlCarousel({
//        autoPlay: 2000,
    navigation: true,
    items: 4,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [979, 3],
    navigationText: false
});

$('#accordion_2 .panel').on('show.bs.collapse', function () {
         $(this).addClass('active');
    });

    $('#accordion_2 .panel').on('hide.bs.collapse', function () {
         $(this).removeClass('active');
    });