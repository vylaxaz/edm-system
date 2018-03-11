<?php require_once(__DIR__."/../../includes/config.php"); ?>
<?php require_once(__DIR__."/../../includes/functions.php"); ?>

<?php blockPage(); ?>

<?php require_once(__DIR__."/../../includes/header.php"); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Create Project</h2>

        <div class="right-wrapper pull-right">
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row template-build">
        <div class="col-md-12">
            <?php echo returnPageError(); ?>
        </div>
		<div class="col-md-4 col-lg-3">

			<section class="panel">
				<a href="dailydeal.php">
					<div class="panel-body">
						<div class="thumb-info mb-md">
							<img src="/assets/images/template4x2_category.jpg" class="rounded img-responsive">
							<div class="thumb-info-title">
								<span class="thumb-info-inner"></span>
								<span class="thumb-info-type">Daily Deals</span>
							</div>
						</div>
					</div>
				</a>
			</section>

		</div>
		<div class="col-md-4 col-lg-3">

			<section class="panel">
				<a href="freestyle.php">
					<div class="panel-body">
						<div class="thumb-info mb-md">
							<img src="/assets/images/template_default.jpg" class="rounded img-responsive">
							<div class="thumb-info-title">
								<span class="thumb-info-inner"></span>
								<span class="thumb-info-type">Freestyle | Horizontal</span>
							</div>
						</div>
					</div>
				</a>
			</section>

		</div>
		<div class="col-md-4 col-lg-3">

			<section class="panel">
				<a href="twocat.php">
					<div class="panel-body">
						<div class="thumb-info mb-md">
							<img src="/assets/images/twocat.jpg" class="rounded img-responsive">
							<div class="thumb-info-title">
								<span class="thumb-info-inner"></span>
								<span class="thumb-info-type">Twocat</span>
							</div>
						</div>
					</div>
				</a>
			</section>

		</div>
		<div class="col-md-4 col-lg-3">

			<section class="panel">
				<a href="fourcat.php">
					<div class="panel-body">
						<div class="thumb-info mb-md">
							<img src="/assets/images/fourcat.jpg" class="rounded img-responsive">
							<div class="thumb-info-title">
								<span class="thumb-info-inner"></span>
								<span class="thumb-info-type">Fourcat</span>
							</div>
						</div>
					</div>
				</a>
			</section>

		</div>
		<div class="col-md-4 col-lg-3">

			<section class="panel">
				<a href="cid_16.php">
					<div class="panel-body">
						<div class="thumb-info mb-md">
							<img src="/assets/images/template3x3.jpg" class="rounded img-responsive">
							<div class="thumb-info-title">
								<span class="thumb-info-inner"></span>
								<span class="thumb-info-type">Template 3x3</span>
							</div>
						</div>
					</div>
				</a>
			</section>

		</div>
		<div class="col-md-4 col-lg-3">

			<section class="panel">
				<a href="code.php">
					<div class="panel-body">
						<div class="thumb-info mb-md">
							<img src="/assets/images/template_diy.jpg" class="rounded img-responsive">
							<div class="thumb-info-title">
								<span class="thumb-info-inner"></span>
								<span class="thumb-info-type">DIY | Do It Youself</span>
							</div>
						</div>
					</div>
				</a>
			</section>

		</div>
    </div>
    <!-- end: page -->
</section>

<?php require_once(__DIR__."/../../includes/footer.php"); ?>
