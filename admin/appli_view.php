<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>HRMS</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header" class="transparent-nav">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.html">
							<h1 class="logoname">HRMS</h1>
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="../admin/admin_index.php">Home</a></li>
						<li><a href="../admin/hr.php">Add - HR</a></li>
						<li><a href="../admin/employe.php">Add - Employee</a></li>
						<li><a href="../admin/logout.php">Logout</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="../admin/admin_index.php">Home</a></li>
							<li>Admin</li>
                            <li>Applicants</li>
						</ul>
						<h1 class="white-text">Admin Page</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->


			
<section>
    <div class="container add-emp">		
			<center><h1 class="p-2 mb-0 bg-dark text-light"><strong>Application Details</strong></h1><br></center>
			<table class="table table-bordered table-hover">
				<!-- <thead class="thead-dark"> -->
					<tr>			
						<th class="p-3 mb-2 bg-info text-light">Name </th>
						<th class="p-3 mb-2 bg-info text-light">Phone</th>
						<th class="p-3 mb-2 bg-info text-light">Email</th>
						<th class="p-3 mb-2 bg-info text-light">DOB</th>
						<th class="p-3 mb-2 bg-info text-light">Address</th>
						<th class="p-3 mb-2 bg-info text-light">Post Of Application</th>
						<th class="p-3 mb-2 bg-info text-light">Experience</th>
						<th class="p-3 mb-2 bg-info text-light">Expected CTC</th>
						<th class="p-3 mb-2 bg-info text-light">Cover Letter</th>

						<!-- <th class="p-3 mb-2 bg-info text-light">Update</th> -->
						<th class="p-3 mb-2 bg-info text-light">Delete</th>
					</tr>
					<?php
						include '../connection.php';
						$sql = "select * from application_form";
						$result = mysqli_query($con, $sql);           
						while ($data = mysqli_fetch_assoc($result))			 
						{
					?>      <td><?php echo $data['name'];?></td>
							<td><?php echo $data['phonenumber']?></td>
							<td><?php echo $data['email']?></td>   
							<td><?php echo $data['date_of_birth'];?></td>  
							<td><?php echo $data['address'];?></td>
							<td><?php echo $data['post_of_application'];?></td>
							<td><?php echo $data['experience'];?></td>
                            <td><?php echo $data['expected_ctc'];?></td>
                            <td><?php echo $data['cover_letter'];?></td>

   
              <!-- <td><a class="btn btn-success py-2 px-3" href="employee_up.php?id=<?php echo $data['id']; ?>">Update</a> </td> -->
              <td><a class="btn btn-danger py-2 px-3"  href="delete_application.php?id=<?php echo $data['id']; ?>">Delete</a> </td>
						</tr> 
					<?php    
						}
					?>
		    </table>
		</div>
	</div>
</section>
<br><br><br><br><br>


		
		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" href="index.html">
								<h3 class="text-secondary">Human Resource Management System</h3>
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav">
						<li><a href="../admin/admin_index.php">Home</a></li>
						<li><a href="../admin/hr.php">Add - HR</a></li>
						<li><a href="../admin/employe.php">Add - Employee</a></li>
						<li><a href="../admin/logout.php">Logout</a></li>
						</ul>
					</div>
					<!-- /footer nav -->

				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright 2022. All Rights Reserved.  |  </a>@Cyber Prism</span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>
