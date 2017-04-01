$(function () {

    $(".datepicker").datepicker();

    $(".datepicker-group").datepicker({
        dateFormat: "mm/dd",
        showOn: "both",
        buttonText: ""
    });

    $(".datepicker-group.start-date").datepicker({
        dateFormat: "mm/dd",
        showOn: "both",
        buttonText: "",
        defaultDate: new Date(2017, 00, 01)
    });

    $(".datepicker-group.end-date").datepicker({
        dateFormat: "mm/dd",
        showOn: "both",
        buttonText: "",
        defaultDate: new Date(2017, 11, 31)
    });

    $(".daterangepicker.show-value").daterangepicker({
        "applyClass": "btn-blue",
        "cancelClass": "btn-white"
    });

    $(".daterangepicker.hide-value").daterangepicker({
        "applyClass": "btn-blue",
        "cancelClass": "btn-white",
        autoUpdateInput: false
    });

    $(".daterangepicker.hide-value").on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
    });

    $(".input-mini").prop('disabled', true);

});