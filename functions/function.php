


<?php

 include 'includes/mysql_connection.php';

    // SHOW TITLE (BRAND - CATEGORY)
    function show_title($table_name,$column){

        //Initialization
        $table = "SELECT * FROM $table_name";
        $result = mysqli_query(mysql_connect(),$table);
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
    }// END

   function get_product(){

    $query = "SELECT * FROM product ORDER BY RAND() LIMIT 0,6";
    $result = mysqli_query(mysql_connect(),$query);

    while ($row = mysqli_fetch_array($result)) {

        //get data
        $product_id = $row['product_id'];
        $product_cat = $row['product_cat'];
        $product_brand = $row['product_brand'];
        $product_title = $row['product_title'];
        $product_price = $row['product_price'];
        $product_image = $row['product_image'];

        echo "<div id = 'single_product'>
                <center>
                <h3> $product_title </h3>
                <img src = 'admin_area/product_images/$product_image'>
                <p><b>Price : PHP $product_price </b></p>
                <a href = 'details.php'>Details</a>
                <a href = 'index.php'><button>Add to Cart</button></a>
                </center>
                </div>" ;
    }
   }

    


?>