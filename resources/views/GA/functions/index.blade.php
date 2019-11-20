
<script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/4.4.0/json2.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

    
    });
        // $('#appointments_datatable').DataTable( {
        // autoWidth: true,
        // responsive: true,
        // scrollX: false,
        // scrollY: false,
        // processing: true,
        // serverSide: true,
        //  dom: 'Bfrtip',
        // buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print'
        // ],
        // 'ajax': '/get-all-appointments',
        
        // "orderFixed": [ 0, 'desc' ],
        // "columns":
        //             [
        //                 {data: 'id', name: 'id'},
        //                 {data: 'detailSummary', name: 'detailSummary',orderable: true, searchable: true},
        //                 {data: 'med_aid', name: 'med_aid',orderable: true, searchable: true},
        //                 {data: 'maid_status', name: 'maid_status',orderable: true, searchable: true},
        //                 {data: 'status', name: 'status',orderable: true, searchable: true},
        //                 {data: 'action', name: 'action',orderable: true, searchable: true},
        //                 ]
       

        // });supplement_data

        $('#supplement_data').DataTable( {
        autoWidth: true,
        responsive: true,
        scrollX: false,
        scrollY: false,
        processing: true,
        serverSide: true,
         dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        'ajax': '/get-all-supplementshcp',
        
        "orderFixed": [ 0, 'desc' ],
        "columns":
                    [
                        {data: 'id', name: 'id'},
                        {data: 'description', name: 'description',orderable: true, searchable: true},
                        {data: 'cost_exc', name: 'cost_exc',orderable: true, searchable: true},
                        {data: 'perc_incl', name: 'perc_incl',orderable: true, searchable: true},
                        {data: 'cost_patient', name: 'cost_patient',orderable: true, searchable: true},
                        {data: 'napi_code', name: 'napi_code',orderable: true, searchable: true},
                        {data: 'stock_level', name: 'stock_level',orderable: true, searchable: true},
                        {data: 'action', name: 'action',orderable: true, searchable: true},
                        ]
       

        });

        
$('#appointment_data').DataTable( {
        autoWidth: true,
        responsive: true,
        scrollX: false,
        scrollY: false,
        processing: true,
        serverSide: true,
         dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        'ajax': '/get-all-appointmentsHistory',
        
        "orderFixed": [ 0, 'desc' ],
        "columns":
                    [
                        {data: 'id', name: 'id'},
                        {data: 'created_at', name: 'created_at',orderable: true, searchable: true},
                        {data: 'detailSummary', name: 'detailSummary',orderable: true, searchable: true},
                        {data: 'med_aid', name: 'med_aid',orderable: true, searchable: true},
                
                        {data: 'status', name: 'status',orderable: true, searchable: true},
                        {data: 'action', name: 'action',orderable: true, searchable: true},
                        ]
       

        });


//delete_supplement

