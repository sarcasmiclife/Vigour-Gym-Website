<?php
session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username = $_POST['name'];
    $email = $_POST['email'];
    if (!empty($username) && !empty($email))
    {
        $query = "select * from registration_users where email = '$email'";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $data = mysqli_fetch_assoc($result);
                if($data['name']==$username)
                {
                    echo "<script type='text/javascript'> alert('Welcome $username!')</script>";
                }
            }
        }
        echo "<script type='text/javascript'> alert('Wrong name or mail.')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Wrong name or mail.')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5942b0a040.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="gym.jpg" class="logo">
                <ul id="sidemenu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="registrationpage.php">Register</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fa-solid fa-xmark  fas" onclick="closemenu()"></i>
                </ul>
                <i class="fa-solid fa-bars fas" onclick="openmenu()"></i>
            </nav>

        </div>
        <div class="container1">
            <div class="row">
                <div class="contact-right1">
                    <form method="POST">
                        Username: <input type="text" name="name" placeholder="Your Name" required>
                        Email: <input type="email" name="email" placeholder="Your Password" required>
                        <button type="submit" class="btn btn2">Login</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="25.jpeg" alt="">
                </div>
                <div class="about-col-2">
                    <h1 class="subtitle">
                        About Us
                    </h1>
                    <p>
                        Vigour Gym is a globally renowned fitness brand that has made its mark in India. With a strong
                        legacy dating back to 1965 in Venice Beach, California, VigourGym has become synonymous with
                        fitness excellence and innovation. Vigour Gym India carries the legacy ahead in the home country
                        since its inception in 2002. World-class fitness facilities and a comprehensive range of workout
                        programs tailored to meet the needs of diverse fitness enthusiasts is what sets us apart from
                        others.
                        <br>
                        <br>
                        Vigour Gym India, a part of this esteemed legacy, has expanded its presence across various
                        cities, aiming to empower individuals to achieve their fitness goals, regardless of their
                        fitness levels or aspirations. It's a fitness haven that combines state-of-the-art equipment,
                        expert trainers, and a supportive community to foster a holistic approach to wellness.
                    </p>
                    <div class="tab-titles">
                        <p class="tab-links active-link " onclick="opentab('Skills')">Our Programs</p>
                        <p class="tab-links" onclick="opentab('Experience')">Difference</p>
                        <p class="tab-links" onclick="opentab('Education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="Skills">
                        <ul>
                            <li><span>Corporate Membership</span><br>Don’t have time to go to the gym? We get the gym to
                                you. </li>
                            <li><span>Group Program</span><br>Gold's Gym India provides a variety of group fitness
                                programs such as dance fitness, yoga, HIIT, and much more effective workouts.</li>
                            <li><span>Online Personal Training course</span></li>
                            <li><span>Offline Personal Training course</span></li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="Experience">
                        <ul>
                            <li><span>156 Gyms</span></li>
                            <li><span>95 cities</span></li>
                            <li><span>24 states</span></li>
                            <li><span>Personal training</span></li>
                            <li><span>Domestic& International Pass</span></li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="Education">
                        <ul>
                            <li><span>UI?UX</span><br>Designing Web/App Interfaces</li>
                            <li><span>Web Development</span><br>Web App Development</li>
                            <li><span>App Development</span><br>Building Android/IOs</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div id="services">
        <div class="container">
            <h1 class="subtitle">
                Our Business Verticals
            </h1>
            <div class="services-list">
                <div>
                    
                    <h2>
                        Corporate Membership
                    </h2>
                    <p>
                        Don’t have time to go to the gym? We get the gym to you. Gold's Gym India offers corporate
                        membership programs tailored for companies looking to promote employee wellness and fitness.
                        These programs are designed to encourage a healthier workforce by providing BMI screening, diet
                        and nutrition counselling, fitness activities and seminars for building a healthier lifestyle.
                    </p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                    
                    <h2>
                        Group Program
                    </h2>
                    <p>
                        Gold's Gym India provides a variety of group fitness programs such as dance fitness, yoga, HIIT,
                        and much more tailored to cater to diverse fitness preferences and goals. These group programs
                        offer a supportive environment and a sense of community while engaging participants in fun and
                        effective workouts.
                    </p>
                    <a href="#">Learn More</a>
                </div>
                <div>
                    
                    <h2>
                        Personal Training
                    </h2>
                    <p>
                        Gold's Gym India is known for the competent personal trainers and extraordinary personal
                        training offered by them. The individuals seeking for serious goal-oriented fitness,
                        personalized guidance, motivation, and specialized workout plans, Gold’s Gym India personal
                        training program is for them.
                    </p>


                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div id="membership">
        <div class="container">
            <h1 class="subtitle">
                Vigour Pass
            </h1>
            <div class="pass-list">
                <div class="pass">
                    <img src="pass-1.webp"><br>
                    <h2>Unlimited access to</h2>
                    <ul>
                        <li>At-center group classes and zumba classes</li>
                        <li>All ELITE &amp; PRO gyms </li>
                        <li>At-home live workouts</li>
                    </ul>
                    <a href="membership.php" class="btn">TRY FOR FREE</a>



                </div>
                <div class="pass">
                    <img src="pass-2.webp"><br>
                    <h2>Unlimited access to</h2>
                    <ul>
                        <li>
                            All PRO gyms</li>
                        <li>2 Sessions/month at ELITE gyms &amp; group classes</li>
                        <li>At-home live workouts</li>
                    </ul>
                    <a href="membership.php" class="btn">TRY FOR FREE</a>

                </div>
                <div class="pass">
                    <img src="pass-3.webp"><br>
                    <h2>Unlimited access to</h2>
                    <ul>
                        <li>

                            Badminton, swimming &amp; other sports</li>
                        <li>Guaranteed playing partner</li>
                        <li>Guided sessions with experts</li>
                    </ul>
                    <a href="membership.php" class="btn">TRY FOR FREE</a>



                </div>

                <div class="pass">
                    <img src="pass-4.webp"><br>
                    <h2>Unlimited access to</h2>
                    <ul>
                        <li>
                            One center that you choose</li>
                        <li>2 Sessions/month at ELITE gyms &amp; group classes</li>
                        <li>At-home live workouts</li>
                    </ul>
                    <a href="membership.php" class="btn">TRY FOR FREE</a>


                </div>


            </div>
        </div>


    <div id="portfolio">
        <div class="container">
            <h1 class="subtitle">
                Our Work
            </h1>
            <div class="work-list">
                <div class="work">
                    <img src="work-1.png">
                    <div class="layer">
                    
                    
                            <h3>
                                Corporate Membership
                            </h3>
                            <p>
                                Don’t have time to go to the gym? We get the gym to you. Gold's Gym India offers corporate
                                membership programs tailored for companies looking to promote employee wellness and fitness.
                                These programs are designed to encourage a healthier workforce by providing BMI screening, diet
                                and nutrition counselling, fitness activities and seminars for building a healthier lifestyle.
                            </p>
                            <a href="#">
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </a>
                        
                    </div>
                </div>
                <div class="work">
                    <img src="work-2.png">
                    <div class="layer">
                        <h3>
                            Group Program
                        </h3>
                        <p>
                            Gold's Gym India provides a variety of group fitness programs such as dance fitness, yoga, HIIT,
                            and much more tailored to cater to diverse fitness preferences and goals. These group programs
                            offer a supportive environment and a sense of community while engaging participants in fun and
                            effective workouts.
                        </p>
                        <a href="#">
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
                <div class="work">
                    <img src="work-3.png">
                    <div class="layer">
                        <h3>
                            Personal Training
                        </h3>
                        <p>
                            Gold's Gym India is known for the competent personal trainers and extraordinary personal
                        training offered by them. The individuals seeking for serious goal-oriented fitness,
                        personalized guidance, motivation, and specialized workout plans, Gold’s Gym India personal
                        training program is for them.
                        </p>
                        <a href="#">
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
                <a href="#" class="btn"> See More</a>

            </div>
        </div>


        <div class="faq" id="faq">
            <h2 class="subtitle">
                Frequently Asked Questions
            </h2>
            <br>
            <ul class="accordion">
                <li>
                    <input type="radio" name="accordion" id="first">
                    <label for="first"> What are the membership options available at your gym? </label>
                    <div class="content">
                        <p>
                            We offer a variety of membership options to suit your needs, including monthly,
                            quarterly, and annual memberships. We also provide flexible payment plans for
                            your convenience.
                        </p>
                    </div>
                </li>
                <li>
                    <input type="radio" name="accordion" id="second">
                    <label for="second">Can I try out the gym before committing to a membership?</label>
                    <div class="content">
                        <p>
                            Yes, we offer complimentary trial passes for prospective members. This allows
                            you to experience our facilities and classes firsthand before making a decision.
                        </p>
                    </div>
                </li>
                <li>
                    <input type="radio" name="accordion" id="third">
                    <label for="third">Are group fitness classes included in the membership? </label>
                    <div class="content">
                        <p>
                            Absolutely! We offer a wide range of group fitness classes, including yoga,
                            Pilates, spin, HIIT, and more. These classes are included with your membership
                            at no additional cost.
                        </p>
                    </div>
                </li>
                <li>
                    <input type="radio" name="accordion" id="fourth">
                    <label for="fourth">How do I cancel or freeze my membership if needed?</label>
                    <div class="content">
                        <p>
                            If you need to cancel or freeze your membership, simply reach out to our front
                            desk staff or membership services team, and they will assist you with the
                            process.
                        </p>
                    </div>
                </li>

            </ul>
        </div>
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="contact-left">
                        <h1 class="subtitle">
                            Contact me
                        </h1>
                        <p>
                            <i class="fa-solid fa-share-from-square"></i>
                            gyms.vigour@gmail.com
                        </p>
                        <p>
                            <i class="fa-solid fa-phone"></i>
                            8920652226
                        </p>
                        <div class="social-icons">
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                        <a href="my-cv.pdf" download class="btn btn2">Download Brochure</a>
                    </div>
                    <div class="contact-right">
                        <form>
                            <input type="text" name="Name" placeholder="YourName" required>
                            <input type="email" name="Email" placeholder="YourEmail" required>
                            <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                            <button type="submit" class="btn btn2">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright @ Tushar. Made with <i class="fas fa-heart"></i></p>
            </div>
        </div>
        <script>
            var tablinks = document.getElementsByClassName("tab-links");
            var tabcontents = document.getElementsByClassName("tab-contents");
            function opentab(tabname) {
                for (tablink of tablinks) {
                    tablink.classList.remove("active-link");
                }

                for (tabcontent of tabcontents) {
                    tabcontent.classList.remove("active-tab");
                }
                event.currentTarget.classList.add("active-link");
                document.getElementById(tabname).classList.add("active-tab");
            }

            var sidemenu = document.getElementById("sidemenu");
            function openmenu() {
                sidemenu.style.right = "0";
            }
            function closemenu() {
                sidemenu.style.right = "-200px";
            }
        </script>
</body>

</html>