<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>

<?php

$id = $_GET['id'];
startSession();

if($_SESSION['id'] == $id){
    header("Location: /users/index.php?error=You cannot delete your own account");
}

if(deleteUser($id)){
    header("Location: /users");
}
else{
    header("Location: /users?error=Could not delete user");
}

 ?>
