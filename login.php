<?php

    session_start();
    require "database.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["form"] == "login") {
        if (!empty($_POST["username"])) {
            $username = htmlspecialchars($_POST["username"]);

            $request = $database->prepare("SELECT * FROM user WHERE username = ?");
            $request->execute(array($username));

            if ($request->rowCount() > 0) {
                header("Location: http://localhost/page.php");
                exit();
            }
        } else {
            header("Location: http://localhost/index.php");
                exit();
        }
    }
?>