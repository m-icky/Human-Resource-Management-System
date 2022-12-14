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
						<a class="logo" href="../user/user_index.php">
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
						<li><a href="../user/user_index.php">Home</a></li>
                        <li><a href="logout.php">Logout</a></li>
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
							<li><a href="../user/user_index.php">Home</a></li>
                            <li>User</li>
						</ul>
						<h1 class="white-text">Welcome</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center" id="section-header text-center">
						<h2>Explore Vacancies</h2>
						<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
					</div>
				</div>
				<!-- /row -->

				<!-- courses -->
				<div id="courses-wrapper">

					<!-- row -->
					<div class="row">
					<?php
                include '../connection.php';
            $query = "select * from add_vacancy";
            $result = mysqli_query($con, $query);
            
            while ($data = mysqli_fetch_assoc($result)) {
                ?>

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="app.php" class="course-img">
									<img src="./img/course01.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="app.php"><?php echo $data['post_name'];?></a>
								<div class="course-details">
								<p>Experience -<?php echo $data['experience'];?></p>
								<p>Salary -<?php echo $data['salary'];?></p>
								<p>Place -<?php echo $data['place'];?></p>

								</div>
							</div>
						</div>
						<?php
                  }
                ?> 
						<!-- /single course -->

						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="app.php" class="course-img">
									<img src="./img/course02.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="app.php">CSS Expert </a>
								<div class="course-details">
									<span class="course-category">Web Design</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="app.php" class="course-img">
									<img src="./img/course03.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="app.php">The Ultimate Drawing </a>
								<div class="course-details">
									<span class="course-category">Drawing</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="app.php" class="course-img">
									<img src="./img/course04.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="app.php">The Complete Web Development</a>
								<div class="course-details">
									<span class="course-category">Web Development</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">

						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="app.php" class="course-img">
									<img src="./img/course05.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="app.php">PHP Tips, Tricks, and Techniques</a>
								<div class="course-details">
									<span class="course-category">Web Development</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="app.php" class="course-img">
									<img src="./img/course06.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="app.php">All You Need To Know About Web Design</a>
								<div class="course-details">
									<span class="course-category">Web Design</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="app.php" class="course-img">
									<img src="./img/course07.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="app.php">How to Get Started in Photography</a>
								<div class="course-details">
									<span class="course-category">Photography</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->


						<!-- single course -->
						<!-- <div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="app.php" class="course-img">
									<img src="./img/course08.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="app.php">Typography From A to Z</a>
								<div class="course-details">
									<span class="course-category">Typography</span>
								</div>
							</div>
						</div> -->
						<!-- /single course -->

					</div>
					<!-- /row -->

				</div>
				<!-- /courses -->

				<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="user_index.php">More Vacancies</a>
					</div>
				</div>

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->

		<!-- Why us -->
		<div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>Why HRMS</h2>
						<p class="lead">Human Resource Management System</p>
					</div>

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-flask"></i>
							<div class="feature-content">
								<h4>Vacancies</h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-users"></i>
							<div class="feature-content">
								<h4>Work</h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-comments"></i>
							<div class="feature-content">
								<h4>Community</h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

				</div>
				<!-- /row -->


			</div>
			<!-- /container -->

		</div>
		<!-- /Why us -->

		

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
						<li><a href="../user/user_index.php">Home</a></li>
                        <li><a href="logout.php">Logout</a></li>
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
