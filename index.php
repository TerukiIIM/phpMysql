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
            <h2>Log in to Twitter</h2>
            <button><i class="ri-google-fill"> Sign in with Google</i></button>
            <button><i class="ri-apple-fill"> Sign in with Apple</i></button>
            <hr>
            <span>Or</span>
            <form action="login.php" method="POST">
                <input type="hidden" name="form" value="login">
                <input type="text" name="username" placeholder="Username" autocomplete="off">
                <input type="password" name="password" placeholder="Password" autocomplete="off">
                <button type="submit">Login</button>
            </form>
            <button type="submit">Forget password</button>
            <p>Don't have an account ? <a href="http://localhost/registerPage.php">Register</a></p>
        </div>
        
    </body>
</html>
