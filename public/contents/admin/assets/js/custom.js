$(function(){
    "use strict";
    $('#datepicker_one').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',
        todayHighlight: true
    });
    
    $('#datepicker_two').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',
        todayHighlight: true
    });
});



// jQuery(document).ready(function(){
//     jQuery('#datetimepicker').datepicker({
//         autoclose: true,
//         format: 'yyyy-mm-dd',
//         todayHighlight: true
//     });

//     jQuery('#datetimepicker').datepicker({
//         autoclose: true,
//         format: 'yyyy-mm-dd',
//         todayHighlight: true
//     });
// })


  

// $(function() {
//     $(".select2").select2({
//         width: "100%",
//         placeholder: "Please select an skill",
// 	});
//     $("#select2select").select2({
//         placeholder: "Choose Any",
// 	});
// });



// SoftDelete Modal 
// $(document).ready(function(){
//     $(document).on("click", "#unPublish", function() {
//         var deleteID = $(this).data('id');
//         $(".modal-body #modal_id").val(deleteID);
//     });
// });

$(function(){
    "use strict";
    $(document).on("click", "#unPublish", function() {
        var deleteID = $(this).data('id');
        $(".modal-body #modal_id").val(deleteID);
    });
});

//datatable code start
// $(document).ready( function () {
//     $('#dataTable').DataTable({
//       "paging": true,
//       "lengthChange": true,
//       "searching": true,
//       "ordering": false,
//       "info": true,
//       "autoWidth": false
//     });
// });


// $(document).ready( function () {
//     $('#myTable').DataTable();
// });

$(function(){
    "use strict";
    $('#dataTable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": false
    });
});