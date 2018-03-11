<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>

<?php $users = getUsers();?>

<?php require_once(__DIR__."/../includes/header.php"); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>User Profile</h2>

        <div class="right-wrapper pull-right">
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-md-12"><?php echo returnPageError(); ?></div>
		<div class="col-md-12 col-lg-9">

			<div class="tabs">
				<ul class="nav nav-tabs tabs-primary">
					<li class="active">
						<a href="#overview" data-toggle="tab" aria-expanded="true">Overview</a>
					</li>
					<li class="">
						<a href="#edit" data-toggle="tab" aria-expanded="false">Edit</a>
					</li>
				</ul>
				<div class="tab-content">
					<div id="overview" class="tab-pane active">

						<h4 class="mb-xlg">Timeline</h4>

						<div class="timeline timeline-simple mt-xlg mb-md">
							<div class="tm-body">
								<div class="tm-title">
									<h3 class="h5 text-uppercase">Latest EDM</h3>
								</div>
								<ol class="tm-items">
                                    <?php
                                    $profile_id = $_SESSION['id'];
                                    $profile_sql = "SELECT * FROM `projects` WHERE `user_id` = $profile_id ORDER BY id DESC LIMIT 3 ";
                                    $profile_res = mysql_query ($profile_sql) or die (mysql_error());

                                    if(mysql_num_rows($profile_res) > 0) {

                                        while ($profile_row = mysql_fetch_assoc($profile_res)) {
    										echo '
                                            <li>
        										<div class="tm-box">
        											<p class="text-muted mb-none">';

                                                        if ($profile_row["project_host"] == 'http://www.11street.my') {
                                                            echo "Deployed : <i class='fa fa-check-square' style='color: green;'></i>";
                                                        }
                                                        else {
                                                            echo "Deployed : <i class='fa fa-remove' style='color: red;'></i>";
                                                        }

                                                    echo '</p>
        											<p>
        												'.$profile_row["title"].'
        											</p>
        										</div>
        									</li>
                                            ';
                                        }
                                	}
                                	else echo '';
                                    ?>
								</ol>
							</div>
						</div>
					</div>
					<div id="edit" class="tab-pane">

						<form class="form-horizontal" method="post" action="process_edit_password.php">
							<h4 class="mb-xlg">Personal Information</h4>
                            <?php
                            $sql = "SELECT * FROM `users` WHERE `id` = $profile_id";
                            $res = mysql_query ($sql) or die (mysql_error());

                            if(mysql_num_rows($res) > 0) {

                                while ($row = mysql_fetch_assoc($res)) {
                                    $firstname = $row['first_name'];
                                    $lastname = $row['last_name'];
                                }
                            }
                            ?>
							<fieldset>
								<div class="form-group">
									<label class="col-md-3 control-label" for="profileFirstName">First Name</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="first_name" value="<?php echo $firstname ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="profileLastName">Last Name</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="last_name" value="<?php echo $lastname ?>">
									</div>
								</div>
							</fieldset>
							<hr class="dotted tall">
							<h4 class="mb-xlg">Change Password</h4>
							<fieldset class="mb-xl">
								<div class="form-group">
									<label class="col-md-3 control-label" for="profileNewPassword">New Password</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="password" value="">
									</div>
								</div>
							</fieldset>
							<div class="panel-footer">
								<div class="row">
									<div class="col-md-9 col-md-offset-3">
										<button type="submit" class="btn btn-primary">Submit</button>
										<button type="reset" class="btn btn-default">Reset</button>
									</div>
								</div>
							</div>

						</form>

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-3">

			<h4 class="mb-md">User Stats</h4>
			<ul class="simple-card-list mb-xlg">
				<li class="primary">
                    <?php
                        // select user
                        $total_edm = "SELECT * FROM projects WHERE user_id = $profile_id AND project_host = 'http://myfo.coding.com'";
                        $total_res = mysql_query($total_edm);

                        // Mysql_num_row is counting table row
                        $count = mysql_num_rows($total_res);
                     ?>
					<h3><?php echo $count ?></h3>
					<p>Non-deployed EDM</p>
				</li>
				<li class="primary">
                    <?php
                        // select user
                        $total_edm = "SELECT * FROM projects WHERE user_id = $profile_id AND project_host = 'http://www.11street.my'";
                        $total_res = mysql_query($total_edm);

                        // Mysql_num_row is counting table row
                        $count = mysql_num_rows($total_res);
                     ?>
					<h3><?php echo $count ?></h3>
					<p>Deployed EDM</p>
				</li>
				<li class="primary">
                    <?php
                        // select user
                        $total_edm = "SELECT * FROM projects WHERE user_id = $profile_id";
                        $total_res = mysql_query($total_edm);

                        // Mysql_num_row is counting table row
                        $count = mysql_num_rows($total_res);
                     ?>
					<h3><?php echo $count ?></h3>
					<p>Total EDM</p>
				</li>
			</ul>
		</div>

	</div>
    <!-- end: page -->
</section>

<?php require_once(__DIR__."/../includes/footer.php"); ?>
