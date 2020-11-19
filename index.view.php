<?php 
    require_once('config.php');
    require_once('php/Message.controller.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Quality Foot Care - Home</title>


        <!-- Favicon  -->
        <link rel="icon" type="image/png" href="images/favicon.png">


        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">


        <!-- Font Awesome -->
	    <script src="https://kit.fontawesome.com/228104314d.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        <!-- Custom styles & scripts -->
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <link rel="stylesheet" type="text/css" href="css/utility.css">
        <script src="js/customScript.js"></script>

    </head>
    <body data-spy="scroll" data-target="#menubar">



        <!--=========================================
            Back To Top Button
        ===========================================-->
        <a href="#0" target="_self" id="gotoTopButton"class="gotoTop"></a>



        <!--=========================================
            Navigation/Menu
        ===========================================-->
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top" id="menubar">
            <!-- Menu toggle/button for small devices -->
            <a class="navbar-brand" href="#home">Quality Foot Care Solutions</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content for menu toggle/button-->
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav mt-2 mt-sm-0 ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">WHY CHOOSE US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </nav>


        <!-- Home Header Section -->
        <header id="home">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" style="background-image: url('./images/home5.jpg')"></div>
                </div>
            </div>
        </header>

        <div class="hero-overlay-container">
            <div class="hero-text">
                <h1 class="text-light hero-text-heading">In Home Services</h1>
                <h4 class="text-light hero-text-subheading">Foot care from the comfort of your home</h4>
            </div>
        </div>


                                    
        <!-- Show an alert if the contact us message submissions was a success, or failed -->						
        <?php if(!is_null($sendSuccess)): ?>
            <?php if($sendSuccess == true): ?>
                <div class="alert alert-success w-100 text-center my-0">
                    <span class="fs-28">Message Sent!</span>
                </div>
            <?php else: ?> 
                <div class="alert alert-danger w-100 text-center my-0">
                    <span class="fs-28">Message Transmission Failed</span>
                </div>
            <?php endif; ?>
            <?php $sendSuccess = null; ?>
        <?php endif; ?>


        <section class="bg-light p-t-35">
            <div class="container">
                <div class="row">
                    <div class="alert alert-warning">
                        <div class="text-center">
                            <h3 class="v-center">COVID-19 &nbsp <span class="badge">New</span></h2>
                            <p class="alert-warning-text">
"All of Quality Foot Care Solutions in-home services will remain available during the COVID crisis. If you or anyone in your household has or is suspected of having COVID-19, please inform our staff prior to setting the first appointment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!--=========================================
            Services
        ===========================================-->
        <div id="services" class="bg-light py-5" style="padding-top: 35px !important;">
            <div class="container">
                <!-- Section Header -->
                <div class="row text-center">
                    <div class="col-sm-12">
                        <h2 class="text-center display-4">
                            Services & Treatments
                        </h2>
                    </div>
                </div>

                <!-- Services Description -->
                <div class="row text-left">
                    <div class="col-sm-12 col-md-6">
                        <br>
                        <p class="fs-18">
                            Our <strong>certified foot care nurses</strong> (CFCN), cut, trim, and file toenails, for
                            the elderly, and infirm. We also provide specialized care focused on treating
                            a number of foot related conditions.
                            <br>
                            <br>
                            Depending on your situation, these can include:
                        </p>
                        <p class="fs-18">
                            <ul class="fs-18 p-l-10">
                                <li class="my-1" style="list-style-type: none;">
                                    <div class="d-inline-flex" style="align-items: center;">
                                        <i class="fas fa-shoe-prints fa-circle-background " style="padding: 8px 5px 8px 5px;"></i>&nbsp; &nbsp;
                                        <span>Athletes Foot</span>
                                    </div>
                                </li>
                                <li class="my-1" style="list-style-type: none;">
                                    <div class="d-inline-flex" style="align-items: center;">
                                        <i class="fas fa-shoe-prints fa-circle-background " style="padding: 8px 5px 8px 5px;"></i>&nbsp; &nbsp;
                                        <span>Diabetic Foot Care</span>
                                    </div>

                                </li>
                                <li class="my-1" style="list-style-type: none;">
                                    <div class="d-inline-flex" style="align-items: center;">
                                        <i class="fas fa-shoe-prints fa-circle-background " style="padding: 8px 5px 8px 5px;"></i>&nbsp; &nbsp;
                                        <span>Toenail Fungus</span>
                                    </div>

                                </li>
                                <li class="my-1" style="list-style-type: none;">
                                    <div class="d-inline-flex" style="align-items: center;">
                                        <i class="fas fa-shoe-prints fa-circle-background " style="padding: 8px 5px 8px 5px;"></i>&nbsp; &nbsp;
                                        <span>Ingrown Toenails</span>
                                    </div>

                                </li>
                                <li class="my-1" style="list-style-type: none;">
                                    <div class="d-inline-flex" style="align-items: center;">
                                        <i class="fas fa-shoe-prints fa-circle-background " style="padding: 8px 5px 8px 5px;"></i>&nbsp; &nbsp;
                                        <span>Calluses & Corns</span>
                                    </div>

                                </li>
                                <li class="my-1" style="list-style-type: none;">
                                    <div class="d-inline-flex" style="align-items: center;">
                                        <i class="fas fa-shoe-prints fa-circle-background " style="padding: 8px 5px 8px 5px;"></i>&nbsp; &nbsp;
                                        <span>Plantar Warts</span>
                                    </div>

                                </li>
                                <li class="my-1" style="list-style-type: none;">
                                    <div class="d-inline-flex" style="align-items: center;">
                                        <i class="fas fa-shoe-prints fa-circle-background " style="padding: 8px 5px 8px 5px;"></i>&nbsp; &nbsp;
                                        <span>Massage</span>
                                    </div>
                                </li>
                            </ul>
                        </p>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <br>
                        <p class="fs-18">
                            All our services are available from the comfort of your home, and last approximatly 45 minutes on average.
                            Each session consists of,
                            <ol class="fs-18">
                                <li class="my-2">&nbsp; Complete Assessment</li>
                                <li class="my-2">&nbsp; Identification of common foot related conditions</li>
                                <li class="my-2">&nbsp; Treatment of any existing foot conditions</li>
                                <li class="my-2">&nbsp; Complete nail care focused on the feet</li>
                                <li class="my-2">&nbsp; Patient education period</li>
                            </ol>
                        </p>
                        <p class="fs-18">
                            We also offer a <strong>complementary</strong> foot massage at the end of the session, for pain, and discomformt relief.
                        </p>
                    </div>
                </div>

            </div>
        </div>



        <!-- Inter-Section Spacing -->
        <div class="spacer-20 bg-light"></div>



        <!--=========================================
            CTA
        ===========================================-->
        <section class="py-3 bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 v-center">
                        <i class="fas fa-question-circle fa-2x text-light d-inline-block p-3"></i>
                        <span class="text-light text-center fs-18">
                            Do you require specialized foot care? Give us a call at <u>519-761-8231</u>, or <a href="#contact" class="text-light"> <u>send us a message</u></a>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <!-- Inter-Section Spacing -->
        <div class="spacer-20 bg-light"></div>



        <!--=========================================
            Why Choose Us
        ===========================================-->
        <section id="about" class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center display-4"> Why Choose Us? </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <br>
                        <p class="fs-18">
                            As healthcare practitioners, our goal is to provide you personalized care, and tailor each treatment to your needs, so
                            we can get you up and running as soon as possible. We’re passionate about providing a professional, and compassionate
                            service to help maximize your health outcomes.
                        </p>
                        <p class="fs-18">
                            Our staff have also received additional training in foot care and specialize in supporting the elderly. Afterall, as
                            we age it can become difficult to take care of our feet. Diabetes, poor eyesight, mobility, and arthritis are some of
                            the leading causes of poor foot health.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6">

                        <br>
                        <p class="fs-18">
                            All our nurses are:
                            <ul class="fs-18 p-l-0">
                                <li class="my-3" style="list-style-type: none;">
                                    <div class="d-inline-flex" style="align-items: center;">
                                        <i class="fas fa-user-nurse fa-circle-background" style="font-size: 2em; padding: 5px 8px 5px 8px;"></i> &nbsp; &nbsp; &nbsp; &nbsp;
                                        <span> Registered members of The College Of Nurses</span>
                                    </div>
                                </li>
                                <li class="my-3" style="list-style-type: none;">
                                    <div class="d-inline-flex" style="align-items: center;">
                                        <i class="fas fa-university fa-circle-background" style="font-size: 2em;"></i> &nbsp; &nbsp; &nbsp; &nbsp;
                                        <span> Members of Registered Practical Nurses Association of Ontario </span>
                                    </div>
                                </li>
                                <li class="my-3" style="list-style-type: none;">
                                    <div class="d-inline-flex" style="align-items: center;">
                                        <i class="fas fa-wheelchair fa-circle-background" style="font-size: 2em;"></i> &nbsp; &nbsp; &nbsp; &nbsp;
                                        <span> Experts on geriatric care, and specialize in providing foot care to the elderly, and infirm </span>
                                    </div>
                                </li>
                                <li class="my-3" style="list-style-type: none;">
                                    <div class="d-inline-flex" style="align-items: center;">
                                        <i class="fas fa-heart fa-circle-background" style="font-size: 2em; padding: 5px 7px 4px 7px;"></i> &nbsp; &nbsp; &nbsp; &nbsp;
                                    <span> Compassionate, and understand that each patients experience is unique  </span>
                                    </div>
                                </li>
                            </ul>
                        </p>
                    </div>

                </div>
            </div>
        </section>



        <!--=========================================
            Testimonials
        ===========================================-->
        <section class="testimonials py-5 bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm v-center p-b-15">
                        <img class="rounded-circle img-thumbnail mx-auto d-block" width="250" src="images/smilingElder1b.png" alt="testimonial" >
                    </div>
                    <div class="col-sm v-center">
                        <p class="d-flex text-left text-light fs-25">
                            <q>
                                Eva has been my preferred foot care nurse for a long time now. She's gentle, careful, and helped with my ingrown toenail.
                                I would recommend Eva to anyone whos like me, and struggling to maintain their feet due to arthritis, and old age.
                            </q>
                        </p>
                        <p class="d-flex text-light fs-25" style="text-align: left;">
                            - Martha Palovic
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <!-- Inter-Section Spacing -->
        <div class="spacer-20 bg-light"></div>



        <!--=========================================
            Contact us
        ===========================================-->
        <section id="contact" class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">


                        <div class="wrap-contact">
                            <span class="contact-form-symbol">
                                <img src="images/symbol-01.png" alt="mail-symbol">
                            </span>

                            <form class="contact-form validate-form flex-sb flex-w" method="POST" action="./index.php">
                                <span class="contact-form-title">
                                    <h2>Get Started with a free consultation</h2>
                                </span>
                                
                                

                                <!-- Display any errors -->						
                                <?php if(count ($errors) > 0): ?>
                                    <div class="alert alert-danger w-100">
                                        <div>Please correct the following errors, and try again </div>
                                        <ul style="padding-left: 12px; margin-bottom: 0px; margin-left: 5px;">
                                            <?php foreach( $errors as $error): ?>
                                                <li><?php echo $error; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                
                                <div class="wrap-contact-input validate-input" data-validate = "Name is required">
                                    <input class="contact-input" type="text" name="name" placeholder="Name" maxlength="50" value="<?php echo $senderName ?>">
                                    <span class="focus-contact-input"></span>
                               </div>
                               <small class="m-b-30 text-muted" data-maxChars="50" name="nameCharCounter"></small>

                                <div class="wrap-contact-input validate-input" data-validate = "Email is required: email@domain.com">
                                    <input class="contact-input" type="text" name="email" placeholder="Email Address" maxlength="100" value="<?php echo $returnAddress ?>">
                                    <span class="focus-contact-input"></span>
                                </div>
                                <small class="m-b-30 text-muted" data-maxChars="100" name="emailCharCounter"></small>

                                <div class="wrap-contact-input  validate-input" style="width: 100%;" data-validate = "Subject is required">
                                    <input class="contact-input" type="text" name="subject" placeholder="Subject" maxlength="100" value="<?php echo $subject ?>">
                                    <span class="focus-contact-input"></span>
                                </div>
                                <small class="m-b-30 text-muted" data-maxChars="100" name="subjectCharCounter"></small>

                                <div class="wrap-contact-input validate-input" data-validate = "Message is required">
                                    <textarea class="contact-input" name="message" placeholder="Enter your message..."><?php echo trim($message) ?></textarea>
                                    <span class="focus-contact-input"></span>
                                </div>
                                <small class="m-b-30 text-muted" data-maxChars="2000" name="messageCharCounter"></small>

                                <div class="container-contact-form-btn">
                                    <input class="contact-form-btn bg-accent" name="submitMessageButton" type="submit"></input>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </section>



        <!--=========================================
            Footer
        ===========================================-->
        <footer class="">
            <div class="card-group text-center text-white ">

                <!-- Location -->
                <div class="card bg-primary py-sm-3 border-0" style="margin-bottom: 0px;">
                    <i class="fas fa-map-pin p-t-15" style="font-size: 2em;"></i>
                    <div class="card-body">
                        <h5 class="card-title">Location</h5>
                        <p class="card-text">Brant county, and surrounding regions</p>
                    </div>
                </div>

                <!-- email contact -->
                <div class="card bg-primary py-sm-3 border-0" style="margin-bottom: 0px;">
                    <i class="fas fa-envelope-open-text p-t-15" style="font-size: 2em;"></i>
                    <div class="card-body">
                    <h5 class="card-title">Email</h5>
                    <p class="card-text">qualityfootcaresolutions@yahoo.com</p>
                    </div>
                </div>

                <!-- Phone contact -->
                <div class="card bg-primary py-sm-3 border-0" style="margin-bottom: 0px; ">
                    <i class="fas fa-mobile-alt p-t-15" style="font-size: 2em;"></i>
                    <div class="card-body">
                    <h5 class="card-title">Phone</h5>
                    <p class="card-text">519-751-8231</p>
                    </div>
                </div>
            </div>

            <!-- Copyright and designed by details -->
            <div class="container-fluid text-center text-light bg-accent">
                <small>&copy; QualityFootCareSolutions 2020</small>&nbsp;
            </div>
        </footer>

    </body>
</html>