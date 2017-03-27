MFD_reservationscountry = {
    settings: {
        name: 'reservationscountry',
        layout: 'main'
    },
    init: function() {
        $('#content').load('tpls/'+this.settings.name+'.html')
    },
    destroy: function() {
        
    }
};