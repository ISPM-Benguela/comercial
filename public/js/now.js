$(document).ready(function(){
    $('#table_id').DataTable( {
        buttons: [
            {
                extend: 'print',
            }
        ]
    } );
});