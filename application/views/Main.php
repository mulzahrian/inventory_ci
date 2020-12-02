<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
	<div class="wrapper">

		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block mr-20 pull-left"
				href="javascript:void(0);"><i class="fa fa-bars"></i></a>
			<a href="index.html"><img class="brand-img pull-left" src="<?php echo base_url()?>assets/eureka.png"
					alt="brand" /></a>
			
			<ul class="nav navbar-right top-nav pull-right">

				

				<li class="dropdown">
					<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">User<span
							class="user-online-status"></span></a>
					<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

						<!-- <li class="divider"></li> -->
						<li>
							<a href="<?php echo base_url('login')?>"><i class="fa fa-fw fa-power-off" ></i> Log Out</a>
						</li>
					</ul>
				</li>
			</ul>
			<div class="collapse navbar-search-overlap" id="site_navbar_search">
				<form role="search">
					<div class="form-group mb-0">
						<div class="input-search">
							<div class="input-group">
								<input type="text" id="overlay_search" name="overlay-search" class="form-control pl-30"
									placeholder="Search">
								<span class="input-group-addon pr-30">
									<a href="javascript:void(0)" class="close-input-overlay"
										data-target="#site_navbar_search" data-toggle="collapse" aria-label="Close"
										aria-expanded="true"><i class="fa fa-times"></i></a>
								</span>
							</div>
						</div>
					</div>
				</form>
			</div>
		</nav>
		<!-- /Top Menu Items -->

		<?php $this->load->view('_sidebar'); ?>

		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">

				<!-- Title -->
				<div class="row heading-bg bg-green">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<?php $this->load->view($page_content); ?>
					</div>
				</div>
				<!-- /Row -->
			</div>

			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-5">
						<a href="index.html" class="brand mr-30"><img src="<?php echo base_url()?>assets/eureka.png"
								alt="logo" /></a>
						<ul class="footer-link nav navbar-nav">
							
						</ul>
					</div>
					<div class="col-sm-7 text-right">
						<p>2020 &copy; </p>
					</div>
				</div>
			