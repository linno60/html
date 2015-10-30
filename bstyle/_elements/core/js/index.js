(function ($) {
 
     // Prevent actions from buttons
    $('[id^=_tab-] > div button, [id^=_tab-] > div a').on('click', function(e){
        if ($('#_edit_mode').prop('checked') === true)
            e.preventDefault(); 
    });

    // Init tooltips with delay (because some plugins using 'click' event too
    setTimeout(function(){_H_Tooltips.init()}, 100);

    /* --- SET FONTS FORM --- */
    $('#_fonts-form ._row').each(function(key,row){
        row = $(row);
        var vals = DATA.fonts[key];
        if (typeof vals !== 'undefined') {
            row.find('[type=text]').val(vals.fontfamily);
            row.find('[type=url]').val(vals.url);
        }
        else
            return false;            
    });
    
    /* --- SET UP TABS BACKGROUNDS --- */
    $('#_tabs_box > div > div').each(function(key, tab){
        tab = $(tab);
        var tab_name = tab.parent().attr('id').replace('_tab-','').replace('-','_');
        tab.css('backgroundColor', DATA.backgrounds[tab_name]);
    });
    
    /* --- SUBMITS --- */
    $('._btn-refresh').click(function(e){
        e.preventDefault();
        var tab = $(this).attr('data-tab');
        
        if (tab === 'icons' || tab === 'images' || tab === 'rad-chk')
            window.location.href = '/elements/process_images/';
        else if (tab === 'fonts') 
        {
            var P = $(this).parent().find('form').serialize();
            $.post('/elements/submit_fonts', P, function(D){
                location.reload();
            }, 'json');
        }
        else if (tab === 'fonts-local')
        {
            var field = $(this).parent().find('form').find('textarea');
            var P = {'css': field.val()};
            $.post('/elements/submit_fonts_local', P, function(D){
                location.reload();
            }, 'json');
        }
        else if (tab === 'js')
        {
            var field = $(this).parent().find('form').find('textarea');
            var P = {'js': field.val()};
            $.post('/elements/submit_js', P, function(D){
                location.reload();
            }, 'json');   
        }
    });
       
    /* --- BG COLORS --- */
    $('[type=color]').change(function(){
        var input = $(this);
        input.closest('div').css('background-color', input.val());
        var P = {tab_name: input.attr('data-tab-name'), color: input.val()};
        $.post('/elements/submit_bgcolor', P, function(D){
            //console.log(D);
        }, 'json');
    });
   
    // Syntax highlight for divs
    //SyntaxHighlighter.defaults['gutter']  = false;
    SyntaxHighlighter.defaults['toolbar'] = false;
    SyntaxHighlighter.all();
   
    // Syntax hightlighter for text area (fonts-local)
    var CM_object = $('#_tab-fonts-local textarea');
    var CodeMirror_fonts_local = CodeMirror.fromTextArea( CM_object[0], { theme: 'mdn-like' });
    CodeMirror_fonts_local.on('change', function(cm, change){
        CM_object.val(cm.getValue());
    });
    
    // Syntax highlighter for text area (js)
    var CM_object2 = $('#_tab-js textarea');
    var CodeMirror_js = CodeMirror.fromTextArea( CM_object2[0], { theme: 'mdn-like' });
    CodeMirror_js.on('change', function(cm, change){
        CM_object2.val(cm.getValue());
    });    
    // Refresh CM content if the tab was initially hidden
    $('[href="#_tab-fonts-local"], [href="#_tab-js"]').click(function(){
        var cm = $(this).parent().find('.CodeMirror');
        
        setTimeout(function(){
            cm.each(function(i, el){
                el.CodeMirror.refresh();
            });
        }, 20);
    });
    
    // COUNTERS
    $('#_tabs_box > div').each(function(key, tab){
        tab = $(tab);
        var tname = tab.attr('id').replace('_tab-','');
        
        if (tname === 'fonts' || tname === 'fonts-local' || tname === 'css' || tname === 'js')
            return true;
        
        var tab_counter = tab.find('[href^="#_tab-"] > span');
        var cnt = tab.find('> div:first > *:not(h, ._btn-refresh)').length - 1;
        
        if (cnt !== 0)
            tab_counter.html(cnt);
        else {
            var tab_lnk = tab.find('> a:first');
            //tab_lnk.css('backgroundColor','#A0CCE9');
            tab_lnk.css('color', '#BDBDBD');
            tab_lnk.css('fontWeight','normal');
        }

    });
    
    // GET CSS
    $('[href="#_tab-css"]').click(function(){
        var tab = $(this).next();
        tab.html('');
        $.post('/elements/get_css', {}, function(D){
            tab.html($('<pre class="brush: css">'+D.css+'</pre>'));
            SyntaxHighlighter.highlight();
        }, 'json');
    });

    // Activate first tab
    if (window.location.hash === '')
        document.location.href = '#_tab-icons';
    else
        $('[href="'+window.location.hash+'"]').trigger('click');
    
    // Scroll to top if tab is clicked
    $('[href^="#_tab-"]').click(function(){$("html, body").animate({ scrollTop: 0 }, 30);});
    
})(jQuery);
