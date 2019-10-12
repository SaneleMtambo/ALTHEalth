
<script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/4.4.0/json2.js"></script>
<script>
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
       

        // });

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
        'ajax': '/get-all-appointments',
        
        "orderFixed": [ 0, 'desc' ],
        "columns":
                    [
                        {data: 'id', name: 'id'},
                        {data: 'detailSummary', name: 'detailSummary',orderable: true, searchable: true},
                        {data: 'med_aid', name: 'med_aid',orderable: true, searchable: true},
                        {data: 'maid_status', name: 'maid_status',orderable: true, searchable: true},
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
      




        $('#Customers_datatable').DataTable( {
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
        'ajax': '/get-all-customers',
        
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

        //Secretaries_datatable
 
        $('#Secretaries_datatable').DataTable( {
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
        'ajax': '/get-all-secretaries',
        
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
     
        </script>