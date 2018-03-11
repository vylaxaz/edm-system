<?php
// database connection
class DB
{
    private static $connection;

    public static function getConnection(){
        if(!self::$connection){
            $connectionString = "mysql:dbname=".DATABASE_NAME.";host=localhost";
            self::$connection = new PDO($connectionString, DATABASE_USERNAME, DATABASE_PASSWORD);
        }

        return self::$connection;
    }
}


function findUser($username){
    $pdo = DB::getConnection();

    $sql = "SELECT * FROM users WHERE username = :username";

    $statement = $pdo->prepare($sql);

    $executed = $statement->execute([
        ":username" => $username
    ]);

    if(!$executed){
        print_r($statement->errorInfo());
        exit("An error occured executing statement");
    }

    $result = $statement->fetchAll();

    return $result;
}

function loginUser($user){
    startSession();

    $_SESSION["id"] = $user["id"];
    $_SESSION["username"] = $user["username"];

    return $_SESSION["username"] && $_SESSION["id"];
}

function startSession(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
}

function validateLogin($details){
    $toBeValidated = ["username", "password"];
    $errors = [];

    foreach($toBeValidated as $input){
        if(!isset($details[$input]) || strlen(trim($details[$input])) ===0) {
            $errors[$input] = "$input cannot be empty";
        }
    }

    if(count($errors) !== 0){
        return [false, $errors];
    }

    return [true, $errors];
}

function returnPageError(){
    $errorString = "";

    if(isset($_GET["error"])){
        if(is_array($_GET["error"])){
            foreach($_GET["error"] as $error){
                $errorString =
                    $errorString . "<p><span class='label label-danger'>{$error}</span></p>";
            }
        }
        else{
            $error = $_GET["error"];
            $errorString = "<p><span class='label label-danger'>{$error}</span></p>";
        }
    }
    elseif(isset($_GET["msg"])){
        if(is_array($_GET["msg"])){
            foreach($_GET["msg"] as $error){
                $errorString =
                    $errorString . "<p><span class='label label-success'>{$msg}</span></p>";
            }
        }
        else{
            $msg = $_GET["msg"];
            $errorString = "<p><span class='label label-success'>{$msg}</span></p>";
        }
    }

    return $errorString;
}

function getPages(){
    $pdo = DB::getConnection();

    $sql = "SELECT pages.*, u1.username AS creator, u2.username AS updater FROM pages
            INNER JOIN users u1 ON u1.id = pages.user_id
            INNER JOIN users u2 ON u2.id = pages.last_updated_by";

    $result = $pdo->query($sql);

    return $result;
}

function getProjects(){

    $pdo = DB::getConnection();

    $sql = "SELECT projects.*, u1.first_name AS creator, u2.first_name AS updater FROM projects
            LEFT JOIN users u1 ON u1.id = projects.user_id
            LEFT JOIN users u2 ON u2.id = projects.last_updated
            ORDER BY id DESC";

    $result = $pdo->query($sql);

    return $result;
}

function getUserProjects(){

    $pdo = DB::getConnection();

    $sql = "SELECT projects.*, u1.first_name AS creator, u2.first_name AS updater FROM projects
            LEFT JOIN users u1 ON u1.id = projects.user_id
            LEFT JOIN users u2 ON u2.id = projects.last_updated
            WHERE user_id = $_SESSION[id]
            ORDER BY id DESC";

    $result = $pdo->query($sql);

    return $result;
}

function getPage($id){

    $pdo = DB::getConnection();

    $sql = "SELECT * FROM pages WHERE id = :id";

    $statement = $pdo->prepare($sql);

    $statement->execute([
        ":id" => $id
    ]);

    $row = $statement->fetch();

    return $row;

}

function deletePost($id){

    $pdo = DB::getConnection();

    $sql = "DELETE FROM pages WHERE id = :id";

    $statement = $pdo->prepare($sql);

    $deleted = $statement->execute([
        ":id" => $id
    ]);

    return $deleted;

}

function blockPage(){
    startSession();

    if(!isset($_SESSION["id"])) {
        header("Location: /index.php?error=You don't have access to that page. Please log in");
    }
}

