MFD_houseaccount = {
    settings: {
        name: 'houseaccount',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};