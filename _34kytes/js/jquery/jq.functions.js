(function($){
    $.fn.getHiddenDimensions = function(){
        if (arguments.length && typeof arguments[0] == 'string') {
            var dimension = arguments[0]

            if (this.is(':visible')) return this[dimension]();

            var visible_container = this.closest(':visible');

            if (!visible_container.is('body')) {
                var
                  container_clone = $('<div />')
                    .append(visible_container.children().clone())
                    .css({
                      position: 'absolute',
                      left:'-32000px',
                      top: '-32000px',
                      width: visible_container.width(),
                      height: visible_container.height()
                    })
                    .appendTo(visible_container),
                  element_index = $('*',visible_container).index(this),
                  element_clone = $('*',container_clone).slice(element_index);

                element_clone.parentsUntil(':visible').show();

                var result = element_clone[dimension]();
                container_clone.remove();
                return result;
            } else {
                //TO-DO: support elements whose nearest visible ancestor is <body>
                return undefined
            }
        }
        return undefined //nothing implemented for this yet
    }

    var jqueryOriginalVal = $.fn.val;

    $.fn.val = function(value) {
          if (typeof value == 'undefined') 
          {
  //            if (this[0].getAttribute('type') === 'radio' && !this[0].checked)
  //                return '';
  //            else
                  return jqueryOriginalVal.call(this); // GET
          }
          else {
              var res = jqueryOriginalVal.call(this, value); // SET
              $(this).trigger('f-set');
              return res;
          }
    }
  
    $.fn.hasScrollBar = function() {
        return this.get(0).scrollHeight > this.get(0).clientHeight;
    }
    
    $.fn.removeStyle = function(prop_arr) {
        var el = $(this);

        el.attr('style', function(i, style)
        {
            if (typeof style !== 'undefined')
            {
                if (typeof prop_arr !== 'object')
                    prop_arr = [prop_arr];

                for (var i in prop_arr)
                {
                    var regex = new RegExp(prop_arr[i]+'[^;]+;?', 'g');
                    style = style.replace(regex, '');
                }

                return style;
            }
        });

        el.attr('style', $.trim(el.attr('style')));

        if (el.attr('style') === '')
            el.removeAttr('style');
        
        return el;
    }
    
}(jQuery));
