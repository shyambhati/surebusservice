<?php
function genrateBusContainer($obj)
{
    foreach ($obj as $bus) {
?>
<div class="bus-details">
    <div class="top-div">
        <div>
            <h1 class="bus-name"><?php echo $bus['traveler']; ?></h1>
            <span><?php echo $bus['subTitle']; ?></span>
            <div class="bus-rating">
                <span>
                    <i class="fa fa-star"></i> 4.5
                </span>
                95 ratings
            </div>

        </div>
        <div class="bus-time-details">
            <div class="bus-time">
                <p><?php echo $bus['startTime']; ?></p>
                <span>
                    <div class="left-dashline-style">
                        <span class="dot green"></span>
                        <div class="dashed-line green"></div>
                        <div class="dashed-line green"></div>
                        <div class="dashed-line green"></div>
                    </div>
                    <p class="">16 30M</p>
                    <div class="left-dashline-style">
                        <div class="dashed-line orange"></div>
                        <div class="dashed-line orange"></div>
                        <div class="dashed-line orange"></div>
                        <span class="dot orange"></span>
                    </div>
                </span>

                <p><?php echo $bus['endTime']; ?></p>
            </div>
            <div class="amenities">
                <img src="./image/icon/bottle.png">
                <img src="./image/icon/free-wifi.png">
                <img src="./image/icon/blanket.png">
                <img src="./image/icon/plug.png">
                <img src="./image/icon/smart-tv.png">
                <span onclick="showHideTab('1_1')"> more</span>

            </div>
        </div>
        <div class="bus-seat-price">
            <div class="seat-details">
                <span><?php echo $bus['totalSeat']; ?> Seats available</span>
            </div>
            <span class="price">
                <i class="fa fa-inr"></i><?php echo $bus['minPrice']; ?>
            </span>
        </div>
    </div>
    <div class="bottom-div-tabs">
        <div class="collapse-menu">
            <span id="<?php echo $bus['id']; ?>_1" onclick="showHideTab(id)">Amenities <i
                    class="fa fa-caret-down"></i></span>
            <div class="divider-v-sm"></div>
            <span id="<?php echo $bus['id']; ?>_2" onclick="showHideTab(id)">Boarding & Dropping Points
                <i class="fa fa-caret-down"></i></span>
            <div class="divider-v-sm"></div>
            <span id="<?php echo $bus['id']; ?>_3" onclick="showHideTab(id)">Rating & Reviews <i
                    class="fa fa-caret-down"></i></span>
            <div class="divider-v-sm"></div>
            <span id="<?php echo $bus['id']; ?>_4" onclick="showHideTab(id)">Booking policies <i
                    class="fa fa-caret-down"></i></span>
            <div class="divider-v-sm"></div>
            <span id="<?php echo $bus['id']; ?>_5" onclick="showHideTab(id)">View Seats <i
                    class="fa fa-caret-down"></i></span>
        </div>

        <div class="collapse-div">
            <div id="sub_<?php echo $bus['id']; ?>_1" class="initial ">
                <?php include './common/amenities.php';?>
            </div>
            <div id="sub_<?php echo $bus['id']; ?>_2" class="initial">
                <?php include './common/boardingDroppingPoints.php';?>
            </div>
            <div id="sub_<?php echo $bus['id']; ?>_3" class="initial">
                <?php include './common/ratingReviews.php';?>
            </div>
            <div id="sub_<?php echo $bus['id']; ?>_4" class="initial travel-policies">
                <?php include './common/bookingPolicies.php';?>
            </div>
            <div id="sub_<?php echo $bus['id']; ?>_5" class="initial">
                <div class="row main-seat-row">
                     <div class="col-lg-6 col-sm-12 "> 
                        <div class="blog-blockquote">
                            <blockquote class="blockquote">
                            Click on Seat to select or deselect seat
                            </blockquote>
                        </div>
                        <div class="seat-div bus<?php echo $bus['id']; ?>" >
                            <div class="drive-iamge-div">
                                <img src="./image/driver.png" alt="" data-bs-toggle="tooltip" data-bs-title="Default tooltip">
                            </div>
                            <?php
                            include './common/generateSeats.php';


                            echo generateSeatDiv($bus['seats'], 'bus'. $bus['id']);
                            ?> 


                            
                        </div>
                        <div class="blog-blockquote" style="margin-top:10px; ">
                            <blockquote class="blockquote" style=" height: 35px;">
                                <div class="availblity"><span></span> Availble</div>
                                <div class="availblity"><span class="green"></span> Selected</div>
                                <div class="availblity"><span class="pink"></span> Women</div>
                                <div class="availblity"><span class="grey"></span> Unavailble</div>
                            </blockquote>
                        </div>
                    </div><!--seat div end -->

                   <div class="col-lg-6 col-sm-12">    <!-- seats-details" -->
                        <div class="seats-details">
                            <h1>Your Journey</h1>
                            <p class="journey-info">From <?php echo  $bus['startingPoint']; ?>  To  <?php echo  $bus['endingPoint']; ?>  on 28 November, 2024</p>
                            <hr>
                            <div class="seat-fare-div">
                                <div class=" fare-div-details">
                                    <div>Selected Seats</div>
                                    <div id="<?php echo 'bus'. $bus['id']; ?>selectedSeat">No seats selected</div>
                                </div>
                                <hr>
                            </div>

                            <div class="seat-fare-div">
                                <h1 >Fare details </h1>
                                <div class="fare-div-details">
                                    <div>Basic Fare</div>
                                    <div id="<?php echo 'bus'. $bus['id']; ?>totalPrice1">0</div>
                                </div>
                                <div class="fare-div-details">
                                    <div>Discount Amount</div>
                                    <div>0</div>
                                </div>
                                <div class="fare-div-details">
                                    <div>Total Amount</div>
                                    <div id="<?php echo 'bus'. $bus['id']; ?>totalPrice">0</div>
                                </div>
                                <hr>
                            </div>

                            <div class="seat-fare-div">
                                <h1>Boarding & Dropping</h1>
                                <div class="row">
                                    <div class="col">

                                        <select class="form-select form-select-sm" id="<?php echo 'bus'. $bus['id']; ?>boardingPoint" aria-label="Default select example">
                                            <option value="">Boarding Point</option>
                                            <?php
                                            foreach ($bus['boardingPoint'] as $point) {
                                                    echo "<option value='" . $point['name'] . "'>" . $point['name'] . " (" . $point['time'] . ")</option>";
                                                } 
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-select form-select-sm" id="<?php echo 'bus'. $bus['id']; ?>dropingPoint" aria-label="Default select example">
                                            <!-- <option selected>Choose Drop off</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option> -->
                                            <option value="">Choose Drop off</option>
                                            <?php
                                            foreach ($bus['dropingPoint'] as $point) {
                                                    echo "<option value='" . $point['name'] . "'>" . $point['name'] . " (" . $point['time'] . ")</option>";
                                                } 
                                            ?>
                                        </select>
                                    </div>
                                    
                                    <div class="col">
                                        <button class="btn btn-success btn-fluid btn-sm" onclick="procedToBook(<?php echo htmlspecialchars(json_encode($bus)); ?>, 'bus<?php echo $bus['id']; ?>')">PROCED TO BOOK</button>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div><!-- end seats-details" -->
                </div>
                
                
            </div>
        </div>

    </div>
</div>

        
<?php
}}
?>
