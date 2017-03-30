$(function () {

$(".datepicker").datepicker();

    $(".datepicker-group").datepicker({
        showOn: "both",
        buttonText: ""
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