<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>terms and condition</title>
    <link rel="stylesheet" href="sliderc.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="service.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="sliderj.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="review.css">
    <link rel="stylesheet" href="terms_condition.css">






</head>

<body>
    <?php
    include "connection.php";
    ?>

    <nav class="navbar">

        <div class="left">

            <h1>Medeasy</h1>

        </div>

        <div class="right">

            <input type="checkbox" id="check">

            <label for="check" class="checkBtn">

                <i class="fa fa-bars"></i>

            </label>

            <ul class="list">

                <li><a href="main.php">Home</a></li>

                <li><a href="medicine.php">Medicines</a></li>

                <li><a href="doctor.php">Doctors</a></li>


                <li><a href="#footer">About Us</a></li>



                <?php if ($authenticated) { ?>
                    <li><a href="profile.php"> Hi,<?php echo $user["username"]; ?>!</a></li>
                    <li><a href="logout.php">Lougout</a></li>
                <?php } else { ?>
                    <li><a href="login.php">Login</a></li>

                <?php } ?>

                <li><a href="cart.php"> <i class="fa-solid fa-cart-shopping"></i></a></li>




            </ul>

        </div>

    </nav>

    <div class="terms">
        <div class="headt">
            <h2>Terms and condition , refund and return policy and privacy policy :</h2>
        </div>
        <div class="termcontent">
            <p>
                1. Acceptance of Terms: By accessing and using the MedEasy website, you agree to be bound by these terms and conditions. If you do not agree with any part of these terms, please refrain from using our website.
            </p><br>
            <p>
                2. Prescription Requirements: MedEasy strictly adheres to applicable laws and regulations regarding prescription medications. It is your responsibility to provide a valid prescription from a licensed healthcare professional for any prescription medication purchase.
            </p> <br>
            <p>
                3. Product Information: We strive to provide accurate and up-to-date information about our products. However, we do not guarantee the accuracy, completeness, or suitability of the information provided. Any reliance on the information is at your own risk.
            </p> <br>
            <p>
                4. Ordering and Payment: Orders placed through MedEasy are subject to availability and acceptance. We reserve the right to refuse or cancel any order at our discretion. Payment for orders must be made in full before shipment or delivery.
            </p> <br>
            <p>
                5. Shipping and Delivery: We make every effort to ensure timely shipping and delivery of your orders. However, we are not responsible for any delays or errors caused by third-party shipping carriers or factors beyond our control.
            </p> <br>
            <p>
                6. Intellectual Property: All content and materials on the MedEasy website, including logos, trademarks, text, images, and software, are the property of MedEasy or its licensors and are protected by intellectual property laws. You may not reproduce, distribute, or modify any content without prior written consent.
            </p> <br>
            <p>
                7. Limitation of Liability: MedEasy and its affiliates shall not be liable for any direct, indirect, incidental, consequential, or punitive damages arising from the use or inability to use our website or products, even if advised of the possibility of such damages.
            </p> <br>
            <P>
                8. Privacy and Security: Protecting your personal information is of utmost importance to us. We have implemented security measures to safeguard your data, but we cannot guarantee absolute security. Please refer to our privacy policy for more information on how we handle your personal information.

            </P><br>
            <p>
                9. Returns and Refunds: Our returns and refund policy is outlined separately on our website. Please review it carefully before making a purchase. We reserve the right to refuse returns or refunds if the products have been opened, used, or tampered with.

            </p>








        </div>
    </div>

    <?php
    include "footer.php" ?>


</body>

</html>