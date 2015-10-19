<!DOCTYPE html>
<html lang="en" class="_work">
    <head>
        <meta charset="utf-8" /> 
        <title>ELEMENTS</title>
        <meta name="HandheldFriendly" content="True">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link href="/css/reset.css" rel="stylesheet">
        <link href="/css/reset-elements.css" rel="stylesheet">
        <link href="/_elements/core/work.css"  rel="stylesheet">
        <link href="/_elements/generic/icons.css"  rel="stylesheet">
        <link href="/_elements/generic/tmp.css"  rel="stylesheet">
        <link href="/_elements/generic/fonts-external.css" rel="stylesheet">
        <link href="/_elements/generic/fonts-local.css" rel="stylesheet">
        <link href="/_elements/generic/rad-chk.css" rel="stylesheet">
        <link href="/css/_elements.css"  rel="stylesheet">
<!--        <link href="/css/styles.css" rel="stylesheet">   -->
        
        <!-- Syntaxhighlighter -->
        <link href="/_elements/core/js/plugins/syntaxhighlighter/styles/shCore.css" rel="stylesheet">
        <link href="/_elements/core/js/plugins/syntaxhighlighter/styles/shThemeDefault.css" rel="stylesheet">
        
        <!-- Code Mirror -->
        <link href="/_elements/core/js/plugins/codemirror/codemirror.css" rel="stylesheet">
        <link href="/_elements/core/js/plugins/codemirror/theme/mdn-like.css" rel="stylesheet">
        
        <link href="/_elements/core/js/plugins/tooltipster/css/tooltipster.css" rel="stylesheet">   
    </head>
    <body class="_work">
        
        <div class="_hdr" data-flex="row-center-end">
            <label for="_edit_mode">Selection mode</label>
            <input type="checkbox" id="_edit_mode" value="1" name="_edit_mode">
            
        </div>
        
        <div class="_elements clearfix">
            
            <div id="_tabs_box" class="_tabs">
                <?php foreach (['fonts','fonts-local','js','icons','images','rad-chk','labels','buttons','links','forms','tables','lists','paginations','tabs','cites','messages','other','css'] as $tab_name): ?>
                    <div id="_tab-<?=$tab_name?>">
                        <a href="#_tab-<?=$tab_name?>"><?=$tab_name?> <span></span></a>
                        
                        <?php $gen_class = !in_array($tab_name, ['fonts','fonts-local','js','icons','images','css','rad-chk']) ? '_tholder' : '';?>
                        
                        <div class="<?=$gen_class?>">
                            
                            <?php if(!in_array($tab_name, ['fonts','fonts-local','js','css'])): ?>
                                <?php $tab_alias = str_replace('-', '_', $tab_name); ?>
                                <input type="color" value="<?=$D['ddata']->backgrounds->$tab_alias?>" name="_bg-<?=$tab_name?>" data-tab-name="<?=$tab_alias?>" >
                            <?php endif; ?>
                                
                            <?php if(in_array($tab_name, ['fonts','fonts-local','js','icons','images','rad-chk'])): ?>
                                <a href="#" data-tab="<?=$tab_name?>" class="_btn-refresh"></a>
                            <?php endif; ?>
                                
                            <?php 
                                if (in_array($tab_name, ['icons','images','css','rad-chk']))
                                   $cur_tpl_path = '/_elements/generic/';
                                else if (in_array($tab_name, ['fonts-local','fonts','js']))
                                   $cur_tpl_path = '/_elements/tabs/';
                                else
                                   $cur_tpl_path = '/tpls/_elements/';
                            ?>
                            <?php require_file($cur_tpl_path.$tab_name.'.php', $D); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
  
        </div>
        
        <script>
            var DATA = <?=$D['data']?>;
        </script>
        
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/_elements/core/js/functions.js"></script>
        <script src="/js/jquery/jq.functions.js"></script>
        
        <script src="/_elements/core/js/plugins/codemirror/codemirror.js"></script>
        <script src="/_elements/core/js/plugins/codemirror/mode/css/css.js"></script>
        
        <script src="/_elements/core/js/plugins/syntaxhighlighter/scripts/shCore.js"></script>
        <script src="/_elements/core/js/plugins/syntaxhighlighter/scripts/shBrushCss.js"></script>
        <script src="/_elements/core/js/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
        
        <script src="/js/jquery/plugins/GFX_tabs/jquery.gfx_tabs.js"></script>
        <script src="/_elements/core/js/plugins/tooltipster/js/jquery.tooltipster.min.js"></script>

        <script src="/_elements/core/js/tooltips.js"></script>
        <script src="/_elements/core/js/index.js"></script>
        
        <script src="/_elements/generic/js.js"></script>
        
    </body>
</html>