function delete_supplement(id){
    $.ajax({
            url : 'api/GA/deletesupplement', // the endpoint
            type : "POST", // http method
            data : { 
                     id   : id,
                   },

            success : function(json, textMsg, xhr) {
                     //$('#amount_due').val("")

                      Swal.fire({
              position: 'center',
              type: 'success',
              title: 'Appointment Canceled',
              showConfirmButton: false,
              timer: 1500
            })

                 window.location.reload(); 
            },

            error : function(xhr,errmsg,err) {
               alert('AJAX called failse');
                window.location.reload(); 
            }
        }); 


}

        function deleteAppointment(id){
    $.ajax({
            url : 'api/patient/deleteAppointment', // the endpoint
            type : "POST", // http method
            data : { 
                     id   : id,
                   },

            success : function(json, textMsg, xhr) {
                     //$('#amount_due').val("")

                      Swal.fire({
              position: 'center',
              type: 'success',
              title: 'Supplement Deleted',
              showConfirmButton: false,
              timer: 1500
            })

                 window.location.reload(); 
            },

            error : function(xhr,errmsg,err) {
               alert('AJAX called failse');
                window.location.reload(); 
            }
        }); 


}




        $('#appointment_dataHCP').DataTable( {
        autoWidth: true,
        responsive: true,
        scrollX: false,
        scrollY: false,
        processing: true,
        serverSide: true,
         dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        'ajax': '/get-all-appointmentshcp',
        
        "orderFixed": [ 0, 'desc' ],
        "columns":
                    [
                        {data: 'id', name: 'id'},
                        {data: 'created_at', name: 'created_at',orderable: true, searchable: true},
                        {data: 'detailSummary', name: 'detailSummary',orderable: true, searchable: true},
                        {data: 'med_aid', name: 'med_aid',orderable: true, searchable: true},
                        {data: 'maid_status', name: 'maid_status',orderable: true, searchable: true},
                        {data: 'time', name: 'time',orderable: true, searchable: true},
                        {data: 'date', name: 'date',orderable: true, searchable: true},
                        
                        {data: 'status', name: 'status',orderable: true, searchable: true},
                        {data: 'action', name: 'action',orderable: true, searchable: true},
                        ]
       

        });

        $('#Patient_datatable').DataTable( {
        autoWidth: true,
        responsive: true,
        scrollX: false,
        scrollY: false,
        processing: true,
        serverSide: true,
         dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        'ajax': '/get-all-users',
        
        "orderFixed": [ 0, 'desc' ],
        "columns":
                    [
                        {data: 'id', name: 'id'},
                        {data: 'name', name: 'name',orderable: true, searchable: true},
                        {data: 'email', name: 'email',orderable: true, searchable: true},
                        {data: 'user_role', name: 'user_role',orderable: true, searchable: true},
                        {data: 'action', name: 'action',orderable: true, searchable: true},
                        ]
       

        });
      




        // $('#Customers_datatable').DataTable( {
        // autoWidth: true,
        // responsive: true,
        // scrollX: false,
        // scrollY: false,
        // processing: true,
        // serverSide: true,
        //  dom: 'Bfrtip',
        // buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print'
        // ],
        // 'ajax': '/get-all-customers',
        
        // "orderFixed": [ 0, 'desc' ],
        // "columns":
        //             [
        //                 {data: 'id', name: 'id'},
        //                 {data: 'name', name: 'name',orderable: true, searchable: true},
        //                 {data: 'email', name: 'email',orderable: true, searchable: true},
        //                 {data: 'user_role', name: 'user_role',orderable: true, searchable: true},
        //                 {data: 'action', name: 'action',orderable: true, searchable: true},
        //                 ]
       

        // });

        // //Secretaries_datatable
 
        // $('#Secretaries_datatable').DataTable( {
        // autoWidth: true,
        // responsive: true,
        // scrollX: false,
        // scrollY: false,
        // processing: true,
        // serverSide: true,
        //  dom: 'Bfrtip',
        // buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print'
        // ],
        // 'ajax': '/get-all-secretaries',
        
        // "orderFixed": [ 0, 'desc' ],
        // "columns":
        //             [
        //                 {data: 'id', name: 'id'},
        //                 {data: 'name', name: 'name',orderable: true, searchable: true},
        //                 {data: 'email', name: 'email',orderable: true, searchable: true},
        //                 {data: 'user_role', name: 'user_role',orderable: true, searchable: true},
        //                 {data: 'action', name: 'action',orderable: true, searchable: true},
        //                 ]
       

        // });

        function acceptAppointment(id){
            $.ajax({
            url : 'api/HCP/acceptAppointment', // the endpoint
            type : "POST", // http method
            data : { 
                     id   : id,
                   },

            success : function(json, textMsg, xhr) {
                     //$('#amount_due').val("")

                      Swal.fire({
              position: 'center',
              type: 'success',
              title: 'Appointment Accepted',
              showConfirmButton: false,
              timer: 1500
            })

                 window.location.reload(); 
            },

            error : function(xhr,errmsg,err) {
               alert('AJAX called failse');
                window.location.reload(); 
            }
        }); 


}

function declineAppointment(id){
            $.ajax({
            url : 'api/HCP/declineAppointment', // the endpoint
            type : "POST", // http method
            data : { 
                     id   : id,
                   },

            success : function(json, textMsg, xhr) {
                     //$('#amount_due').val("")

                      Swal.fire({
              position: 'center',
              type: 'success',
              title: 'Appointment Declined',
              showConfirmButton: false,
              timer: 1500
            })

                 window.location.reload(); 
            },

            error : function(xhr,errmsg,err) {
               alert('AJAX called failse');
                window.location.reload(); 
            }
        }); 


}


     
        </script>