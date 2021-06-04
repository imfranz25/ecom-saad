


<?php

 include 'includes/mysql_connection.php';

    // SHOW TITLE (BRAND - CATEGORY)
    function show_title($table_name){

        //Initialization
        $table = "SELECT * FROM $table_name";
        $result = mysqli_query(mysql_connect(),$table);
        $check = mysqli_num_rows($result);

        //check
        if ($check > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row[$table_name.'_id'];
                $title = $row[$table_name.'_title'];
                echo "<a href = 'index.php?product_".$table_name."=$id'>
                <li id = ".$table_name.$id.">$title</li></a>";
            }
        }
    }// END

    // GET PRODUCT FROM DATABASE (SHOW)
    function get_product(){
        if(!isset($_GET['product_category'])){
            if(!isset($_GET['product_brand'])){
                //Initialization
                $query = "SELECT * FROM product ORDER BY RAND() LIMIT 0,6";
                $result = mysqli_query(mysql_connect(),$query);

                while ($row = mysqli_fetch_assoc($result)) {

                    //get data
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_price = $row['product_price'];
                    $product_image = $row['product_image'];
                    $product_desc = $row['product_desc'];

                    echo "<script> var a = $product_price;</script>
                            <div id = 'single_product'>
                            <center>
                            <h3> $product_title </h3>
                            <img src = 'admin_area/product_images/$product_image'>
                            <p><b>Price : PHP $product_price </b></p>
                            <a onclick = 'product_details(".json_encode($product_id).",".json_encode($product_title).",".json_encode($product_image).",".json_encode(number_format($product_price,2)).",".json_encode($product_desc)."
                            )' >Details</a>
                            <a href = 'index.php'><button>Add to Cart</button></a>
                            </center>
                            </div>" ;
                }
            }
        }
    }// END

    function get_sort_product($product){
        if (isset($_GET['product_'.$product])) {
            
            $id = $_GET['product_'.$product];
            $query = "SELECT * FROM product WHERE product_".$product." = '$id' ";
            $result = mysqli_query(mysql_connect(),$query);
            $count = mysqli_num_rows($result);

            if ($count == 0) {
                echo "<h2 style = 'padding:50px 30px 50px 30px;background-color:rgb(23,183,183,.9);text-shadow:3px 2px black;border-radius:5px;margin-top:5%;'>There is no product available from this $product !</h2>";
            }

            while ($row = mysqli_fetch_array($result)) {

                    //get data
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_price = $row['product_price'];
                    $product_image = $row['product_image'];
                    $product_desc = $row['product_desc'];
                   

                    echo "<script> var a = $product_price;</script>
                            <div id = 'single_product'>
                            <center>
                            <h3> $product_title </h3>
                            <img src = 'admin_area/product_images/$product_image'>
                            <p><b>Price : PHP $product_price </b></p>
                            <a onclick = 'product_details(".json_encode($product_id).",".json_encode($product_title).",".json_encode($product_image).",".json_encode(number_format($product_price,2)).",".json_encode($product_desc)."
                            )' >Details</a>
                            <a href = 'index.php'><button>Add to Cart</button></a>
                            </center>
                            </div>" ;
            }

            echo "<script>document.getElementById('$product' + $id).style = 'background-color:rgb(23,183,183,.9);'</script>";

        }
    }

   


    


?>

