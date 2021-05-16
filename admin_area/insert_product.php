<!DOCTYPE html>
<html>
<head>

	<title>Inserting Product</title>
	<!--CSS Source-->
	<link rel="stylesheet" type="text/css" href="../styles/ecom.css">
	<?php  include '../includes/mysql_connection.php'; ?>
	<script src="../js/tinymce.min.js"></script>
	<script>tinymce.init({selector:'textarea';});</script>

</head>
<body>

	<?php

	// SHOW OPTION 
    function show_option($table_name){
        $get="SELECT * FROM ".$table_name."";
        $result = mysqli_query(mysql_connect(), $get);
            while ($row = mysqli_fetch_array($result)){
                $id = $row[$table_name.'_id'];
                $title = $row[$table_name.'_title'];
                echo "<option value = ".$id.">".$title."</option>";
            }
    }// END

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST['insert_post'])){
			//getting the text data from the fields
			$product_title=$_POST['product_title'];
			$product_cat=$_POST['product_cat'];
			$product_brand=$_POST['product_brand'];
			$product_price=$_POST['product_price'];
			$product_desc=$_POST['product_description'];
			$product_keywords=$_POST['product_keyword'];

			//getting the image from the field
			$product_image = $_FILES['product_image']['name'] ;
			$product_image_tmp = $_FILES['product_image']['tmp_name'];
			move_uploaded_file($product_image_tmp,"product_images/$product_image");
			
			//To push the data to the database
			$query = "INSERT INTO product (product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords ) VALUES ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";

				if(mysqli_query(mysql_connect(),$query)){
					echo"<script>alert('Product has been inserted!')</script>";
					echo"<script>windows.open('insert_product.php','_self')</script>";
				}

		}
	}
?>	

 	<!--Main Wrapper Starts Here-->
	<div class="main_wrapper">	

		<div class="wrapper">
			<!--Header Starts Here-->
			<div id="header">
				<img src="../images/syra_logo.png">
				<label>Syra Cap Mart</label>
			</div>
			<!--Header Ends Here-->

			<!--MenuBar Starts Here-->
			<div id="menubar">
				<ul id="menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">All Products</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">Shopping Cart</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
				<div id="form">
					<form method="get" action="index.php" enctype="multipart/form-data">
						<input type="text" name="user_query" placeholder="Search a product" />
						<a onclick="alert('Search is Clicked')"><img src="../images/search.png"></a>
					</form>
				</div>
			</div>
			<!--MenuBar Ends Here-->

			<!--Body Wrapper Starts Here-->
			<div class="body-wrapper">
				<div id="insert_table">
					<form action="insert_product.php" method="post" enctype="multipart/form-data">
					<center>
						<table align="center" width="750" border="10" cellpadding="10" >
							<tr align="center">
								<td colspan="7"><h2>Insert New Product</h2></td>
							</tr>
							<tr>
								<td align="right"><b> Product Title: </b> </td>
								<td><input type="text" name="product_title" size="60" required /></td>
							</tr>
							<tr>
								<td align="right"> <b>Product Price: </b> </td>
								<td><input type="text" name="product_price" size="60" required /></td>
							</tr>
							<tr>
								<td align="right"><b> Product Keyword: </b></td>
								<td><input type="text" name="product_keyword" size="60" required/></td>
							</tr>
							<tr>
								<td align="right"> <b id="desc">Product Description: </b> </td>
								<td><textarea name="product_description"  required ></textarea></td>
							</tr>
							<tr>
								<td align="right"> <b>Product Category: </b> </td>
								<td><select name="product_cat" required>
										<option> Select a Category</option>
										<?php show_option('category');	?>
									</select>
								</td>
							</tr>
							<tr>
								<td align="right"><b> Product Brand: </b></td>
								<td><select name="product_brand" required>
										<option> Select a Brand</option>
										<?php show_option('brand');	?>
									</select>
								</td>
							</tr>
							<tr>
								<td align="right"> <b>Product Image: </b> </td>
								<td><input type="file" name="product_image" required /></td>
							</tr>
							<tr align="center">
								<td colspan="7"><button name="insert_post">Insert Product</button></td>
							</tr>
						</table>
					</center>
				</div>
			</div>
			<!--Body Wrapper Ends Here-->

			<!--Footer Starts Here-->
			<div id="footer">
				<h2 style="text-align:center; padding-top:30px;">&copy; 2021 SyraMart All Rights Reserved</h2>
			</div>
			<!--Footer Ends Here-->
		</div>

	</div>
	<!--Main Wrapper Ends Here-->

</body>
</html>