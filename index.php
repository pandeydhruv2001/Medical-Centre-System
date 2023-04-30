<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$number = $_POST['number'];
$date = $_POST['date'];

$insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Well Spring Medical Center</title>

    <!-- aos css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="icon" type="image" href="Images/Logo.png" />
    <!-- magnific popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>


    <!-- header section starts  -->

    <header>

        <div class="container">

            <a href="#" class="logo"><span>Well</span> Spring <span>Medical</span> Center</a>

            <nav class="nav">
                <ul>
                    <li><a href="#home">home</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#facility">facility</a></li>
                    <li><a href="#review">review</a></li>
                    <li><a href="#appointment">Appointment</a></li>
                    <li><a href="#Achievements">Achievements</a></li>
                </ul>
            </nav>

            <div class="fas fa-bars"></div>

        </div>

    </header>

    <!-- header section ends  -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="container">

            <div class="row min-vh-100 align-items-center text-center text-md-left">

                <div class="col-md-6 pr-md-5" data-aos="zoom-in">
                    <img src="Images/Doctors-rafiki.svg" width="100%" alt="">
                </div>

                <div class="col-md-6 pl-md-5 content" data-aos="fade-left">
                    <h1><span>Compassionate</span>  care,</h1>
                    <h1> <span> every </span> step of the way.</h1>

                    <a href="https://www.mohfw.gov.in/covid_vaccination/vaccination/index.html"><button
                            class="button">learn more</button></a>
                </div>

            </div>

        </div>

    </section>


    <!-- home section ends -->

    <!-- about section start  -->

    <section class="about" id="about">

        <div class="container">

            <div class="row min-vh-100 align-items-center">

                <div class="col-md-6 content" data-aos="fade-right">

                    <div class="box">
                        <h3> <i class="fas fa-ambulance"></i> ambulance services </h3>
                        <p> </p>
                    </div>

                    <div class="box">
                        <h3> <i class="fas fa-procedures"></i> emergency rooms </h3>
                        <p> </p>
                    </div>

                    <div class="box">
                        <h3> <i class="fas fa-stethoscope"></i> free check-ups </h3>

                    </div>

                </div>

                <div class="col-md-6 d-none d-md-block" data-aos="fade-left">
                    <img src="Images/clipart-doctor-lady-doctor-11.png" width="100%" alt="">
                </div>

            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- facility section starts  -->

    <section class="facility" id="facility">

        <div class="container">

            <h1 class="heading"><span>'</span> our facilities <span>'</span></h1>

            <div class="box-container">

                <div class="box" data-aos="zoom-in">
                    <a href="Images/suregy.jpg" title="Expert Doctors">
                        <img src="Images/doctor-6864474_960_720.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="Images/suregy.jpg" title="Surgery">
                        <img src="Images/suregy.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="Images/laboratory-2815641_960_720.jpg" title="Lab Testing">
                        <img src="Images/laboratory-2815641_960_720.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="Images/blood-pressure-monitor-1749577_1920.jpg" title="BP Testing">
                        <img src="Images/blood-pressure-monitor-1749577_1920.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="Images/test-tube-5065426_1920.jpg" title="Blood Testing">
                        <img src="Images/test-tube-5065426_1920.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="Images/ambulance-1005433_1920.jpg" title="Ambulances">
                        <img src="Images/ambulance-1005433_1920.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="Images/baby-1531060_1280.jpg" title="Delivery">
                        <img src="Images/baby-1531060_1280.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="Images/treat.jpg" title="Treatment">
                        <img src="Images/treat.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="Images/flu-shot-1719334_960_720.jpg" title="Flu Shots">
                        <img src="Images/flu-shot-1719334_960_720.jpg" alt="">
                    </a>
                </div>

            </div>

        </div>

    </section>

    <!-- facility section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <div class="container">

            <h1 class="heading"><span>'</span> Expert's Review<span>'</span></h1>

            <div class="box-container">

                <div class="box" data-aos="fade-right">
                    <p>The centre is the most child friendly health care centre of Jodhpur. Dr. Pradeep jain is most
                        widely known and highly scientific in approach..</p>
                    <h3>Dr. Ashna Agrawal </h3>
                    <span>Jan 5, 2021</span>
                    <img src="Images/ashna.jpg" alt="">
                </div>

                <div class="box" data-aos="fade-up">
                    <p>Very good hospital with reputed staff of doctors. Trained and friendly nursing stuff, happy to
                        help you with smiling face.</p>
                    <h3>Dr. Rahul Sharma </h3>
                    <span>jan 7, 2021</span>
                    <img src="Images/rahul.png" alt="">
                </div>

                <div class="box" data-aos="fade-left">
                    <p>One of the Mumbai's Best and Biggest Hospital. Suprahuge infrastructure and all advanced
                        facilities. Many Bollywood celebrities take treatment from here,
                        specially Dilip Kumar. Doctors are very famous and skilled. Staff is also very helpful.
                        Anaesthesia department is the best department of this Hospital.</p>
                    <h3>Dr. Karishma Vanwari</h3>
                    <span>jan 10, 2021</span>
                    <img src="Images/Dr-Karishma-Kirti.png" alt="">
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends  -->

    <!-- counter section starts  -->

    <section class="counter">

        <div class="container">

            <div class="box-container">

                <div class="box" data-aos="fade-up">
                    <i class="fas fa-hospital"></i>
                    <span>120+</span>
                    <h3>Hospitals</h3>
                </div>

                <div class="box" data-aos="fade-up">
                    <i class="fas fa-users"></i>
                    <span>100+</span>
                    <h3>staff</h3>
                </div>

                <div class="box" data-aos="fade-up">
                    <i class="fas fa-smile"></i>
                    <span>12000+</span>
                    <h3>happy patients</h3>
                </div>

                <div class="box" data-aos="fade-up">
                    <i class="fas fa-procedures"></i>
                    <span>130+</span>
                    <h3>bed facility</h3>
                </div>

            </div>

        </div>

    </section>

    <!-- counter section ends -->

    <!-- Appointment section starts  -->

    <section class="Appointment" id="appointment">

        <div class="container min-vh-100">

            <div class="row justify-content-center">

                <h1 class="heading"><span>'</span> make an appointment <span>'</span></h1>

                <div class="col-md-10" data-aos="flip-down">

                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <?php
                        if(isset($message)) {
                            foreach($message as $message) {
                            echo'<p class ="message">'.$message.'</p>';
                        }
                        }
                    ?>
                        <div class="inputBox">
                            <input type="text" name="name" placeholder="Name" class="box">
                            <input type="number" name="number" placeholder="Number of patients" class="box">
                        </div>
                        <div class="inputBox">
                            <input type="email" name="email" placeholder="your email" class="box">
                            <input type="date" name="date" class="box">

                        </div>
                        

                       
                        <input type="submit" name="submit" value="appointment now" class="button">
                    </form>

                </div>

            </div>

        </div>

    </section>

    <!-- Appointment section ends -->

    <!-- post section starts  -->

    <section class="post" id="post">

        <div class="container min-vh-100">

            <h1 id="Achievements" class="heading"><span>'</span>Our Achievements<span>'</span></h1>

            <div class="box-container">

                <div class="box" data-aos="fade-right">
                    <img src="Images/vb.gif" alt="">
                    <div class="content">
                        <span>Feb 28, 2021</span>
                        <h3>Health Care Excellence Award</h3>
                        <p>The award was conferred to Life Care Hospitals, Jodhpur by the Honourable Minister for
                            Health, Dr. Vijaya Bhaskar, towards Chief Ministers' Comprehensive Health Insurance Scheme
                        </p>
                        <a href="http://globalhealthcareawards.com/"><button class="button">learn more</button></a>
                    </div>
                </div>

                <div class="box" data-aos="fade-up">
                    <img src="Images/award.jpg" alt="">
                    <div class="content">
                        <span>Mar 8, 2018</span>
                        <h3>Public Health Award</h3>
                        <p>The award was conferred to Life Care Hospitals, Mumbai was awarded for various categories -
                            Hub for Medical Tourism, Oncology Services, Emergency and Trauma, Critical Care and
                            Interventional Neurology</p>
                        <a
                            href="https://www.aafp.org/membership/benefits/awards/fm-champion-awards/public-health.html#:~:text=Public%20Health%20Award%20The%20AAFP%27s%20Public%20Health%20Award,public%20at%20the%20national%2C%20state%2C%20or%20local%20levels"><button
                                class="button">learn more</button></a>
                    </div>
                </div>

                <div class="box" data-aos="fade-left">
                    <img src="Images/MAXIMUM-PEOPLE-PARTICIPATIN.jpg" alt="">
                    <div class="content">
                        <span>Jan 5, 2019</span>
                        <h3>India Book of Records</h3>
                        <p>India Book of Records recognized Another Life Hospitals for creating awareness about organ
                            donation. Another Life Hospitals holds this award for “Maximum Number of People pledge for
                            Organ Donation in a Day”.</p>
                        <a href="https://indiabookofrecords.in/"><button class="button">learn more</button></a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- post section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="container">

            <div class="row">

                <div class="col-md-4" data-aos="fade-right">
                    <a href="#" class="logo"><span>Well</span> Spring <span>Medical</span> Center</a></a>
                    <p>Rao Saheb, Achutrao Patwardhan Marg, Four Bungalows, Andheri West, Mumbai, Maharashtra 400053</p>
                </div>

                <div class="col-md-4 text-center" data-aos="fade-up">
                    <h3>links</h3>
                    <li><a href="#home">home</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#facility">facility</a></li>
                    <li><a href="#review">review</a></li>
                    <li><a href="#appointment">Appointment</a></li>
                    <li><a href="#Achievements">Achievements</a></li>
                </div>

                <div class="col-md-4 text-center" data-aos="fade-left">
                    <h3>share</h3>
                    <a href="#">facebook</a>
                    <a href="#">twitter</a>
                    <a href="#">instagram</a>

                </div>

            </div>

        </div>

        <h1 class="credit text-center mx-auto">created by <span>Prajavi & Dhruv</span> </h1>

    </section>

    <!-- footer section ends -->


    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- magnific popup js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <!-- aos js file cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- custom js link  -->
    <script src="index.js"></script>


    <script>

        AOS.init({
            duration: 1000,
            delay: 400
        });

    </script>

</body>

</html>