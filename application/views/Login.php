<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Login-Inventory</title>
	<meta name="description" content="Kenny is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords"
		content="admin, admin dashboard, admin template, cms, crm, Kenny Admin, kennyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/favicon.ico">
	<link rel="icon" href="<?php echo base_url() ?>assets/favicon.ico" type="image/x-icon">

	<!-- vector map CSS -->
	<link
		href="<?php echo base_url() ?>assets/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css"
		rel="stylesheet" type="text/css" />

	<!-- Custom CSS -->
	<link href="<?php echo base_url() ?>assets/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->

	<div class="wrapper pa-0">

		<!-- Main Content -->
		<div class="page-wrapper pa-0 ma-0">
			<div class="container-fluid">
				<!-- Row -->
				<div class="table-struct full-width full-height">
					<div class="table-cell vertical-align-middle">
						<div class="auth-form  ml-auto mr-auto no-float">
							<div class="panel panel-default card-view mb-0">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Sign In</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<!-- test -->

													<form action="<?php echo base_url();?>login/check" method="post">
        <?php if ($this->session->flashdata('pesan')) { ?>
          <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          </button>
          <?php echo $this->session->flashdata('pesan'); ?>
        </div>
      <?php } else if ($this->session->flashdata('warning')) {
        ?>
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <?php echo $this->session->flashdata('warning'); ?>
        </div>
      <?php } else if ($this->session->flashdata('gagal')) {
        ?>
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <?php echo $this->session->flashdata('gagal'); ?>
        </div>
      <?php } ?>
      <div class="form-group has-feedback">

        <input type="text" class="form-control" name="nama_user" placeholder="username">

      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">

      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label></label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


													<!-- end -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
			</div>

		</div>
		<!-- /Main Content -->

	</div>

	<script src="<?php echo base_url() ?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>

	<script src="<?php echo base_url() ?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script
		src="<?php echo base_url() ?>assets/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js">
	</script>

	<script src="<?php echo base_url() ?>assets/dist/js/jquery.slimscroll.js"></script>

	<script src="<?php echo base_url() ?>assets/dist/js/dropdown-bootstrap-extended.js"></script>

	<script src="<?php echo base_url() ?>assets/dist/js/init.js"></script>
</body>

</html>
