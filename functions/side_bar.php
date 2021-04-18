<?php

//import mysql connection
include 'includes/mysql_connect.php'; 

function show($table_name,$column){

    //Initialization
    $con = mysql_connect(); // call mysql connect function
    $table = "SELECT * FROM $table_name " ;
	$result = mysqli_query ($con,$table);
	$check = mysqli_num_rows ($result);
    // CHECK RESULTS
	if($check>0){        
		while ($row = mysqli_fetch_assoc($result)) {
			$data = $row[$column];
            echo '<a href = "#" >';
            echo $data;
            echo '</a><br>';
		}
	}//END OF CHECK

}

?>