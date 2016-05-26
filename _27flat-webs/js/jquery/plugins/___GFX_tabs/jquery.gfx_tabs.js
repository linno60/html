(function( $ ){

    var methods = {
        init : function( options ) 
        {
            var settings = $.extend({
                accordion_width: false,
                width_type: 'screen', // 'screen' OR 'box'
                accordion_tab_height: false
            }, options);
            
            
            return this.each(function()
            {
                var $this = $(this);
                var data = $this.data('GFX_tabs');
                var GFX_tabs = $('<div />', {});

                // Not initialized
                if ( ! data ) 
                {
                    $this.on('click', '._nav > a', function(e){
                        e.preventDefault();
                        $this.GFX_tabs('click', $(this));
                    });
                    
                    $(window).resize(function()
                    {
                        var cond = settings.accordion_width;
                        if (cond !== false)
                        {
                            $this.GFX_tabs('accordion');
                        }    
                    });

                    $(this).data('GFX_tabs', {
                        target : $this,
                        settings: settings,
                        GFX_tabs : GFX_tabs
                    });
                    
                    var active = $this.find('._nav > .active');
                    if (active.length === 0) 
                        active = $this.find('._nav > :first-child');
                    active.trigger('click');
                }
            });
        },
        click : function( lnk ) {
            var box = $(this);
            var tab = $('#'+lnk.attr('href').substr(1));

            // Select tab
            box.find('._nav > .active, ._content > .active').removeClass('active');
            box.find('[class=""]').removeAttr('class');
            
            lnk.addClass('active');
            tab.addClass('active');

            if (box.data('GFX_tabs').settings.accordion_width !== false)
                box.GFX_tabs('accordion');
            
            return $(this);
        },
        accordion: function () {
            var box = $(this);
            var data = box.data('GFX_tabs');
            
            box.find('._nav > a, ._content > *').removeAttr('style');
            
            var cond = data.settings.accordion_width;
            var type = data.settings.width_type;
            
            if (cond !== false && type === 'box')
            {
                var box_width = box.getHiddenDimensions('outerWidth');

                if (box_width <= data.settings.accordion_width && !box.hasClass('accordion'))
                    box.addClass('accordion')
                else if (box_width > data.settings.accordion_width)
                    box.removeClass('accordion');
            }
            else if (cond !== false && type === 'screen' && window.matchMedia('(max-width: '+cond+'px)').matches) {
                box.addClass('accordion');
            }
            else if (cond !== false)
                box.removeClass('accordion');
            
            // Positioning (in case of 'accordion'
            if (box.hasClass('accordion'))
            {
                var cond = data.settings.accordion_tab_height;
                
                var tab = box.find('._content > .active');
                var lnk = box.find('._nav > .active');
                
                var m_top = parseInt(tab.css('margin-top'));
                var m_bot = parseInt(tab.css('margin-bottom'));

                var tab_height = tab.getHiddenDimensions('outerHeight');
                var tab_height = cond && cond < tab_height ? cond : tab_height;
                
                var lnk_height = lnk.outerHeight();
                var lnk_offset = lnk.position().top;

                var s_top = lnk_offset + lnk_height;// + m_top;
                var s_mar = tab_height + m_top + m_bot;

                lnk.attr('style','margin-bottom: '+s_mar+'px;');
                tab.attr('style','top: '+s_top+'px;' +(cond ? 'max-height: '+cond+'px;' : ''));
            }
        }
    };

    $.fn.GFX_tabs = function( method ) {
      if ( methods[method] )
          return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
      else if ( typeof method === 'object' || ! method )
          return methods.init.apply( this, arguments );
      else
          $.error( 'Method ' +  method + ' does not exists.' );
    };

})( jQuery );