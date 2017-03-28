MFD_dailyrevenue = {
    settings: {
        name: 'dailyrevenue',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};