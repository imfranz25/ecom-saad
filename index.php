
<!DOCTYPE html>
<html>
<head>

	<title>My Online Shop</title>
	<!--CSS Source-->
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!--Import Side Bar-->
	<?php include 'functions/function.php'; ?>


</head>
<body>

 	<!--Main Wrapper Starts Here-->
	<div class="main_wrapper">	
		<div class="wrapper">
			<!--Header Starts Here-->
			<div id="header">
				<img src="images/syra_logo.png">
				<label>Syra Mart</label>
			</div>
			<!--Header Ends Here-->

			<!--MenuBar Starts Here-->
			<div id="menubar">
				<ul id="menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">All Products</a></li>
					<li><a href="#">My Account</a></li>	
					<li><a href="#">Shopping Cart</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Sign Up</a></li>
				</ul>
				<div id="form">
					<form method="get" action="index.php" enctype="multipart/form-data">
						<input type="text" name="user_query" placeholder="Search a product" />
						<a onclick="alert('Search is Clicked')"><img src="images/search.png"></a>
					</form>
				</div>
			</div>
			<!--MenuBar Ends Here-->

			<!--Body Wrapper Starts Here-->
			<div class="body_wrapper">

				<!--SideBar Starts Here-->
				<div id="sidebar">
					<div id = 'brand'>
						<label>Brand</label><br><br>
						<?php show_title('brand','brand_title'); ?><br><br>
					</div>
					<div id = 'category'>
					<label>Category</label><br><br>
					<?php show_title('category','category_title'); ?><br><br>
					</div>
				</div>
				<!--SideBar Ends Here-->

				<!--Content Starts Here-->
				<div id="content">
					<div id="product_box">
						<?php get_product(); ?>
					</div>
				</div>
				<!--Content Ends Here-->

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