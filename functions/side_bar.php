


<?php

//Import Mysql Connection
include 'includes/mysql_connection.php';


function show($table_name,$column){

    //Initialization
    $con = mysql_connect(); // call the mysql function
    $table = "SELECT * FROM $table_name";
    $result = mysqli_query($con,$table);
    $check = mysqli_num_rows($result);

    //check
    if ($check > 0){
        while($row = mysqli_fetch_assoc($result)){
            $data = $row[$column];

            echo '<a href = "#" style = "color:blue;">';
            echo $data;
            echo '</a><br>';
        }
    }
}


?>