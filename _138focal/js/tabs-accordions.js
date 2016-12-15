$(function() {
    $('body').on('click', '.tablist > a, .tabset > a', function(e) {
        var tab = $(this);
        var id = tab.attr('href').slice(1);
        var root = tab.closest('[data-tabs]');

        var tabpanel = $('#'+id);
        if (tabpanel.hasClass('active'))
            tabpanel.hasClass('collapsed') ? tabpanel.removeClass('collapsed') : tabpanel.addClass('collapsed');
        else
            root.find('> .tabset > .tabpanel.collapsed').removeClass('collapsed');

        root.find('> .tablist > .active, > .tabset > .active').removeClass('active');
        root.find('> .tablist > [href="#'+id+'"], > .tabset > [href="#'+id+'"], > .tabset > #'+id).addClass('active');
        e.preventDefault();
    });

    $('body').on('click', '.accordion > a', function(e) {
        var tab = $(this);
        var panel = tab.next();
        var root = tab.parent();

        if (panel.hasClass('active'))
            panel.hasClass('collapsed') ? panel.removeClass('collapsed') : panel.addClass('collapsed');
        else
            root.find('> .collapsed').removeClass('collapsed');

        root.find('> .active').removeClass('active');
        panel.addClass('active');
        e.preventDefault();
    });
});