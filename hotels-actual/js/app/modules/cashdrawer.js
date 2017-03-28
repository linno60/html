MFD_cashdrawer = {
    settings: {
        name: 'cashdrawer',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};