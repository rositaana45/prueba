<?php
if (isset($_GET['term'])){
include("../conexion/dbconfig.php");
$return_arr = array();
/* If connection to database, run sql statement. */
if ($db_con)
{
	
	$fetch = mysqli_query($con,"SELECT * FROM Curriculum where NombresApellidos like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
	/* Retrieve and store in array the results of the query.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$id_cliente=$row['ID'];
		$row_array['value'] = $row['NombresApellidos'];
		$row_array['ID']=$id_cliente;
		$row_array['NombresApellidos']=$row['NombresApellidos'];
		//$row_array['telefono_cliente']=$row['telefono_cliente'];
		//$row_array['email_cliente']=$row['email_cliente'];
		array_push($return_arr,$row_array);
    }
	
}

/* Free connection resources. */
mysqli_close($db_con);

/* Toss back results as json encoded array. */
echo json_encode($return_arr);

}
?>