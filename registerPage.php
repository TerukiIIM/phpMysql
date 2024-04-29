<!DOCTYPE html>

<html lang="fr">
    <head>
        <title>Twitter</title>

        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" href="Images/twitter.png">
        
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    </head>

    <style>
        body {
            background: #262a2f;
        }
    </style>

    <body>
        <div class="login">
            <i class="logo ri-twitter-fill"></i>
            <h2>Sign up to Twitter</h2>
            <form action="register.php" method="POST">
                <input type="hidden" name="form" value="register">
                <input type="text" name="username" placeholder="Username" autocomplete="off">
                <input type="email" name="email" placeholder="Email" autocomplete="off">
                <input type="password" name="password" placeholder="Password" autocomplete="off">
                <button type="submit">Register</button>
            </form>
            <p>Have an account ? <a href="http://localhost/">Login</a></p>
        </div>
        
    </body>
</html>
