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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>
                    .card {
                        margin-bottom: 10px;
                    }

                    .card-header {
                        padding: 5px;
                    }

                    .card-body {
                        padding: 5px;
                    }

                    .price_summary .price_summary_row {
                        width: 94%;
                        height: auto;
                        margin: 0 0 0 0;
                        padding: 10px 3%;
                        border-bottom: 1px solid #ddd;
                        font-size: 13px;
                        color: #202020;
                        display: flex;
                        justify-content: space-between;
                    }

                    .total_price_summary {
                        border-bottom: none !important;
                        color: red !important;
                        font-size: 20px !important;
                    }
                     .Travellers_details .row{
                        margin-bottom: 5px;
                    }

                    .travellers_details_row .seat label{
                        background: url(./image/seat/s2.png)!important;
                        background-size:100% 100%!important;
                        color:#fff!important;
                        min-height: 30px !important;
                        min-width: 30px !important;
                        max-height: 30px !important;
                        max-width: 30px!important;

                        display: flex;
                        flex-direction: row;
                        justify-content: center;
                        align-items: center;
                        font-size:11px;
                        font-weight:bold;
                    }

                </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar_top fixed-top">
            <div class="container-fluid navbar-conatiner">
                <a class="navbar-brand logo" href="index.php">
                    <img src="image/logo123.png" alt="Logo" width="180" height="40"
                        class="d-inline-block align-text-top" />
                    <!-- <h4>
                        <span>Surebusservice</span>
                    </h4> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
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



        <div class="row " style="margin: 100px;">
        <?php
            // Retrieve the values from the POST request
            $selectedSeat = $_POST['selectedSeat'];
            $totalPrice = $_POST['totalPrice'];
            $boardingPoint = $_POST['boardingPoint'];
            $dropingPoint = $_POST['dropingPoint'];
            $obj = json_decode($_POST['obj'], true); // Convert JSON string back to PHP array

            // Now you can use these variables as needed in your PHP code
            ?>
            <!-- Hidden input fields for additional values -->
            <input type="hidden" name="selectedSeat" id="selectedSeat" value="<?php echo $selectedSeat; ?>">
            <input type="hidden" name="totalPrice" id="totalPrice" value="<?php echo $totalPrice; ?>">
            <input type="hidden" name="boardingPoint" id="boardingPoint" value="<?php echo $boardingPoint; ?>">
            <input type="hidden" name="dropingPoint" id="dropingPoint" value="<?php echo $dropingPoint; ?>">

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header ">
                        Contact Person Details <span style="font-size: 10px; color: red; ">(Your booking details will be
                            sent to your email address and contact no.)</span>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col">
                                <input type="text" class="form-control form-control-sm" placeholder="Name"
                                    aria-label="First name" id="contact_name">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control form-control-sm" placeholder="Mobile no"
                                    aria-label="Last name" id="contact_mobile">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control form-control-sm" placeholder="Email"
                                    aria-label="email addres" id="contact_email">
                            </div>

                        </div>
                    </div>
                </div>

            
                <div class="card">
                    <div class="card-header ">
                        Travellers Details (optional)
                    </div>
                    <div class="card-body Travellers_details">
                    <?php
                        // Split the selectedSeat string into an array based on comma delimiter
                        $selectedSeatArray = explode(',', $selectedSeat);
                        // Count the elements in the array
                        $selectedSeatCount = count($selectedSeatArray);

                        // Loop to repeat the HTML block
                        for ($i = 0; $i < $selectedSeatCount; $i++) {
                            ?>
                            <div class="row travellers_details_row" id="travellers_details_row<?php echo $i+1; ?>">
                                <div class="col-1 seat">
                                     <label> <span class="available" id="travellers_details_seat<?php echo $i+1; ?>"><?php echo $selectedSeatArray[$i]; ?></span></label>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" id="travellers_details_name<?php echo $i+1; ?>" placeholder="Name" aria-label="First name">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control form-control-sm" id="travellers_details_mobile<?php echo $i+1; ?>" placeholder="Mobile no" aria-label="Last name">
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="travellers_details_gender<?php echo $i+1; ?>" id="travellers_details_gender<?php echo $i+1; ?>"
                                            value="M" checked>
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="travellers_details_gender<?php echo $i+1; ?>" id="travellers_details_gender<?php echo $i+1; ?>" value="F" >
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header ">
                        Price Summary
                    </div>
                    <div class="card-body price_summary">
                        
                        <div class="price_summary_row">
                            <?php
                            // Split the selectedSeat string into an array based on comma delimiter
                            $selectedSeatArray = explode(',', $selectedSeat);
                            // Count the elements in the array
                            $selectedSeatCount = count($selectedSeatArray);
                            $farePerSeat = $totalPrice / $selectedSeatCount;
                            ?>
                            Adult x <?php echo $selectedSeatCount; ?><span><i class="fa fa-rupee"></i> <span id="totFare"><?php echo $farePerSeat?></span></span>
                        </div>
                        <div class="price_summary_row">
                            Discount <span><i class="fa fa-rupee"></i> <span id="totFare">0</span></span>
                        </div>
                        <div class="price_summary_row">
                            GST <span><i class="fa fa-rupee"></i> <span id="totFare">0</span></span>
                        </div>
                        <div class="total_price_summary price_summary_row">
                            Total <span><i class="fa fa-rupee"></i> <span id="totFare"><?php echo $totalPrice; ?></span></span>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-info text-light" type="button" onclick="payNow('<?php echo $selectedSeatCount; ?>')">Paynow</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="row contact-us">
            <div class="col-4">
                <i class="fa fa-phone"></i>
                <h2 data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">Phone</h2>
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




<script>
    function countSeat(selectedSeat){
        alert(selectedSeat);
    }
</script>

<script>
   

    function payNow(count){


        // Get the contact details
        var contactName = document.getElementById('contact_name');
        var contactMobile = document.getElementById('contact_mobile');
        var contactEmail = document.getElementById('contact_email');

        
        if(contactName.value == "" || contactName.value == null)
        {
            alert("Enter Contact name");
            contactName.focus();
            return;
        }
        else if(contactMobile.value == "" || contactMobile.value == null){
            alert("Enter Contact number");
            contactMobile.focus();
            return;
        }

        // Create a contact object
        var contact = {
            name: contactName.value,
            mobile: contactMobile.value,
            email: contactEmail.value
        };


        var travelers = []; // Array to store travelers' details

        // Loop through each traveler row
        for (var i = 0; i < count; i++) {
            var nameElement = document.getElementById('travellers_details_name' + (i + 1));
            var name = nameElement.value;

            var mobile = document.getElementById('travellers_details_mobile' + (i + 1)).value;
            var gender = document.querySelector('#travellers_details_gender'+ (i + 1) + ':checked').value;
            var seat_no = document.getElementById('travellers_details_seat' + (i + 1)).textContent;
            
            if (name == "" || name == null) {
                alert("Enter name");
                nameElement.focus();
                return; // Exit the function to prevent further execution
            }
                

            // Create an object with the traveler's details
            var traveler = {
                name: name,
                mobile: mobile,
                gender: gender,
                seat_no:seat_no
            };

            // Add the traveler object to the array
            travelers.push(traveler);
        }

        

         // Gather additional values
        var selectedSeat = document.getElementById("selectedSeat").value;
        var totalPrice = document.getElementById("totalPrice").value;
        var boardingPoint = document.getElementById("boardingPoint").value;
        var dropingPoint = document.getElementById("dropingPoint").value;

    


        // Create an object named travellers_details
        var passengers_detail = {
            travelers: travelers,
            contact: contact,
            selectedSeat: selectedSeat,
            totalPrice: totalPrice,
            boardingPoint: boardingPoint,
            dropingPoint: dropingPoint
        };

        // Now you have an array containing the details of all travelers and a contact object
        console.log('Travelers:', travelers);
        console.log('Contact:', contact);
        console.log('Travellers Details:', passengers_detail);
        makePayment();
    }

    function makePayment()
    {
        var options = {
        "key": "rzp_test_eyJqhoS4VXieid", // Enter the Key ID generated from the Dashboard
        "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "name": "SURE BUS SERVICE",
        "description": "Test Transaction",
        "image": "https://surebusservice.com/image/logo123.png",
       
        "handler": function (response){
            alert(response.razorpay_payment_id);
            alert(response.razorpay_order_id);
            alert(response.razorpay_signature)
        },
        "theme": {
            "color": "#3399cc"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
    
 
}

</script>
</script>

</body>

</html>