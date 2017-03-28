MFD_paymentledger = {
    settings: {
        name: 'paymentledger',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};