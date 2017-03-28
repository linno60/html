MFD_dailyfinancial = {
    settings: {
        name: 'dailyfinancial',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};