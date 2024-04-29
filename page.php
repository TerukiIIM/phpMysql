<?php
    require_once "database.php";

    $request = $database->prepare("SELECT * FROM tweet ORDER BY id DESC");
    $request->execute();

    $allTweet = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>

<html lang="fr">
    <head>
        <title>Twitter</title>

        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/x-icon" href="Images/twitter.png">
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <style>
        
    </style>

    <body>
        <!-- SIDEBAR -->
        <div class="sidebar">
            <i class="fab fa-twitter"></i>

            <div class="sidebarOption active">
                <span class="material-icons"> home </span>
                <h2>Home</h2>
            </div>

            <div class="sidebarOption">
                <span class="material-icons"> search </span>
                <h2>Explore</h2>
            </div>

            <div class="sidebarOption">
                <span class="material-icons"> notifications_none </span>
                <h2>Notifications</h2>
            </div>

            <div class="sidebarOption">
                <span class="material-icons"> mail_outline </span>
                <h2>Messages</h2>
            </div>

            <div class="sidebarOption">
                <span class="material-icons"> bookmark_border </span>
                <h2>Bookmarks</h2>
            </div>

            <div class="sidebarOption">
                <span class="material-icons"> list_alt </span>
                <h2>Lists</h2>
            </div>

            <div class="sidebarOption">
                <span class="material-icons"> perm_identity </span>
                <h2>Profile</h2>
            </div>

            <div class="sidebarOption">
                <span class="material-icons"> more_horiz </span>
                <h2>More</h2>
            </div>

            <button class="sidebar_tweet">Tweet</button>
        </div>

        <!-- FEED -->
        <div class="feed">
            <div class="feed_header">
                <h2>Home</h2>
            </div>

            <div class="tweetBox">
                <form action="post.php" method="POST">
                    <input type="hidden" name="form" value="tweet">

                    <div class="tweetbox_input">
                        <img src="https://www.hotelbooqi.com/wp-content/uploads/2021/12/128-1280406_view-user-icon-png-user-circle-icon-png.png" alt="">
                        <input type="text" name="content" placeholder="What's happening ?" autocomplete="off">
                    </div>

                    <button class="tweetbox_submitBtn" type="submit">Tweet</button>
                </form>
            </div>

            <?php foreach ($allTweet as $row) { ?>
                <div class="post">
                    <div class="post_avatar">
                        <img src="https://www.hotelbooqi.com/wp-content/uploads/2021/12/128-1280406_view-user-icon-png-user-circle-icon-png.png" alt="">
                    </div>

                    <div class="post_body">
                        <div class="post_header">
                            <div class="post_headerText">
                                <h3>
                                    user<?php echo $row["user_id"] ?>
                                    <span class="post_headerSpecial">
                                        <span class="material-icons post_badge"> verified </span> @user
                                    </span>
                                </h3>
                                <form action="deleteTweet.php" method=POST>
                                    <input type="hidden" name="form" value="deleteTweet">
                                    <input type="hidden" name="tweet" value="<?php echo $row["id"]; ?>">

                                    <button class="post_deleteBtn" type="submit">
                                        <span class="material-icons"> delete </span>
                                    </button>
                                </form> 
                            </div>
                            
                            <div class="post_headerDescription">
                                <p><?php echo $row["content"] ?></p>
                            </div>
                        </div>

                        <div class="post_footer">
                            <span class="material-icons"> chat </span>
                            <span class="material-icons"> repeat </span>
                            <span class="material-icons"> favorite_border</span>
                            <span class="material-icons"> publish </span>
                        </div>
                    </div>
                </div>
            <?php } ?>
            
            <div class="post">
                <div class="post_avatar">
                    <img src="https://cdn.futura-sciences.com/sources/Elon%20Musk1.jpg" alt="">
                </div>

                <div class="post_body">
                    <div class="post_header">
                        <div class="post_headerText">
                            <h3>
                                Elon Musk
                                <span class="post_headerSpecial">
                                    <span class="material-icons post_badge"> verified </span> @elonmusk
                                </span>
                            </h3>
                        </div>
                        
                        <div class="post_headerDescription">
                            <p>Tweet pour 30 balles ?</p>
                        </div>
                    </div>

                    <img src="https://www.canr.msu.edu/contentAsset/image/daa226e9-a504-4593-8e4c-f7399b782d75/fileAsset/filter/Resize,Jpeg/resize_w/750/jpeg_q/80" alt="">

                    <div class="post_footer">
                        <span class="material-icons"> chat </span>
                        <span class="material-icons"> repeat </span>
                        <span class="material-icons"> favorite_border</span>
                        <span class="material-icons"> publish </span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="widgets">
            <form action="filter.php" method="POST">
                <input type="hidden" name="form" value="filter">
                <div class="widgets_input">
                    <span class="material-icons widgets_searchIcon"> search </span>
                    <input type="text" name="filter" placeholder="search Twitter">
                </div>
            </form>

            <div class="widgets_container">
                <h2>What's happening ?</h2>
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">At dawn from the gateway to Mars, the launch of Starship’s second flight test <a href="https://t.co/ffKnsVKwG4">pic.twitter.com/ffKnsVKwG4</a></p>&mdash; SpaceX (@SpaceX) <a href="https://twitter.com/SpaceX/status/1732824684683784516?ref_src=twsrc%5Etfw">December 7, 2023</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        
    </body>
</html>
