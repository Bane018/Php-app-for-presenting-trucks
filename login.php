<?php
require_once("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';

    if (!empty($username) && !empty($password)) {
        $stmt = $con->prepare("SELECT * FROM user WHERE username=:username AND password=:password");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        $row = $stmt->fetch();

        if($row){
            session_start();
            $_SESSION["username"] = $row["username"];
            header("Location: admin_content/truck_add.php");
            exit; 
        }
        else{
            $errorMessage = "Only admin can access this page";
        }
    }
}

if(isset($errorMessage)) {
    echo $errorMessage;
}
