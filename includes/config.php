<?php
    define("DATABASE_NAME", "fl11strtedm");
    define("DATABASE_USERNAME", "11street");
    define("DATABASE_PASSWORD", "fl11str33t!2017");
?>

<?php
    mysql_connect('localhost', '11street', 'fl11str33t!2017') or die(mysql_error());
    mysql_select_db("fl11strtedm") or die(mysql_error());
?>

<?php
    $con = mysql_connect('localhost', '11street', 'fl11str33t!2017');
    $db = mysql_select_db('fl11strtedm', $con);
    if ($db == false) die (mysql_error());
?>

<?php
    $mysqli = new mysqli("localhost","11street","fl11str33t!2017","fl11strtedm");
    if ($mysqli->connect_error) die("Database connection failed".$mysql->connect_error);
 ?>
