<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="css/portfolio.css"> <!-- Link to your custom CSS -->
</head>
<body>

    <section id="portfolio">
        <h2>My Portfolio</h2>

        <div class="portfolio-container">
            <?php
                // Array of image paths
                $images = [
                    "image/portfolio/1.jpg",
                    "image/portfolio/10.jpg",
                    "image/portfolio/11.jpg",
                    "image/portfolio/12.jpg",
                    "image/portfolio/13.jpg",
                    "image/portfolio/14.jpg",
                    "image/portfolio/15.jpg",
                    "image/portfolio/16.jpg",
                    "image/portfolio/17.jpg"
                ];

                // Loop through the image array and display each one
                foreach ($images as $image) {
                    echo "
                    <div class='portfolio-item'>
                        <img src='$image' alt='Portfolio Image'>
                        <p>Project Description for this image</p>
                    </div>
                    ";
                }
            ?>
        </div>

        <!-- Back Button -->
        <div class="back-button-container">
            <a href="index.php" class="button_hover theme_btn_two">Back</a>
        </div>

    </section>

</body>
</html>
