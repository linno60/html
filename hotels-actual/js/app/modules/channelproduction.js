MFD_channelproduction = {
    settings: {
        name: 'channelproduction',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};