MFD_paymentprocessing = {
    settings: {
        name: 'paymentprocessing',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};