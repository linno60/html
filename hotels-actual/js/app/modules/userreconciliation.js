MFD_userreconciliation = {
    settings: {
        name: 'userreconciliation',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};