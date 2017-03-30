$(function () {

    $(".select-length").ultraselect();

    $(".select-all").ultraselect({
        oneOrMoreSelected: "% of ... selected",
        noneSelected: "nothing selected",
        listHeight: 300
    });

    $(".select-groups").ultraselect({
        optGroupSelectable: true,
        selectAllText: 'Select All Sources',
        noneSelected: "select channel",
        oneOrMoreSelected: "% of ... selected",
        listHeight: 300
    });

});