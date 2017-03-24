MFD_availabilitymatrix = {
    settings: {
        name: 'availabilitymatrix',
        layout: 'main'
    },
    init: function () {
        $('#content').load('tpls/' + this.settings.name + '.html')
    },
    destroy: function () {

    }
};

