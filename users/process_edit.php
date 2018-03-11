<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>

<?php blockPage(); ?>

<?php

$id = $_POST['id'];

if(editUser($id, $_POST)){
    $user = getUser($id);
    $_SESSION['username'] = $user['username'];
    header("Location: /users/edit.php?id={$id}");
}
else{
    header("Location: /users/edit.php?id={$id}&error=Couldn't update user");
}

?>
