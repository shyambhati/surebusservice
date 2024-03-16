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



    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

        <style>
             .seat-div {
                background-color: #fff;
               
                gap: 10px;
                padding: 20px;

                display:flex;
                flex-direction: row;
                border-left:5px solid gray;
                box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
                border-radius: 5px;
            }
            
            .sheats-container {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
            .seat-row
            {  
                display: flex;
                flex-direction: row;
                justify-content: flex-start; 
                
                gap: 10px;
                border-left:1px solid gray;
                padding-left:10px;
            }
            
            .seat-box.empty_center {
                 min-height: 30px!important;
            }
            .sheats-container  .seat-box
            {
               
                min-height: 30px !important;
                min-width: 30px !important;
                max-height: 30px !important;
                max-width: 30px!important;
                cursor: pointer;
            }
            

                .sheats-container  span
                {
                    cursor: pointer;
                min-height: 30px !important;
                min-width: 30px !important;
                max-height: 30px !important;
                max-width: 30px!important;
                /* background: url(./image/seat/s1.png);
                background-size:100% 100%!important; */
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                font-size:11px;
                font-weight:bold;
                }

                .available
                {
                    background: url(./image/seat/s1.png)!important;
                    background-size:100% 100%!important;
                }
                .sheats-container .active .available
                {
                    background: url(./image/seat/s2.png)!important;
                    background-size:100% 100%!important;
                    color:#fff!important;
                }

                .sheats-container  .booked
                {
                    background: url(./image/seat/s4.png)!important;
                    background-size:100% 100%!important;
                    color:#fff!important;
                }

                .booked_m
                {
                    background: url(./image/seat/s3.png)!important;
                    background-size:100% 100%!important; 
                    color:#fff!important;
                }
                
            .drive-iamge-div 
            {
                display: flex;
                flex-direction: row;
                justify-content: end;
            }
            .drive-iamge-div img
            {
                height: 30px;
            }
            .main-seat-row{
                margin:10px;
            }


                .seats-details h1 {
                    font-size: 20px;
                    font-family: "PT Serif", serif !important;
                    font-weight: bold;
                    
                }
                .seat-div hr {
                    margin: 5px;
                }
                .seats-details hr {
                    margin: 5px;
                }

                .journey-info {
                    font-size: 15px;
                    font-family: "PT Serif", serif !important;
                    margin: 0px;
                }

                .fare-div-details {
                    display: flex;
                    justify-content: space-between;
                    width: 100%;
                }
                .seat-fare-div{
                    margin-bottom: 20px;
                }

                
                .blog-blockquote .blockquote {
                    padding: 10px 20px;
                    display: block;
                    font-size: inherit;
                    line-height: 20px;
                    background: #f8faff;
                    border: 1px solid #d3dce6;
                    border-left: 4px solid #6b81af;
                    border-radius: 4px;
                    font-style: normal;
                    clear: both;
                    }
        </style>
          <style>
                    .availblity {
                        width: auto;
                        float: left;
                        height: 30px;
                        margin: 0 10px 0 0;
                        font-size: 13px;
                        color: #666;
                        font-weight: 300;
                        line-height: 15px;
                    }
                    .availblity span {
                        width: 15px;
                        height: 15px;
                        border: 1px solid #ccc;
                        background: #fff;
                        border-radius: 3px;
                        float: left;
                        margin: 0 5px 0 0;
                    }
                    .availblity span.green {
                        background: #69ff48;
                    }
                    .availblity span.pink {
                        background: #f2a9a0;
                    }
                    .availblity span.grey {
                        background: #cbcbcb;
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

        <div class="row bus-list">
            <div class="col-12">
                <p>10 Buses found </p>
                <div class="tour-details">
                    <div class="left">
                        <div>
                        <?php
                            // Check if form is submitted
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Retrieve form data
                                $from = $_POST['from'];
                                $to = $_POST['to'];
                                $date = date('l jS F Y', strtotime($_POST['date']));
                                ?>
                                <h2><?php echo $from; ?></h2>
                                <i class="fa fa-long-arrow-right"></i>
                                <h2><?php echo $to; ?></h2>
                                <div class="divider-v"></div>
                                <p><?php echo $date; ?></p>
                                <button class="btn btn-secondary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size:.75rem;">
                                    Modify
                                </button>
                            <?php } ?>

                        </div>

                    </div>
                    <hr>
                    <div class="bus-list-div">
                    <?php
                        include 'common/generateBusList.php';
                        // Your JSON data
                        $jsonData = file_get_contents('buses.json');
                        $decodedData = json_decode($jsonData, true);
                        $data=$decodedData['busservice'];
                        echo genrateBusContainer($data);
                        ?> 
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

<script>
    function createHiddenInput(name, value) {
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = name;
        input.value = value;
        return input;
    }
    function procedToBook(obj,id)
    {

       // Get the text content of selectedSeat and totalPrice elements
        var selectedSeat = document.getElementById(id + 'selectedSeat').textContent;
        var totalPrice = document.getElementById(id + 'totalPrice').textContent;

        var boardingPoint = document.getElementById(id + 'boardingPoint').value;
        var dropingPoint = document.getElementById(id + 'dropingPoint').value;
        if(selectedSeat == "No seats selected")
            alert('Select your seat');
        else if(boardingPoint == "" || dropingPoint == "")
            alert('Select Boarding and Droping Point ');
        else
            {
                //Get
                // var queryParams = {
                //     'selectedSeat': selectedSeat,
                //     'totalPrice': totalPrice,
                //     'boardingPoint': boardingPoint,
                //     'dropingPoint': dropingPoint,
                //     'obj': JSON.stringify(obj)
                // };

                // var url = 'passengers-detail.php?' + Object.keys(queryParams).map(function(key) {
                //     return encodeURIComponent(key) + '=' + encodeURIComponent(queryParams[key]);
                // }).join('&');

                // // Redirect the user to the new page
                // window.location.href = url;


                //Post

                var form = document.createElement('form');
                form.method = 'POST';
                form.action = 'passengers-detail.php';
                 // Array containing the input fields with their respective values
                var inputFields = [
                    { name: 'selectedSeat', value: selectedSeat },
                    { name: 'totalPrice', value: totalPrice },
                    { name: 'boardingPoint', value: boardingPoint },
                    { name: 'dropingPoint', value: dropingPoint },
                    { name: 'obj', value: JSON.stringify(obj) }
                ];

                // Create hidden input fields for each parameter
                inputFields.forEach(function(inputData) {
                    var input = createHiddenInput(inputData.name, inputData.value);
                    form.appendChild(input);
                });

                // Append the form to the document body and submit it
                document.body.appendChild(form);
                form.submit();
            }
    }
</script>

    <script>

        function showHideTab(id) {
            var rowNum = id.split("_")[0];
            var linkNum = id.split("_")[1];
            for (i = 1; i <= 5; i++) {

                var linkItem = document.getElementById(rowNum + "_" + i);
                var contentBox = document.getElementById("sub_" + rowNum + "_" + i);

                var icon = linkItem.querySelector("i"); // Get the <i> element within the linkItem

                if (i == linkNum) {

                    linkItem.classList.toggle("active");
                    contentBox.classList.toggle("show");
                    icon.classList.toggle("fa-caret-down");
                    icon.classList.toggle("fa-caret-up");
                }
                else {
                    linkItem.classList.remove("active");
                    contentBox.classList.remove("show");
                    icon.classList.remove("fa-caret-up"); // Make sure it's not active on other items
                    icon.classList.add("fa-caret-down");
                }
            }
        }







        function genrateRatingStar()
        {
            var div = document.getElementById("star_rating");
            const ratingValue = parseInt(div.getAttribute('data-rating'));
            console.log(ratingValue);
           var length=ratingValue;
            for (let i = 1; i < 6; i++) 
                {
                    const star = document.createElement('i');
                     star.classList.add('fa', 'fa-star');
                    if(i<=length)
                    {
                        star.classList.add('active');
                    }      
                    div.appendChild(star);
                }
        }

        $(document).ready(function () {
            genrateRatingStar();
        });

        function checkBTN(id)
        {
            var btn = document.getElementById(id);
            btn.classList.toggle("active");
            console.log("work "+id)
        }


    //     function generateRatingStar() {
    //   var div = document.getElementById("star_rating");
    //   const ratingValue = parseFloat(div.getAttribute('data-rating'));

    //   // Clear any existing content
    //   div.innerHTML = '';

    //   const fullStars = Math.floor(ratingValue);
    //   const hasHalfStar = ratingValue - fullStars === 0.5;

    //   for (let i = 0; i < 5; i++) {
    //     const star = document.createElement('i');
    //     star.classList.add('fa', 'fa-star');

    //     if (i < fullStars) {
    //       star.classList.add('active');
    //     } else if (i === fullStars && hasHalfStar) {
    //       star.classList.add('fa-star-half', 'active');
    //     }

    //     div.appendChild(star);
    //   }
    // }
    
    // document.addEventListener('DOMContentLoaded', function () {
    //   generateRatingStar();
    // });
    </script>


<script>
    // Function to count checked checkboxes and print their IDs and values
    function countCheckboxes(className,price) {



        var selectedSeat;
        // Construct the selector dynamically based on the class name
        var selector = '.' + className + ' .btn-check';
        console.log('Checked  in ' + selector );
        // Get all checkboxes with class 'btn-check' within the specified container
        var checkboxes = document.querySelectorAll(selector);
        
        // Initialize arrays to store IDs and values of checked checkboxes
        var checkedIds = [];
        var checkedValues = [];
        var selectedSeats = [];
        var totalPrice = [];
        
        // Loop through each checkbox
        checkboxes.forEach(function(checkbox) {
            console.log('checkbox  in ' + checkbox );
            // Check if checkbox is checked
            if (checkbox.checked) {
                var val=checkbox.value;
                // Push the ID and value of the checked checkbox into the arrays
                checkedIds.push(checkbox.id);
                checkedValues.push(checkbox.value);
                selectedSeats.push(val.split('/')[0]);
                totalPrice.push(val.split('/')[1]);
                checkbox.nextElementSibling.classList.add('active');
                } else {
                    // Remove 'active' class from the span
                    checkbox.nextElementSibling.classList.remove('active');
                }
        });
        
        // Print IDs and values of checked checkboxes
        if (checkedIds.length > 0) {
            console.log('Checked checkboxes in ' + className + ':');
           
            for (var i = 0; i < checkedIds.length; i++) {
                console.log('ID: ' + checkedIds[i] + ', Value: ' + checkedValues[i]);
            }
        } else {
            console.log('No checkboxes checked in ' + className + '.');
        }

        var sum = totalPrice.reduce(function (accumulator, currentValue) {
            return accumulator + parseFloat(currentValue);
        }, 0);
        document.getElementById(className+'selectedSeat').textContent = selectedSeats.join(', ');
        document.getElementById(className+'totalPrice').textContent = sum;
        document.getElementById(className+'totalPrice1').textContent = sum;
    }
</script>
</body>

</html>