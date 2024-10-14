<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Friends</title>
    <link rel="stylesheet" href="css/friend.css"> <!-- Link to your custom CSS -->
</head>
<body>

    <section id="friends">
        <h2>My Friends</h2>

        <div class="friend-container">
            <?php
                // Array of friend image paths and names
                $friends = [
                    ["name" => "Friend 1", "image" => "image/friends/1.jpg"],
                    ["name" => "Friend 2", "image" => "image/friends/2.jpg"],
                    ["name" => "Friend 3", "image" => "image/friends/3.jpg"],
                    ["name" => "Friend 4", "image" => "image/friends/4.jpg"],
                    ["name" => "Friend 5", "image" => "image/friends/5.jpg"],
                    ["name" => "Friend 6", "image" => "image/friends/6.jpg"],
                    ["name" => "Friend 7", "image" => "image/friends/7.jpg"],
                    ["name" => "Friend 8", "image" => "image/friends/8.jpg"],
                    ["name" => "Friend 9", "image" => "image/friends/9.jpg"],
                    ["name" => "Friend 10", "image" => "image/friends/10.jpg"],
                    ["name" => "Friend 11", "image" => "image/friends/11.jpg"],
                    ["name" => "Friend 12", "image" => "image/friends/12.jpg"]
                ];

                // Loop through the friends array and display each one
                foreach ($friends as $friend) {
                    echo "
                    <div class='friend-item'>
                        <div class='friend-box'>
                            <img src='{$friend['image']}' alt='{$friend['name']}'>
                            <p>{$friend['name']}</p>
                        </div>
                    </div>";
                }
            ?>
        </div>

        <div class="back-button-container">
            <a href="index.php" class="button_hover theme_btn_two">Back</a>
        </div>

    </section>

</body>
</html>
