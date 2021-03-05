$(function() {
    $(".select2").select2({
        width: "100%"
    });

    $(".select2-multiple").select2({
        width: "100%",
        placeholder: "Choose Anyone or Multiple",
        closeOnSelect : false,
        allowClear: true,
    });

    $(".select2-multiple-pro-cr-attribute").select2({
        width: "100%",
        allowClear: true,
    });




});