MFD_reservationsrateplan = {
    settings: {
        name: 'reservationsrateplan',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};SS