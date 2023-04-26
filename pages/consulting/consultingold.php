<?php
$table = 'tbl_contact';
 
$primaryKey = 'id';
 
$columns = array(
    array( 'db' => 'first_name', 'dt' => 0 ),
    array( 'db' => 'last_name',  'dt' => 1 ),
    array( 'db' => 'address',   'dt' => 2 ),
    array( 'db' => 'phone', 'dt' => 3,),
    array( 'db' => 'date_of_birth','dt' => 4,
        'formatter' => function( $d, $row ) {
            return date( 'd-m-Y', strtotime($d));
        }
    )
   
);
 
$sql_details = array(
    'user' => 'geigus',
    'pass' => '',
    'db'   => 'PureProduction',
    'host' => 'localhost'
);
 
require( 'vendor/datatables/ssp.class.php' );
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>