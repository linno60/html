MFD_payoutcomission = {
    settings: {
        name: 'payoutcomission',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};