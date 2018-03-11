<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>

<?php blockPage(); ?>

<?php require_once(__DIR__."/../includes/header.php"); ?>

<div id="page-wrapper">

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                All Pages
            </h1>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Page</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($projects as $project): ?>
                    <tr>
                        <td><?php echo $project["title"]; ?></td>
                        <td>
                            <a href="/projects/edit_product.php?id=<?php echo $project['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="/projects/delete.php?id=<?php echo $project['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

</div>

<?php require_once(__DIR__."/../includes/footer.php"); ?>
