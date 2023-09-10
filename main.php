<?php
if (!isset($_COOKIE['visits'])) $_COOKIE['visits'] = 0;
$visits = $_COOKIE['visits'] + 1;
setcookie('visits', $visits, time() + 3600 * 24 * 30);
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Medeasy</title>
    <link rel="stylesheet" href="sliderc.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="service.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="sliderj.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="review.css">








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
                    <li><a href="logout.php">Logout</a></li>
                <?php } else { ?>
                    <li><a href="login.php">Login</a></li>

                <?php } ?>

                <li><a href="cart.php"> <i class="fa-solid fa-cart-shopping"></i></a></li>




            </ul>

        </div>

    </nav>
    <section class="first">
        <div class="container">

            <div class="write">



                <div class="write1">
                    <h2>
                        Your convenient and trusted source for <br>
                        affordable
                        medications.

                    </h2>
                </div>

                <div class="write2">
                    <p>Online purchase </p>
                    <div class="circle">

                    </div>
                    <p>
                        Free delivery
                    </p>
                </div>
                <div class="write3">

                    <a href="medicine.php"> Search medicine</a>

                    <div class="circle">

                    </div>
                    <a href="doctor.php" class="do">Doctor's consultation</a>
                </div>
            </div>

            <div class="image">
                <img src="image/Pharmacist-bro.svg" alt="" \>

            </div>
        </div>
    </section>

    <section class="slider">
        <div class="heading">
            <h1>OTC Medicines</h1>
        </div>

        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
                <li class="card">
                    <a href="medicine.php?category=eczema">
                        <div class="img"><img src="image/eczema.jpg" alt="img" draggable="false"></div>

                        <span>Eczema</span>
                    </a>
                </li>
                <li class="card">
                    <a href="medicine.php?category=fever">
                        <div class="img"><img src="image/fever.jpg" alt="img" draggable="false"></div>

                        <span>Fever</span>
                    </a>

                </li>
                <li class="card">
                    <a href="medicine.php?category=headache">
                        <div class="img"><img src="image/headache.jpg" alt="img" draggable="false"></div>

                        <span>Headache</span>
                    </a>

                </li>
                <li class="card">
                    <a href="medicine.php?category=nasal">
                        <div class="img"><img src="image/nasal.jpg" alt="img" draggable="false"></div>

                        <span>Nasal</span>
                    </a>

                </li>
                <li class="card">
                    <a href="medicine.php?category=vitamin">
                        <div class="img"><img src="image/vitamins.jpg" alt="img" draggable="false"></div>

                        <span>Vitamins</span>

                    </a>

                </li>
                <li class="card">
                    <a href="medicine.php?category=gastric">
                        <div class="img"><img src="image/gastric.webp" alt="img" draggable="false"></div>

                        <span>Gastric</span>
                    </a>

                </li>
            </ul>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>



    </section>

    <?php include "service.php";


    ?>




    <!-- <div class="section-service">
        <div class="heading">
            <h3> What do you need?</h3>
        </div>

        <div class="card-holder">
            <div class="card">
                <img src="image/medi.jpg" alt="Card 1">
                <div class="card-content">

                    <p>Our company offers all customers prescription drugs at the best prices</p>
                </div>
            </div>

            <div class="card">
                <img src="image/delivery.jpg" alt="Card 2">
                <div class="card-content">

                    <p> We will deliver your goods to your door or to the nearby locations desired by you</p>
                </div>
            </div>

            <div class="card">
                <img src="image/consul.jpg" alt="Card 3">
                <div class="card-content">


                    <p> We may provide you with the place for your regular health checkup</p>
                </div>
            </div>

            <div class="card">
                <img src="image/bloodp.jpg" alt="Card 4">
                <div class="card-content">

                    <p> Our pharmacists will help you with measuring your blood pressure. </p>
                </div>
            </div>
        </div>


    </div>

 -->

    <?php
    include "review.php"; ?>


    <div class="showvisit">
        <?php
        if ($visits > 1) {
            echo ("<h3>This webpage is visited  $visits times this Year.</h3>");
        } else { // First visit
            echo ('Welcome to my Website! !');
        }
        ?>

    </div>


    <div class="footcontainer" id="footer">
        <footer class="last">
            <div class="about">
                <h2>
                    Medeasy
                </h2>

                <p> medeasy provides the best pharmacy solution online. We are focused on getting you the healthcare support & help you need so that you can enjoy your best health. Find your required medications at medeasy</p>
                <h4>Address
                </h4>
                <p><i class="fa-solid fa-location-dot" style="padding-right: 6px"></i>(Lalan Shah Hall)KUET, Fulbarigate, Teligati</p>
                <p></p>
            </div>


            <div class="aboutus">
                <h2> Our Company</h2>
                <ul class="aboutuslist">

                    <li>

                    </li>

                    <li><a href="terms_condition.php">Terms and Conditions</a></li>

                    <li><a href="terms_condition.php">Refund and Return Policy</a></li>

                    <li><a href="terms_condition.php"> Privacy Policy</a></li>








                </ul>

            </div>
            <div class="contact">

                <h2>Contact
                </h2>
                <p><i class="fa-solid fa-phone" style="padding-right: 6px"></i>+8801797815926</p>
                <p><i class="fa-solid fa-envelope" style="padding-right: 6px"></i>medeasy@gmail.com</p>
                <div class="addresslink">
                    <a href=""><i class="fa-brands fa-facebook" style="margin-right: 30px"></i></a>
                    <a href=""><i class="fa-brands fa-instagram" style="margin-right: 30px"></i></a>
                    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>



        </footer>
        <div class="copyright">
            <i class="fa-regular fa-copyright"></i> All copyrights reserved by Sadi
        </div>




    </div>

    <script src="review.js"></script>
</body>

</html>