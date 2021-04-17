<!DOCTYPE html>
<html>
<head>
	<title>My Online Shop</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>

 	<!--Main Wrapper Starts Here-->
	<div class="main_wrapper">	

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
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			<div id="form">
				<form method="get" action="index.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a product" />
					<a onclick="alert('Search is Clicked')"><img src="images/search.png"></a>
				</form>
			</div>
		</div>
		<!--MenuBar Ends Here-->

		<!--Wrapper Starts Here-->
		<div class="wrapper">

			<!--SideBar Starts Here-->
			<div id="sidebar">
				<label>Side Bar</label>
			</div>
			<!--SideBar Ends Here-->

			<!--Content Starts Here-->
			<div id="content">
				<label>Content Area</label>
			</div>
			<!--Content Ends Here-->

		</div>
		<!--Wrapper Ends Here-->

		<!--Footer Starts Here-->
		<div id="footer">
			<label>Footer</label>
		</div>
		<!--Footer Ends Here-->

	</div>
	<!--Main Wrapper Ends Here-->

</body>
</html>