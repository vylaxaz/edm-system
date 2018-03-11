<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>

<?php blockPage(); ?>

<?php

startSession();

$id = $_SESSION['id'];

$user = getUser($id);
$_POST["password"] = hash('sha256', $_POST["password"]);

if(editUserPassword($id, $_POST)){
    header("Location: /users/index.php?msg=Password changed");
}
else{
    header("Location: /users/index.php?error=Could not change password");
}

 ?>
