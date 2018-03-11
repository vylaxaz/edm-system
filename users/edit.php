<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>

<?php blockPage(); ?>

<?php $user = getUser($_GET['id']); ?>

<?php require_once(__DIR__."/../includes/header.php"); ?>

<div id="page-wrapper">

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Edit User
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php echo returnPageError(); ?>
        </div>

        <div class="col-lg-12">

            <form action="process_edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $user['username'] ?>">
                </div>

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $user['first_name'] ?>">
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo $user['last_name'] ?>">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary pull-right" value="Update User">
                </div>
            </form>

            <?php if($_SESSION['username'] == $user['username']): ?>
                <?php if(password_verify($user['username'], $user['password'])): ?>
                    <p>
                        <span class="label label-danger">
                            You are adviced to change your password as it's currently set as your username.
                        </span>
                    </p>
                <?php endif; ?>

                <h1 class="page-header">
                    Update User Password
                </h1>
                <form action="process_edit_password.php" method="post">
                    <div class="form-group">
                        <label for="old_password">Old Password</label>
                        <input type="password" name="old_password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input type="password" name="new_password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary pull-right" value="Change Password">
                    </div>
                </form>
            <?php endif; ?>

        </div>
    </div>

</div>

</div>


<?php require_once(__DIR__."/../includes/footer.php"); ?>
