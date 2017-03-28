MFD_roomassignments = {
    settings: {
        name: 'roomassignments',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};