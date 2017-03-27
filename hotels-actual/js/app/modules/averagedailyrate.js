MFD_averagedailyrate = {
    settings: {
        name: 'averagedailyrate',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};