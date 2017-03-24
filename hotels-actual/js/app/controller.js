MFD_controller = {

    BOX: $('#MFD'),
    APP: false,
    
    map: {},
        
    init: function() {
        var $this = this;
        $(window).on('hashchange', function(){ $this.go(); });
        !location.hash ? location.hash = 'dashboard' : this.go();
    },
    go: function() {
        var hash = location.hash.slice(1);
        var prev_layout = !this.APP ? false : this.APP.settings.layout;
        
        // Destroy previous app and define new app
        if (this.APP)
            this.APP.destroy();
        
        // Define new app
        this.APP = window[hash ?'MFD_'+ hash : 'MFD_dashboard'];

        // Switch layout if needed
        if (this.APP.settings.layout !== prev_layout)
            this.switch_layout();
        else
            this.run();
    },
    run: function() {
        $('[data-obj=lnk-go]').removeClass('active');
        $('[data-obj=lnk-go][href=#'+this.APP.settings.name+']').addClass('active');
        this.APP.init();
    },
    switch_layout: function() {
        var $this = this;
        this.BOX.load("tpls/layouts/"+this.APP.settings.layout+'.html', function() {
            $this.run();
        });
    }
};