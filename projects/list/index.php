<?php require_once(__DIR__."/../../includes/config.php"); ?>
<?php require_once(__DIR__."/../../includes/functions.php"); ?>

<?php blockPage(); ?>

<?php $pages = getProjects(); ?>

<?php require_once(__DIR__."/../../includes/header.php"); ?>
<link rel="stylesheet" href="http://preview.oklerthemes.com/porto-admin/1.5.5/assets/vendor/pnotify/pnotify.custom.css" />

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Newsletter</h2>

        <div class="right-wrapper pull-right">
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-md-12">
            <?php echo returnPageError(); ?>
        </div>
    </div>
    <div class="row">
        <section class="panel">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-none">
                        <thead>
                            <tr>
                                <th>Page</th>
                                <th>Created by</th>
                                <th>Last Updated by</th>
                                <th align="right" style="text-align:right;">Actions</th>
                                <th width="10" align="right" style="text-align:right;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($pages as $page): ?>
                                <tr>
                                    <td><?php echo $page["title"]; ?></td>
                                    <td><?php echo $page["creator"]; ?></td>
                                    <td><?php echo $page["updater"]; ?></td>
                                    <td align="right" class="actions">
                                        <a href="/projects/category/<?php echo $page['project_category'] ?>/<?php echo $page['title'] ?>" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <?php if ($page['project_category'] == 7 ) {
                                            echo '
                                                <a href="/projects/edit/edit_freestyle.php?id='.$page["id"].'&category='.$page["project_category"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            ';
                                        }
                                        elseif ($page['project_category'] == 8 ) {
                                            echo '
                                                <a href="/projects/edit/edit_fourcat.php?id='.$page["id"].'&category='.$page["project_category"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            ';
                                        }
                                        elseif ($page['project_category'] == 9 ) {
                                            echo '
                                                <a href="/projects/edit/edit_code.php?id='.$page["id"].'&category='.$page["project_category"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            ';
                                        }
                                        elseif ($page['project_category'] == 10 ) {
                                            echo '
                                                <a href="/projects/edit/edit_twocat.php?id='.$page["id"].'&category='.$page["project_category"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            ';
                                        }
                                        elseif ($page['project_category'] == 11 ) {
                                            echo '
                                                <a href="/projects/edit/cid_11.php?id='.$page["id"].'&category='.$page["project_category"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            ';
                                        }
                                        elseif ($page['project_category'] == 12 ) {
                                            echo '
                                                <a href="/projects/edit/cid_12.php?id='.$page["id"].'&category='.$page["project_category"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            ';
                                        }
                                        elseif ($page['project_category'] == 13 ) {
                                            echo '
                                                <a href="/projects/edit/cid_13.php?id='.$page["id"].'&category='.$page["project_category"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            ';
                                        }
                                        elseif ($page['project_category'] == 14 ) {
                                            echo '
                                                <a href="/projects/edit/cid_14.php?id='.$page["id"].'&category='.$page["project_category"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            ';
                                        }
                                        elseif ($page['project_category'] == 15 ) {
                                            echo '
                                                <a href="/projects/edit/cid_15.php?id='.$page["id"].'&category='.$page["project_category"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            ';
                                        }
                                        elseif ($page['project_category'] == 16 ) {
                                            echo '
                                                <a href="/projects/edit/cid_16.php?id='.$page["id"].'&category='.$page["project_category"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            ';
                                        }
                                        else
                                            echo '
                                                <a href="/projects/edit_product.php?id='.$page["id"].'&category='.$page["project_category"].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            ';
                                        ?>
                                        <?php if ($_SESSION['id'] == $page['user_id']): ?>
                                            <a class="modal-basic" href="#modal_<?php echo $page['id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            <?php ob_start(); ?>
                                            <div id="modal_<?php echo $page['id'] ?>" class="modal-block modal-block-primary mfp-hide">
                                                <section class="panel">
                                                    <div class="panel-body text-center">
                                                        <div class="modal-wrapper">
                                                            <div class="modal-icon center">
                                                                <i class="fa fa-question-circle"></i>
                                                            </div>
                                                            <div class="modal-text">
                                                                <h4>Are you sure?</h4>
                                                                <p>Are you sure that you want to delete <?php echo $page["title"]; ?>?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <footer class="panel-footer">
                                                        <div class="row">
                                                            <div class="col-md-12 text-right">
                                                                <a class="btn btn-primary" href="/projects/delete.php?id=<?php echo $page['id'] ?>">Confirm</a>
                                                                <button class="btn btn-default modal-dismiss">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </footer>
                                                </section>
                                            </div>
                                            <?php ob_end_flush(); ?>
                                        <?php endif; ?>
                                    </td>
                                    <td align="center">
                                        <?php
                                            if ($page["project_host"] == 'http://myfo.coding.com') {
                                                echo "<i class='fa fa-remove' style='color: red;'></i>";
                                            }
                                            else {
                                                echo "<i class='fa fa-check-square' style='color: green;'></i>";
                                            }
                                        ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <!-- end: page -->
</section>
<?php require_once(__DIR__."/../../includes/footer.php"); ?>
