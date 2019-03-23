<?php
$option1 = 0;
$option2 = 0;
$option3 = 0;
$option4 = 0;
$option5 = 0;

function incrementPoints($id_emotion) {
    if($id_emotion == 1){
        $option1++;
    } elseif($id_emotion == 2){
        $option2++;
    } elseif($id_emotion == 3){
        $option3++;
    } elseif($id_emotion == 4){
        $option4++;
    } elseif($id_emotion == 5){
        $option5++;
    }
}
?>