
<script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/4.4.0/json2.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

    
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

   

        
</script>