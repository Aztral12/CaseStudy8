<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Certificates</title>
    <link rel="stylesheet" href="css/certificate.css"> <!-- Link to your custom CSS -->
</head>
<body>

    <section id="certificates">
        <h2>My Certificates</h2>

        <div class="certificate-container">
            <?php
                // Array of certificate image paths
                $certificates = [
                    "image/certificate/1.jpg",
                    "image/certificate/2.jpg",
                    "image/certificate/3.jpg",
                    "image/certificate/4.jpg",
                    "image/certificate/5.jpg"
                ];

                // Loop through the certificate array and display each one
                foreach ($certificates as $certificate) {
                    echo "
                    <div class='certificate-item'>
                        <div class='certificate-box'>
                            <img src='$certificate' alt='Certificate' onclick='openModal(\"$certificate\")'>
                        </div>
                    </div>";
                }
            ?>
        </div>

        <!-- Modal Structure -->
        <div id="modal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modal-image">
        </div>

        <div class="back-button-container">
            <a href="index.php" class="button_hover theme_btn_two">Back</a>
        </div>

    </section>

    <script>
        // Open modal and display the clicked image
        function openModal(imageSrc) {
            var modal = document.getElementById("modal");
            var modalImg = document.getElementById("modal-image");
            modal.style.display = "flex"; // Use flex to center content
            modalImg.src = imageSrc;
        }

        // Close the modal
        function closeModal() {
            var modal = document.getElementById("modal");
            modal.style.display = "none";
        }

        // Close modal if user clicks outside the image
        window.onclick = function(event) {
            var modal = document.getElementById("modal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>
</html>
