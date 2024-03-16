<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row hero-container-row">
            <div class="hero-container col-12">
                <div class="navbar-div">
                    <nav class="navbar navbar-expand-lg navbar_top ">
                        <div class="container-fluid navbar-conatiner">
                            <a class="navbar-brand logo" href="index.php">
                                <img src="image/logo123.png" alt="Logo" width="180" height="40"
                                    class="d-inline-block align-text-top" />
                                <!-- <h4>
                                    <span>Surebusservice</span>
                                </h4> -->
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-home"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-print"></i> Print Ticket
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-bus"></i> Bus Booking
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-briefcase"></i> Tour Package
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-calendar-check-o"></i> One Day Trip
                                        </a>
                                    </li>

                                    <li class="nav-item contact_us_link">
                                        <i class="fa fa-phone"></i>
                                        <div>
                                            <h2>Contact Us Now</h2>
                                            <span>+91 9758884230</span>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="row hero-bottom-div">
                    <div class="col-6 left-hero-div">
                        <div>
                            <h1>Find Next Place To <span>Visit..</span></h1>
                            <p>Discover amzaing places at exclusive deals. Find your next amazing travel experience!
                                Explore our handpicked destinations and embark on unforgettable adventures across the
                                globe</p>

                        </div>
                    </div>

                    <div class="col-6 right-hero-div">
                        <div class="book-form">
                            <h1>
                                Online Bus Tickets Booking <br><span>with Zero Booking Fees!</span>
                            </h1>

                            <form action="list.php" method="POST" onsubmit="return validateForm()">
                                <div class="mb-3">
                                    <select class="form-select" aria-label="Default select example" name="from" id="fromSelect" required>
                                        <option value="">FROM</option>
                                        <?php
                                        $jsonData = file_get_contents('routes.json');
                                        $data = json_decode($jsonData, true);
                                        if (isset($data['routes'])) {
                                            foreach ($data['routes'] as $route) {
                                                echo '<option value="' . $route . '">' . $route . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" aria-label="Default select example" name="to" id="toSelect" required>
                                        <option value="">TO</option>
                                        <?php
                                        if (isset($data['routes'])) {
                                            foreach ($data['routes'] as $route) {
                                                echo '<option value="' . $route . '">' . $route . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="date" class="form-control" placeholder="Select Date" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" name="date" required>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary btn-fluid" type="submit">Search Bus</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row second_div">
            <div class="col-4">
                <img src="./image/navigation.png" alt="">
                <!-- //<i class="fa fa-globe"></i> -->
                <div>
                    <h1>100+ Destinations</h1>
                    <p>Our expert team handpicked all destinations in this site</p>
                </div>
            </div>
            <div class="col-4">
                <!-- <i class="fa fa-money"></i> -->
                <img src="./image/money.png" alt="">
                <div>
                    <h1>Best Price Gurantee</h1>
                    <p>Price match within 48 hours of order confirmation</p>
                </div>
            </div>
            <div class="col-4">
                <!-- <i class="fa fa-money"></i> -->
                <img src="./image/customer-service.png" alt="">
                <div>
                    <h1>Top Notch Support</h1>
                    <p>We are here to help, before, during, and even after your trip.</p>
                </div>
            </div>
        </div>
        <div class="row  one-day-box-row">
            <div class="container col-10">
                <div class="row">
                <h1>Same Day Popular Tours Package</h1>
                <div class="col-3">
                    <a href="https://surebusservice.com/delhi-agra-same-day.html">
                        <div class="one-day-box">
                            <img src="./image/taj2.jpg" class="img-fluid" alt="">
                            <div class="details">
                                <h3>AGRA SAME DAY PACKAGE</h3>
                                <h2>
                                    <i class="fa fa-inr "></i> 700/- <span>per seat</span>
                                </h2>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-3">
                    <a href="#">
                        <div class="one-day-box">
                            <img src="./image/jaipur.jpg" class="img-fluid" alt="">
                            <div class="details">
                                <h3>JAIPUR SAME DAY PACKAGE</h3>
                                <h2>
                                    <i class="fa fa-inr "></i> 700/- <span>per seat</span>
                                </h2>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-3">
                    <a href="#">
                        <div class="one-day-box">
                            <img src="./image/delhi.jpg" class="img-fluid" alt="">
                            <div class="details">
                                <h3>DELHI SAME DAY PACKAGE</h3>
                                <h2>
                                    <i class="fa fa-inr "></i> 700/- <span>per seat</span>
                                </h2>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-3">
                    <a href="#">
                        <div class="one-day-box">
                            <img src="./image/rishikesh.jpg" class="img-fluid" alt="">
                            <div class="details">
                                <h3>RISHIKESH SAME DAY PACKAGE</h3>
                                <h2>
                                    <i class="fa fa-inr "></i> 700/- <span>per seat</span>
                                </h2>
                            </div>
                        </div>
                    </a>

                </div>
                </div>
                
            </div>
        </div>
        <div class="row best_tour">

            <div class="col-4">
                <h1>Discover Your Dream Getaway: Find the Perfect Escape</h1>
                <p>Explore Our Handpicked Destinations and Unwind in Tranquility</p>
            </div>
            <div class="col-8 row">
                <div class="col-4">
                    <img src="./image/taj1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-4">
                    <img src="./image/img5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-4">
                    <img src="./image/taj1.jpg" class="img-fluid" alt="">
                </div>

            </div>
        </div>


      

        

        <div class="row customers-review">
            <div class="">
                <div class="col-md-12 container">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="image/icon.png" alt="">
                            </div>
                            <h3 class="title">Delhi to agra trip</h3>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non
                                ante porttitor.</p>
                            <div class="testimonial-content">
                                <div class="testimonial-profile">
                                    <h3 class="name">williamson</h3>
                                    <!-- <span class="post">Web Developer</span> -->
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="image/icon.png" alt="">
                            </div>
                            <h3 class="title">Delhi to agra trip</h3>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non
                                ante porttitor.</p>
                            <div class="testimonial-content">
                                <div class="testimonial-profile">
                                    <h3 class="name">williamson</h3>
                                    <!-- <span class="post">Web Developer</span> -->
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="image/icon.png" alt="">
                            </div>
                            <h3 class="title">Delhi to agra trip</h3>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non
                                ante porttitor.</p>
                            <div class="testimonial-content">
                                <div class="testimonial-profile">
                                    <h3 class="name">williamson</h3>
                                    <!-- <span class="post">Web Developer</span> -->
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="image/icon.png" alt="">
                            </div>
                            <h3 class="title">Delhi to agra trip</h3>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non
                                ante porttitor.</p>
                            <div class="testimonial-content">
                                <div class="testimonial-profile">
                                    <h3 class="name">williamson</h3>
                                    <!-- <span class="post">Web Developer</span> -->
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row contact-us">
            <div class="col-4">
                <i class="fa fa-phone"></i>
                <h2>Phone</h2>
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings.</p>
                <h4>+91 9758884230</h4>
            </div>
            <div class="col-4">
                <i class="fa fa-envelope-o"></i>
                <h2>Email</h2>
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings.</p>
                <h4>info@surebusservice.com</h4>
            </div>
            <div class="col-4">
                <i class="fa fa-map-marker"></i>
                <h2>Address</h2>
                <p>Greater Noida, Gautam Budh Nagar, 203202, India</p>
                <h4>View On Google Map</h4>
            </div>

        </div>
        <div class="row contactus">
            <div class="col-12">
                <div class="row justify-content-center">
                    <h1 class="title">Leave us your info</h1>
                    <p>and we will get back to you..</p>

                    <div class="col-10 row">
                        <div class="col-6">
                            <div class="mb-2">
                                <!-- <label class="form-label">Full Name</label> -->
                                <input type="text" class="form-control" placeholder="Full Name" />
                            </div>
                            <div class="mb-2">
                                <!-- <label class="form-label">Contact Number</label> -->
                                <input type="text" class="form-control" placeholder="Contact Number" />
                            </div>
                            <div class="mb-2">
                                <!-- <label class="form-label">Email Address</label> -->
                                <input type="text" class="form-control" placeholder="Email Address" />
                            </div>
                            <div>
                                <button class="btn btn-primary text-white">
                                    Subscribe Now
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2">
                                <!-- <label class="form-label">Your message!</label> -->
                                <textarea class="form-control" rows="7" placeholder="Enter Your message!"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-div row">
            <div class="col-3 footer-bow">
                <div>
                    <img src="./image/logo123.png" alt="" srcset="">
                    <p>Embark on unforgettable adventures with <b>Surebusservice</b>. Tailoring unique journeys, we
                        bring your travel dreams to life</p>
                </div>
            </div>
            <div class="col-2 footer-box">
                <h1>Usefull Links</h1>
                <div class="divider"></div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Refund Policy</a></li>
                    <li><a href="#">Refund Policy</a></li>
                    <li><a href="#">Refund Policy</a></li>
                    <li><a href="#">Refund Policy</a></li>
                    <li><a href="#">Refund Policy</a></li>
                    <li><a href="#">Refund Policy</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>
            <div class="col-4  footer-box">
                <h1>Popular Bus Route</h1>
                <div class="divider"></div>
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li><a href="#">Delhi to Dharamshala</a></li>
                            <li><a href="#">Dharamshala to Delhi</a></li>
                            <li><a href="#">Delhi to Haldwani</a></li>
                            <li><a href="#">Haldwani to Delhi</a></li>
                            <li><a href="#">Delhi to Jammu</a></li>
                            <li><a href="#">Jammu to Delhi</a></li>
                            <li><a href="#">Delhi to Jaipur</a></li>
                            <li><a href="#">Jaipur to Delhi</a></li>
                            <li><a href="#">Delhi to Katra</a></li>
                            <li><a href="#">Katra to Delhi</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li><a href="#">Delhi to Manali</a></li>
                            <li><a href="#">Manali to Delhi</a></li>
                            <li><a href="#">Delhi to Nainital</a></li>
                            <li><a href="#">Nainital to Delhi</a></li>
                            <li><a href="#">Delhi to Shimla</a></li>
                            <li><a href="#">Shimla to Delhi</a></li>
                            <li><a href="#">Delhi to Rishikesh</a></li>
                            <li><a href="#">Rishikesh to Delhi</a></li>
                            <li><a href="#">Delhi to Amritsar</a></li>
                            <li><a href="#">Amritsar to Delhi</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-3 footer-box">
                <h1>Same Day Tour Packages</h1>
                <div class="divider"></div>
                <ul>
                    <li>
                        <a href="#">Delhi To Agra Same Day Tour</a>
                    </li>
                    <li>
                        <a href="#">
                            Delhi Dershan
                        </a>
                    </li>
                    <li>
                        <a href="#">Delhi Jaipur Same Day Tour</a>
                    </li>


                </ul>
                <h1>Pay Safely With Us</h1>
                <div class="divider"></div>
                <p>
                    The payment is encrypted and transmitted securely with an SSL protocol.
                </p>
            </div>

            <div class="col-12 footer-bottom">
                <p>© 2023 Company, Inc</p>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank">
                            <span class="fa fa-facebook icon_facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/" target="_blank">
                            <span class="fa fa-linkedin  icon_twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/" target="_blank">
                            <span class="fa fa-twitter icon_dribbble"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-google-plus icon_g_plus"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#testimonial-slider").owlCarousel({
                items: 2,
                itemsDesktop: [1000, 2],
                itemsDesktopSmall: [979, 2],
                itemsTablet: [768, 2],
                itemsMobile: [650, 1],
                pagination: false,
                navigation: true,
                navigationText: ["", ""],
                autoPlay: true
            });
        });
        // Detect scroll event to toggle the class for full-width navbar
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 40) {
                $(".navbar_top").addClass("fixed-top navbar-scroll");
                $(".contact_us_link").addClass("contact_us_link-no_border");

            } else {
                $(".navbar_top").removeClass("fixed-top navbar-scroll");
                $(".contact_us_link").removeClass("contact_us_link-no_border");
            }
        });
    </script>

<script>
    function validateForm() {
        var fromValue = document.getElementById('fromSelect').value;
        var toValue = document.getElementById('toSelect').value;

        if (fromValue === toValue) {
            alert('FROM and TO values cannot be the same.');
            return false; // Prevent form submission
        }

        return true; // Allow form submission
    }
</script>
</body>

</html>