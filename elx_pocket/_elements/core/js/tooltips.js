var _H_Tooltips = {
    init: function() {
        this.init_icons();
        this.init_images();
        this.init_common();
    },
    init_icons: function() {
        $('html #_tab-icons i').tooltipster({
            contentAsHTML: true,
            interactive: true,
            trigger: 'click',
            onlyOne: true,
            functionInit: function(origin, content) {
                var data = JSON.parse(origin.attr('data-json'));
                var ico = $('<div/>').text(data.ico).html();

                var res = '<strong>ICON:</strong><span>'+ico+'</span><br>\n';
                if (data.hover === true)
                    res+= '<strong>HOVER CSS:</strong><span>'+data.hover_css+'</span><br>\n\
                           <strong>HOVER SRC:</strong><span>'+data.hover_url+'</span>\n';
                res +=     '<hr>\
                           <strong>SRC:</strong><span>'+data.url+'</span><br>\n\
                           <strong>FILE:</strong><span>'+data.file+'</span><br>\n\
                           <strong>DIM:</strong><span>'+data.width+' x '+data.height+'</span>\n';


                return res;
            },
            functionReady: function(origin, tooltip) {
                $('body').removeAttr('style'); 
                tooltip.find('span').click(function(){SelectText($(this))});
                SelectText(tooltip.find('span:first'));
            }        
        });
    },
    init_images: function() {
        $('#_tab-images img').tooltipster({
            contentAsHTML: true,
            interactive: true,
            trigger: 'click',
            onlyOne: true,
            functionInit: function(origin, content) {
                var data = JSON.parse(origin.attr('data-json'));
                var img = $('<div/>').text(data.img).html();
                var res = '<strong>IMG:</strong><span>'+img+'</span><br>\n\
                           <strong>BACKGROUND:</strong><span>'+data.bg+'</span><hr>\n\
                           <strong>SRC:</strong><span>'+data.url+'</span><br>\n\
                           <strong>FILE:</strong><span>'+data.file+'</span><br>\n\
                           <strong>DIM:</strong><span>'+data.width+' x '+data.height+'</span>\n';
                return res;
            },
            functionReady: function(origin, tooltip) {
                tooltip.find('span').click(function(){SelectText($(this))});
                SelectText(tooltip.find('span:first'));
            }        
        });
    },
    init_common: function() {
        $('._tholder > *:not(h)').tooltipster({
            contentAsHTML: true,
            interactive: true,
            trigger: 'click',
            onlyOne: true,
            functionInit: function(origin, content) {
                var tab = origin.closest('[id^=_tab-]').attr('id').replace('_tab-','');
                var tag = ['buttons','labels'].indexOf(tab) !== -1 ? 'span' : 'pre';

                var html = $('<div/>').text(origin.prop('outerHTML')).html();
                var res = '<'+tag+'>'+html+'</'+tag+'>';
                return res;
            },
            functionReady: function(origin, tooltip) {
                tooltip.find('span').click(function(){SelectText($(this))});
                SelectText(tooltip.find('span:first'));
            },
            functionBefore: function(origin, continueTooltip) {
                if ($('#_edit_mode').prop('checked') !== true)
                    return false;
                else
                    continueTooltip();
            }
        });
    }
}