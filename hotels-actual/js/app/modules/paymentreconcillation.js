MFD_paymentreconcillation = {
    settings: {
        name: 'paymentreconcillation',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};