function returnPageMessage(){
    $infoString = "";

    if(isset($_GET["message"])){
        if(is_array($_GET["message"])){
            foreach($_GET["message"] as $message){
                $infoString .= "<p><span class='label label-danger'>{$message}</span></p>";
            }
        }
        else{
            $message = $_GET['message'];
            $infoString = "<p><span class='label label-danger'>{$message}</span></p>";
        }
    }

    return $infoString;
}

function getUnpublishedPages(){
    $pdo = DB::getConnection();

    $sql = "SELECT id, title, body FROM pages WHERE published = 0";

    $result = $pdo->query($sql);

    return $result;
}

function publishPage($id){
    $pdo = DB::getConnection();

    $sql = "UPDATE pages SET published = 1 WHERE id = :id";

    $statement = $pdo->prepare($sql);

    $editted = $statement->execute([
        ":id" => $id
    ]);

    return $editted;
}

function createUser($data){
    $pdo = DB::getConnection();

    $sql = "INSERT INTO users (username, password, first_name, last_name) VALUES(:username, :password, :first_name, :last_name)";

    $statement = $pdo->prepare($sql);

    $inserted = $statement->execute([
        ":username" => $data["username"],
        ":password" => $data["password"],
        ":first_name" => $data["first_name"],
        ":last_name" => $data["last_name"]
    ]);

    return $inserted;
}

function getUsers(){
    $pdo = DB::getConnection();

    $sql = "SELECT id, username, first_name, last_name FROM users";

    $result = $pdo->query($sql);

    return $result;
}

function getUser($id){

    $pdo = DB::getConnection();

    $sql = "SELECT * FROM users WHERE id = :id";

    $statement = $pdo->prepare($sql);

    $statement->execute([
        ":id" => $id
    ]);

    $row = $statement->fetch();

    return $row;

}

function editUser($id, $data){

    $pdo = DB::getConnection();

    $sql = "UPDATE users SET username = :username, first_name = :first_name, last_name = :last_name WHERE id = :id";

    $statement = $pdo->prepare($sql);

    $editted = $statement->execute([
        ":id" => $id,
        ":username" => $data["username"],
        ":first_name" => $data["first_name"],
        ":last_name" => $data["last_name"]
    ]);

    return $editted;

}

function editUserPassword($id, $data){

    $pdo = DB::getConnection();

    $sql = "UPDATE users SET password = :password WHERE id = :id";

    $statement = $pdo->prepare($sql);

    $editted = $statement->execute([
        ":id" => $id,
        ":password" => $data["password"]
    ]);

    return $editted;

}

function deleteUser($id){

    $pdo = DB::getConnection();

    $sql = "DELETE FROM users WHERE id = :id";

    $statement = $pdo->prepare($sql);

    $deleted = $statement->execute([
        ":id" => $id
    ]);

    return $deleted;

}

function doValidation($details, $toBeValidated){
    $errors = [];

    foreach ($toBeValidated as $input) {
        if(!isset($details[$input]) || strlen($details[$input]) === 0){
            $errors[$input] = "$input cannot be empty";
        }
    }

    if(count($errors) !== 0){
        return [false, $errors];
    }

    return [true, []];

}

function projectCategory(){
    $pdo = DB::getConnection();

    $sql = "SELECT cid, category FROM category";

    $result = $pdo->query($sql);

    return $result;
}

?>

<!-- Projects -->
<?php

function getProject($id){

    $pdo = DB::getConnection();

    $sql = "SELECT * FROM projects WHERE id = :id";

    $statement = $pdo->prepare($sql);

    $statement->execute([
        ":id" => $id
    ]);

    $row = $statement->fetch();

    return $row;

}

function deleteProject($id){

    $pdo = DB::getConnection();

    $sql = "DELETE projects, products, banners, navigations, product_category
            FROM projects
            LEFT JOIN products ON products.product_id = projects.id
            LEFT JOIN banners ON banners.banner_id = projects.id
            LEFT JOIN navigations ON navigations.nav_id = projects.id
            LEFT JOIN product_category ON product_category.product_category_id = projects.id
            WHERE projects.id = :id";

    $statement = $pdo->prepare($sql);

    $deleted = $statement->execute([
        ":id" => $id
    ]);

    return $deleted;

}
?>
