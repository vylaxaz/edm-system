<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Dashboard
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li class="btn-primary">
						<a style="color:#fff;" href="/projects/create/">
							<i class="fa fa-plus" aria-hidden="true"></i>
							<span>Create Page</span>
						</a>
					</li>
                    <li>
                        <a href="/projects/list/">
                            <?php
                            // select user
                            $sql = "SELECT * FROM projects";
                            $result = mysql_query($sql);

                            // Mysql_num_row is counting table row
                            $count = mysql_num_rows($result);
                             ?>
                            <span class="pull-right label label-primary"><?php echo $count; ?></span>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <span>Newsletter</span>
                        </a>
                    </li>
                    <li>
                        <a href="/projects/list/user.php">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>My EDM</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <hr class="separator">
            <div class="sidebar-widget widget-stats">
				<div class="widget-header">
					<h6>Database</h6>
					<div class="widget-toggle">+</div>
				</div>
				<div class="widget-content">
					<ul>
						<li>
                        <?php
                        $q = mysql_query("SHOW TABLE STATUS");
                        $size = 0;
                        while($row = mysql_fetch_array($q)) {
                            $size += $row["Data_length"] + $row["Index_length"];
                        }

                        $decimals = 2;
                        $mbytes = number_format($size/(1024*1024),$decimals);

                        echo "
							<span class='stats-title'>Total Used</span>
							<span class='stats-complete'>$mbytes</span>
							<div class='progress'>
								<div class='progress-bar progress-bar-primary progress-without-number' role='progressbar' aria-valuenow='$mbytes' aria-valuemin='0' aria-valuemax='1000' style='width: $mbytes%;'>
									<span class='sr-only'>$mbytes Complete</span>
								</div>
							</div>
                        ";
                         ?>
						</li>
					</ul>
				</div>
			</div>
        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>

    </div>

</aside>
<!-- end: sidebar -->
