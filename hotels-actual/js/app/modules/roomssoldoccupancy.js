MFD_roomssoldoccupancy = {
    settings: {
        name: 'roomssoldoccupancy',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};