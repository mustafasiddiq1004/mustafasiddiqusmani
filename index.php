<?php

// $name = $password = $confirm_password = "";
// $name_err = $password_err = $confirm_password_err = "";

// if ($_SERVER['REQUEST_METHOD'] == "POST"){
//     if(empty(trim($_POST['name']))){
//         $name_err = "Name Cannot Be Blank";
//     }else{
//         $sql = "SELECT id FROM users WHERE name = ?";
//         $stmt = mysqli_prepare($link, $sql);
//         if($stmt){
//             mysqli_stmt_bind_param($stmt, "s", $param_name);

//             $param_name =  trim($_POST['name']);

//             if(mysqli_stmt_execute($stmt)){
//                 mysqli_stmt_store_result($stmt);
//                 if (mysqli_stmt_num_rows($stmt) == 1) {
//                     $name_err = "This username is already taken";
//                 }else{
//                     $name = trim($_POST['name']);
//                 }
//             }
//             else{
//                 echo "Something went wrong";
//             }
//         }
//     }
// }

if (!empty($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $toEmail = 'mustafasiddiq2000@gmail.com';

    $mailHeaders = "Name: ".$name.
    "\r\n Email:".$email.
    "\r\n Subject:".$subject.
    "\r\n Message:".$message."\r\n";

    if (mail($toEmail, $name, $mailHeaders)) {
        $message = "Your information is recieved successfully.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mustafa Siddiq Usmani</title>
    <!-- FAVICON LINK -->
    <link rel="shortcut icon" href="./images/favicon/android-chrome-512x512.png" type="image/x-icon">
    <?php require ('inc/links.php') ?>
    <?php require ('inc/config.php') ?>
</head>

<body>
    <?php require ('inc/header.php') ?>

    <!-- CAROUSEL START -->
    <div class="slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <p>Hello, I'm</p>
                        <h3 class="animated fadeInDown" style="animation-delay: 1s;">
                            Mustafa <span>Siddiq</span>
                        </h3>
                        <h5 class="animated fadeInDown" style="animation-delay: 1s;">WordPress Developer<span></span>
                        </h5>
                        <div class="btn-container">
                            <button class="btn btn-dark" onclick="window.open('MUSTAFA-SIDDIQ.pdf')">
                                Download CV
                            </button>
                            <button class="btn btn-outline-dark" onclick="location.href='./#contact'">
                                Contact Info
                            </button>

                            <div class="socials-container">
                                <a href="https://www.linkedin.com/in/mustafasiddiq07/">
                                    <img src="images/contact/linkedin.svg" alt="" width="33px">
                                </a>
                                <a href="https://github.com/mustafasiddiq1004">
                                    <img src="images/contact/github.svg" alt="" width="33px">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <p>Hello, I'm</p>
                        <h3 class="animated fadeInDown" style="animation-delay: 1s;">Mustafa Siddiq</h3>
                        <h5 class="animated fadeInDown" style="animation-delay: 1s;">PHP <span>Developer</span></h5>
                        <div class="btn-container">
                            <button class="btn btn-dark" onclick="window.open('MUSTAFA-SIDDIQ.pdf')">
                                Download CV
                            </button>
                            <button class="btn btn-outline-dark" onclick="location.href='./#contact'">
                                Contact Info
                            </button>

                            <div class="socials-container">
                                <a href="https://www.linkedin.com/in/mustafasiddiq07/">
                                    <img src="images/contact/linkedin.svg" alt="" width="33px">
                                </a>
                                <a href="https://github.com/mustafasiddiq1004">
                                    <img src="images/contact/github.svg" alt="" width="33px">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- CAROUSEL END-->

    <!-- ABOUT START-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font" id="about">ABOUT ME</h2>

    <div class="container" id="about">
        <div class="row g-0 my-5">
            <div class="col-lg-4 col-md-12">
                <div class="about-img">
                    <img src="images/logo.jpg" alt="" class="img-fluid"
                        style="border-radius:1rem;">
                </div>
            </div>
            <div class="col-lg-8">
                <p class="about-text p-3"
                    style="font-size: 21px; font-weight: 600; word-spacing: 2px; text-align: justify;">
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hello, before I talk about my qualifications and
                    professional skills, I would like to briefly
                    introduce myself. I'm Mustafa Siddiq from Nagpur, Maharashtra. I'm a Full Stack Developer Deciding
                    to choose web development as a career. It will not only enrich my pocket but will also fill my heart
                    with joy and happiness as it has been my passion since childhood. I have excellent front-end
                    knowledge of HTML, CSS, Javascript, and also friendly to develop website with WordPress.
                </p>
                <div class="row d-flex align-items-center p-3" id="about-bottom">
                    <div class="col-lg-6">
                        <div class="card rounded-pill shadow mb-4">
                            <div class="card-body text-center">
                                <img src="images/about/graduation.svg" alt="" width="33px">
                                <h4 class="m-0">Education</h4>
                                <p class="m-0">B.Sc. IT</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card rounded-pill shadow mb-4">
                            <div class="card-body text-center">
                                <img src="images/about/badge-reward.svg" alt="" width="33px">
                                <h4 class="m-0">Experience Level</h4>
                                <p class="m-0">Intermediate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT END-->

    <!-- SKILLS SECTION START -->
    <div class="container-fluid" id="skills-container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5 py-4 gap-3">
            <h2 class="mt-5 py-4 mb-4 text-center fw-bold h-font" id="skills">MY SKILLS</h2>
            <div
                class="col-lg-2 col-md-2 text-center bg-white rounded-circle shadow p-5 my-3 single-skill border border-5 border-danger">
                <img src="images/skills/html.svg" alt="" width="80px">
                <h5 class="mt-3 text-dark fw-bold">HTML</h5>
                <div class="progress" style="height: 3px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 77%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div
                class="col-lg-2 col-md-2 text-center bg-white rounded-circle shadow p-5 my-3 single-skill border border-5 border-info">
                <img src="images/skills/css.svg" alt="" width="80px">
                <h5 class="mt-3 text-dark fw-bold">CSS</h5>
                <div class="progress" style="height: 3px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%;" aria-valuenow="70"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div
                class="col-lg-2 col-md-2 text-center bg-white rounded-circle shadow p-5 my-3 single-skill border border-5 border-warning">
                <img src="images/skills/javascript.svg" alt="" width="80px">
                <h5 class="mt-3 text-dark fw-bold">JavaScript</h5>
                <div class="progress" style="height: 3px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 55%;" aria-valuenow="55"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div
                class="col-lg-2 col-md-2 text-center bg-white rounded-circle shadow p-5 my-3 single-skill border border-5 border-dark">
                <img src="images/skills/php.svg" alt="" width="80px">
                <h5 class="mt-3 text-dark fw-bold">PHP</h5>
                <div class="progress" style="height: 3px;">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 50%;" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div
                class="col-lg-2 col-md-2 text-center bg-white rounded-circle shadow p-5 my-3 single-skill border border-5 border-primary">
                <img src="images/skills/wordpress.svg" alt="" width="80px">
                <h5 class="mt-3 text-dark fw-bold">WordPress</h5>
                <div class="progress" style="height: 3px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 77%;" aria-valuenow="77"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div
                class="col-lg-4 col-md-4 text-center bg-white rounded-circle shadow p-5 my-3 single-skill border border-5 border-success">
                <img src="images/skills/bootstrap.svg" alt="" width="80px">
                <h5 class="mt-3 text-dark fw-bold">Bootstrap</h5>
                <div class="progress" style="height: 3px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="85"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div
                class="col-lg-4 col-md-4 text-center bg-white rounded-circle shadow p-5 my-3 single-skill border border-5 border-info">
                <img src="images/skills/photoshop.svg" alt="" width="80px">
                <h5 class="mt-3 text-dark fw-bold">Photoshop</h5>
                <div class="progress" style="height: 3px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 43%;" aria-valuenow="43"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- SKILLS SECTION END -->

    <!-- PROJECTS SECTION START -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">PROJECTS</h2>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- P1 BRUNCH -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/projects/project1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">BRUNCH RESTAURANT</h5>
                        <hr>
                        <div class="details mb-4 text-center">
                            <p class="mb-1 text-center">
                                <b>Brunch Restaurant</b> is a static website in which you can see the menu and have a
                                contact form along with you can see the current ongoing events.
                            </p>
                            <hr>
                        </div>
                        <div class="facilities mb-4">
                            <!-- <h6 class="mb-1">
                                Features <i class="bi bi-check-circle-fill"></i>
                            </h6> -->
                            <span class="badge text-bg-light text-wrap ls-base">
                                Static Website
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                Responsive
                            </span>
                        </div>
                        <div class="languages mb-4">
                            <h6 class="mb-1">
                                Languages <i class="bi bi-code-square"></i>
                            </h6>
                            <span class="badge text-bg-light text-wrap ls-base">
                                HTML
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                CSS
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="https://brunch-indian-food-restaurant.netlify.app/"
                                class="btn btn-sm btn-outline-dark shadow-none">
                                Live Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- P2 AD EDITZ -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/projects/project2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">AD DESIGN EDITZ</h5>
                        <hr>
                        <div class="details mb-4 text-center">
                            <p class="mb-1 text-center">
                                <b>AD DESIGN EDITZ</b> is a static portfolio website of photoshop designer where you can
                                see different section like skills, services & projects.
                            </p>
                            <hr>
                        </div>
                        <div class="facilities mb-4">
                            <!-- <h6 class="mb-1">
                                Features <i class="bi bi-check-circle-fill"></i>
                            </h6> -->
                            <span class="badge text-bg-light text-wrap ls-base">
                                Static Website
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                Responsive
                            </span>
                        </div>
                        <div class="languages mb-4">
                            <h6 class="mb-1">
                                Languages <i class="bi bi-code-square"></i>
                            </h6>
                            <span class="badge text-bg-light text-wrap ls-base">
                                HTML
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                CSS
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                JavaScript
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="https://addesigneditz.netlify.app/"
                                class="btn btn-sm btn-outline-dark shadow-none">
                                Live Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- P4 FITNESSHUB KAMPTEE -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/projects/project3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">FITNESSHUB KAMPTEE</h5>
                        <hr>
                        <div class="details mb-4 text-center">
                            <p class="mb-1 text-center">
                                <b>FITNESSHUB KAMPTEE</b> is a static website of GYM which is very popular in kamptee.
                                
                            </p>
                            <hr>
                        </div>
                        <div class="facilities mb-4">
                            <!-- <h6 class="mb-1">
                                Features <i class="bi bi-check-circle-fill"></i>
                            </h6> -->
                            <span class="badge text-bg-light text-wrap ls-base">
                                Dynamic Website
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                Responsive
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                Admin Panel
                            </span>
                        </div>
                        <div class="languages mb-4">
                            <h6 class="mb-1">
                                Languages <i class="bi bi-code-square"></i>
                            </h6>
                            <span class="badge text-bg-light text-wrap ls-base">
                                HTML
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                CSS
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                JavaScript
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                PHP
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="https://fitnesshubkamptee.netlify.app/" class="btn btn-sm btn-outline-dark shadow-none">
                                Live Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- P4 MA ENTERPRISES -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/projects/project4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">MA ENTERPRISES</h5>
                        <hr>
                        <div class="details mb-4 text-center">
                            <p class="mb-1 text-center">
                                <b>M.A ENTERPRISES</b> is a dynamic website of unani and ayurvedic medicines wholesaler
                                and retailer where you can see healthcare wealthness & products for dieases.
                            </p>
                            <hr>
                        </div>
                        <div class="facilities mb-4">
                            <!-- <h6 class="mb-1">
                                Features <i class="bi bi-check-circle-fill"></i>
                            </h6> -->
                            <span class="badge text-bg-light text-wrap ls-base">
                                Dynamic Website
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                Responsive
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                Admin Panel
                            </span>
                        </div>
                        <div class="languages mb-4">
                            <h6 class="mb-1">
                                Languages <i class="bi bi-code-square"></i>
                            </h6>
                            <span class="badge text-bg-light text-wrap ls-base">
                                HTML
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                CSS
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                JavaScript
                            </span>
                            <span class="badge text-bg-light text-wrap ls-base">
                                PHP
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">
                                Live Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="projects.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">
                    ALL PROJECTS &gt;&gt;&gt;
                </a>
            </div>
        </div>

        <!-- GET YOUR WEBSITE NOW START -->
        <!-- <div class="row d-flex align-items-center mt-5 pt-4 mb-4 bg-primary text-white">
            <div class="col-lg-6 col-md-4 p-4">
                <img src="images/online_store.png" class="img-fluid">
            </div>

            <div class="col-lg-6 col-md-8 p-4 mb-lg-0 mb-3 rounded">
                <h3 class="text-white fw-bold pb-4">Make Your Own Website With Me.</h3>
                <p class="text-white fw-bold pb-4">Whether you're growing your business, selling online or establishing an online presence - discover the easiest way to get online with me.</p>
                
                <a href="getnow.php" class="btn btn-dark">Get A Free Website Now</a>
            </div> 
        </div> -->
        <!-- GET YOUR WEBSITE NOW END -->
    </div>
    <!-- PROJECTS SECTION END -->

    <!-- CONTACT SECTION START -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font" id="contact">CONTACT</h2>

    <div class="container-fluid">
        <div class="row p-4">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <div class="bg-white rounded shadow p-4">
                    <form action="">
                        <h5>Send a Message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Name</label>
                            <input type="text" class="form-control shadow-none" name="name" placeholder="Enter Your Full Name"
                                required>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Email</label>
                            <input type="email" class="form-control shadow-none" name="email" placeholder="Enter Your Email"
                                required>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Subject</label>
                            <input type="text" class="form-control shadow-none" name="subject" required>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Message</label>
                            <textarea class="form-control shadow-none" name="message" rows="5" style="resize: none;"></textarea required>
                        </div>
                        <button type="submit" name="send" class="btn btn-dark text-white mt-3">SEND</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 mb-4 rounded">
                    <h5 class="mt-2">Get In Touch</h5>
                    <br>
                    <a href="https://www.google.com/maps/d/viewer?mid=1dqgEFn94TulH3aWC5qW3_I3yGtJ6GVo&ll=21.219472399999994%2C79.19634899999998&z=20" class="d-inline-block fw-bold text-dark text-decoration-none" target="_blank">
                        <span class="badge bg-light text-dark fs-8 text-wrap">
                            <img src="images/contact/location.svg" alt="" width="21px"> Pili Haweli, Kamptee Dist. NAGPUR - 441001
                        </span>
                    </a>
                    <a href="tel: +918530773071" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <span class="badge bg-light text-dark fs-8 text-wrap mt-5">
                            <img src="images/contact/gmail.svg" alt="" width="21px"> mustafaweb0728@gmail.com
                        </span>
                    </a>
                    <br>
                    <a href="tel: +918530773071" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <span class="badge bg-light text-dark fs-6 mt-5">
                            <img src="images/contact/whatsapp.svg" alt="" width="21px"> +918530773071
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 text-dark">
                        <span class="badge bg-light text-dark fs-6 mt-5">
                            <img src="images/contact/twitter.svg" alt="" width="21px"> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 text-dark">
                        <span class="badge bg-light text-dark fs-6 ">
                            <img src="images/contact/instagram.svg" alt="" width="21px"> Instagram
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 text-dark">
                        <span class="badge bg-light text-dark fs-6 ">
                            <img src="images/contact/facebook.svg" alt="" width="21px"> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 text-dark">
                        <span class="badge bg-light text-dark fs-6 ">
                            <img src="images/contact/linkedin.svg" alt="" width="21px"> Linkedin
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 text-dark">
                        <span class="badge bg-light text-dark fs-6 ">
                            <img src="images/contact/behance.svg" alt="" width="21px"> Behance
                        </span>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
    <!-- CONTACT SECTION END -->


    <?php require ('inc/footer.php') ?>

    <!-- CUSTOME JS LINK -->
    <script src="js/myscript.js"></script>
</body>

</html>