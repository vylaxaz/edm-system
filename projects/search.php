<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>

<?php blockPage(); ?>

<?php require_once(__DIR__."/../includes/header.php"); ?>

<?php

$find = $_POST['search'];

// We perform a bit of filtering
$find = strtoupper($find);
$find = strip_tags($find);
$find = trim ($find);

//Now we search for our search term, in the field the user specified
$iname = mysql_query("SELECT * FROM projects WHERE title LIKE '%$find%' ORDER BY `title` DESC");

$return_iname = mysql_query("SELECT count(*) FROM projects WHERE title LIKE '%$find%'");
$count_iname = mysql_fetch_array($return_iname);
?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Searching Results for: <?php echo $find ?></h2>

        <div class="right-wrapper pull-right">
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

	<div class="search-content">
		<div class="search-control-wrapper">
			<form action="search.php" method="post">
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="search" class="form-control" value="<?php echo $find ?>" required>
						<span class="input-group-btn">
							<button class="btn btn-primary" type="submit">Search</button>
						</span>
					</div>
				</div>
			</form>
		</div>

		<div class="tab-content">
			<div class="tab-pane active">
				<p class="total-results text-muted">Showing <?php echo "$count_iname[0]" ?> results</p>

				<ul class="list-unstyled search-results-list">
                    <table class="table table-no-more table-bordered table-striped mb-none">
                        <thead>
                            <tr>
                                <th>Page</th>
                                <th align="right" style="text-align:right;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
        					<?php
        						$anymatches = mysql_num_rows($iname);
        						if ($anymatches == 0) {
        							echo "Sorry, but we can not find an entry to match your query...<br><br>";
        						}
        						// results displayed
        						while($result = mysql_fetch_array($iname)) {
                                    echo '<tr>';
                                            echo '<td data-title="Title">'.$result['title'].'</td>';
                                            echo '<td align="right"  data-title="Actions">';
                                            echo '<a href="/projects/category/'.$result["project_category"].'/'.$result["title"].'" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a>';
                                            if ($result['project_category'] == 7 ) {
                                                echo '
                                                    <a href="/projects/edit/edit_freestyle.php?id='.$result["id"].'&category='.$result["project_category"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                ';
                                            }
                                            elseif ($result['project_category'] == 8 ) {
                                                echo '
                                                    <a href="/projects/edit/edit_fourcat.php?id='.$result["id"].'&category='.$result["project_category"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                ';
                                            }
                                            else
                                                echo '
                                                    <a href="/projects/edit_product.php?id='.$result["id"].'&category='.$result["project_category"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                ';
                                            echo '</td>';
                                    echo '</tr>';
        						}
        					?>
                        </tbody>
                    </table>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php require_once(__DIR__."/../includes/footer.php"); ?>
