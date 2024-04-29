<?php
    session_start();
    require "database.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "register") {  
        
        if ($_POST["username"] != "" && $_POST["email"]) {
            $newUser = [
                "username" => $_POST["username"],
                "email" => $_POST["email"],
                "password" => $_POST["password"]    
            ];
            
            $request = $database->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :password)");
            
            if ($request->execute($newUser)) {
                echo "User successful add";
                header("Location: http://localhost/index.php");
                exit();
            } else {
                header("Location: http://localhost/registerPage.php");
                exit();
            }
        } else {
            header("Location: http://localhost/registerPage.php");
                exit();
        }
    }
?>