    $('.scroll-pane').jScrollPane();

    $('#price-range').noUiSlider({
        start: [0, 6080],
        connect: true,
        range: {
            'min': 0,
            'max': 10001
        }
    });
    $('#price-range').Link('lower').to($('#i1'));
    $('#price-range').Link('upper').to($('#i2'));           

    $('#grid-view').click(function () {
        $("#grid-view").addClass("act");
        $("#list-view").removeClass("act");
        $('#content .product-layout > .clearfix').remove();
        cols = $('#column-right, #column-left').length;
        if (cols === 2) {
            $('#content .product-layout').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
        } else if (cols === 1) {
            $('#content .product-layout').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
        } else {
            $('#content .product-layout').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
        }
        localStorage.setItem('display', 'grid');
    });
    $('#list-view').click(function () {
        
        $("#list-view").addClass("act");
        $("#grid-view").removeClass("act");
        $('#content .product-layout > .clearfix').remove();
        $('#content .row > .product-layout').attr('class', 'product-layout product-list col-xs-12');
        localStorage.setItem('display', 'list');
        
        
    });  
$('.selectpicker').selectpicker({});


