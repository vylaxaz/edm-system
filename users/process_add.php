<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>

<?php

$_POST["password"] = hash('sha256', $_POST["password"]);

if(createUser($_POST)){
    header("Location: /users/index.php");
}
else{
    header("Location: /users/add.php?error=Couldn't create user");
}

?>
