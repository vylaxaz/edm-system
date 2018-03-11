<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>

<?php require_once(__DIR__."/../includes/header.php"); ?>

<div id="page-wrapper">

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Add User
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php echo returnPageError(); ?>
        </div>

        <div class="col-lg-12">

            <form action="process_add.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Create User">
                </div>
            </form>

        </div>
    </div>

</div>

</div>

<?php require_once(__DIR__."/../includes/footer.php"); ?>
