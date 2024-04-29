<?php
    session_start();
    require "database.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "tweet") {
        if ($_POST["content"] != "") {
            $newPost = [
                "content" => $_POST["content"],
            ];
            
            $request = $database->prepare("INSERT INTO tweet (content) VALUES (:content)");
            $tweets = $request->fetchAll();

            if ($request->execute($newPost)) {
                header("Location: http://localhost/page.php");
                exit();
            }
        } else {
            header("Location: http://localhost/page.php");
            exit();
        }
    }
?>