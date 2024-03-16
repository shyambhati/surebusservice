
<?php

global $busData, $lastItems,$bus_id;
function generateSeatDiv($data,$id)
{
    global $busData, $lastItems,$bus_id;
    $busData=$data;
    $bus_id=$id;
    $lastItems = array_slice($data, -5,5);
    array_splice($busData, -5);
    generateSeatRow($busData,$lastItems,$bus_id);
}
// Get the last 5 items from the array


// Remove the last 5 items from the original array

function generateSeats($obj,$isLastRow,$bus_id)
{ 
    echo '<div class="sheats-container">';
    foreach ($obj as $key => $seat) {    
        if($isLastRow)
        {
            
            echo '<div class"seat-box  " >';

            echo '<input type="checkbox" class="btn-check" id="btn-'. $bus_id . $seat['name'] .'" value="'.$seat['name'] .'/'.$seat['price'] .'" onchange="countCheckboxes(\'' . $bus_id . '\')" '. seatStatus($seat['status']).'>';
            echo '<label class="" for="btn-' . $bus_id . $seat['name'] .'"  > <span class="'. genderStatus($seat['gender'],$seat['status']) .' active"> '. $seat['name'] .'</span></label>';  
            echo '</div>';
        }
        else
        {
            if($key == 2)
            {     
                    echo '<div class="seat-box empty_center">';
                    echo '</div>';   
                    echo '<div class"seat-box '. $seat['status'] .'">';
                    echo '<input type="checkbox" class="btn-check" id="btn-'. $bus_id . $seat['name'] .'" value="'.$seat['name'] .'/'.$seat['price'] .'" onchange="countCheckboxes(\'' . $bus_id . '\')" ' .seatStatus($seat['status']).'>';
                    echo '<label class="" for="btn-' . $bus_id . $seat['name'] .'"  > <span class="'. genderStatus($seat['gender'],$seat['status']) .'"> '. $seat['name'] .'</span> </label>';  
                    echo '</div>';
            }
            else{
                echo '<div class"seat-box '. $seat['status'] .'">';
                echo '<input type="checkbox" class="btn-check" id="btn-'. $bus_id . $seat['name'] .'" value="'.$seat['name'] .'/'.$seat['price'] .'" onchange="countCheckboxes(\'' . $bus_id . '\')" '. seatStatus($seat['status']).'>';
                echo '<label class="" for="btn-' . $bus_id . $seat['name'] .'"  > <span class="'.genderStatus($seat['gender'],$seat['status']) .'"> '. $seat['name'] .'</span></label>';  
                echo '</div>';
            }
        }

    }
    echo '</div>';
}



function seatStatus($seatStaus)
{
    if($seatStaus == "booked")
    {
        return "disabled";
    }
    else
    return "";
}

function genderStatus($genderStatus,$seatStaus)
{
    if($genderStatus == "F" || $genderStatus == "f")
    {
        return "booked_m";
    }
    else
    return $seatStaus;
}

function generateSeatRow($data,$lastItems,$bus_id) {
    echo '<div class="seat-row">';
    generateFirst($data,$bus_id);
    generateLast($lastItems,$bus_id);
    echo '</div>';
}

function generateFirst($data,$bus_id)
{
    foreach(array_chunk($data, 4)  as $seatChunk) {
        $isLastRow = false;
        generateSeats($seatChunk,$isLastRow,$bus_id);
    }
}

function generateLast($lastItems,$bus_id)
{
    foreach(array_chunk($lastItems, 5)  as $seatChunk) {
        $isLastRow = true;
        generateSeats($seatChunk,$isLastRow,$bus_id);
    }
}

?>