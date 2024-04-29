<?php
    session_start();
    require "database.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "deleteTweet") {
        $tweetToDelete = [
            "id" => $_POST["tweet"]
        ];
        
        $request = $database->prepare("DELETE FROM tweet WHERE id = :id");
        if ($request->execute($tweetToDelete)) {
            header("Location: http://localhost/page.php");
            exit();
        }
    }  
?>