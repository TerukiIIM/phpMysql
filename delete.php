<?php
    session_start();
    require "database.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "deleteUser") {
        $userToDelete = [
            "id" => $_POST["delete"]
        ];
    }  
    
    $request = $database->prepare("DELETE FROM user WHERE id = :id");
    $request->execute($userToDelete);
?>