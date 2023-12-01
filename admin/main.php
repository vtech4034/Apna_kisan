<?php

ob_flush();

require_once "include/config.php";

session_start();

if ($_SESSION['user_status'] == "A" && $_SESSION['user_type'] == "A") { ?>

	<!DOCTYPE html>

	<html lang="en">

	<head>

		<title>Admin Panel</title>

		<!--== META TAGS ==-->

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!--== FAV ICON ==-->

		<link rel="shortcut icon" href="images/fav.ico">

		

		<!-- GOOGLE FONTS -->

		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

		

		<!-- FONT-AWESOME ICON CSS -->

		<link rel="stylesheet" href="css/font-awesome.min.css">

		

		<!--== ALL CSS FILES ==-->

		<link rel="stylesheet" href="css/style.css">

		<link rel="stylesheet" href="css/mob.css">

		<link rel="stylesheet" href="css/bootstrap.css">

		<link rel="stylesheet" href="css/materialize.css"/>

		

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->        <!--[if lt IE 9]>

		<script src="js/html5shiv.js"></script>

		<script src="js/respond.min.js"></script>        <![endif]-->

	</head>

	<body>

		<?php include_once "include/header.php"; ?>

		

		<!--== BODY CONTNAINER ==-->

		<div class="container-fluid sb2">

			<div class="row">

				

				<?php include_once "include/sidebar.php"; ?>

				

				<!--== BODY INNER CONTAINER ==-->

				<div class="sb2-2">

					<!--== breadcrumbs ==-->

					<div class="sb2-2-2">

						<ul>

							<li><a href="main.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>

							</li>

							<li class="active-bre"><a href="#"> Dashboard</a>

							</li>

						

						</ul>

					</div>

					<!--== DASHBOARD INFO ==-->

					<div class="sb2-2-1">

						<?php if (isset($_SESSION['error_msg'])) {

							echo $_SESSION['error_msg'];

							unset($_SESSION['error_msg']);

						}

						if (isset($_SESSION['success_msg'])) {

							echo $_SESSION['success_msg'];

							unset($_SESSION['success_msg']);

						}

						?>

						<h2>Admin Dashboard</h2>


						<div class="db-2">

							<ul >

								<li>

									<div class="dash-book dash-b-1">

										<?php $orderResult = $connection->query("SELECT * FROM temporder WHERE order_type='Shopping' and delete_status = ''"); ?>

										<h5>All Orders</h5>

										<h4><?php echo $orderResult->num_rows; ?></h4>

										<a href="all-orders.php?order=all_order">View order</a>

									</div>

								</li>

								<li>

									<div class="dash-book dash-b-3">

										<?php $orderResult = $connection->query("SELECT * FROM temporder WHERE order_type='Shopping' and order_status ='Not Started' "); ?>

										<h5>New Orders</h5>

										<h4><?php echo $orderResult->num_rows; ?></h4>

										<a href="all-orders.php?order=Not Started">View order</a>

									</div>

								</li>

								<li>

									<div class="dash-book dash-b-4">

										<?php $orderResult = $connection->query("SELECT * FROM temporder WHERE order_type='Shopping' and order_status  NOT IN ('Delivered','Not Started') "); ?>

										<h5>Order Transit</h5>

										<h4><?php echo $orderResult->num_rows; ?></h4>

										<a href="all-orders.php?order=transit">View order</a>

									</div>

								</li>

								<li>

									<div class="dash-book dash-b-2">

										<?php $orderResult = $connection->query("SELECT * FROM temporder WHERE order_type='Shopping' and order_status='Delivered' "); ?>

										<h5>Delivered</h5>

										<h4><?php echo $orderResult->num_rows; ?></h4>

										<a href="all-orders.php?order=delivered">View order</a>

									</div>

								</li>

							</ul>



							<ul >

								

								<!-- <li>

									<div class="dash-book dash-b-3">

										<?php $categoryResult = $connection->query("SELECT * FROM categories WHERE parent_category_code = 0"); ?>

										<h5>Categories</h5>

										<h4><?php echo $categoryResult->num_rows; ?></h4>

										<a href="all-categories.php">View more</a>

									</div>

								</li> -->

								<li>

									<div class="dash-book dash-b-4">

										<?php $productResult = $connection->query("SELECT * FROM products WHERE 1=1"); ?>

										<h5>Products</h5>

										<h4><?php echo $productResult->num_rows; ?></h4>

										<a href="all-products.php">View more</a>

									</div>

								</li>

								<li>

									<div class="dash-book dash-b-2">

											<?php 
											$j=0;
											
										$productDetails = $connection->query("SELECT * FROM products");
										while($row = $productDetails->fetch_array()){
												  $qnt = $row['quantity']; 

													    $lqnt = $row['lowstock']; 

													    $lqntarr = explode(",", $lqnt);

    													$qntarr = explode(",", $qnt);

    													  foreach($qntarr as $x => $val) { 
														if($val ==0){ 
													     	$j++;
													     }
			 
			   										}    													
	
										}
                                        
                                       
										
										?>

										<h5>Out Of Stock</h5>

										<h4><?php echo $j;?></h4>

										<a href="outofstock.php">View more</a>

									</div>

								</li>

									<!-- <li>

									<div class="dash-book dash-b-2">

										<?php 
											$i=0;
											
										$productDetails = $connection->query("SELECT * FROM products");
										while($row = $productDetails->fetch_array()){
												  $qnt = $row['quantity']; 

													    $lqnt = $row['lowstock']; 

													    $lqntarr = explode(",", $lqnt);

    													$qntarr = explode(",", $qnt); 
    														
    		
													     if($qntarr[0] <=$lqntarr[0] || $qntarr[1] <=$lqntarr[1]  ){ 
													     	$i++;
													     }

										}
										
										
                                        
                                       
										
										?>

										<h5>Low Stock</h5>

										<h4><?php echo $i; ?></h4>

										<a href="low_stock_report.php">View more</a>

									</div>

								</li> -->

							</ul>

						</div>

					</div>

				</div>

			</div>

		</div>

		

		<!--== BOTTOM FLOAT ICON ==-->

		

		

		<!--======== SCRIPT FILES =========-->

		<script src="js/jquery.min.js"></script>

		<script src="js/bootstrap.min.js"></script>

		<script src="js/materialize.min.js"></script>

		<script src="js/custom.js"></script>

	</body>

	</html>

<?php } else {

	$_SESSION['error_msg'] = "<div class='alert alert-danger'>";

	$_SESSION['error_msg'] .= "<a href='#' class='close' data-dismiss='alert'>&times;</a>";

	$_SESSION['error_msg'] .= "Sorry, You need to login to view that page.</div>";

	header("Location: index.php");

}

?>