<?php
    try {
        $database = new PDO("mysql:host=localhost;dbname=Twitter", "root", "");
    } catch (PDOException $e) {
        die("Site indisponible");
    }

    // SELECT * FROM user

    // ORDER BY : tri ASC ou DESC
    // LIMIT : limite le nombre de resultat
    // Where : met une condition

    $request = $database->prepare("SELECT id, username, email from user");
    $request->execute();
    
    $users = $request->fetchAll(PDO::FETCH_ASSOC);

    
    ?>