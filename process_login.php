<?php

require_once(__DIR__."/includes/config.php");
require_once(__DIR__."/includes/functions.php");

$username = $_POST["username"];
$password = $_POST['password'];

// decrypt
$pass = hash('sha256', $password);

// select user
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysql_query($sql);

// Mysql_num_row is counting table row
$count = mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count == 1) {
    $row = mysql_fetch_assoc($result);
    if ($username == $row['username'] && $pass == $row['password']) {
        // start session
        startSession();

        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row["username"];

        header('Location: /projects/list/');
        return true;
    }
    else {
        header('Location: /index.php?error=Invalid username or password');
        return false;
    }
}
else{
    header('Location: /index.php?error=Username not exists');
    return false;
}




 ?>
