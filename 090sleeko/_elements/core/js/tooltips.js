var _H_Tooltips = {
    init: function () {
        this.init_icons();
        this.init_images();
        this.init_common();
        this.init_radchk();
    },
    init_icons: function () {
        $('html #_tab-icons i').tooltipster({
            contentAsHTML: true,
            interactive: true,
            trigger: 'click',
            onlyOne: true,
            functionInit: function (origin, content) {
                var data = JSON.parse(origin.attr('data-json'));
                var ico = $('<div/>').text(data.ico).html();

                var res = '<strong>ICON:</strong><span>' + ico + '</span><br>\n';
                if (data.hover === true)
                    res += '<strong>HOVER CSS:</strong><span>' + data.hover_css + '</span><br>\n\
                           <strong>HOVER SRC:</strong><span>' + data.hover_url + '</span>\n';
                res += '<hr>\
                           <strong>SRC:</strong><span>' + data.url + '</span><br>\n\
                           <strong>FILE:</strong><span>' + data.file + '</span><br>\n\
                           <strong>DIM:</strong><span>' + data.width + ' x ' + data.height + '</span>\n';


                return res;
            },
            functionReady: function (origin, tooltip) {
                $('body').removeAttr('style');
                tooltip.find('span').click(function () {
                    SelectText($(this))
                });
                SelectText(tooltip.find('span:first'));
            }
        });
    },
    init_images: function () {
        $('#_tab-images img').tooltipster({
            contentAsHTML: true,
            interactive: true,
            trigger: 'click',
            onlyOne: true,
            functionInit: function (origin, content) {
                var data = JSON.parse(origin.attr('data-json'));
                var img = $('<div/>').text(data.img).html();
                var res = '<strong>IMG:</strong><span>' + img + '</span><br>\n\
                           <strong>BACKGROUND:</strong><span>' + data.bg + '</span><hr>\n\
                           <strong>SRC:</strong><span>' + data.url + '</span><br>\n\
                           <strong>FILE:</strong><span>' + data.file + '</span><br>\n\
                           <strong>DIM:</strong><span>' + data.width + ' x ' + data.height + '</span>\n';
                return res;
            },
            functionReady: function (origin, tooltip) {
                tooltip.find('span').click(function () {
                    SelectText($(this))
                });
                SelectText(tooltip.find('span:first'));
            }
        });
    },
    init_radchk: function () {
        $('#_tab-rad-chk wrap').tooltipster({
            contentAsHTML: true,
            interactive: true,
            trigger: 'click',
            onlyOne: true,
            functionInit: function (origin, content) {
                var data = JSON.parse(origin.find('input').attr('data-json'));
                var html = $('<pre/>').text(data.html).html();

                var res = '<table class="_tooltiptbl"><tr><td>HTML:</td><td><pre>' + html + '</pre></td></tr><tr><td>CSS:</td><td><pre>' + data.css + '</pre></td></tr></table>'
                return res;
            },
            functionReady: function (origin, tooltip) {
                tooltip.find('tr td:last-child').click(function () {
                    SelectText($(this));
                    console.log('here');
                });
                SelectText(tooltip.find('tr td:last-child'));
            },
            functionBefore: function (origin, continueTooltip) {
                if ($('#_edit_mode').prop('checked') !== true)
                    return false;
                else
                    continueTooltip();
            }
        });
    },
    init_common: function () {
        $('._tholder > *:not(h,wrap,iwrap), ._tholder > wrap, ._tholder > iwrap').tooltipster({
            contentAsHTML: true,
            interactive: true,
            trigger: 'click',
            onlyOne: true,
            functionInit: function (origin, content) {
                var tagName = origin.prop('tagName');
                var tab = origin.closest('[id^=_tab-]').attr('id').replace('_tab-', '');
                var tag = ['buttons', 'labels'].indexOf(tab) !== -1 ? 'span' : 'pre';

                var tmp_html = tagName === 'WRAP' || tagName === 'IWRAP' ? origin.html() : origin.prop('outerHTML');

                var html = $('<div/>').text(tmp_html).html();
                var res = '<' + tag + '>' + html + '</' + tag + '>';
                return res;
            },
            functionReady: function (origin, tooltip) {
                tooltip.find('span').click(function () {
                    SelectText($(this))
                });
                SelectText(tooltip.find('span:first'));
            },
            functionBefore: function (origin, continueTooltip) {
                if ($('#_edit_mode').prop('checked') !== true)
                    return false;
                else
                    continueTooltip();
            }
        });
    }
}