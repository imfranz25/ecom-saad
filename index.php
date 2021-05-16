
<!DOCTYPE html>
<html>
<head>

	<title>My Online Shop</title>
	<!--CSS Source-->
	<link rel="stylesheet" href="styles/ecom.css?v=<?php echo time(); ?>">
	<!--Import Side Bar-->
	<?php include 'functions/function.php'; ?>


</head>
<body>

 	<!--Main Wrapper Starts Here-->
	<div class="main_wrapper">	
		<div class="wrapper">
			<!--Header Starts Here-->
			<div id="header">
				<p>
				<img src="images/syra_logo.png" />
				<h1>Syra Cap Mart</h1> Style your Confidence with Syra Cap</p>
			</div>
			<!--Header Ends Here-->

			<!--MenuBar Starts Here-->
			<div id="menubar">
				<ul id="menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php">All Products</a></li>
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
						<h1>Brands</h1><br><br>
						<u>
							<?php show_title('brand'); ?>
						</u>
					</div>
					<div id = 'category'>
						<h1>Category</h1><br><br>
					<u>
						<?php show_title('category'); ?>
					</u>
					</div>
				</div>
				<!--SideBar Ends Here-->

				<!--Content Starts Here-->
				<div id="content">
					<div id="product_box">
						<!--Php Codes-->
						<?php 
							get_product(); 
							get_sort_product('category');
							get_sort_product('brand');
						?>
						<!--End of Php Codes-->
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

	<!-----------Modal Message-------------->
	<div id="modal_message" class="modal_message">
		<div class="modal_message_content">
		  	<div class="modal_message_header">
		    	<h2>*Product Details*</h2>
		  	</div>
			<div class="modal_message_body">
				<label id="details"></label>
			</div>
			<div class="modal_message_footer">
				<center>
			  		<button id="close" onclick="hide_details()">Close</button>
			  	</center>
		 	 </div>
		</div>
	</div>
	<!-----------End of Modal Message-------------->

	<script>
		function product_details(title){
			document.getElementById('modal_message').style = "display:block" ;
			var a = document.getElementById('details');
			a.innerHTML = title;
		}
		function hide_details(){
			document.getElementById('modal_message').style = "display:none" ;
		}
	</script>

</body>
</html>