<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>

<?php blockpage() ?>

<?php

    $id = $_GET["id"];

    if(deleteProject($id)){
        header("Location: /projects/list/");
    }
    else{
        header("Location: /projects/list/?error=Couldn't delete page");
    }

 ?>
